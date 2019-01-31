@extends('layouts.main')
@section('content')
    <h1>Mi blog personal</h1>
    @forelse($data['blogs'] as $blog)
        <hr>
        <h2>{{ $blog->title }}</h2>
        <a href="#">Ver más</a>
    @empty
        <hr>
        <p>No existen blogs en la página</p>
    @endforelse
@endsection
