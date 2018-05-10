@extends('layout')

@section('content')
<div id="wrapper">
<div id="first-section">
  <div class="flexbox-container">
    <button id="lg1" class="flex-item" >English word</button>
    <button id="lg2" class="flex-item">French word</button>
  </div >

  <div id="word-answer" class="flexbox-container">
    <span class="flex-item">Original word:</span>
    <span id="word" class="flex-item"></span>
    <hr>
    <span class="flex-item">My answer:</span>
    
    {{ Form:: open(array('action' => 'post', 'url' => 'checkSubmittedWord')) }}
    {{ Form::hidden('correctWord', '', array('class' => 'solution_hidden')) }}
    {{ Form::hidden('originalWord', '', array('class' => 'originalWord_hidden')) }}
    {{ Form::text('submittedWord', '', array('id' => 'answer', 'class' => 'flex-item', 'method' => 'post')) }}
    {{ Form::button('Go', array('class' => 'btn', 'id' => 'final', 'type' => 'submit')) }}
    {{ Form::close() }}

  </div>

  <div id="solution" class="flex-item">
    {{ Form:: open(array('action' => 'post', 'url' => 'showAnswer')) }}
    {{ Form::hidden('correctWord', '', array('class' => 'solution_hidden')) }}
    {{ Form::hidden('originalWord', '', array('class' => 'originalWord_hidden')) }}
    {{ Form::button('I want to see the correct answer', array('class' => 'btn', 'id' => 'btn-show-solution', 'type' => 'submit')) }}
    {{ Form::close() }}
  </div>
 
</div>
  <p id="difficulty"></p>
  <!--{{ isset($difficulty) ? 'Category of word: ' . $difficulty : ''; }} -->
</div>

@stop