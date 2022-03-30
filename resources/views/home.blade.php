@extends('layouts.base')

@section('pageTitle, HomePage')

@section('content')
    
    <main class="main_home">
           <div class="container">
               @foreach ($movies as $movie )
               <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                      <h1>{{$movie->title}}</h1>
                  </div>
                  <div class="flip-card-back">
                    <p>Original language: {{$movie->original_title}}</p>
                    <p>Nationality: {{$movie->nationality}}</p>
                    <p>Release date: {{$movie->date}}</p>
                    <p>Vote: {{$movie->vote}}</p>
                  </div>
                </div>
              </div>               
              @endforeach
           </div>
    </main>

@endsection
    