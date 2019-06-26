@extends('layout.app')
@section('content')
<h1 class="text-capitalize">contact</h1>
{{ Form::open(['url'=>'contact/submit']) }}
       <div class="form-group">
       {{Form::label('email', 'E-mail Address')}}
       {{Form::text('email', '', ['class'=>'form-control', 'placeholder'=> 'E-mail Address'])}}
       </div>
       <div class="form-group">
       {{Form::label('name', 'Name')}}
       {{Form::text('name', '', ['class'=>'form-control', 'placeholder'=> 'Enter Name'])}}
       </div>
       <div class="form-group">
       {{Form::label('message', 'Message')}}
       {{Form::textarea('message', '', ['id' => 'article-ckeditor','class'=>'form-control', 'placeholder'=> 'Enter Message'])}}
       </div>
       {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{{ Form::close() }}
@endsection