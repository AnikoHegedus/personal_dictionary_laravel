<?php

class ShowdictionaryController extends BaseController {

	public function showDictionary()
	{
		//return View::make('showdictionary');
		$allWords = Word::getAllWords();
		$allEasyWords = Word::getAllEasyWords();
    	//return View::make('showdictionary')->with('allWords', $allWords, 'allEasyWords', $allEasyWords);
		return View::make('showdictionary')->with(['allWords'=> $allWords, 'allEasyWords'=> $allEasyWords]);
	}

}
