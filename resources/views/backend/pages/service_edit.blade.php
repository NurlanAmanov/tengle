@php use Illuminate\Support\Facades\Storage; @endphp
@extends('backend.layout.master')

@section('content')
<div class="container">
  <h3>Edit Service (What We Do)</h3>

  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul class="mb-0">@foreach ($errors->all() as $e) <li>{{ $e }}</li> @endforeach</ul>
    </div>
  @endif

  <form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')

    <div class="mb-3">
      <label>Title</label>
      <input type="text" name="title" class="form-control border" value="{{ old('title', $service->title) }}" required>
    </div>

    <div class="mb-3">
      <label>Current Icon</label><br>
      @if($service->icon)
        <img src="{{ Storage::url($service->icon) }}" alt="" style="height:60px;border-radius:8px;">
      @else
        <span class="text-secondary">No icon</span>
      @endif
    </div>

    <div class="mb-3">
      <label>New Icon (optional)</label>
      <input type="file" name="icon" class="form-control border" accept="image/*">
    </div>

    <div class="mb-3">
      <label>Description</label>
      <textarea name="description" class="form-control border" rows="5" required>{{ old('description', $service->description) }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('admin.services.index') }}" class="btn btn-light ms-2">Back</a>
  </form>

  <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" class="mt-3" onsubmit="return confirm('Silinsin?')">
    @csrf @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
  </form>
</div>
@endsection
