@extends('layouts.app')

@section('content')

<section>
    <div class="container">
      <h1>current series</h1>
    </div>
    <div class="container">
      <div class="row">
          @foreach ($comics as $comic)
            <div class="col py-3">
                <a href="{{ route('comics.show', $comic)}}">
                    <img src="{{ $comic->thumb }}" alt="" class="comic-img" width="70px">
                    <p>{{ $comic->series }}</p>
                </a>
                <div class="edit">
                  <a href="{{ route('comics.edit', $comic) }}">Edit</a>
                </div>

                <form action="{{ route('comics.destroy', $comic) }}" method="GET">
                  @csrf
                  @method('DELETE')
                  
                  <input type="submit" value="Delete">
                
                </form>
            </div>
          @endforeach   
      </div>
    </div>
  </section>
    
@endsection