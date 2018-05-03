<?php

use Illuminate\Http\Request;

class HomeController extends BaseController {

	private $randomWord;
	public $wordFromDict;
	//protected $score  = 0;

	public function __construct(){
 
      $this->randomWord;
	}

	public function showHome()
	{
		$this->score = 0;
		return View::make('home') ->with('score', $this->score);
	}

	public function randomWord($lg1)
	{
		//if(randomnum)
		$difficulty = '"easy"';
		$this->randomWord = Word::randomWord($difficulty);
		if ($lg1 == 'true') {
			return [$this->randomWord[0]->lg1, $this->randomWord[0]->lg2];
		} else {
			return [$this->randomWord[0]->lg2, $this->randomWord[0]->lg1];
		}
		
	}

	public function checkSubmittedWord()
	{
		$submittedWord = Input::get('submittedWord');
		$correctWord = Input::get('correctWord');
		if($submittedWord == $correctWord) {
			$score = 100;
			$color = "green";
		} else {
			$score = 10;
			$color = "red";
		}
		return View::make('home') ->with(['color' => $color, 'score' => $score]);
	}

}
