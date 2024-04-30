@extends('layouts.app')

@section('pageTitle', 'Homepage')
 
@section('content')

    <div class="container">
    
        <div class="row row-cols-1 row-cols-md-3">

            @foreach ($movies as $movie)

            <div class="col py-3">

                <div class="card">

                    <img class="card-img-top" src="https://picsum.photos/400/200" alt="">

                    <div class="card-body">

                        {{ $movie->title }}

                    </div>
            
                </div>

            </div>

            @endforeach

        </div>

    </div>


@endsection