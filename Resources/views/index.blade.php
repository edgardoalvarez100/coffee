@extends('coffeebasic::layouts.frontend')

@section('title', 'CoffeeBasic')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {{ config('coffeebasic.name') }}
    </p>
@endsection
