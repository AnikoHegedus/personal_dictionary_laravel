@extends('layout')

@section('content')

<div id="about">
    <p class="about-text"><strong>My personal dictionary</strong> serves a special purpose of language learners. It helps them study the words <em>they</em> need.</p>
    <p class="about-text">You can enter your own words and then randomly test them by pushing on the "English word" or "French word" buttons.</p>
    <p class="about-text">In the dictionary the words are divided into three groups accoring to their difficulty. All new words are inserted in the "difficult" group. If their foreign equivalents are given correctly, they are moved to the "medium" group and if they are answered correctly next time too, they are moved to the "easy" group.</p>
    <p class="about-text">If not answered correctly, words migrate to the other direction.</p>
    <p class="about-text">Words in the "difficult" group are more likely to pop up and words in the "easy" group are the least likely to be asked.</p>
</div>

@stop