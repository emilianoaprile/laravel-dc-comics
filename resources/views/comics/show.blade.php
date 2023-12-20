@extends('layouts.app')

@section('content')

<section>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <img src="{{ $comic->thumb }}" alt="">
          <h2>{{ $comic->title }}</h2>
          <a href="{{ route('comics.edit', $comic) }}">Edit</a>
          <p>
            {!! $comic->description !!}
          </p>
        </div>
      </div>
    </div>
  </section>
    
@endsection