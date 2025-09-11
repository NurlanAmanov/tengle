@extends('backend.layout.master')

@section('content')
<div class="container">
    <h1>Add Services (Both Sections)</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Form xətaları:</strong>
            <ul class="mb-0">
                @foreach ($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- WHAT WE DO --}}
        <h3 class="mt-3">What We Do</h3>
        <div id="whatWeDoList">
            <div class="card p-3 mb-3 what-item">
                <div class="mb-2">
                    <label>Title</label>
                    <input type="text" class="form-control border" name="what_we_do[0][title]" required>
                </div>
                <div class="mb-2">
                    <label>Icon Image</label>
                    <input type="file" class="form-control border" name="what_we_do[0][icon]" accept="image/*" required>
                    <small class="text-muted">Ikon artıq şəkil kimi yüklənir.</small>
                </div>
                <div class="mb-2">
                    <label>Description</label>
                    <textarea class="form-control border" name="what_we_do[0][description]" rows="3" required></textarea>
                </div>
               
                <button type="button" class="btn btn-outline-danger btn-sm remove-what d-none">Remove</button>
            </div>
        </div>
        <button type="button" class="btn btn-outline-primary btn-sm mb-4" id="addWhat">+ Add another (What We Do)</button>

        <hr>

        {{-- OUR PROCESS --}}
        <h3 class="mt-3">Our Process: From Start to Finish</h3>
        <div id="processList">
            <div class="card p-3 mb-3 proc-item">
                <div class="mb-2">
                    <label>Title</label>
                    <input type="text" class="form-control border " name="our_process[0][title]" required>
                </div>
                <div class="mb-2">
                    <label>Image</label>
                    <input type="file" class="form-control border" name="our_process[0][image]" accept="image/*" required>
                </div>
                <div class="mb-2">
                    <label>Description</label>
                    <textarea class="form-control border" name="our_process[0][description]" rows="3" required></textarea>
                </div>
               
                <button type="button" class="btn btn-outline-danger btn-sm remove-proc d-none">Remove</button>
            </div>
        </div>
        <button type="button" class="btn btn-outline-primary btn-sm mb-4" id="addProc">+ Add another (Process)</button>

        <div>
            <button type="submit" class="btn btn-success">Save All</button>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script>
(function () {
    // WHAT WE DO repeater
    let wIndex = document.querySelectorAll('#whatWeDoList .what-item').length;
    document.getElementById('addWhat').addEventListener('click', function(){
        const box = document.createElement('div');
        box.className = 'card p-3 mb-3 what-item';
        box.innerHTML = `
            <div class="mb-2">
                <label>Title</label>
                <input type="text" class="form-control border" name="what_we_do[${wIndex}][title]" required>
            </div>
            <div class="mb-2">
                <label>Icon Image</label>
                <input type="file" class="form-control border" name="what_we_do[${wIndex}][icon]" accept="image/*" required>
            </div>
            <div class="mb-2">
                <label>Description</label>
                <textarea class="form-control border" name="what_we_do[${wIndex}][description]" rows="3" required></textarea>
            </div>
            <button type="button" class="btn btn-outline-danger btn-sm remove-what">Remove</button>
        `;
        document.getElementById('whatWeDoList').appendChild(box);
        wIndex++;
    });
    document.getElementById('whatWeDoList').addEventListener('click', function(e){
        if(e.target.classList.contains('remove-what')){
            e.target.closest('.what-item').remove();
        }
    });

    // PROCESS repeater
    let pIndex = document.querySelectorAll('#processList .proc-item').length;
    document.getElementById('addProc').addEventListener('click', function(){
        const box = document.createElement('div');
        box.className = 'card p-3 mb-3 proc-item';
        box.innerHTML = `
            <div class="mb-2">
                <label>Title</label>
                <input type="text" class="form-control border" name="our_process[${pIndex}][title]" required>
            </div>
            <div class="mb-2">
                <label>Image</label>
                <input type="file" class="form-control border" name="our_process[${pIndex}][image]" accept="image/*" required>
            </div>
            <div class="mb-2">
                <label>Description</label>
                <textarea class="form-control border" name="our_process[${pIndex}][description]" rows="3" required></textarea>
            </div>
            <button type="button" class="btn btn-outline-danger btn-sm remove-proc">Remove</button>
        `;
        document.getElementById('processList').appendChild(box);
        pIndex++;
    });
    document.getElementById('processList').addEventListener('click', function(e){
        if(e.target.classList.contains('remove-proc')){
            e.target.closest('.proc-item').remove();
        }
    });
})();
</script>
@endpush
