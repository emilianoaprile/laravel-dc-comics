@extends('layouts.app')

@section('content')

<section>
    <div class="container">
      <h1>current series</h1>
    </div>
    <div class="container">
      <div class="row">
          @foreach ($comics as $comic)
              <div class="col-2 p-3">
                  <img src="{{ $comic->thumb }}" alt="" class="comic-img" width="70px">
                  <p>{{ $comic->series }}</p>
              </div>
          @endforeach   
      </div>
    </div>
  </section>
    
@endsection