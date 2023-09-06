@extends('master');

@section('title', 'категория' . $category->name);

@section('content')
    <section>
        <h2>{{$category->name}}</h2>
        <h2>{{$category->description}}</h2>
    </section>
@endsection
