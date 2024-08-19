@extends('layouts.app')

@section('title', $page->title)

@section('content')
    <h1>{{ $page->title }}</h1>
    <div>
        {!! $page->body !!}
    </div>
@endsection
