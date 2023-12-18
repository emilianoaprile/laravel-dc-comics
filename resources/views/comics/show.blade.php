@extends('layouts.app')

@section('content')

<section>
    <div class="container">
      <h1>single comic</h1>
    </div>
    <div class="container">
      <div class="row">
        <h2>{{ $comic->title }}</h2>
        <p>{{ $comic->description }}</p>
            
      </div>
    </div>
  </section>
    
@endsection