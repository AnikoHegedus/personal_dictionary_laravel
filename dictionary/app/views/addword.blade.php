@extends('layout')

@section('content')
    <div id="new-word-section" class="flexbox-container">

    {{ Form:: open(array('action' => 'post', 'url' => 'addNewWord')) }}
    {{ Form::label('new_lg1', 'Word in English') }}
    {{ Form::text('new_lg1', '', array('id' => 'new_lg1', 'class' => 'flex-item', 'method' => 'post')) }}
    {{ Form::label('new_lg2', 'Word in French') }}
    {{ Form::text('new_lg2', '', array('id' => 'new_lg2', 'class' => 'flex-item', 'method' => 'post')) }}
    {{ Form::button('Add', array('class' => 'btn', 'id' => 'submit-new-word', 'type' => 'submit')) }}
    {{ Form::close() }}

    </div>
    <div id="added-new-word">
        <p class="flexbox-container"> {{ isset($new_lg1) ? 'The following word has been added to your dictionary': ''; }}  </p>
        <p class="flexbox-container"> {{ isset($new_lg1) ? 'English: ' . $new_lg1 : ''; }}  </p>
        <p class="flexbox-container"> {{ isset($new_lg1) ? 'French: ' . $new_lg2 : ''; }}  </p>
    </div>
    
@stop