@extends('layout')

@section('title', "SkillTrek - Home")

@section('body')
    <section class="bg-[url('../../../public/skilltrekbckground.svg')] bg-cover h-screen bg-no-repeat bg-center">
        <div class="flex ">
            <a class="block max-w-lg mt-10 mx-10 p-10 border border-gray-200 shadow hover:bg-gray-100 dark:border-gray-700 dark:hover:bg-gray-700" style="background-color: black;">
                <h1 class="mb-7 text-5xl font-semibold tracking-tight text-white dark:text-white">A forms creator <br> website.</h1>
                <h3 class="text-3xl font-normal text-white dark:text-white">Fast and smart</h3>
            </a>
        </div>
    </section>

    <p class="text-center mt-10">SKILLTREK</p>

    <h2 class="text-center mt-5 text-3xl">Only admins can login</h2>

    <div class="flex justify-center items-center mb-10 mt-10">
        <a href="/login" class="bg-black hover:bg-gray-900 text-white font-bold py-4 px-16 rounded inline-flex items-center">
            <span class="mr-2 text-2xl font-extrabold">LOGIN</span>
            <svg class="w-8 h-8 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>

    <div style="bottom: 0; left: 0; width: 100%;">
        <div class="h-28" style="background-color: #D9D9D9">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between p-10">
            </div>
        </div>
    </div>

@endsection
