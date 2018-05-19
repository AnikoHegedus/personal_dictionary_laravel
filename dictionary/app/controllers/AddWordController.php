<?php

use Illuminate\Http\Request;

class AddWordController extends BaseController {

    public function addNewWord()
	{
        $new_lg1= Input::get('new_lg1');
        $new_lg2= Input::get('new_lg2');
        DB::table('words')->insert(
            ['lg1' => $new_lg1, 'lg2' => $new_lg2, 'difficulty' => 'difficult']
        );
        return View::make('addword') ->with(['new_lg1' => $new_lg1, 'new_lg2' => $new_lg2]);
    }
}