<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  {{-- google font --}}
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Open+Sans:wght@300&family=Source+Serif+Pro:wght@300;400&display=swap" rel="stylesheet">

  <!-- fontawesome -->
  <link rel="stylesheet" href="fontawesome/css/all.css">

  <!-- Animate on Scroll (AOS) -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  
  <title>@yield("title")</title>
  @vite('resources/css/app.css')
</head>
<body>
    <div class="h-full">
        @yield("content")
    </div>

    <!-- AOS js -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        once: true,
      });
    </script>
</body>
</html>