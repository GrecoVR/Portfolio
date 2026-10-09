@extends('layouts.app')
@section('title', 'About')
@section('content')
    <h1>{{$AboutMe->title}}</h1>
    <p>{{$AboutMe->description}}</p>
@endsection