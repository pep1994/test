@extends('layouts.main_layout')

@section('content')
<ul>
  @foreach ($users as $user)
    <li>
      {{ $user -> name }}
      <ul>
        <li>
          @foreach ($user -> apartments as $apartment)
            {{ $apartment -> title }} <br>
          @endforeach
        </li>
      </ul>
    </li>
  @endforeach
</ul>
@endsection
