<?php

namespace App\Http\Controllers;

use App\Models\StudentM;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
class quiztest extends Controller
{
    public function Question1()
    {
        $user_id = Auth::user()->id;
        if (StudentM::where('user_id', $user_id)->where('sub_id',1)->exists()) {
            $question = DB::select('SELECT `answer`, `masks`, `question`, `opt1`, `opt2`, `opt3`, `opt4`,(SELECT name from subject where id =`subject`)  as sub_name FROM `question` WHERE `subject` = 2');
            session()->put('subject', 2);    
            return view('quiz2',['question' => $question]);
            // return view("quiz2");
            // Route::get('quiz2');
            // return r('quiz1');
        }
        else{
            $user_id = Auth::user()->id;
            $question = DB::select('SELECT `answer`, `masks`, `question`, `opt1`, `opt2`, `opt3`, `opt4`,(SELECT name from subject where id =`subject`)  as sub_name FROM `question` WHERE `subject` = 1');
            session()->put('subject', 1);
            return view('quiz',['question' => $question]);
       
        }
        
           
    }
    public function pQuestion1(Request $req)
    {
       
        $user_id = Auth::user()->id;
        if (StudentM::where('user_id', $user_id)->where('sub_id',2)->exists()) {
            // return "2";
            $question = DB::select('SELECT `answer`, `masks`, `question`, `opt1`, `opt2`, `opt3`, `opt4`,(SELECT name from subject where id =`subject`)  as sub_name FROM `question` WHERE `subject` = 2');
            session()->put('subject', 2);    
            return view('quiz3',['question' => $question]);
            // return view('quiz2');
        }
        else{
            // return "3";
            $user_id = Auth::user()->id;
            $m1 = $req->input('ans2');
            $m2 =$req->input('ans1');
            $m3 =$req->input('ans3');
            $m4 = $req->input('ans4');
            $m5 = $req->input('ans5');
            $m6 = $req->input('ans6');
            $m7 =  $req->input('ans7');
            $m8 =$req->input('ans8');
            $m9 = $req->input('ans9');
            $m10 =  $req->input('ans10');
            $tmarks = $m1+$m2+$m3+$m4+$m5+$m6+$m7+$m8+$m9+$m10;
            $sub_id = session()->get('subject');
            DB::insert("INSERT INTO `student_m`( `sub_id`, `user_id`, `answer`) VALUES ('$sub_id','$user_id','$tmarks')");
            $question = DB::select('SELECT `answer`, `masks`, `question`, `opt1`, `opt2`, `opt3`, `opt4`,(SELECT name from subject where id =`subject`)  as sub_name FROM `question` WHERE `subject` = 2');
            session()->put('subject', 2);    
            return view('quiz2',['question' => $question]);
        }
        
       
    }
    public function Question2()
    {
        $user_id = Auth::user()->id;
        if (StudentM::where('user_id', $user_id)->where('sub_id',2)->exists()) {
            $question = DB::select('SELECT `answer`, `masks`, `question`, `opt1`, `opt2`, `opt3`, `opt4`,(SELECT name from subject where id =`subject`)  as sub_name FROM `question` WHERE `subject` = 3');
            session()->put('subject', 3);  
            return view('quiz3',['question' => $question]);

        }
        else{
            $user_id = Auth::user()->id;
        $question = DB::select('SELECT `answer`, `masks`, `question`, `opt1`, `opt2`, `opt3`, `opt4`,(SELECT name from subject where id =`subject`)  as sub_name FROM `question` WHERE `subject` = 2');
        session()->put('subject', 2);    
        return view('quiz2',['question' => $question]);
        }
        
    }
    public function pQuestion2(Request $req)
    {
        $user_id = Auth::user()->id;
        if (StudentM::where('user_id', $user_id)->where('sub_id',2)->exists()) {
            $question = DB::select('SELECT `answer`, `masks`, `question`, `opt1`, `opt2`, `opt3`, `opt4`,(SELECT name from subject where id =`subject`)  as sub_name FROM `question` WHERE `subject` = 3');
            session()->put('subject', 3);  
            return view('quiz3',['question' => $question]);
        }
        else{
            $user_id = Auth::user()->id;
            $m1 = $req->input('ans2');
            $m2 =$req->input('ans1');
            $m3 =$req->input('ans3');
            $m4 = $req->input('ans4');
            $m5 = $req->input('ans5');
            $m6 = $req->input('ans6');
            $m7 =  $req->input('ans7');
            $m8 =$req->input('ans8');
            $m9 = $req->input('ans9');
            $m10 =  $req->input('ans10');
            $tmarks = $m1+$m2+$m3+$m4+$m5+$m6+$m7+$m8+$m9+$m10;
            $sub_id = session()->get('subject');
            DB::insert("INSERT INTO `student_m`( `sub_id`, `user_id`, `answer`) VALUES ('$sub_id','$user_id','$tmarks')");
            $question = DB::select('SELECT `answer`, `masks`, `question`, `opt1`, `opt2`, `opt3`, `opt4`,(SELECT name from subject where id =`subject`)  as sub_name FROM `question` WHERE `subject` = 3');
            session()->put('subject', 3);  
            return view('quiz3',['question' => $question]);
    
        }
       
    }
    public function Question3()
    {
        $user_id = Auth::user()->id;
        if (StudentM::where('user_id', $user_id)->where('sub_id',3)->exists()) {
            $question = DB::select('SELECT `answer`, `masks`, `question`, `opt1`, `opt2`, `opt3`, `opt4`,(SELECT name from subject where id =`subject`)  as sub_name FROM `question` WHERE `subject` = 4');
            session()->put('subject', 4);  
            return view('quiz4',['question' => $question]);
        }
        else{
            $user_id = Auth::user()->id;
            $question = DB::select('SELECT `answer`, `masks`, `question`, `opt1`, `opt2`, `opt3`, `opt4`,(SELECT name from subject where id =`subject`)  as sub_name FROM `question` WHERE `subject` = 3');
            session()->put('subject', 3);  
            return view('quiz3',['question' => $question]);
        }

       
    }

    public function pQuestion3(Request $req)
    {
        $user_id = Auth::user()->id;
        if (StudentM::where('user_id', $user_id)->where('sub_id',3)->exists()) {
            $question = DB::select('SELECT `answer`, `masks`, `question`, `opt1`, `opt2`, `opt3`, `opt4`,(SELECT name from subject where id =`subject`)  as sub_name FROM `question` WHERE `subject` = 4');
            session()->put('subject', 4);  
            return view('quiz4',['question' => $question]);
        }
        else{
            $user_id = Auth::user()->id;
            $m1 = $req->input('ans2');
            $m2 =$req->input('ans1');
            $m3 =$req->input('ans3');
            $m4 = $req->input('ans4');
            $m5 = $req->input('ans5');
            $m6 = $req->input('ans6');
            $m7 =  $req->input('ans7');
            $m8 =$req->input('ans8');
            $m9 = $req->input('ans9');
            $m10 =  $req->input('ans10');
            $tmarks = $m1+$m2+$m3+$m4+$m5+$m6+$m7+$m8+$m9+$m10;
            $sub_id = session()->get('subject');
            DB::insert("INSERT INTO `student_m`( `sub_id`, `user_id`, `answer`) VALUES ('$sub_id','$user_id','$tmarks')");
            $question = DB::select('SELECT `answer`, `masks`, `question`, `opt1`, `opt2`, `opt3`, `opt4`,(SELECT name from subject where id =`subject`)  as sub_name FROM `question` WHERE `subject` = 4');
            session()->put('subject', 4);  
            return view('quiz4',['question' => $question]);
            // $question = DB::select('SELECT `answer`, `masks`, `question`, `opt1`, `opt2`, `opt3`, `opt4`,(SELECT name from subject where id =`subject`)  as sub_name FROM `question` WHERE `subject` = 4');
            // session()->put('subject', 4);  
            // return view('quiz4',['question' => $question]);
        }
      

    }
    public function Question4()
    {
        $user_id = Auth::user()->id;
        if (StudentM::where('user_id', $user_id)->where('sub_id',4)->exists()) {
            $result = DB::select('SELECT * FROM `student_m` join users on users.id = student_m.user_id where `user_id` = '.$user_id);
            // session()->put('subject', 4);  
            return view('result',['result' => $result]);
        }
        else{
            $question = DB::select('SELECT `answer`, `masks`, `question`, `opt1`, `opt2`, `opt3`, `opt4`,(SELECT name from subject where id =`subject`)  as sub_name FROM `question` WHERE `subject` = 4');
            // session()->put('subject', 4);  
            return view('quiz4',['question' => $question]);
        }
        
    }
    public function pQuestion4(Request $req)
    {
        $user_id = Auth::user()->id;
        if (StudentM::where('user_id', $user_id)->where('sub_id',4)->exists()) {
            $result = DB::select('SELECT * FROM `student_m` join users on users.id = student_m.user_id where `user_id` = '.$user_id);
            // session()->put('subject', 4);  
            return view('result',['result' => $result]);
        }
        else{
            $user_id = Auth::user()->id;
            $m1 = $req->input('ans2');
            $m2 =$req->input('ans1');
            $m3 =$req->input('ans3');
            $m4 = $req->input('ans4');
            $m5 = $req->input('ans5');
            $m6 = $req->input('ans6');
            $m7 =  $req->input('ans7');
            $m8 =$req->input('ans8');
            $m9 = $req->input('ans9');
            $m10 =  $req->input('ans10');
            $tmarks = $m1+$m2+$m3+$m4+$m5+$m6+$m7+$m8+$m9+$m10;
            $sub_id = session()->get('subject');
            DB::insert("INSERT INTO `student_m`( `sub_id`, `user_id`, `answer`) VALUES ('$sub_id','$user_id','$tmarks')");
            $result = DB::select('SELECT * FROM `student_m` join users on users.id = student_m.user_id where `user_id` = '.$user_id);
            session()->put('subject', 4);  
            return view('result',['result' => $result]);
        }
        

    }
    public function result()
    {
        
            $result = DB::select('SELECT * FROM `student_m` join users on users.id = student_m.user_id  where `user_id` = '.$user_id);
            return view('result',['result' => $result]);
        

    }
}
