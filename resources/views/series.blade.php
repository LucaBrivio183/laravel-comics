@extends('layouts.app')

@section('page.title')
{{ $comics['title']}}
@endsection

@section('page.main')
        <section id="jumbotron">
        </section>
        <section id="series">
            <div class="container">
                <h2>{{ $comics['title']}}</h2>
                <span>U.S. price {{ $comics['price']}}</span>
                <p>{{ $comics['description']}}</p>
        </section>
@endsection