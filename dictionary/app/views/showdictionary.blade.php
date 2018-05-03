@extends('layout')

@section('content')

<div id="show-dictionary-container">
  <input type="text" id="search" placeholder="Search for words">
  <div id="show-dictionary" class="flex-item">
<table>
      <thead>
        <th>Easy</th>
      </thead>
      <tbody>
      @foreach($allEasyWords as $allEasyWord)
        <tr>
          <td id="word-list-easy" class="flex-item">
            {{ $allEasyWord -> lg1 }} - 
            {{ $allEasyWord -> lg2 }}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

   <table>
      <thead>
        <th>Moderate</th>
      </thead>
      <tbody>
      @foreach($allModerateWords as $allModerateWord)
        <tr>
          <td id="word-list-moderate" class="flex-item">
            {{ $allModerateWord -> lg1 }} - 
            {{ $allModerateWord -> lg2 }}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <table>
      <thead>
        <th>Difficult</th>
      </thead>
      <tbody>
      @foreach($allDifficultWords as $allDifficultWord)
        <tr>
          <td id="word-list-difficult" class="flex-item">
            {{ $allDifficultWord -> lg1 }} - 
            {{ $allDifficultWord -> lg2 }}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@stop