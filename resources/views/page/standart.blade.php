@extends('layouts.app')

@section('title', $page->title)

@section('content')

    {!! $page->body !!}





    <x-flamp />
    <x-reviews />
    <x-form />



@endsection
