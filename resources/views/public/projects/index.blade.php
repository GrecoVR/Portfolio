@extends('layouts.app')
@section('title', 'Projects')
@section('content')
    <section class="projects-section">
        <h1>Mis proyectos</h1>
        <div class="projects-grid">
            @forelse($projects as $project)
                <x-project-card :project="$project" />
            @empty
                <p>No hay proyectos disponibles.</p>
            @endforelse
        </div>
    </section>
@endsection