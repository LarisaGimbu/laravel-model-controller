@extends('layouts.main')

@section('content')


<div class="container">
  <h1>Movies</h1>

  <div class="movies-container d-flex flex-wrap justify-content-between">
    @forelse ($movies as $movie)
      <div class="card mb-3" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$movie['id']}}. {{$movie['title']}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$movie['original_title']}}</h6>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Nationality: {{$movie['nationality']}} </li>
            <li class="list-group-item">Date: {{$movie['date']}} </li>
            <li class="list-group-item">Vote: {{$movie['vote']}} </li>
          </ul>
        </div>
      </div>
    @empty
      
    @endforelse
  </div>
  
  

</div>
  
@endsection