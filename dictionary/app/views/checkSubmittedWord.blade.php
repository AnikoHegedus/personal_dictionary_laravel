@extends('layout')

@section('content')
    <div id="show_answer" style="background-color: {{ isset($color) ? $color : 'white'; }}">
    <p> {{ isset($originalWord) ? 'The original word was: ' . $originalWord : ''; }}  </p>
    <p> {{ isset($correctWord) ? 'The correct answer is: ' . $correctWord : ''; }}  </p>
    <p> {{ isset($submittedWord) ? 'My answer is: ' . $submittedWord : ''; }}  </p>
    <p id="score"> Current score: {{ $score }} </p>
    <div><a href='home'>Go back for a new word</a></div>
    </div>
@stop