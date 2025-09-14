@extends('backend.layout.master')

@section('content')
<div class="container-fluid py-4">
    @if ($errors->any())
        <div class="alert alert-danger"><ul class="mb-0">
            @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach
        </ul></div>
    @endif

    <div class="card">
        <div class="card-header bg-dark text-white">
            <h5 class="mb-0">Add Country History</h5>
        </div>
        <div class="card-body">
            <form id="country-form" action="{{ route('admin.ourCountry.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control border" value="{{ old('title') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Content</label>
                    <div id="editor" style="min-height: 220px;"></div>
                    <input type="hidden" name="content" id="content-input" value="{{ old('content') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" name="image" class="form-control border" accept=".jpg,.jpeg,.png,.webp">
                    <small class="text-muted">Supported: jpg, jpeg, png, webp | Max: 4MB</small>
                </div>

                <button type="submit" class="btn btn-success">Save</button>
                <a href="{{ route('admin.ourCountry') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/quill@1.3.7/dist/quill.snow.css" rel="stylesheet">
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/quill@1.3.7/dist/quill.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const quill  = new Quill('#editor', { theme: 'snow' });
    const hidden = document.getElementById('content-input');

    if (hidden.value) {
        quill.clipboard.dangerouslyPasteHTML(hidden.value);
    }

    document.getElementById('country-form').addEventListener('submit', function (e) {
        const plain = quill.getText().trim();
        if (!plain) { e.preventDefault(); alert('Content boş ola bilməz.'); return; }
        hidden.value = quill.root.innerHTML.trim();
    });
});
</script>
@endpush
