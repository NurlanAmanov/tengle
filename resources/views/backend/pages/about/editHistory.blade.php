@extends('backend.layout.master')

@section('content')
<div class="container-fluid py-4">
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul class="mb-0">
        @foreach ($errors->all() as $e) <li>{{ $e }}</li> @endforeach
      </ul>
    </div>
  @endif

  <div class="card">
    <div class="card-header bg-dark text-white">
      <h5 class="mb-0">Edit History</h5>
    </div>
    <div class="card-body">
      <form id="history-form" action="{{ route('admin.about.history.update', $history->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label class="form-label">Year</label>
          <input type="number" name="year" class="form-control border"
                 min="1900" max="{{ date('Y') }}"
                 value="{{ old('year', $history->year) }}" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Title (optional)</label>
          <input type="text" name="title" class="form-control border"
                 value="{{ old('title', $history->title) }}" placeholder="">
        </div>

        <div class="mb-3">
          <label class="form-label">Content</label>
          <div id="editor" style="min-height: 220px;"></div>
          <input type="hidden" name="content" id="content-input" value="{{ old('content', $history->content) }}">
        </div>

        <button type="submit" class="btn btn-success">Save Changes</button>
        <a href="{{ route('admin.historylist') }}" class="btn btn-secondary">Cancel</a>
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
  const quill = new Quill('#editor', { theme: 'snow' });
  const hidden = document.getElementById('content-input');

  if (hidden.value) {
    quill.clipboard.dangerouslyPasteHTML(hidden.value);
  }

  document.getElementById('history-form').addEventListener('submit', function (e) {
    const plain = quill.getText().trim();
    if (!plain) { e.preventDefault(); alert('Content boş ola bilməz.'); return; }
    hidden.value = quill.root.innerHTML.trim();
  });
</script>
@endpush
