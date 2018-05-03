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
    //return Word::all()->get();
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
   // return $randomWord[0];
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

	/*public $id;
    public $lg1;
    public $lg2;
    public $difficulty;

    public function __construct($id, $lg1, $lg2, $difficulty) {
      $this->id = $id;
      $this->lg1 = $lg1;
      $this->lg2 = $lg2;
      $this->difficulty = $difficulty;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM dictionary');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $word) {
        $list[] = new Word($word['id'], $word['lg1'], $word['lg2'], $word['difficulty']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM dictionary WHERE id = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $word = $req->fetch();

      return new Word($word['id'], $word['lg1'], $word['lg2'], $word['difficulty']);
    }

    public static function findByDifficulty($difficulty) {
      $list = [];
      $db = Db::getInstance();
      $req = $db->prepare('SELECT * FROM dictionary WHERE difficulty = :difficulty');
      $req->bindValue(':difficulty', $difficulty);
      $req->execute();
      foreach($req->fetchAll() as $word) {
        $list[] = new Word($word['id'], $word['lg1'], $word['lg2'], $word['difficulty']);
      }
      return $list;
    }

    
    public static function addNewWord(){
     /*  $req = "INSERT INTO dictionary (lg1, lg2, difficulty)
      VALUES ('John', 'Doe', 'john@example.com')";
      
      if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      } */
      /*$new_word = $_POST['lg1'];
      return $new_word;*/
    }

