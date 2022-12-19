<?php

namespace App\Http\Controllers\Candidates;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Question;
use App\Models\QuestionAnswer;
use App\Models\QuestionOption;
use App\Models\CandidateExam;
use App\Models\CandidateInformation;
use App\Models\Payment;
use App\Models\User;
use App\Mail\PaymentConfirmationMail;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Mail;

class ExamController extends Controller
{
    public function index(){
        $exams = Exam::join('candidate_exams','candidate_exams.exam_id','exams.id')
                        ->join('users','users.id','candidate_exams.candidate_id')
                        ->where('candidate_exams.candidate_status',"Approved")
                        ->where('candidate_exams.exam_take_status',"Not Taken")
                        ->where('users.id',auth()->user()->id)
                        ->select('exams.*')->get();

        $candidate_exam_status = Exam::join('candidate_exams','candidate_exams.exam_id','exams.id')
                        ->join('users','users.id','candidate_exams.candidate_id')
                        ->where('candidate_exams.candidate_status',"Approved")
                        ->where('candidate_exams.exam_take_status',"Not Taken")
                        ->where('users.id',auth()->user()->id)
                        ->select('candidate_exams.*')->get();
// dd($candidate_exam_status);
        return view('candidates.exam.index',[
            'exams' => $exams,
            'candidate_exam_status' => $candidate_exam_status
        ]);
    }

    public function examHistory(){
        sleep(3);
         $exams = Exam::join('candidate_exams','candidate_exams.exam_id','exams.id')
                        ->join('users','users.id','candidate_exams.candidate_id')
                        ->where('candidate_exams.candidate_status',"Approved")
                        ->where('candidate_exams.exam_take_status',"Taken")
                        ->where('users.id',auth()->user()->id)
                        ->select('exams.*')->get();

        $candidate_exam_status = Exam::join('candidate_exams','candidate_exams.exam_id','exams.id')
                        ->join('users','users.id','candidate_exams.candidate_id')
                        ->where('candidate_exams.candidate_status',"Approved")
                        ->where('candidate_exams.exam_take_status',"Taken")
                        ->where('users.id',auth()->user()->id)
                        ->select('candidate_exams.*')->first();

        return view('candidates.exam.history',[
            'exams' => $exams,
            'candidate_exam_status' => $candidate_exam_status
        ]);
    }

    public function paymentForm(){

        $data = \Session::get('data');
        $exam = Exam::find($data['exam_id']);
        $charge = $data['charge'];
        $token = $data['token'];
        $card_expiry = $charge['payment_method_details']['card']['exp_month'] . "-" . $charge['payment_method_details']['card']['exp_year'];
        $payment_id = $charge['id'];
        $card_brand = $charge['payment_method_details']['card']['brand'];
        $type = $charge['payment_method_details']['type'];
        $payment_method = $charge['payment_method'];
$cand_info = CandidateInformation::where('candidate_id',auth()->user()->id)->first();
        return view('candidates.exam.paymentform',[
            'exam' => $exam,
            'charge' => $charge,
            'token' => $token,
            'card_expiry' => $card_expiry,
            'payment_id' => $payment_id,
            'card_brand' => $card_brand,
            'type' => $type,
            'payment_method' => $payment_method,
            'cand_info' => $cand_info
        ]);

    }

    public function paymentMade(Request $request){

        $cand_info = CandidateInformation::where('candidate_id',auth()->user()->id)->first();

            $payment = new Payment();
            $payment->candidate_id = auth()->user()->id;
            $payment->exam_id = $request->exam_id;
            $payment->auth_approval_id = $request->authapprovalid;
            $payment->payment_id = $request->payment_id;
            $payment->type = $request->type;
            $payment->card_brand = $request->card_brand;
            $payment->amount = $request->fee;
            $payment->exp_date = $request->expiry;
            $payment->funding = $request->credit_debit;
            $payment->payment_method = $request->payment_method;
            $payment->start_date =date('Y-m-d');
            $payment->end_date = date('Y-m-d',strtotime('+30 days',strtotime(date('Y-m-d'))));


            $payment->save();
            $cand_exam = CandidateExam::where('candidate_id',auth()->user()->id)->where('exam_id',$request->exam_id)->orderby('id', 'desc')->first();
            $cand_exam->payment_status = "Paid";
            // $cand_exam->exam_date = $payment->start_date . " to " . $payment->end_date;
            $cand_exam->save();


            Mail::to(auth()->user()->email)->send(new PaymentConfirmationMail());

            return redirect()->route('candidate.exam.index')->with('success','Your payment has been done. Thank you');



    }

    public function approvedExam($id){
        $exam = Exam::find($id);
        return view('candidates.exam.approved',[
            'exam' => $exam
        ]);
    }

    public function Instructions($id){
        $exam = Exam::find($id);
        return view('candidates.exam.instructions',[
            'exam' => $exam
        ]);
    }

    public function takeExam($id){
        $exam = Exam::find($id);
        $questions = Question::where('exam_id',$id)->get();
        return view('candidates.exam.takeexam',[
            'questions' => $questions,
            'exam' => $exam
        ]);
    }

    public function finishExam(Request $request){
        // dd($request->all());
        $request->validate([
            'option.*' => 'required',
            'question.*' => 'required',

        ]);

        session()->forget('data');

        $cand_exam = CandidateExam::where('exam_id',$request->exam_id)->where('candidate_id',auth()->user()->id)->orderby('id','desc')->first();
        if($cand_exam->exam_take_status != "Taken"){
                for($i = 0; $i < $request->question_count; $i++){
                    if(!empty($request->option[$i])){
                        $input = $request->all();
                        $question_answer = new QuestionAnswer();
                        $question_answer->candidate_id = $request->candidate_id;
                        $question_answer->exam_id = $request->exam_id;
                        $question_answer->question = $request->question[$i];
                        $question_answer->answer = $request->option[$i];
                        $question_answer->attempted = "Yes";
                        $question_answer->save();

                        $cand_marks = CandidateExam::where('exam_id',$request->exam_id)->orderby('id','desc')->first();
                        $cand_marks->exam_take_status = "Taken";
                        $cand_marks->exam_date = date('Y-m-d');
                        $cand_marks->save();
                    }else{
                        $input = $request->all();
                        $question_answer = new QuestionAnswer();
                        $question_answer->candidate_id = $request->candidate_id;
                        $question_answer->exam_id = $request->exam_id;
                        $question_answer->question = $request->question[$i];
                        $question_answer->answer = null;
                        $question_answer->attempted = "Yes";
                        $question_answer->save();

                        $cand_marks = CandidateExam::where('exam_id',$request->exam_id)->orderby('id','desc')->first();
                        $cand_marks->exam_take_status = "Taken";
                        $cand_marks->exam_date = date('Y-m-d');
                        $cand_marks->save();
                    }
                }
            return redirect()->route('candidate.exam.history');
        }else{
            return redirect()->route('candidate.exam.history')->with('success','You have taken this exam...!!!');
        }



    }

    public function checkExam(){

    }

    public function showResult($exam_id){
        // dd('gh');
        $marks = 0;
        $i = 0;
        $right_count = 0;
        $wrong_count = 0;
        $exam = Exam::find($exam_id);
        $questions = Question::where('exam_id',$exam_id)->get();

        $cand_marks = CandidateExam::where('exam_id',$exam_id)->orderby('id','desc')->first();
        foreach($questions as $question){
            $quest = $question->description;
            // $quest = str_replace("<p>","",$quest);
            // $quest= str_replace("</p>","",$quest);
            $question_answer = QuestionAnswer::where('question',$question->description)->select('question_answers.answer')->first();

            $question_option = QuestionOption::where('question_id',$question->id)->select('question_options.correct_answer')->first();

            if($question_answer->answer == $question_option->correct_answer){

                $cand_marks->candidate_id = auth()->user()->id;
                $cand_marks->exam_id = $exam_id;
                $marks = $marks + $question->question_marks;
                $cand_marks->marks = $marks;
                $cand_marks->candidate_status = "Approved";
                $cand_marks->document_verification = "Yes";
                $cand_marks->payment_status = "Paid";
                $cand_marks->exam_take_status = "Taken";

                // $cand_marks->exam_date = $exam->conduct_time;
                $question_ans = QuestionAnswer::where('exam_id',$exam->id)->get();
                $question_ans[$i]->right_answer = $question_answer->answer;
                $question_ans[$i]->save();
                $right_count++;
            }else{
                $cand_marks->candidate_id = auth()->user()->id;
                $cand_marks->exam_id = $exam_id;
                $marks = $marks - $question->question_marks;
                $cand_marks->marks = $marks;
                $cand_marks->candidate_status = "Approved";
                $cand_marks->document_verification = "Yes";
                $cand_marks->payment_status = "Paid";
                $cand_marks->exam_take_status = "Taken";
                // $cand_marks->exam_date = $exam->conduct_time;
                $question_ans = QuestionAnswer::where('exam_id',$exam->id)->get();
                $question_ans[$i]->right_answer = $question_answer->answer;
                $question_ans[$i]->save();
                $wrong_count++;
            }

            $i++;
        }

        $cand_marks->save();

        $ques_count = count($questions);

        return view('candidates.exam.show_result',[
            'right_ans' => $right_count,
            'wrong_ans' => $wrong_count,
            'ques_count'=> $ques_count,
            'exam_id' => $exam_id
        ]);
    }

    public function viewAnswers($exam_id){
        $questions = Question::where('exam_id',$exam_id)->get();
        $question_answer = QuestionAnswer::where('exam_id',$exam_id)->get();
        // dd($question_answer);
        return view('candidates.exam.viewanswers',[
            'questions' => $questions,
            'question_answer' => $question_answer
        ]);
    }
}
