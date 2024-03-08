<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="{{asset('skilltreklogo.svg')}}">
    <title>@yield('title')</title>
</head>
<body>


<nav class="border-gray-200" style="background-color: black !important; dark:bg-gray-800; dark:border-gray-700;">
    <div class="max-w-full flex flex-wrap items-center justify-between p-10">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{asset('skilltreklogo.svg')}}" class="w-20" alt="Skilltrek Logo" />
            <span class="self-center text-5xl font-semibold whitespace-nowrap dark:text-white">SkillTrek</span>
        </a>
        <h1 class="text-white text-4xl font-bold items-end">30:00</h1>
    </div>
</nav>


@yield('body')


<!--titre and description -->
<div class=" mt-8 ml-8 pl-8 pt-8 w-full">
    <form  method="post">
        @csrf

        <div class="mb-8">
            <h1 class="block text-gray-700 font-bold  text-4xl mb-2">Titre</h1>
        </div>

        <div class="mb-4">
            <h2 class="block text-gray-700 text-3xl font-bold">Description</h2>
            <label>
                <textarea id="description" name="description"  class="peer h-full w-full pt-5 font-sans text-lg font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-900 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"></textarea>
            </label>
        </div>

    </form>
</div>


<!-- question -->
<div>
    @include('template.templateformexample')
    @include('template.templateformexample')

</div>


<div class="flex justify-center mt-36 mb-28">
    <button class="flex items-center justify-center bg-black text-white py-2 px-4 h-16 w-72 rounded">
        <span class="mr-2 text-3xl font-bold">SUBMIT</span>
        <img src="{{ asset('arrow.svg') }}" alt="Arrow" class="w-10 h-10">
    </button>
</div>


</body>
</html>
