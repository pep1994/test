@extends('layouts.main_layout')

@section('content')


      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">La tua casa Ovunque</h1>
          <div class="input-group">
            <div class="filter">
              <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Cerca località</label>
                  <input type="search" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Cerca Località">
                </div>
                <div class="form-check">
                  <label class="prova" for="wi_fi">WiFi</label>
                  <input name="wi_fi" type="checkbox" class="prova-input"  value="" id="wi_fi">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>

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
