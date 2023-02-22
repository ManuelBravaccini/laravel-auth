@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card text-center">
        <div class="card-header">
            {{ $project->title }}
        </div>
        <div class="card-body p-3 m-3">
            <h2 class="card-title fw-bold p-3">
                {{ $project->title }}
            </h2>
            <p class="card-text mb-4">
                {{ $project->content }}
            </p>
            <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-success">
                Edit
            </a>
            <a href="#" class="btn btn-danger">
                Delete this project
                {{-- TODO: fare un form --}}
            </a>
        </div>
        <div class="card-footer text-muted">
            {{ $project->project_date }}
        </div>
      </div>
</div>
@endsection