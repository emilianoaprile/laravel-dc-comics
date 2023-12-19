@extends('layouts.app')

@section('content')

<section class="py-5">
  <div class="container">

    <h2>Edit your comic</h2>
    <form action="{{ route('comics.update', $comic) }}" method="POST">

      @csrf
      @method('PUT')

      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{ $comic->title }}">
      </div>

      <div class="mb-3 d-flex flex-column">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" cols="30" rows="10">{{ $comic->description }}</textarea>
      </div>

      <div class="mb-3">
        <label for="thumb" class="form-label">Url Image</label>
        <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Url Image" value="{{ $comic->thumb }}">
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" name="price" id="price" placeholder="Price" value="{{ $comic->price }}">
      </div>

      <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" class="form-control" name="series" id="series" placeholder="Series" value="{{ $comic->series }}">
      </div>

      <div class="mb-3 d-flex gap-2">
        <label for="sale_date" class="form-label">Sale Date</label>
        <input type="date" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}">
      </div>

      <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control" name="type" id="type" placeholder="Type" value="{{ $comic->type }}">
      </div>

      <div class="mt-3">
        <input type="submit" class="btn btn-primary" value="Edit">
      </div>

    </form>
  </div>
</section>

@endsection