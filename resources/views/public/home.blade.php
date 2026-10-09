@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <h1>{{ $profile->name }}</h1>
    <p>{{ $profile->professional_title }}</p>
    <p>{{ $profile->short_description }}</p>
    <img src="{{ $profile->profile_image }}" alt="Profile Image">

    @foreach($featuredProjects as $project)
        <x-project-card :project="$project" />
    @endforeach
    
@endsection