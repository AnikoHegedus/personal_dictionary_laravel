<?php

use Illuminate\Http\Request;

class CheckSubmittedWordController extends BaseController {

public function checkSubmittedWord()
	{
		$submittedWord = Input::get('submittedWord');
		$correctWord = Input::get('correctWord');
		$originalWord = Input::get('originalWord');
		$original_score = DB::table('score')->select('score')->where('id',1)->first();
		if($submittedWord == $correctWord) {		
			$color = "green";
			$score = $original_score -> score + 1;	
			DB::table('score') ->where('score', $original_score -> score) ->update(['score' => $score]);
		} else {
			$color = "red";
			$score = $original_score -> score - 1;	
			DB::table('score') ->where('score', $original_score -> score) ->update(['score' => $score]);
		}
		return View::make('checkSubmittedWord') ->with(['color' => $color, 'score' => $score, 'submittedWord' => $submittedWord, "correctWord" => $correctWord, "originalWord" => $originalWord]);
	}

}