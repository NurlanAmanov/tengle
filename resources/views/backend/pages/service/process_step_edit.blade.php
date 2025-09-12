@php use Illuminate\Support\Facades\Storage; @endphp
@extends('backend.layout.master')

@section('content')
<div class="container">
  <h3>Edit Process Step</h3>

  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul class="mb-0">@foreach ($errors->all() as $e) <li>{{ $e }}</li> @endforeach</ul>
    </div>
  @endif

  <form id="process-step-form" action="{{ route('admin.process_steps.update', $step->id) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')

    <div class="mb-3">
      <label>Title</label>
      <input type="text" name="title" class="form-control border" value="{{ old('title', $step->title) }}" required>
    </div>

    <div class="mb-3">
      <label>Current Image</label><br>
      @if($step->image)
        <img src="{{ Storage::url($step->image) }}" alt="image" style="height:80px;border-radius:8px;">
      @else
        <span class="text-secondary">No image</span>
      @endif
    </div>

    <div class="mb-3">
      <label>New Image (optional)</label>
      <input type="file" name="image" class="form-control border" accept="image/*">
    </div>

    <div class="mb-3">
      <label>Description</label>
      {{-- Quill editor konteyneri --}}
      <div id="step-editor" style="min-height:220px;"></div>
      {{-- Gizli input (backend bunu oxuyacaq) --}}
      <input type="hidden" name="description" id="step-desc">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('admin.services.index') }}" class="btn btn-light ms-2">Back</a>
  </form>

  <form action="{{ route('admin.process_steps.destroy', $step->id) }}" method="POST" class="mt-3" onsubmit="return confirm('Silinsin?')">
    @csrf @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
  </form>
</div>
@endsection

@push('scripts')
  {{-- Quill CDN --}}
  <link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
  <script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>

  <script>
    (function () {
      const initialDesc = @json(old('description', $step->description));

      const quill = new Quill('#step-editor', {
        theme: 'snow',
        modules: {
          toolbar: [
            ['bold','italic','underline','strike'],
            [{'header':[1,2,3,false]}],
            [{'list':'ordered'},{'list':'bullet'}],
            [{'align':[]}],
            ['link','image'],
            ['clean']
          ]
        }
      });

      // Mövcud description-u editor-a yüklə
      if (initialDesc) {
        quill.root.innerHTML = initialDesc;
      }

      // Submit zamanı Quill HTML-ni gizli inputa yaz
      document.getElementById('process-step-form').addEventListener('submit', function () {
        document.getElementById('step-desc').value = quill.root.innerHTML;
      });
    })();
  </script>
@endpush
