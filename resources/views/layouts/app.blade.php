<!doctype html>
<html lang="fr" class="h-full bg-gray-50">
<head>
  <meta charset="utf-8">
  <title>{{ $title ?? config('app.name') }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full flex flex-col font-sans antialiased text-gray-900">
  <header class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16 items-center">
        <div class="flex-shrink-0 flex items-center">
          <a href="{{ route('home') }}" class="text-2xl font-bold text-indigo-600 tracking-tight hover:text-indigo-500 transition duration-150 ease-in-out">
            {{ config('app.name', 'Blog Solicode') }}
          </a>
        </div>
        @include('partials.nav')
      </div>
    </div>
  </header>

  <main class="flex-grow py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      @include('partials.flash')
      @yield('content')
    </div>
  </main>

  <footer class="bg-white border-t border-gray-200 mt-auto">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <p class="text-center text-sm text-gray-500">
        Laravel • {{ now()->format('d/m/Y H:i') }} • {{ config('app.timezone') }}
      </p>
    </div>
  </footer>
</body>
</html>
