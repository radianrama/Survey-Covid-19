<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;

class SurveyController extends Controller
{

  // public function start() {
  //   return view('survey.start');
  // }

  public function form(){
    return view('survey.index');
  }
  public function configForm(Request $request) {
    $name = $request->input('name');
    $q1 = $request->input('q1');
    $q2 = $request->input('q2');
    $q3 = $request->input('q3');
    $q4 = $request->input('q4');
    $q5 = $request->input('q5');
    $q6 = $request->input('q6');
    $q7 = $request->input('q7');
    $q8 = $request->input('q8');
    $q9 = $request->input('q9');
    $q10 = $request->input('q10');
    $q11 = $request->input('q11');
    $q12 = $request->input('q12');
    $q13 = $request->input('q13');
    $q14 = $request->input('q14');
    $q15 = $request->input('q15');
    $q16 = $request->input('q16');
    $q17 = $request->input('q17');
    $q18 = $request->input('q18');
    $q19 = $request->input('q19');
    $q20 = $request->input('q20');
    $q21 = $request->input('q21');

    $arrayQuestion = [
      $q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $q9, $q10,
      $q11, $q12, $q13, $q14, $q15, $q16, $q17, $q18, $q19,
      $q20, $q21
    ];

    $yes = 0;
    $no = 0;

    foreach ($arrayQuestion as $item) {
      if ($item == "1") {
        $yes++;
      }else{
        $no++;
      }
    }

    if ($yes <= 7) {
      $result = "Resiko Rendah";
    }elseif ($yes <= 14) {
      $result = "Resiko Sedang";
    }else{
      $result = "Resiko Tinggi";
    }

    

    $modelResult = new Result;
    
    $modelResult->name = $name;
    $modelResult->yes = $yes;
    $modelResult->no = $no;
    $modelResult->result = $result;

    $modelResult->save();

    return view('survey.result')->with([
      'name' => $name,
      'result' => $result,
      'yes' => $yes,
      'no' => $no,
    ]);
  }

}
