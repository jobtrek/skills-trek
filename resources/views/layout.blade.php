<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="skilltreklogo.svg">
    <title>@yield('title')</title>
</head>
<body>


<nav class="border-gray-200" style="background-color: black !important; dark:bg-gray-800; dark:border-gray-700;">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between p-10">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{asset('skilltreklogo.svg')}}" class="w-20" alt="Skilltrek Logo" />
            <span class="self-center text-5xl font-semibold whitespace-nowrap dark:text-white">SkillTrek</span>
        </a>
    </div>
</nav>


@yield('body')

</body>
</html>
