@extends('layouts.main')

@section('content')
<main>

    <div class="cards">

      <div class="container">

        <div class="card">
            <div class="img-container">
              <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="cardTitle">
            </div>
            <span>cardTitle</span>
        </div>
        <div class="card">
            <div class="img-container">
              <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="cardTitle">
            </div>
            <span>cardTitle</span>
        </div>
        <div class="card">
            <div class="img-container">
              <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="cardTitle">
            </div>
            <span>cardTitle</span>
        </div>
        <div class="card">
            <div class="img-container">
              <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="cardTitle">
            </div>
            <span>cardTitle</span>
        </div>
        <div class="card">
            <div class="img-container">
              <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="cardTitle">
            </div>
            <span>cardTitle</span>
        </div>
        <div class="card">
            <div class="img-container">
              <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="cardTitle">
            </div>
            <span>cardTitle</span>
        </div>

      </div>

      <div class="load-more">
        <a class="btn" href="#">Load More</a>
      </div>

    </div>

    <section>

      <div class="lower container">
        <nav>
          <ul>
            <li>
              <a href="#">
                <div class="image">
                  <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}">
                </div>
                <span>text</span>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="image">
                  <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}">
                </div>
                <span>text</span>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="image">
                  <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}">
                </div>
                <span>text</span>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="image">
                  <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}">
                </div>
                <span>text</span>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="image">
                  <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}">
                </div>
                <span>text</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </section>

  </main>
@endsection
