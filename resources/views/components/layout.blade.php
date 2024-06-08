<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @vite('resources/css/app.css')
        <title>Inno Gas</title>
    </head>
    <body>
        <!-- <h1 class="text-black font-semibold ">Welcome to tailwind and laravel</h1>
     -->

        <main>
            
            {{ $slot }}
        </main>
    </body>
</html>
