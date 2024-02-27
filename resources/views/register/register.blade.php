<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    @vite('resources/css/app.css')
</head>

<body class="flex">

<div class="flex-1 flex flex-col justify-center">

    <nav class="flex p-10 mt-4 ml-4">
        <a href="/login" class="flex items-center">
            <img src="{{ asset('img/LogoSkillsTrek.svg') }}" class="w-20" alt="Skilltrek Logo" />
            <span class="ml-2 text-4xl font-bold">SkillTrek</span>
        </a>
    </nav>

    <div class="flex-1 flex items-center flex-col justify-center">
        <div class="sm:w-full sm:max-w-xl">
            <h2 class="mt-0 text-left text-3xl font-bold leading-9 tracking-tight text-gray-900">Sign up</h2>
        </div>

        <div class="mt-10 sm:w-full sm:max-w-xl">
            <form class="space-y-6" action="#" method="POST">
                <div class="relative h-16 w-full min-w-[400px] flex flex-col items-start">
                    <label class="block text-lg font-medium leading-6 text-gray-900">
                        Email
                    </label>
                    <label>
                        <input
                            class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-2 mt-2 font-sans text-lg font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-900 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                            placeholder="Enter your email address" />
                    </label>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-lg font-medium leading-6 text-gray-900">Username</label>

                    </div>
                    <div class="mt-4">
                        <label>
                            <input class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-2 font-sans text-lg font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-900 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                   placeholder="Enter your Username" />
                        </label>
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-lg font-medium leading-6 text-gray-900">Password</label>

                    </div>
                    <div class="mt-4">
                        <label>
                            <input class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-2 pb-2 font-sans text-lg font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-900 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                                   placeholder="Enter your Password" />
                        </label>
                    </div>
                </div>

                <div>
                    <button type="submit"
                            class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-lg px-8 py-4 me-2 mb-4 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700"
                            style="width: 100%;">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="flex-1">
    <img src="{{ asset('img/SkillsTrekLogin.png') }}" alt="SkillsTrek" class="w-full h-screen object-cover">
</div>

</body>

</html>
