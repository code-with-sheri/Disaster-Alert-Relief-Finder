<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>DisasterAid</title>

  <!-- Bootstrap CSS (CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  {{-- Load footer.css via Vite so it applies to footer only (and enable HMR client) --}}
  @vite(['resources/css/footer.css', 'resources/js/app.js'])
</head>
<body class="d-flex flex-column min-vh-100">  {{-- KEY: makes body a column flex container --}}

  <!-- Header -->
  @include('partials.header')

  <!-- Main content (will expand to push footer down) -->
  <main class="flex-grow-1">
    <div class="container mt-4">
      @yield('content')
    </div>
  </main>

  <!-- Footer -->
  @include('partials.footer')

  <!-- Bootstrap JS (CDN) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


