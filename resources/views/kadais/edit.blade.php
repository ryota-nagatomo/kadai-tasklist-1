@extends('layouts.app')

@section('content')

<h1>id: {{ $message->id }} のタスク編集ページ</h1>

    {!! Form::model($message, ['route' => ['kadais.update', $kadai->id], 'method' => 'put']) !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection