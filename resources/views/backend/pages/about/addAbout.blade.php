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
            <h5 class="mb-0">Add New About us</h5>
        </div>
        <div class="card-body">
            <form id="aboutus-form" action="{{ route('admin.aboutus.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label">About Title</label>
                    <input type="text" name="title" class="form-control border" value="{{ old('title') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">About Content</label>

                    {{-- Quill editor konteyneri --}}
                    <div id="editor" style="min-height: 220px;"></div>

                    {{-- Quill məzmununu formaya ötürmək üçün gizli input --}}
                    <input type="hidden" name="content" id="content-input" value="{{ old('content') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">About Image</label>
                    <input type="file" name="image" class="form-control border">
                    <small class="text-muted">Supported formats: jpg, jpeg, png, webp | Max size: 4MB</small>
                </div>

                <button type="submit" class="btn btn-success">Save Project</button>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    {{-- Quill CDN --}}
    

@endpush
