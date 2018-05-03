@extends('layout')

@section('content')

<div id="wrapper" style="background-color: {{ isset($color) ? $color : 'white'; }}">
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
    
    {{ Form:: open(array('action' => 'post', 'url' => 'home/checkSubmittedWord')) }}
    {{ Form::hidden('correctWord', '', array('id' => 'solution_hidden')) }}
    {{ Form::text('submittedWord', '', array('id' => 'answer', 'class' => 'flex-item', 'method' => 'post')) }}

    <!--{{ Form::text('correctWord', 'tessajfd', array('id' => 'correctWord', 'class' => 'flex-item', 'method' => 'post')) }}-->
    {{ Form::button('Go', array('class' => 'btn', 'id' => 'final', 'type' => 'submit')) }}
    {{ Form::close() }}

  </div>

  <div id="solution" class="flex-item">
    <button id="btn-show-solution">I want to see the correct answer</button>
  </div>
  
  <p id="score"> Current score: {{ $score }} </p>
  
  <p id="test2"> {{ isset($word) ? $word : 'Default Message'; }}  </p>
</div>
    
</div>

@stop