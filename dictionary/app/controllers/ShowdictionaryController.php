<?php

class ShowdictionaryController extends BaseController {

	public function showDictionary()
	{
		//return View::make('showdictionary');
		$allWords = Word::getAllWords();
		$allEasyWords = Word::getAllEasyWords();
		$allModerateWords = Word::getAllModerateWords();
		$allDifficultWords = Word::getAllDifficultWords();
		return View::make('showdictionary')->with(['allWords'=> $allWords, 'allEasyWords'=> $allEasyWords, 'allModerateWords'=> $allModerateWords, 'allDifficultWords'=> $allDifficultWords]);
	}

	public function editWord()
	{
		//return View::make('showdictionary');
		/*$allWords = Word::getAllWords();
		$allEasyWords = Word::getAllEasyWords();
		$allModerateWords = Word::getAllModerateWords();
		$allDifficultWords = Word::getAllDifficultWords();
		return View::make('showdictionary')->with(['allWords'=> $allWords, 'allEasyWords'=> $allEasyWords, 'allModerateWords'=> $allModerateWords, 'allDifficultWords'=> $allDifficultWords]);*/
		//$wordToEdit = Input::()
		print_r("Panni szereti Mátét <3");
	}	
}
