@extends('layouts.app')

@section('title', $page->title)

@section('content')

    {!! $page->body !!}




    <x-form />



@endsection
