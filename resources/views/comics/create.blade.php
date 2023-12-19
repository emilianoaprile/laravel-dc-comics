@extends('layouts.app')

@section('content')

<section class="py-5">
  <div class="container">
    <form action="{{ route('comics.store') }}" method="POST">

      @csrf

      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Title">
      </div>

      <div class="mb-3 d-flex flex-column">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
      </div>

      <div class="mb-3">
        <label for="thumb" class="form-label">Url Image</label>
        <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Url Image">
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" name="price" id="price" placeholder="Price">
      </div>

      <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" class="form-control" name="series" id="series" placeholder="Series">
      </div>

      <div class="mb-3 d-flex gap-2">
        <label for="sale_date" class="form-label">Sale Date</label>
        <input type="date" name="sale_date" id="sale_date">
      </div>

      <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control" name="type" id="type" placeholder="Type">
      </div>

      <div class="mt-3">
        <input type="submit" class="btn btn-primary" value="Create">
      </div>

    </form>
  </div>
</section>

@endsection