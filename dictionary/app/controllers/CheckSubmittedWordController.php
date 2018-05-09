<?php

use Illuminate\Http\Request;

class CheckSubmittedWordController extends BaseController {

public function checkSubmittedWord()
	{
		$submittedWord = Input::get('submittedWord');
		$correctWord = Input::get('correctWord');
		$originalWord = Input::get('originalWord');
		if($submittedWord == $correctWord) {
			$score = 100;
			$color = "green";
		} else {
			$score = 10;
			$color = "red";
		}
		return View::make('checkSubmittedWord') ->with(['color' => $color, 'score' => $score, 'submittedWord' => $submittedWord, "correctWord" => $correctWord, "originalWord" => $originalWord]);
	}
}