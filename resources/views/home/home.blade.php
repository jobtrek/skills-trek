@extends('layout')

@section('title', "SkillTrek - Home")

@section('body')
    <section class="bg-[url('../../../public/skilltrekbckground.svg')] grid min-h-96 bg-cover bg-no-repeat bg-center bg-scale-150">
        <div class="flex items-center h-full">
            <a class="block max-w-lg mx-10 p-10 border border-gray-200 shadow hover:bg-gray-100 dark:border-gray-700 dark:hover:bg-gray-700" style="background-color: black;">
                <h1 class="mb-7 text-5xl font-semibold tracking-tight text-white dark:text-white">A forms creator <br> website.</h1>
                <h3 class="text-3xl font-normal text-white dark:text-white">Fast and smart</h3>
            </a>
        </div>
    </section>

@endsection
