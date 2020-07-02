@extends('layouts.main_layout')

@section('content')

    @include('components.jumbotron')
    <div class="container-fluid">
      <div class="row justify-content-center">
        @foreach ($apartments as $apartment)
          <div class="card" style="width: 18rem; margin: 0 30px;">
            <img class="card-img-top" src="{{ $apartment -> img }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{ $apartment -> title }}</h5>
              <p class="card-text">{{ $apartment -> description }}</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        @endforeach
      </div>
      <div class="row justify-content-center mt-50">
        {{ $apartments -> links() }}
      </div>
    </div>

@endsection
