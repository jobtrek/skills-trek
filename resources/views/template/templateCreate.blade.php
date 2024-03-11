
@extends('layout')

@section('title', "SkillTrek - templateCreate")
@section('body')

<body class="bg-gray-200">

    <form action="">
        <div class="flex flex-col">
            <div class="ml-64 mr-64">
                @include('template.templateTitle')
                @include('template.templateQuestion')
            </div>
        </div>
    </form>


    <div class="flex justify-center mt-28 mb-28">
        <button class="flex items-center justify-center bg-gray-300 text-white py-2 px-4 h-16 mx-80 w-full rounded">
            <img src="plus.svg" alt="Arrow" class="w-8 h-8">
        </button>
    </div>

    <div class="flex justify-center mt-36 mb-28">
        <button class="flex items-center justify-center bg-black text-white py-2 px-4 h-16 w-72 rounded">
            <span class="mr-2 text-3xl font-bold">SUBMIT</span>
            <img src="arrow.svg" alt="Arrow" class="w-10 h-10">
        </button>
    </div>

</body>

@endsection



