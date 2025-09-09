@extends('backend.layout.master')

@section('content')

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            {{-- Flash message --}}
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            {{-- Validation errors --}}
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card shadow">
                <div class="card-header bg-dark text-white">
                    <h5 class="mb-0">Edit Slider</h5>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.sliders.update', $slider->id) }}" 
                          method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        {{-- Current Image --}}
                        <div class="mb-3">
                            <label class="form-label">Current Image</label><br>
                            <img src="{{ asset('storage/' . $slider->image) }}" 
                                 alt="Slider Image" width="200" class="img-thumbnail">
                        </div>

                        {{-- Upload New Image --}}
                        <div class="mb-3">
                            <label for="image" class="form-label">Change Image</label>
                            <input type="file" name="image" id="image" class="form-control">
                            <small class="text-muted">Leave empty if you don’t want to change the image.</small>
                        </div>

                        {{-- Title --}}
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" id="title" 
                                   value="{{ old('title', $slider->title) }}" 
                                   class="form-control" required>
                        </div>

                        {{-- Subtitle --}}
                        <div class="mb-3">
                            <label for="subtitle" class="form-label">Subtitle</label>
                            <input type="text" name="subtitle" id="subtitle" 
                                   value="{{ old('subtitle', $slider->subtitle) }}" 
                                   class="form-control">
                        </div>

                        {{-- Submit --}}
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.sliders.index') }}" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-primary">Update Slider</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
