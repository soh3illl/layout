<!doctype html>
<html lang="fa"
      dir="rtl"
      xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible"
              content="ie=edge">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>fitno</title>

    </head>
    <body>
        <div class="container mx-auto">
            <section>
                <x-nav />
                <x-hero />
            </section>
        </div>
        <section class="bg-indigo-100 py-48 -my-48">
            <div class="container mx-auto">
                <x-search-box />
                {{-- gyms --}}
                <div class="flex justify-between my-32">
                    <h2 class="text-4xl font-bold">
                        مجموعه های
                        <span class="text-indigo-600">ورزشی</span>
                    </h2>
                    <a href="#"
                       class="text-xl text-neutral-600">مشاهده همه</a>
                </div>
                <div class="flex flex-col">
                    <div>
                        <img src="/images/gym.png"
                             alt="gym image">
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>