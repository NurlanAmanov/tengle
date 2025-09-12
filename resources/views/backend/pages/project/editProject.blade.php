@extends('backend.layout.master')

@section('content')
<div class="container-fluid py-4">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-header bg-dark text-white">
            <h5 class="mb-0">Edit Project</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Project Title</label>
                    <input type="text" name="project_title" class="form-control border" value="{{ old('project_title', $project->project_title) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Vessel Name</label>
                    <input type="text" name="vessel_name" class="form-control border" value="{{ old('vessel_name', $project->vessel_name) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Company / Owner</label>
                    <input type="text" name="company_or_owner" class="form-control border" value="{{ old('company_or_owner', $project->company_or_owner) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Completion Year</label>
                    <input type="number" name="completion_year" class="form-control border" value="{{ old('completion_year', $project->completion_year) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Dimensions</label>
                    <input type="text" name="dimensions" class="form-control border" value="{{ old('dimensions', $project->dimensions) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Current Image</label><br>
                    @if($project->image_url)
                        <img src="{{ asset('storage/' . $project->image_url) }}" width="100" class="img-thumbnail">
                    @else
                        <span class="text-muted">No image</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label class="form-label">Change Image</label>
                    <input type="file" name="image" class="form-control border">
                </div>

                <button type="submit" class="btn btn-primary">Update Project</button>
                <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
    