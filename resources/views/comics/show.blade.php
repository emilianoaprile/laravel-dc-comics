@extends('layouts.app')

@section('content')

<section>
    <div class="container">
      <h1>Single comic</h1>
    </div>
    <div class="container">
      <div class="row">
        <h2>{{ $comic->title }}</h2>
        <a href="{{ route('comics.edit', $comic) }}">Edit</a>
        <p>
          {!! $comic->description !!}
        </p>
      </div>
    </div>
  </section>
    
@endsection