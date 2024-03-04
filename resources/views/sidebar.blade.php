<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="{{ asset('skilltreklogo.svg') }}">
    <title>@yield('title')</title>
</head>
<body>
<aside id="logo-sidebar" class="w-96 min-h-screen border-r float-left" aria-label="Sidebar">
    <nav>
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between p-10">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('skilltreklogo.svg') }}" class="w-20" alt="Skilltrek Logo" />
                <span class=" self-center text-5xl font-semibold whitespace-nowrap dark:text-black">SkillTrek</span>
            </a>
        </div>
    </nav>
    <div class="h-full px-10 pb-4 overflow-y-auto bg-white">
        <ul class="space-y-4 font-medium">
            <li>
                <a href="/admin" class="flex items-center p-2 text-gray-500 rounded-lg dark:hover:bg-black dark:hover:text-white group">
                    <svg class="w-8 h-8 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                        <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                    </svg>
                    <span class="text-2xl ms-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/admin/forms" class="flex items-center p-2 text-gray-500 rounded-lg dark:hover:bg-black dark:hover:text-white group">
                    <svg class="flex-shrink-0 w-8 h-8 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
                    </svg>
                    <span class="flex-1 ms-3 text-2xl whitespace-nowrap">Forms</span>
                </a>
            </li>
            <li>
                <a href="/admin/groups" class="flex items-center p-2 text-gray-500 rounded-lg dark:hover:bg-black dark:hover:text-white group">
                    <svg class="flex-shrink-0 w-8 h-8 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                    </svg>
                    <span class="flex-1 text-2xl ms-3 whitespace-nowrap">Groups</span>
                </a>
            </li>
            <li>
                <a href="/" class="fixed bottom-14 flex items-center p-2 text-gray-500 rounded-lg dark:hover:bg-gray-500 dark:hover:text-white group">
                    <svg class="flex-shrink-0 w-8 h-8 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h11m0 0-4-4m4 4-4 4m-5 3H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h3"/>
                    </svg>
                    <span class="flex-1 text-2xl ms-3 whitespace-nowrap">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

<div class="p-4 sm:ml-96">
        <div class="mx-10 mt-10 grid grid-cols-3 gap-4 mb-4">
                    <span class=" self-center text-5xl font-semibold whitespace-nowrap dark:text-black">@yield('pagetitle')</span>
            <div>
                <a href="/admin/settings" class="text-gray-500 rounded-lg dark:hover:bg-black dark:hover:text-white group">
                    <img src="{{ asset('/icons/gear.svg') }}" class="w-15 fixed right-20"/>

                </a>
            </div>
        </div>
</div>

<div>

</div>

@yield('body')

</body>
</html>
