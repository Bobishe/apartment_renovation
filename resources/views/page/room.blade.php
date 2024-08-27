@extends('layouts.app')

@section('title', $page->title)

@section('content')

    {!! $page->body !!}











    <x-priceBlock />
    <x-room />
    <x-flamp />
    <x-reviews />
    <x-form-absolute />



@endsection
