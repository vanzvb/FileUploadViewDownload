@extends('layouts.layout')

@section('layout')
    <form action="{{ url('uploadproduct') }}" method="post" enctype="multipart/form-data">
        @csrf
    <input type="text" name="name" placeholder="Product Name">
    <input type="text" name="description" placeholder="Product Description">

    <input type="file" name="file[]" multiple>
    <input type="submit">
    </form>
    <a href="{{ url('show') }}">Upload List</a>
@endsection