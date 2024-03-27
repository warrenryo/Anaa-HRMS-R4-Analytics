@extends('layouts.app')

@section('content')
    <h1>Mga Sagot sa Form</h1>
    
    @foreach($formAnswers as $answer)
        <p>{{ $answer->answer_field }}</p>
        <!-- dagdagan mo ng iba pang mga fields dito depende sa iyong form -->
    @endforeach
@endsection