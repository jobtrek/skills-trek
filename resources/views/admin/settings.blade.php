@extends('sidebar')

@section('title', "SkillTrek - Settings")

@section('pagetitle', "Settings")

@section('body')
    <div class="mb-4 mx-12">
        <a class="mx-96 p-2 grid grid-cols-3 gap-4">
            <img src="{{ asset('/icons/myprofile.svg') }}" class="w-64" alt=""/>
        </a>
    </div>
    <div class="flex justify-items-center">
        <div class="rounded-lg mx-12 mt-10 text-center border min-h-96 border-gray-200">
            <div class="flex flex-col items-center justify-center h-full"> <!-- Center content vertically -->
                <a class="p-2 grid grid-cols-3 gap-4">
                    <img src="{{ asset('/icons/photoprofile.svg') }}" class="w-32"  alt=""/>
                </a>
                <p class="text-2xl font-bold mt-4">Firstname Lastname</p>
            </div>
        </div>
        <form class="mx-0 w-full mt-10 h-96 border border-gray-200">
                <div>
                    <label for="website-admin" class="block mb-2 text-xl font-bold text-gray-900 dark:text-black">Username</label>
                    <div class="flex">
                        <div></div>
                        <span class="inline-flex items-center px-3 text-sm text-white bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-white dark:text-gray-400 dark:border-gray-400">
                        <svg class="w-5 h-5 text-white dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                        </svg>
                    </span>
                        <input type="text" id="website-admin" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-white dark:border-black-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bonnie Green">
                    </div>
                </div>
                <div>
                    <label for="website-admin" class="block mb-2 text-xl font-bold text-gray-900 dark:text-black">Email</label>
                    <div class="flex">
                        <div></div>
                        <span class="inline-flex items-center px-3 text-sm text-white bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-white dark:text-gray-400 dark:border-gray-400">
                        <svg class="w-5 h-5 text-white dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                        </svg>
                    </span>
                        <input type="text" id="website-admin" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-white dark:border-black-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bonnie Green">
                    </div>
                </div>
                <div>
                    <label for="website-admin" class="block mb-2 text-xl font-bold text-gray-900 dark:text-black">Password</label>
                    <div class="flex">
                        <div></div>
                        <span class="inline-flex items-center px-3 text-sm text-white bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-white dark:text-gray-400 dark:border-gray-400">
                        <svg class="w-5 h-5 text-white dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                        </svg>
                    </span>
                        <input type="text" id="website-admin" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-white dark:border-black-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bonnie Green">
                    </div>
                </div>
            </form>
        </div>
@endsection
