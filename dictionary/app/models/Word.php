<?php

class Word extends Eloquent {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	//protected $table = 'words';
  public static function getAllWords()
{
    return $allWords = DB::select('select * from words');
} 

  public static function getAllEasyWords()
{
    return $allEasyWords = DB::select('SELECT * FROM words WHERE difficulty = "easy"');
} 

 public static function getAllModerateWords()
{ 
    return $allModerateWords = DB::select('SELECT * FROM words WHERE difficulty = "moderate"');
} 

 public static function getAllDifficultWords()
{
    return $allDifficultWords = DB::select('SELECT * FROM words WHERE difficulty = "difficult"');
} 

 public static function randomWord($difficulty)
{ 
    return $randomWord = DB::select('SELECT * FROM words WHERE difficulty = ' .  $difficulty . ' ORDER BY RAND() LIMIT 1');
} 

 public static function findWordInDict($submittedWord)
{ 
    $correctWord = DB::select('SELECT * FROM words WHERE lg1 = ' . '"' . $submittedWord . '"');
    if (count($correctWord) > 0) {
      return $correctWord;
    } else {
      return null;
    }
    
}

public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();
        Store_seat::truncate();
        return redirect('/');
    }

}

