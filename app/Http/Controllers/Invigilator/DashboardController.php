<?php

namespace App\Http\Controllers\Invigilator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CandidateExam;
use App\Models\Exam;
use App\Models\Question;
use Barryvdh\DomPDF\Facade as PDF;

class DashboardController extends Controller
{
    public function index(){
        $candidates = User::join('candidate_information','candidate_information.candidate_id','users.id')
                        ->join('candidate_exams','candidate_exams.candidate_id','users.id')
                        ->join('exams','exams.id','candidate_exams.exam_id')
                    ->where('users.role','candidate')
                    // ->where('users.deleted_at','=','NULL')
                    ->paginate(5);
        $rejected_cands = User::join('candidate_information','candidate_information.candidate_id','users.id')
                        ->where('users.role','candidate')
                        ->where('candidate_information.status',"Rejected")->paginate(5);
        $pending_candidates = User::join('candidate_information','candidate_information.candidate_id','users.id')
                        ->where('users.role','candidate')
                        ->where('deleted_at',NULL)
                        ->where('candidate_information.status',NULL)
                        ->paginate(5);
        // dd($pending_candidates);



        return view('invigilator.dashboard',[
            'candidates' => $candidates,
            'rejected_cands' =>$rejected_cands,
            'pending_candidates' => $pending_candidates
        ]);
    }

    public function showCandidateExam($request_date){
        // dd($request->all());

        $taken_data = CandidateExam::join('candidate_information','candidate_information.candidate_id','candidate_exams.candidate_id')
                                ->where('candidate_information.request_date',$request_date)
                                ->where('candidate_exams.candidate_status','Approved')
                                ->where('candidate_exams.exam_take_status',"Taken")
                                ->get();
        $nottaken_data = CandidateExam::join('candidate_information','candidate_information.candidate_id','candidate_exams.candidate_id')
                                ->where('candidate_information.request_date',$request_date)
                                ->where('candidate_exams.candidate_status','Approved')
                                ->where('candidate_exams.exam_take_status',"Not Taken")
                                ->get();

        return view('invigilator.showcands',[
            'data' => $taken_data,
            'nottaken' => $nottaken_data,
            'request_date' => $request_date
        ]);

    }

    public function seeResult($exam_id,$cand_id){
        $candidate = User::find($cand_id);
        $exam = Exam::find($exam_id);
        $questions = Question::where('exam_id',$exam_id)->get();

        return view('invigilator.seeresult',[
            'candidate' => $candidate,
            'exam' => $exam,
            'questions' => $questions
        ]);
    }

    public function printResult($exam_id,$cand_id){
        $candidate = User::find($cand_id);
        $exam = Exam::find($exam_id);
        $questions = Question::where('exam_id',$exam_id)->get();
      

        return view('invigilator.printresult',[
            'candidate' => $candidate,
            'exam' => $exam,
            'questions' => $questions
        ]);
    }
}
