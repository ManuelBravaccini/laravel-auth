@extends('layouts.admin')

@section('content')
<div class="container">
    <form action="{{ route('admin.projects.store') }}" method="POST" class="p-5">
        @csrf
        @method('POST')

        <h5 class="mb-3">
            Create a new project for <span class="fw-semibold">{{ Auth::user()->name }} </span>
        </h5>


        <div class="mb-3">
            <label for="project_title" class="form-label">Project title</label>
            <input type="text" class="form-control" id="project_title" placeholder="Insert project's title" name="title">
        </div>

        <div class="mb-3">
            <label for="project_date" class="form-label">Project date</label>
            <input type="date" class="form-control" id="project_date" name="project_date">
        </div>


        <div class="mb-3">
            <label for="project_content" class="form-label">Project content</label>
            <textarea class="form-control" id="project_content" rows="5" name="content"></textarea>
        </div>


        <div class="mb-3">
            <button type="submit" class="btn btn-primary">
                Create new project
            </button>
        </div>
    </form>

</div>
@endsection