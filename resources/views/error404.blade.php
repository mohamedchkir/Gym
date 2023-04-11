<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error 404</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <div class="min-h-screen flex items-center justify-center bg-primary">
        <div class="max-w-full lg:w-7/12 text-white">
          <div class="flex flex-col lg:flex-row items-center">
            <div class="lg:w-1/2 text-right pr-4">
              <h1 class="text-8xl mb-0">404</h1>
            </div>
            <div class="lg:w-1/2 pl-4">
              <h2 class="text-4xl">SORRY!</h2>
              <h3 class="text-2xl font-light">The page you’re looking for was not found.</h3>
            </div>
          </div>
          <div class="mt-5">
            <div class="text-center">
              <a href="{../../index.html}" class="text-white font-medium">Back to home</a>
            </div>
          </div>
          <div class="mt-5">
            <div class="text-center">
              <p class="text-white font-medium">Copyright &copy; 2021  All rights reserved.</p>
            </div>
          </div>
        </div>
      </div>
</body>
</html>
