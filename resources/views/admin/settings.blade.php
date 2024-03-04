@extends('sidebar')

@section('title', "SkillTrek - Settings")

@section('pagetitle', "Settings")

@section('body')
    <div class="mb-4 mt-3 mx-12">
        <a class="mx-96 p-2 grid grid-cols-3 gap-4">

            <div class="grid-cols-1">
                <p class="font-semibold mb-2 mr-24 text-center text-2xl">My Profile</p>
                <svg width="230" height="3" viewBox="0 0 230 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="230" height="3" rx="1.5" fill="black"/>
                </svg>
            </div>
        </a>
    </div>

    <div class="flex h-96 rounded-l-2xl mx-auto max-w-screen-xl border border-gray-100">
        <svg class="w-10"></svg>
        <div class="rounded-lg text-center min-h-96">
            <div class="flex flex-col justify-center items-center h-full">
                <svg width="150" height="150" viewBox="0 0 111 111" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M111 55.5C111 86.1518 86.1518 111 55.5 111C24.8482 111 0 86.1518 0 55.5C0 24.8482 24.8482 0 55.5 0C86.1518 0 111 24.8482 111 55.5Z" fill="#DFDCDF"/>
                    <a>
                        <svg width="40" height="40" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="17" cy="17" r="17" fill="black"/>
                            <path d="M12.6334 25.3333H21.3667C23.6667 25.3333 24.5834 23.925 24.6917 22.2083L25.1251 15.325C25.2417 13.525 23.8084 12 22.0001 12C21.4917 12 21.0251 11.7083 20.7917 11.2583L20.1917 10.05C19.8084 9.29163 18.8084 8.66663 17.9584 8.66663H16.0501C15.1917 8.66663 14.1917 9.29163 13.8084 10.05L13.2084 11.2583C12.9751 11.7083 12.5084 12 12.0001 12C10.1917 12 8.75839 13.525 8.87506 15.325L9.30839 22.2083C9.40839 23.925 10.3334 25.3333 12.6334 25.3333Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.75 13.6666H18.25" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17.0001 22C18.4917 22 19.7084 20.7834 19.7084 19.2917C19.7084 17.8 18.4917 16.5834 17.0001 16.5834C15.5084 16.5834 14.2917 17.8 14.2917 19.2917C14.2917 20.7834 15.5084 22 17.0001 22Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </svg>

                <p class="text-2xl text-center font-bold mt-4">Bastien Nicoud</p>
                <p class="text-2xl text-center text-gray-500 mt-2">Instructor</p>
            </div>
        </div>

        <svg>

        </svg>
        <form class=" mt-10 h-80">
                <div>
                    <label for="website-admin" class="block mb-2 text-xl font-bold text-gray-900 dark:text-black">Username</label>
                    <div class="flex">
                        <span class="inline-flex items-center px-3 text-sm text-white bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-white dark:text-gray-400 dark:border-gray-400">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.1466 9.96421C11.0549 9.95504 10.9449 9.95504 10.8441 9.96421C8.66243 9.89087 6.92993 8.10337 6.92993 5.90337C6.92993 3.65754 8.74493 1.83337 10.9999 1.83337C13.2458 1.83337 15.0699 3.65754 15.0699 5.90337C15.0608 8.10337 13.3283 9.89087 11.1466 9.96421Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6.56341 13.3466C4.34507 14.8316 4.34507 17.2516 6.56341 18.7275C9.08424 20.4141 13.2184 20.4141 15.7392 18.7275C17.9576 17.2425 17.9576 14.8225 15.7392 13.3466C13.2276 11.6691 9.09341 11.6691 6.56341 13.3466Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        </span>
                        <input readonly type="text" id="website-admin" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-96 text-sm p-2.5  dark:bg-white dark:border-black-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bonnie Green">
                    </div>
                </div>
                <div>
                    <label for="website-admin" class="block mb-2 text-xl font-bold text-gray-900 dark:text-black">Email</label>
                    <div class="flex">
                        <div></div>
                        <span class="inline-flex items-center px-3 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:border-gray-400">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.5833 18.7917H6.41659C3.66659 18.7917 1.83325 17.4167 1.83325 14.2084V7.79171C1.83325 4.58337 3.66659 3.20837 6.41659 3.20837H15.5833C18.3333 3.20837 20.1666 4.58337 20.1666 7.79171V14.2084C20.1666 17.4167 18.3333 18.7917 15.5833 18.7917Z" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.5834 8.25L12.7142 10.5417C11.7701 11.2933 10.2209 11.2933 9.27674 10.5417L6.41675 8.25" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </span>
                        <input readonly type="text" id="website-admin" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-96 text-sm p-2.5  dark:bg-gray-200 dark:border-black-600 dark:placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bonnie@Green.com">
                    </div>
                </div>
                <div>
                    <label for="website-admin" class="block mb-2 text-xl font-bold text-gray-900 dark:text-black">Password</label>
                    <div class="flex">
                        <span class="inline-flex items-center px-3 text-sm text-white bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-white dark:text-gray-400 dark:border-gray-400">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.5 9.16671V7.33337C5.5 4.29921 6.41667 1.83337 11 1.83337C15.5833 1.83337 16.5 4.29921 16.5 7.33337V9.16671" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10.9999 16.9583C12.2656 16.9583 13.2916 15.9323 13.2916 14.6667C13.2916 13.401 12.2656 12.375 10.9999 12.375C9.73427 12.375 8.70825 13.401 8.70825 14.6667C8.70825 15.9323 9.73427 16.9583 10.9999 16.9583Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.5833 20.1666H6.41659C2.74992 20.1666 1.83325 19.25 1.83325 15.5833V13.75C1.83325 10.0833 2.74992 9.16663 6.41659 9.16663H15.5833C19.2499 9.16663 20.1666 10.0833 20.1666 13.75V15.5833C20.1666 19.25 19.2499 20.1666 15.5833 20.1666Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </span>
                        <input readonly type="text" id="website-admin" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 block w-96 text-sm p-2.5  dark:bg-white dark:border-black-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="********">
                    </div>
                </div>
        </form>
    </div>
@endsection
