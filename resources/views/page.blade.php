@extends('layouts.app')

@section('title', $page->title)

@section('content')
    <div>
        {!! $page->body !!}
    </div>
@endsection
