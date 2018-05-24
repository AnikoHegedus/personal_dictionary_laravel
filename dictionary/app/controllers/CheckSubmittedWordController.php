<?php

use Illuminate\Http\Request;

class CheckSubmittedWordController extends BaseController {

public function checkSubmittedWord()
	{
		$submittedWord = Input::get('submittedWord');
		$correctWord = Input::get('correctWord');
		$originalWord = Input::get('originalWord');
		$original_score = DB::table('sessions')->select('score')->first();
		$difficulty =  DB::table('words')->select('difficulty')->where('lg1', $correctWord)->orWhere('lg2', $correctWord)->get();

		if($submittedWord == $correctWord) {		
			$color = "green";
			$score = $original_score -> score + 1;	
			DB::table('sessions') ->where('score', $original_score -> score) ->update(['score' => $score]); 
			if ($difficulty[0]->difficulty == "difficult"){
				DB::table('words') ->where('lg1', $correctWord)->orWhere('lg2', $correctWord) ->update(['difficulty' => 'moderate']);
				$difficulty = "moderate";
			}  else if($difficulty[0]->difficulty == "moderate"){
				DB::table('words') ->where('lg1', $correctWord)->orWhere('lg2', $correctWord) ->update(['difficulty' => 'easy']);
				$difficulty = "easy";
			}  else {
				$difficulty = "easy";
			}
		} else {
			$color = "red";
			$score = $original_score -> score - 1;	
			DB::table('sessions') ->where('score', $original_score -> score) ->update(['score' => $score]);
			if($difficulty[0]->difficulty == "easy"){
				DB::table('words') ->where('lg1', $correctWord)->orWhere('lg2', $correctWord) ->update(['difficulty' => 'moderate']);
				$difficulty = "moderate";
			}  else if($difficulty[0]->difficulty == "moderate"){
				DB::table('words') ->where('lg1', $correctWord)->orWhere('lg2', $correctWord) ->update(['difficulty' => 'difficult']);
				$difficulty = "difficult";
			} else {
				$difficulty = "difficult";
			}
		}
		return View::make('checkSubmittedWord') ->with(['color' => $color, 'score' => $score, 'submittedWord' => $submittedWord, "correctWord" => $correctWord, "originalWord" => $originalWord, "difficulty" => $difficulty]);
	}

}