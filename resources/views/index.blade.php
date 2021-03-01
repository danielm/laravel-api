<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="bg-gray-100 text-gray-700">
        <div class="container mx-auto px-4 my-10">
            <h1 class="text-3xl font-bold mb-10">Posts API</h1> 


            <div class="grid grid-cols-3 mb-10">
                @foreach ($posts as $post)
                    <div class="bg-white hover:bg-blue-100 border border-gray-200 p-5 m-1">
                        <h2 class="font-bold text-lg mb-4">{{ $post->title }}</h2>
                        <p class="text-xs">{{ $post->excerpt }}</p>
                        <p class="text-xs text-right" title="{{ $post->created_at->format('Y-m-d h:iA') }}">{{ $post->created_at->diffForHumans() }}</p>

                    </div>
                @endforeach
            </div>

            {{ $posts->links() }}
        </div>

    </body>
</html>
