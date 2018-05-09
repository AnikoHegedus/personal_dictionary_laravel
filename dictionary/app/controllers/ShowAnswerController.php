<?php

use Illuminate\Http\Request;

class ShowAnswerController extends BaseController {

    public function showAnswer()
	{
		$correctWord = Input::get('correctWord');
		$originalWord = Input::get('originalWord');
		$score = 10;
		return View::make('showAnswer') ->with(['score' => $score, "correctWord" => $correctWord, "originalWord" => $originalWord]);
	}
}