<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {{-- Tailwind və ya Bootstrap istifadə edə bilərsən; misalda minimal stil --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
  <div class="w-full max-w-md bg-white rounded-xl shadow p-6">
    @if(session('success'))
      <div class="mb-3 text-green-700 bg-green-100 p-2 rounded">{{ session('success') }}</div>
    @endif
    @if(session('error'))
      <div class="mb-3 text-red-700 bg-red-100 p-2 rounded">{{ session('error') }}</div>
    @endif
    @if ($errors->any())
      <div class="mb-3 text-red-700 bg-red-100 p-2 rounded">
        <ul class="list-disc list-inside">
          @foreach ($errors->all() as $e) <li>{{ $e }}</li> @endforeach
        </ul>
      </div>
    @endif

    <h1 class="text-xl font-bold mb-4 text-center">Admin Login</h1>

    <form action="{{ route('login.post') }}" method="POST" class="space-y-4">
      @csrf
      <div>
        <label class="block text-sm mb-1">Email</label>
        <input type="email" name="email" value="{{ old('email') }}" required
               class="w-full border rounded px-3 py-2 focus:outline-none focus:ring"
               >
      </div>

      <div>
        <label class="block text-sm mb-1">Password</label>
        <input type="password" name="password" required
               class="w-full border rounded px-3 py-2 focus:outline-none focus:ring"
              >
      </div>

      <label class="inline-flex items-center">
        <input type="checkbox" name="remember" class="mr-2"> Remember me
      </label>

      <button type="submit"
              class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">
        Login
      </button>
    </form>

    <form action="{{ route('logout') }}" method="POST" class="mt-4 text-center">
      @csrf
      <button class="text-sm text-gray-500 hover:underline">Logout (if logged)</button>
    </form>
  </div>
</body>
</html>
