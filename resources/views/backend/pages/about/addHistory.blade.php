@extends('backend.layout.master')

@section('content')
<div class="container-fluid py-4">

    @if (session('success'))
        <div class="alert alert-success mb-3">{{ session('success') }}</div>
    @endif

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
            <h5 class="mb-0">Add New History</h5>
        </div>
        <div class="card-body">
            <form id="history-form" action="{{ route('admin.about.history.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Year</label>
                    <input type="number" name="year" class="form-control border"
                           min="1900" max="{{ date('Y') }}"
                           value="{{ old('year') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Title (optional)</label>
                    <input type="text" name="title" class="form-control border"
                           value="{{ old('title') }}" placeholder="Joined Seatrium (formerly Keppel)">
                </div>

 <div class="mb-3">
                    <label class="form-label"> Content</label>

                    {{-- Quill editor konteyneri --}}
                    <div id="editor" style="min-height: 220px;"></div>

                    {{-- Quill məzmununu formaya ötürmək üçün gizli input --}}
                    <input type="hidden" name="content" id="content-input" value="{{ old('content') }}">
                </div>

                <button type="submit" class="btn btn-success">Save History</button>
            </form>
        </div>
    </div>
</div>
@endsection


<script>
document.addEventListener('DOMContentLoaded', function () {
    // 1) Quill-i başlat
    const quill = new Quill('#editor', { theme: 'snow' });

    // 2) Gizli inputu tap
    const hidden = document.getElementById('content-input');

    // 3) old('content') varsa editora bərpa et
    if (hidden.value) {
        quill.clipboard.dangerouslyPasteHTML(hidden.value);
    }

    // 4) Submitdən əvvəl HTML-i gizli inputa yaz + boşluğu blokla
    const form = document.getElementById('history-form');
    form.addEventListener('submit', function (e) {
        const plain = quill.getText().trim();          // istifadəçinin real mətni
        if (!plain) {                                  // <p><br></p> kimi boş kontenti tutmaq
            e.preventDefault();
            alert('Content boş ola bilməz.');
            return;
        }
        hidden.value = quill.root.innerHTML.trim();    // HTML-i serverə göndər
    });
});
</script>

