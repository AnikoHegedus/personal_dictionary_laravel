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
		$randnum = rand(1, 6);
		if ($randnum == 1) {
			$difficulty = '"easy"';
		} else if (3 < $randnum) {
			$difficulty = '"difficult"';
		} else {
			$difficulty = '"moderate"';
		}
		$this->randomWord = Word::randomWord($difficulty);
		
		if ($lg1 == 'true') {
			return [$this->randomWord[0]->lg1, $this->randomWord[0]->lg2, $this->randomWord[0]->difficulty];
		} else {
			return [$this->randomWord[0]->lg2, $this->randomWord[0]->lg1, $this->randomWord[0]->difficulty];
		}
		
	}
}
