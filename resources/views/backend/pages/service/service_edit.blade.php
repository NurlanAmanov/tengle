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

  <form id="service-edit-form" action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')

    <div class="mb-3">
      <label>Title</label>
      <input type="text" name="title" class="form-control border" value="{{ old('title', $service->title) }}" required>
    </div>

    <div class="mb-3">
      <label>Current Icon</label><br>
      @if($service->icon)
        <img src="{{ Storage::url($service->icon) }}" alt="icon" style="height:60px;border-radius:8px;">
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
      {{-- Quill editor konteyneri --}}
      <div id="desc-editor" style="min-height:220px;"></div>
      {{-- Quill məzmunu üçün gizli input (backend bunu oxuyacaq) --}}
      <input type="hidden" name="description" id="desc-input">
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

@push('scripts')
  {{-- Quill CDN --}}
  <link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
  <script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>

  <script>
    (function () {
      const initialDesc = @json(old('description', $service->description));

      const quill = new Quill('#desc-editor', {
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

      // Mövcud məzmunu editor-a yüklə
      if (initialDesc) {
        quill.root.innerHTML = initialDesc;
      }

      // Submit zamanı Quill HTML-ni gizli inputa yaz
      document.getElementById('service-edit-form').addEventListener('submit', function () {
        document.getElementById('desc-input').value = quill.root.innerHTML;
      });
    })();
  </script>
@endpush
