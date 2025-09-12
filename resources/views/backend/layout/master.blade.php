<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  {{-- <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('admin/img/favicon.png') }}"> --}}
<title>
  {{ ucfirst(Request::segment(2) ?? 'Admin Panel') }} - Material Dashboard
</title>


  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
  <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded" />
  <link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
  <link id="pagestyle" href="{{ asset('css/material-dashboard.css?v=3.2.0') }}" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
  @include('backend.inc.header')

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    @include('backend.inc.navbar')
    @yield('content')
    @include('backend.inc.footer')
  </main>

  <script src="{{ asset('js/core/popper.min.js') }}"></script>
  <script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script src="{{ asset('js/plugins/chartjs.min.js') }}"></script>

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = { damping: '0.5' };
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="{{ asset('js/material-dashboard.min.js?v=3.2.0') }}"></script>
  
  <!-- CKEditor CDN -->
  <script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>
    

    <script>
      // Quill-i init et
      const quill = new Quill('#editor', {
        theme: 'snow',
        modules: {
          toolbar: [
            ['bold', 'italic', 'underline', 'strike'],
            [{ 'header': [1, 2, 3, false] }],
            [{ 'list': 'ordered' }, { 'list': 'bullet' }],
            [{ 'align': [] }],
            ['link', 'image'],
            ['clean']
          ]
        }
      });

      // Əvvəlki old('content') varsa, editor-a yüklə
      const oldContent = document.getElementById('content-input').value;
      if (oldContent) {
        quill.root.innerHTML = oldContent;
      }

      // Submit zamanı Quill HTML-ni gizli inputa yaz
      document.getElementById('aboutus-form').addEventListener('submit', function () {
        document.getElementById('content-input').value = quill.root.innerHTML;
      });
    </script>
  @stack('scripts')
</body>

</html>
