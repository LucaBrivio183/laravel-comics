@extends('layouts.app')

@section('page.main')
        <section id="jumbotron">
        </section>
        <section id="comics">
            <div class="container">
                <div class="row">
                @foreach ($comics as $item)
                    <div class="col-2 p-2">
                        <div class="card h-100">
                            <img src="{{$item['thumb']}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">{{$item['title']}}</h5>
                            </div>
                          </div>
                    </div>
                @endforeach
                </div>
        </section>
@endsection