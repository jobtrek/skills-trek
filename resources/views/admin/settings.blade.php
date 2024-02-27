@extends('sidebar')

@section('title', "SkillTrek - Settings")

@section('pagetitle', "Settings")

@section('body')
    <div class="p-4 sm:ml-96">
        <div class="mb-4">
            <a class="mx-8 p-2 grid grid-cols-3 gap-4">
                <img src="{{ asset('/icons/myprofile.svg') }}" class="w-64" alt=""/>
            </a>
        </div>

        <div class="mx-2 flex items-center mb-4">
            <a class="mx-24 p-2 grid grid-cols-3 gap-4">
                <img src="{{ asset('/icons/photoprofile.svg') }}" alt=""/>
            </a>
        </div>
        <p class="text-2xl font-bold ml-2">Firstname Lastname</p>


        <a class="flex flex-col items-center border border-gray-200 rounded-lg md:flex-row mx-8 md:max-w-6xl">
            <form class="max-w-sm mx-auto">
                <label for="website-admin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Username</label>
                <div class="flex">
                    <span class="inline-flex items-center px-3 text-sm text-white bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-white dark:text-gray-400 dark:border-gray-400">
                        <svg class="w-5 h-5 text-white dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                        </svg>
                    </span>
                    <input type="text" id="website-admin" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-white dark:border-black-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bonnie Green">
                </div>
            </form>
        </a>
    </div>
@endsection
