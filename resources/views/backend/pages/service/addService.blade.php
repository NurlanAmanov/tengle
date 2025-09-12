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

    <form id="services-form" action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- WHAT WE DO --}}
        <h3 class="mt-3">What We Do</h3>
        <div id="whatWeDoList">
            {{-- İlk item --}}
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
                    {{-- Quill editor konteyneri (unikal ID) --}}
                    <div id="what-editor-0" style="min-height:220px;"></div>
                    {{-- Məzmun üçün gizli input (unikal ID) --}}
                    <input type="hidden" class="form-control border" name="what_we_do[0][description]" id="what-content-0">
                </div>

                <button type="button" class="btn btn-outline-danger btn-sm remove-what d-none">Remove</button>
            </div>
        </div>
        <button type="button" class="btn btn-outline-primary btn-sm mb-4" id="addWhat">+ Add another (What We Do)</button>

        <hr>

        {{-- OUR PROCESS --}}
        <h3 class="mt-3">Our Process: From Start to Finish</h3>
        <div id="processList">
            {{-- İlk item --}}
            <div class="card p-3 mb-3 proc-item">
                <div class="mb-2">
                    <label>Title</label>
                    <input type="text" class="form-control border" name="our_process[0][title]" required>
                </div>

                <div class="mb-2">
                    <label>Image</label>
                    <input type="file" class="form-control border" name="our_process[0][image]" accept="image/*" required>
                </div>

                <div class="mb-2">
                    <label>Description</label>
                    <div id="proc-editor-0" style="min-height:220px;"></div>
                    <input type="hidden" class="form-control border" name="our_process[0][description]" id="proc-content-0">
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
    {{-- Quill CDN (yalnız bu səhifədə yükləmək üçün buraya qoyuruq) --}}
    <link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>

    <script>
    (function () {
        // Bütün Quill instanslarını saxlayırıq: { hiddenInputId: QuillInstance }
        const editors = {};

        // Toolbar konfiqurasiyası
        const toolbar = [
            ['bold','italic','underline','strike'],
            [{'header':[1,2,3,false]}],
            [{'list':'ordered'},{'list':'bullet'}],
            [{'align':[]}],
            ['link','image'],
            ['clean']
        ];

        // Quill init helper
        function initQuill(divId, hiddenId, oldHtml) {
            const quill = new Quill('#' + divId, {
                theme: 'snow',
                modules: { toolbar }
            });
            if (oldHtml) {
                quill.root.innerHTML = oldHtml;
            }
            editors[hiddenId] = quill;
        }

        // İlk iki editoru init et
        initQuill('what-editor-0', 'what-content-0', document.getElementById('what-content-0')?.value || '');
        initQuill('proc-editor-0', 'proc-content-0', document.getElementById('proc-content-0')?.value || '');

        // WHAT WE DO repeater
        let wIndex = document.querySelectorAll('#whatWeDoList .what-item').length;
        document.getElementById('addWhat').addEventListener('click', function(){
            const divId = `what-editor-${wIndex}`;
            const hidId = `what-content-${wIndex}`;

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
                    <small class="text-muted">Ikon artıq şəkil kimi yüklənir.</small>
                </div>
                <div class="mb-2">
                    <label>Description</label>
                    <div id="${divId}" style="min-height:220px;"></div>
                    <input type="hidden" class="form-control border" name="what_we_do[${wIndex}][description]" id="${hidId}">
                </div>
                <button type="button" class="btn btn-outline-danger btn-sm remove-what">Remove</button>
            `;
            document.getElementById('whatWeDoList').appendChild(box);
            initQuill(divId, hidId, '');
            wIndex++;
        });

        document.getElementById('whatWeDoList').addEventListener('click', function(e){
            if(e.target.classList.contains('remove-what')){
                const card = e.target.closest('.what-item');
                // editors xəritəsindən sil (əgər varsa)
                const hidden = card.querySelector('input[type="hidden"]');
                if (hidden && editors[hidden.id]) {
                    delete editors[hidden.id];
                }
                card.remove();
            }
        });

        // PROCESS repeater
        let pIndex = document.querySelectorAll('#processList .proc-item').length;
        document.getElementById('addProc').addEventListener('click', function(){
            const divId = `proc-editor-${pIndex}`;
            const hidId = `proc-content-${pIndex}`;

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
                    <div id="${divId}" style="min-height:220px;"></div>
                    <input type="hidden" class="form-control border" name="our_process[${pIndex}][description]" id="${hidId}">
                </div>
                <button type="button" class="btn btn-outline-danger btn-sm remove-proc">Remove</button>
            `;
            document.getElementById('processList').appendChild(box);
            initQuill(divId, hidId, '');
            pIndex++;
        });

        document.getElementById('processList').addEventListener('click', function(e){
            if(e.target.classList.contains('remove-proc')){
                const card = e.target.closest('.proc-item');
                const hidden = card.querySelector('input[type="hidden"]');
                if (hidden && editors[hidden.id]) {
                    delete editors[hidden.id];
                }
                card.remove();
            }
        });

        // FORM SUBMIT: bütün Quill məzmunlarını hidden inputlara yaz
        document.getElementById('services-form').addEventListener('submit', function(){
            Object.keys(editors).forEach(function(hiddenId){
                const quill = editors[hiddenId];
                document.getElementById(hiddenId).value = quill.root.innerHTML;
            });
        });
    })();
    </script>
@endpush
