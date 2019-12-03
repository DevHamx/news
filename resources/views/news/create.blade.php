@extends('layouts.app')
@section('content')
    <h1>Create News</h1>
    {!! Form::open(['action' => 'NewsController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('URL','URL')}}
        {{Form::text('url','',['class'=>'form-control','placeholder'=>'URL'])}}
    </div>
    <div class="form-group">
        {{Form::label('Titre','Titre')}}
        {{Form::textarea('titre','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Titre text'])}}
    </div>
        {{Form::submit('submit',['class'=>' btn btn-success'])}}
    {!! Form::close() !!}
    @push('scripts')
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    @endpush
@endsection