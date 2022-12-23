@extends('layouts.main')

@section('content')
  <main>
    <div class="cards">

        <div class="container">

            @foreach ($comics as $comic)

                <div class="card">
                    <div class="img-container">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    </div>
                    <span>{{ $comic['series'] }}</span>
                </div>

            @endforeach

        </div>

        <div class="load-more">
          <a class="btn" href="#">Load More</a>
        </div>

      </div>
  </main>
@endsection
