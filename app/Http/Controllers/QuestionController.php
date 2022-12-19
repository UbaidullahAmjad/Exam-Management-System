<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Exam;
use App\Models\QuestionOption;


class QuestionController extends Controller
{
    public function index(){
        $questions = Question::paginate(10);
        return view('questions.index',[
            'questions' => $questions
        ]);
    }
    public function create(){
        $exams = Exam::where('status','on')->get();

        return view('questions.create',[
            'exams' => $exams,
        ]);
    }

    public function upload(Request $request){

        if($request->hasFile('upload')){
            $name = $request->file('upload')->getClientOriginalName();
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = time(). $name;
             $request->file('upload')->move(storage_path() . '/app/public/', $fileName);
             $filename_store = $fileName;
            session()->put('filename',$fileName);
             $ckeditorfuncname = $request->input('CKEditorFuncNum');
             $url = asset("storage/". $fileName);
             $msg ="Image uploaded succesfully";

            return '<script>window.parent.CKEDITOR.tools.callFunction
            ('.$ckeditorfuncname.', "'.$url.'", "'.$msg.'")</script>';
            }
    }

    public function uploada(Request $request){

        if($request->hasFile('upload')){
            $name = $request->file('upload')->getClientOriginalName();
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = time(). $name;
             $request->file('upload')->move(storage_path() . '/app/public/', $fileName);
             $filename_store = $fileName;
            session()->put('filename1',$fileName);
             $ckeditorfuncname = $request->input('CKEditorFuncNum');
             $url = asset("storage/". $fileName);
             $msg ="Image uploaded succesfully";

            return '<script>window.parent.CKEDITOR.tools.callFunction
            ('.$ckeditorfuncname.', "'.$url.'", "'.$msg.'")</script>';
            }
    }

    public function uploadb(Request $request){

        if($request->hasFile('upload')){
            $name = $request->file('upload')->getClientOriginalName();
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = time(). $name;
             $request->file('upload')->move(storage_path() . '/app/public/', $fileName);
             $filename_store = $fileName;
            session()->put('filename2',$fileName);
             $ckeditorfuncname = $request->input('CKEditorFuncNum');
             $url = asset("storage/". $fileName);
             $msg ="Image uploaded succesfully";

            return '<script>window.parent.CKEDITOR.tools.callFunction
            ('.$ckeditorfuncname.', "'.$url.'", "'.$msg.'")</script>';
            }
    }

    public function uploadc(Request $request){

        if($request->hasFile('upload')){
            $name = $request->file('upload')->getClientOriginalName();
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = time(). $name;
             $request->file('upload')->move(storage_path() . '/app/public/', $fileName);
             $filename_store = $fileName;
            session()->put('filename3',$fileName);
             $ckeditorfuncname = $request->input('CKEditorFuncNum');
             $url = asset("storage/". $fileName);
             $msg ="Image uploaded succesfully";

            return '<script>window.parent.CKEDITOR.tools.callFunction
            ('.$ckeditorfuncname.', "'.$url.'", "'.$msg.'")</script>';
            }
    }

    public function uploadd(Request $request){

        if($request->hasFile('upload')){
            $name = $request->file('upload')->getClientOriginalName();
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = time(). $name;
             $request->file('upload')->move(storage_path() . '/app/public/', $fileName);
             $filename_store = $fileName;
            session()->put('filename4',$fileName);
             $ckeditorfuncname = $request->input('CKEditorFuncNum');
             $url = asset("storage/". $fileName);
             $msg ="Image uploaded succesfully";

            return '<script>window.parent.CKEDITOR.tools.callFunction
            ('.$ckeditorfuncname.', "'.$url.'", "'.$msg.'")</script>';
            }
    }

    public function uploade(Request $request){

        if($request->hasFile('upload')){
            $name = $request->file('upload')->getClientOriginalName();
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = time(). $name;
             $request->file('upload')->move(storage_path() . '/app/public/', $fileName);
             $filename_store = $fileName;
            session()->put('filename5',$fileName);
             $ckeditorfuncname = $request->input('CKEditorFuncNum');
             $url = asset("storage/". $fileName);
             $msg ="Image uploaded succesfully";

            return '<script>window.parent.CKEDITOR.tools.callFunction
            ('.$ckeditorfuncname.', "'.$url.'", "'.$msg.'")</script>';
            }
    }

    public function store(Request $request){
        // dd($request->questioneditor);
        // dd($request->all());

        $request->validate([

            'options.0' => 'required',
            'options.1' => 'required',
            'options.2' => 'required',
            'options.3' => 'required',
            'questioneditor' => 'required',
            'opt' => 'required',
        ]);
        $supported_image = array(
            'gif',
            'jpg',
            'jpeg',
            'png',
            'PNG',
        );

        // dd(html_entity_decode($request->questioneditor));
        // dd(preg_replace("/<img[^>]+\>/i", "", $request->questioneditor));
        $question = new Question();
        // $content = preg_replace("/<img[^>]+\>/i", "", $request->questioneditor);
        // $content = str_replace('<p>',"",$content);
        //  $content = str_replace('</p>',"",$content);

        // if(session()->get('filename') != null){
        //     $question->description = session()->get('filename') . "--". $content;
        // }else{
        //     $question->description = $request->questioneditor;
        // }
        $question->description = $request->questioneditor;

        $question->exam_id = $request->exam_id;
        $question->explanation = $request->addexplain;
        $question->publish_draft = $request->savepublishdraft;

        $question->save();


       $files = array(session()->get('filename1'), session()->get('filename2'),session()->get('filename3'),session()->get('filename4'),session()->get('filename5'));

       session()->forget('filename');
       session()->forget('filename1');
       session()->forget('filename2');
       session()->forget('filename3');
       session()->forget('filename4');
       session()->forget('filename5');

        $j = 0;
        $k = 0;
        $question_option = new QuestionOption();
        // dd($request->options);
    if(count($request->options) == 4){
        foreach($request->options as $option){
            if($j==4){
            break;
            }
            else{
                QuestionOption::insert([
                    'question_id'=>$question->id,
                    'option'=>$option,
                    ]);
            // $question_option->question_id = $question->id;
            // $question_option->option = $option;
            // $question_option->save();

            }
            $j++;
        }
    }else if(count($request->options) == 5){
        foreach($request->options as $option){
            if($k==5){
            break;
            }
            else{
                QuestionOption::insert([
                    'question_id'=>$question->id,
                    'option'=>$option,
                    ]);
            // $question_option->question_id = $question->id;
            // $question_option->option = $option;
            // $question_option->save();

            }
            $j++;
        }
    }

        // for ($i=0; $i < count($request->options); $i++){
        //     if($request->options[$i] != null){
        //         $question_option = new QuestionOption();
        //         $question_option->question_id = $question->id;
        //         $content1 = preg_replace("/<img[^>]+\>/i", "", $request->options[$i]);
        //         if($files[$i] != null){
        //             $question_option->option = $files[$i] . "--". $content1;
        //         }else{
        //             $question_option->option = $request->options[$i];
        //         }

        //         $question_option->save();
        //         $j++;
        //     }
        // }

        $question_option = QuestionOption::where('question_id',$question->id)->first();
        if($request->opt == "A"){
            $question_option->correct_answer = $request->options[0];
            $question_option->save();
        }else if($request->opt == "B"){
            $question_option->correct_answer = $request->options[1];
            $question_option->save();
        }if($request->opt == "C"){
            $question_option->correct_answer = $request->options[2];
            $question_option->save();
        }if($request->opt == "D"){
            $question_option->correct_answer = $request->options[3];
            $question_option->save();
        }if($request->opt == "E"){
            $question_option->correct_answer = $request->options[4];
            $question_option->save();
        }


        // dd($question_option);

        if($request->saveandclose != null){
            return redirect()->route('question.index')->with('success','Question has been added successfully');
        }

        if($request->saveandnew != null){
            return redirect()->route('question.create')->with('success','Question has been added successfully');
        }


    }

    public function edit($id){
        $question = Question::find($id);
        $question_options = QuestionOption::where('question_id',$id)->get();
        // dd($question_options);
        $exams = Exam::where('status','on')->get();
        return view('questions.edit',[
            'question' => $question,
            'exams' => $exams,
            'question_options' =>$question_options
        ]);
    }


    public function update(Request $request, $id){

        $request->validate([

            'options.0' => 'required',
            'options.1' => 'required',
            'options.2' => 'required',
            'options.3' => 'required',
            'questioneditor' => 'required',
            'opt' => 'required',
        ]);
        $data = session()->get('filename');
        Question::find($id)->update([
            'description' => $request->questioneditor,
            'exam_id' => $request->exam_id,
            'explanation' => $request->addexplain,
            'publish_draft' => $request->savepublishdraft
            ]);

        $question_option = QuestionOption::where('question_id',$id)->get();


        $j=0;
        $k=0;
        if(count($question_option) == 4){
            // dd('ddgg22');
            foreach($request->options as $option){
                if($j==4){
                break;
                }
                else{
                    $question_option[$j]->update([
                        'option' => $option,
                        ]);
                // $question_option->question_id = $question->id;
                // $question_option->option = $option;
                // $question_option->save();

                }
                $j++;
            }
        }else if(count($question_option) == 5){
            // dd('here');
            foreach($request->options as $option){
                if($k==5){
                break;
                }
                
                else{
                    $question_option[$k]->update([
                        'option' => $option,
                        ]);
                // $question_option->question_id = $question->id;
                // $question_option->option = $option;
                // $question_option->save();

                }
                $k++;
            }
        }



        // $question->description = $request->questioneditor;

        // $question = Question::find($id);
        // $content = preg_replace("/<img[^>]+\>/i", "", $request->questioneditor);
        // $content = str_replace('<p>',"",$content);
        //  $content = str_replace('</p>',"",$content);

        // if(session()->get('filename') != null){
        //     $question->description = session()->get('filename') . "--". $content;
        // }else{
        //     $question->description = $request->questioneditor;
        // }


        // $question->exam_id = $request->exam_id;
        // $question->explanation = $request->addexplain;
        // $question->publish_draft = $request->savepublishdraft;

        // $question->save();

        $files = array(session()->get('filename1'), session()->get('filename2'),session()->get('filename3'),session()->get('filename4'),session()->get('filename5'));

       session()->forget('filename');
       session()->forget('filename1');
       session()->forget('filename2');
       session()->forget('filename3');
       session()->forget('filename4');
       session()->forget('filename5');

        $question_option = QuestionOption::where('question_id',$id)->get();
        // dd($question_option);
        // $j = 1;
        // for ($i=0; $i < count($request->options); $i++){
        //     if($request->options[$i] != null){

        //         if(count($question_option) == 4 && $i == 4){
        //             $q_opt = new QuestionOption();
        //             $q_opt->question_id = $question->id;
        //             $content1 = preg_replace("/<img[^>]+\>/i", "", $request->options[$i]);
        //             if($files[$i] != null){
        //                 $q_opt->option = $files[$j] . "--". $content1;
        //             }else{
        //                 $q_opt->option = $request->options[$i];
        //             }
        //             $q_opt->save();
        //         }else{
        //             $question_option[$i]->question_id = $question->id;
        //             $content1 = preg_replace("/<img[^>]+\>/i", "", $request->options[$i]);
        //             if($files[$i] != null){
        //                 $question_option[$i]->option = $files[$j] . "--". $content1;
        //             }else{
        //                 $question_option[$i]->option = $request->options[$i];
        //             }
        //             $question_option[$i]->update();
        //         }

        //     }
        // }

        $question_options = QuestionOption::where('question_id',$id)->first();
        if($request->opt == "A"){
            $question_options->correct_answer = $request->options[0];
            $question_options->save();
        }else if($request->opt == "B"){
            $question_options->correct_answer = $request->options[1];
            $question_options->save();
        }if($request->opt == "C"){
            $question_options->correct_answer = $request->options[2];
            $question_options->save();
        }if($request->opt == "D"){
            $question_options->correct_answer = $request->options[3];
            $question_options->save();
        }if($request->opt == "E"){
            $question_options->correct_answer = $request->options[4];
            $question_options->save();
        }

        // dd($question_option);


        if($request->saveandclose != null){
            return redirect()->route('question.index')->with('success','Question has been Updated successfully');
        }

        if($request->saveandnew != null){
            return redirect()->route('question.edit',$id)->with('success','Question has been Updated successfully');
        }


    }
    public function show($id){
        $question = Question::find($id);

        return view('questions.show',[
            'question' => $question
        ]);
    }

    public function destroy($id){
        $question_options = QuestionOption::where('question_id',$id)->get();
        foreach($question_options as $option){
            $option->delete();
        }

        $question = Question::find($id);
        $question->delete();

        return redirect()->route('question.index')->with('success','Question has been Deleted successfully');
    }
}
