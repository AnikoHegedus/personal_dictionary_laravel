@extends('layout')

@section('content')

<div id="show-dictionary-container">
  <input type="text" id="search" placeholder="Search for words">
  <div id="show-dictionary" class="flex-item">
<table>
      <thead>
        <th>Difficult</th>
      </thead>
      <tbody>
      @foreach($allWords as $allWord)
        <tr>
          <td id="word-list-difficult" class="flex-item">
            {{ $allWord -> lg1 }}
            {{ $allWord -> lg2 }}
            {{ $allWord -> difficulty }}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

<table>
      <thead>
        <th>Easy</th>
      </thead>
      <tbody>
      @foreach($allEasyWords as $allEasyWord)
        <tr>
          <td id="word-list-difficult" class="flex-item">
            {{ $allEasyWord -> lg1 }}
            {{ $allEasyWord -> lg2 }}
            {{ $allEasyWord -> difficulty }}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
   
  </div>
</div>

@stop