@extends('layouts.app')

@section('page.title')
Home
@endsection

@section('page.main')
        <section id="jumbotron">
        </section>
        <section id="comics">
            <div class="container">
                <div class="row">
                    @foreach($comics as $item)
                    <div class="col-sm-6 col-md-4 col-xl-2 p-2">
                      @include('partials.comicthumb')
                    </div>
                    @endforeach
                </div>
        </section>
@endsection