@extends('layout')

@section('content')

<div id="wrapper">
<div id="first-section">
  <div class="flexbox-container">
    <button id="lg1" class="flex-item" >English word
      </button>
    <button id="lg2" class="flex-item">French word</button>
  </div>

  <div id="word-answer" class="flexbox-container">
    <span class="flex-item">Original word:</span>
    <span id="word" class="flex-item"></span>
    <hr>
    <span class="flex-item">My answer:</span>
    <input type="text" id="answer" class="flex-item"></input>
    <button id="final">Go</button>
  </div>

  <div id="solution" class="flex-item">
    <button id="btn-show-solution">I want to see the correct answer</button>
  </div>
  <p id="test1"><?php /*if ($wordToPrint != 'undefined')*/ /*echo $wordToPrint;*/ ?></p>
  <p id="test2"></p>
</div>
</div>

@stop