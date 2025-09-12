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
            <h5 class="mb-0">Add New Project</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Project Title</label>
                    <input type="text" name="project_title" class="form-control border" value="{{ old('project_title') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Vessel Name</label>
                    <input type="text" name="vessel_name" class="form-control border" value="{{ old('vessel_name') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Company / Owner</label>
                    <input type="text" name="company_or_owner" class="form-control border" value="{{ old('company_or_owner') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Completion Year</label>
                    <input type="number" name="completion_year" class="form-control border" value="{{ old('completion_year') }}" >
                </div>

                <div class="mb-3">
                    <label class="form-label">Dimensions</label>
                    <input type="text" name="dimensions" class="form-control border" value="{{ old('dimensions') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Project Image</label>
                    <input type="file" name="image" class="form-control border">
                    <small class="text-muted">Supported formats: jpg, jpeg, png, webp | Max size: 4MB</small>
                </div>

                 <button type="submit" class="btn btn-success">Save Project</button>
    <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace('editor');
</script>
@endsection
