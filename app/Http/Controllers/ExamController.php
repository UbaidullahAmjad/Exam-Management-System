<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Question;
use App\Models\QuestionOption;
use App\Models\CandidateExam;
use App\Models\QuestionAnswer;
use App\Models\User;
use App\Models\CandidateInformation;
use App\Models\Payment;

class ExamController extends Controller
{
    public function index(){

        $exams = Exam::paginate(10);
        return view('exams.index',[
            'exams' => $exams,
        ]);
    }

    public function create(){
        return view('exams.create');
    }

    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'examtitle' => 'required',
            'examduration' => 'required',
            'questions' => 'required',
        ]);

        $exam = new Exam();
        $exam->name = $request->examtitle;
        $exam->duration = $request->examduration;
        $exam->no_of_question = $request->questions;
        $exam->status = $request->examstatus;
        $exam->conduct_time = $request->time;
        $exam->select_question_type = $request->selectquestions;
        $exam->show_result = $request->showresult;
        $exam->result_type = $request->resulttype;
        $exam->send_result_email = $request->sendresult;
        $exam->record_audio_or_video = $request->recordaudiovideo;
        $exam->passing_marks = $request->minscore;
        $exam->price_of_exam = $request->examprice;
        $exam->authno = $request->authno;

        $exam->save();

        return redirect()->route('exam.index')->with('success','Exam has been added successfully');
    }

    public function edit($id){
        $exam = Exam::find($id);
        return view('exams.edit',[
            'exam' => $exam
        ]);
    }

    public function update(Request $request,$id){
        // dd($request->all());
        $request->validate([
            'examtitle' => 'required',
            'examduration' => 'required',
            'questions' => 'required',
        ]);

        $exam = Exam::find($id);
        $exam->name = $request->examtitle;
        $exam->duration = $request->examduration;
        $exam->no_of_question = $request->questions;
        $exam->status = $request->examstatus;
        $exam->conduct_time = $request->time;
        $exam->select_question_type = $request->selectquestions;
        $exam->show_result = $request->showresult;
        $exam->result_type = $request->resulttype;
        $exam->send_result_email = $request->sendresult;
        $exam->record_audio_or_video = $request->recordaudiovideo;
        $exam->passing_marks = $request->minscore;
        $exam->price_of_exam = $request->examprice;
        $exam->authno = $request->authno;

        $exam->save();

        return redirect()->route('exam.index')->with('success','Exam has been Updated successfully');
    }

    public function show($id){
        $exam = Exam::find($id);
        return view('exams.show',[
            'exam' => $exam
        ]);
    }

    public function destroy($id){

        $questions = Question::where('exam_id', $id)->get();

        foreach($questions as $question){
            $question_options = QuestionOption::where('question_id',$question->id)->get();
            foreach($question_options as $question_option){
                $question_option->delete();
            }


        }

         $cand_exams = CandidateExam::where('exam_id',$id)->get();


        foreach($cand_exams as $cand_exam){
            $cand_exam->delete();

        }

        $question_ans = QuestionAnswer::where('exam_id',$id)->get();


        foreach($question_ans as $question_an){
            $question_an->delete();

        }


        foreach($questions as $question){
            $question->delete();

        }
        
        $payments = Payment::where('exam_id',$id)->get();
        foreach($payments as $payment){
            $payment->delete();

        }
        
        

        $exam = Exam::find($id);
        $exam->delete();

        return redirect()->route('exam.index')->with('success','Exam has been Deleted successfully');
    }


    public function showCandidateExam($request_date){
        // dd($request->all());

        $data = CandidateExam::join('candidate_information','candidate_information.candidate_id','candidate_exams.candidate_id')
                                ->where('candidate_information.request_date',$request_date)
                                ->where('candidate_exams.candidate_status','Approved')->get();


        return view('examagainstdate.examagainstdate',[
            'data' => $data,
            'request_date' => $request_date
        ]);

    }
    
    public function seeAllinfo($exam_id,$cand_id){
        $candidate = User::find($cand_id);
        $exam = Exam::find($exam_id);
        // dd($exam);
        $candidate_info = CandidateInformation::where('candidate_id',$cand_id)->first();

        return view('examagainstdate.showallinfo',[
            'candidate' => $candidate,
            'exam' => $exam,
            'candidate_info' => $candidate_info
        ]);


    }
}
