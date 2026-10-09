<article>
    @if($project->images->isNotEmpty())
        <img 
            src="{{ $project->images->first()->path }}" 
            alt="{{ $project->images->first()->alt_text }}"
        >
    @endif
    <h3>{{ $project->name }}</h3>
    @if ($project->technologies->isNotEmpty())
        <p>{{ $project->technologies->pluck('name')->join(', ') }}</p>
    @endif
    <p>{{ $project->description }}</p>
</article>
