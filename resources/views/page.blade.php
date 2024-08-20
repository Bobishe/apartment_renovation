@extends('layouts.app')

@section('title', $page->title)

@section('content')

<style>
    .background-fixed {
        background-image: url('{{ asset('img/fon1.jpg') }}');
    }
</style>

    <div class="container-fluid">
        <div class="background-fixed">
    <!-- Ваш контент -->
</div>

    </div>

    <div class="container">
        



        {!! $page->body !!}
    </div>
@endsection
