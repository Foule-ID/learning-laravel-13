<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white min-h-screen">
  <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

  <div class="antialiased">
    <x-admin.navbar />
    <x-admin.sidebar />

    <main class="p-4 md:ml-64 min-h-screen pt-20">
    {{ $slot }}
</main>
  </div>
</body>
</html>
