@extends('sidebar')

@section('title', "SkillTrek - Settings")

@section('pagetitle', "Settings")

@section('body')
    <div class="mx-12">
        <svg class="mx-96" width="230" height="34" viewBox="0 0 230 34" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M72.2912 4.90909H75.1932L79.0795 14.3949H79.233L83.1193 4.90909H86.0213V18H83.7457V9.00639H83.6243L80.0064 17.9616H78.3061L74.6882 8.98722H74.5668V18H72.2912V4.90909ZM89.9396 21.6818C89.6243 21.6818 89.3324 21.6563 89.0639 21.6051C88.7997 21.5582 88.5888 21.5028 88.4311 21.4389L88.968 19.6364C89.3047 19.7344 89.6051 19.7813 89.8693 19.777C90.1335 19.7727 90.3658 19.6896 90.5661 19.5277C90.7706 19.37 90.9432 19.1058 91.0838 18.7351L91.282 18.2045L87.7216 8.18182H90.1761L92.4389 15.5966H92.5412L94.8104 8.18182H97.2713L93.3402 19.1889C93.157 19.7088 92.9141 20.1541 92.6115 20.5249C92.3089 20.8999 91.9382 21.1854 91.4993 21.3814C91.0646 21.5817 90.5447 21.6818 89.9396 21.6818ZM103.44 18V4.90909H108.349C109.354 4.90909 110.198 5.09659 110.88 5.47159C111.566 5.84659 112.084 6.36222 112.433 7.01847C112.787 7.67045 112.964 8.41193 112.964 9.2429C112.964 10.0824 112.787 10.8281 112.433 11.4801C112.08 12.1321 111.558 12.6456 110.867 13.0206C110.177 13.3913 109.327 13.5767 108.317 13.5767H105.063V11.6271H107.997C108.585 11.6271 109.067 11.5249 109.442 11.3203C109.817 11.1158 110.094 10.8345 110.273 10.4766C110.456 10.1186 110.548 9.70739 110.548 9.2429C110.548 8.77841 110.456 8.36932 110.273 8.01562C110.094 7.66193 109.815 7.38707 109.435 7.19105C109.06 6.99077 108.577 6.89062 107.984 6.89062H105.811V18H103.44ZM114.921 18V8.18182H117.165V9.81818H117.267C117.446 9.25142 117.753 8.81463 118.188 8.50781C118.627 8.19673 119.127 8.04119 119.69 8.04119C119.818 8.04119 119.96 8.04758 120.118 8.06037C120.28 8.06889 120.414 8.08381 120.521 8.10511V10.2337C120.423 10.1996 120.267 10.1697 120.054 10.1442C119.845 10.1143 119.643 10.0994 119.447 10.0994C119.025 10.0994 118.646 10.1911 118.309 10.3743C117.977 10.5533 117.715 10.8026 117.523 11.1222C117.331 11.4418 117.235 11.8104 117.235 12.228V18H114.921ZM125.936 18.1918C124.978 18.1918 124.147 17.9808 123.444 17.5589C122.74 17.1371 122.195 16.5469 121.807 15.7884C121.424 15.0298 121.232 14.1435 121.232 13.1293C121.232 12.1151 121.424 11.2266 121.807 10.4638C122.195 9.70099 122.74 9.10866 123.444 8.68679C124.147 8.26491 124.978 8.05398 125.936 8.05398C126.895 8.05398 127.726 8.26491 128.429 8.68679C129.132 9.10866 129.676 9.70099 130.059 10.4638C130.447 11.2266 130.641 12.1151 130.641 13.1293C130.641 14.1435 130.447 15.0298 130.059 15.7884C129.676 16.5469 129.132 17.1371 128.429 17.5589C127.726 17.9808 126.895 18.1918 125.936 18.1918ZM125.949 16.3381C126.469 16.3381 126.904 16.1953 127.253 15.9098C127.603 15.62 127.863 15.2322 128.033 14.7464C128.208 14.2607 128.295 13.7195 128.295 13.1229C128.295 12.522 128.208 11.9787 128.033 11.4929C127.863 11.0028 127.603 10.6129 127.253 10.3232C126.904 10.0334 126.469 9.88849 125.949 9.88849C125.417 9.88849 124.973 10.0334 124.62 10.3232C124.27 10.6129 124.008 11.0028 123.833 11.4929C123.663 11.9787 123.578 12.522 123.578 13.1229C123.578 13.7195 123.663 14.2607 123.833 14.7464C124.008 15.2322 124.27 15.62 124.62 15.9098C124.973 16.1953 125.417 16.3381 125.949 16.3381ZM137.578 8.18182V9.97159H131.774V8.18182H137.578ZM133.225 18V7.25497C133.225 6.59446 133.361 6.04474 133.634 5.60582C133.911 5.1669 134.282 4.83878 134.746 4.62145C135.211 4.40412 135.726 4.29545 136.293 4.29545C136.694 4.29545 137.05 4.32741 137.361 4.39134C137.672 4.45526 137.902 4.51278 138.051 4.56392L137.591 6.35369C137.493 6.32386 137.369 6.29403 137.22 6.2642C137.071 6.23011 136.905 6.21307 136.721 6.21307C136.291 6.21307 135.986 6.31747 135.807 6.52628C135.633 6.73082 135.545 7.02486 135.545 7.40838V18H133.225ZM139.39 18V8.18182H141.704V18H139.39ZM140.553 6.78835C140.187 6.78835 139.872 6.6669 139.607 6.42401C139.343 6.17685 139.211 5.88068 139.211 5.53551C139.211 5.18608 139.343 4.88991 139.607 4.64702C139.872 4.39986 140.187 4.27628 140.553 4.27628C140.924 4.27628 141.24 4.39986 141.499 4.64702C141.764 4.88991 141.896 5.18608 141.896 5.53551C141.896 5.88068 141.764 6.17685 141.499 6.42401C141.24 6.6669 140.924 6.78835 140.553 6.78835ZM146.397 4.90909V18H144.083V4.90909H146.397ZM153.123 18.1918C152.139 18.1918 151.289 17.9872 150.573 17.5781C149.861 17.1648 149.314 16.581 148.93 15.8267C148.547 15.0682 148.355 14.1754 148.355 13.1484C148.355 12.1385 148.547 11.2521 148.93 10.4893C149.318 9.7223 149.859 9.12571 150.554 8.69957C151.248 8.26918 152.064 8.05398 153.002 8.05398C153.607 8.05398 154.178 8.15199 154.715 8.34801C155.256 8.53977 155.733 8.83807 156.147 9.2429C156.564 9.64773 156.893 10.1634 157.131 10.7898C157.37 11.4119 157.489 12.1534 157.489 13.0142V13.7237H149.442V12.1641H155.271C155.267 11.7209 155.171 11.3267 154.983 10.9815C154.796 10.6321 154.534 10.3572 154.197 10.157C153.865 9.95668 153.477 9.85653 153.034 9.85653C152.561 9.85653 152.145 9.97159 151.787 10.2017C151.43 10.4276 151.15 10.7259 150.95 11.0966C150.754 11.4631 150.654 11.8658 150.65 12.3047V13.6662C150.65 14.2372 150.754 14.7273 150.963 15.1364C151.172 15.5412 151.464 15.8523 151.839 16.0696C152.214 16.2827 152.653 16.3892 153.155 16.3892C153.492 16.3892 153.797 16.3423 154.069 16.2486C154.342 16.1506 154.579 16.0078 154.779 15.8203C154.979 15.6328 155.131 15.4006 155.233 15.1236L157.393 15.3665C157.257 15.9375 156.997 16.4361 156.613 16.8622C156.234 17.2841 155.748 17.6122 155.156 17.8466C154.564 18.0767 153.886 18.1918 153.123 18.1918Z" fill="#232323"/>
            <rect y="31" width="230" height="3" rx="1.5" fill="black"/>
        </svg>

    </div>
    <div class="flex h-96 rounded-l-2xl border border-gray-100">
        <div class="mx-24 rounded-lg text-center min-h-96">
            <div class="flex flex-col justify-center items-center h-full">
                <label for="file-upload" class="cursor-pointer">
                <svg width="150" height="150" viewBox="0 0 111 111" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M111 55.5C111 86.1518 86.1518 111 55.5 111C24.8482 111 0 86.1518 0 55.5C0 24.8482 24.8482 0 55.5 0C86.1518 0 111 24.8482 111 55.5Z" fill="#DFDCDF"/>
                    <a href="">
                            <svg width="40" height="40" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="17" cy="17" r="17" fill="black"/>
                                <path d="M12.6334 25.3333H21.3667C23.6667 25.3333 24.5834 23.925 24.6917 22.2083L25.1251 15.325C25.2417 13.525 23.8084 12 22.0001 12C21.4917 12 21.0251 11.7083 20.7917 11.2583L20.1917 10.05C19.8084 9.29163 18.8084 8.66663 17.9584 8.66663H16.0501C15.1917 8.66663 14.1917 9.29163 13.8084 10.05L13.2084 11.2583C12.9751 11.7083 12.5084 12 12.0001 12C10.1917 12 8.75839 13.525 8.87506 15.325L9.30839 22.2083C9.40839 23.925 10.3334 25.3333 12.6334 25.3333Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15.75 13.6666H18.25" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M17.0001 22C18.4917 22 19.7084 20.7834 19.7084 19.2917C19.7084 17.8 18.4917 16.5834 17.0001 16.5834C15.5084 16.5834 14.2917 17.8 14.2917 19.2917C14.2917 20.7834 15.5084 22 17.0001 22Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                    </a>
                    <input id="file-upload" type="file" class="hidden" />

                </svg>

                </label>


                <p class="text-2xl text-center font-bold mt-4">Bastien Nicoud</p>
                <p class="text-2xl text-center text-gray-500 mt-2">Instructor</p>
            </div>
        </div>

        <form class="mt-16 ">
            <div class="mb-6 flex">
                <div >
                    <label for="name" class="block mb-2 text-xl font-bold text-gray-900 dark:text-black">Name</label>
                    <div class="h-12 flex">
                    <span class="inline-flex items-center px-3 text-sm text-white bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-white dark:text-gray-400 dark:border-gray-400">
                        <svg width="25" height="25" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.1466 9.96421C11.0549 9.95504 10.9449 9.95504 10.8441 9.96421C8.66243 9.89087 6.92993 8.10337 6.92993 5.90337C6.92993 3.65754 8.74493 1.83337 10.9999 1.83337C13.2458 1.83337 15.0699 3.65754 15.0699 5.90337C15.0608 8.10337 13.3283 9.89087 11.1466 9.96421Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6.56341 13.3466C4.34507 14.8316 4.34507 17.2516 6.56341 18.7275C9.08424 20.4141 13.2184 20.4141 15.7392 18.7275C17.9576 17.2425 17.9576 14.8225 15.7392 13.3466C13.2276 11.6691 9.09341 11.6691 6.56341 13.3466Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                        <input  type="text" id="password" class="w rounded-none rounded-e-lg bg-gray-50 border border-gray-400 text-black focus:ring-blue-500 focus:border-blue-500 block w-96 text-xl p-2.5 pr-10 dark:bg-white dark:border-black-600 dark:placeholder-black dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bonnie Green">
                    </div>
                </div>

                <div class="ml-6">
                    <label for="email" class="block mb-2 text-xl font-bold text-gray-900 dark:text-black">Email</label>
                    <div class="h-12 flex">
                    <span class="inline-flex items-center px-3 bg-gray-200 rounded-s-md dark:border-gray-400">
                        <svg width="25" height="25" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.5833 18.7917H6.41659C3.66659 18.7917 1.83325 17.4167 1.83325 14.2084V7.79171C1.83325 4.58337 3.66659 3.20837 6.41659 3.20837H15.5833C18.3333 3.20837 20.1666 4.58337 20.1666 7.79171V14.2084C20.1666 17.4167 18.3333 18.7917 15.5833 18.7917Z" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.5834 8.25L12.7142 10.5417C11.7701 11.2933 10.2209 11.2933 9.27674 10.5417L6.41675 8.25" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                        <input readonly type="text" id="email" class="rounded-none rounded-e-lg bg-gray-50 border-l-1 border border-l-gray-300 text-white focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-96 text-xl p-2.5  dark:bg-gray-200 dark:border-black-600 dark:placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bonnie@Green.com">
                    </div>
                </div>
            </div>



            <div>
                <label for="password" class="block mb-2 text-xl font-bold text-gray-900 dark:text-black">Password</label>
                <div class="flex">
                    <span class="inline-flex items-center px-3 text-sm text-white bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-white dark:text-gray-400 dark:border-gray-400">
                        <svg width="25" height="25" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.5 9.16671V7.33337C5.5 4.29921 6.41667 1.83337 11 1.83337C15.5833 1.83337 16.5 4.29921 16.5 7.33337V9.16671" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10.9999 16.9583C12.2656 16.9583 13.2916 15.9323 13.2916 14.6667C13.2916 13.401 12.2656 12.375 10.9999 12.375C9.73427 12.375 8.70825 13.401 8.70825 14.6667C8.70825 15.9323 9.73427 16.9583 10.9999 16.9583Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.5833 20.1666H6.41659C2.74992 20.1666 1.83325 19.25 1.83325 15.5833V13.75C1.83325 10.0833 2.74992 9.16663 6.41659 9.16663H15.5833C19.2499 9.16663 20.1666 10.0833 20.1666 13.75V15.5833C20.1666 19.25 19.2499 20.1666 15.5833 20.1666Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    <div class="relative">
                        <input readonly type="text" id="password" class="w rounded-none rounded-e-lg bg-gray-50 border border-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 block w-96 text-xl p-2.5 pr-10 dark:bg-white dark:border-black-600 dark:placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="********">
                        <a href="">
                            <svg class="absolute right-3 top-2.5 text-gray-400" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.5299 9.47004L9.46992 14.53C8.81992 13.88 8.41992 12.99 8.41992 12C8.41992 10.02 10.0199 8.42004 11.9999 8.42004C12.9899 8.42004 13.8799 8.82004 14.5299 9.47004Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M17.8201 5.76998C16.0701 4.44998 14.0701 3.72998 12.0001 3.72998C8.47009 3.72998 5.18009 5.80998 2.89009 9.40998C1.99009 10.82 1.99009 13.19 2.89009 14.6C3.68009 15.84 4.60009 16.91 5.60009 17.77" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.41992 19.5301C9.55992 20.0101 10.7699 20.2701 11.9999 20.2701C15.5299 20.2701 18.8199 18.1901 21.1099 14.5901C22.0099 13.1801 22.0099 10.8101 21.1099 9.40005C20.7799 8.88005 20.4199 8.39005 20.0499 7.93005" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15.5099 12.7C15.2499 14.11 14.0999 15.26 12.6899 15.52" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9.47 14.53L2 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M22 2L14.53 9.47" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>

                </div>
                <a href="" class=" font-medium text-lg underline mx-72">Change password</a>
            </div>
        </form>

    </div>
@endsection
