<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Welcome</title>
</head>

<body>
    <div class="min-h-screen min-w-full bg-gray-100 flex flex-col justify-center p-10">
        <div class="relative w-full max-w-full lg:max-w-5xl xl:max-w-screen-2xl mx-auto">
            <div
                class="absolute inset-0 -mr-3.5 bg-gradient-to-r from-red-100 to-purple-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:rotate-3 sm:rounded-3xl">
            </div>
            <div class="relative bg-white shadow-lg sm:rounded-3xl">
                <div class="flex items-center justify-start pt-6 pl-6">
                    <span class="w-3 h-3 bg-red-400 rounded-full mr-2"></span>
                    <span class="w-3 h-3 bg-yellow-400 rounded-full mr-2"></span>
                    <span class="w-3 h-3 bg-green-400 rounded-full mr-2"></span>
                </div>

                <div class="px-20 py-6">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center justify-center">
                            <div class="flex items-center justify-center text-3xl font-bold text-true-gray-800">
                                <svg class="w-10 h-10 mr-1 text-blue-700" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z">
                                    </path>
                                </svg>
                                GY
                            </div>

                        </div>
                        <div class="hidden md:flex items-center justify-center">
                            <a href="/login"
                                class="mr-5 text-lg font-medium text-true-gray-800 hover:text-cool-gray-700 transition duration-150 ease-in-out">Login</a>
                            <a href="/register"
                                class="px-6 py-3 rounded-3xl font-medium bg-gradient-to-b from-gray-900 to-black text-white outline-none focus:outline-none hover:shadow-md hover:from-true-gray-900 transition duration-200 ease-in-out">
                                Sign Up
                            </a>
                        </div>
                    </div>
                    <div class="lg:2/6 xl:w-2/4 mt-20 lg:mt-40 lg:ml-16 text-left">
                        <div class="text-5xl font-semibold text-gray-900 leading-none">
                            Laravel CRUD Project
                        </div>
                        <div class="mt-6 mb-6 text-xl font-light text-true-gray-500 antialiased">
                            A Laravel + Tailwind CSS + Vite
                        </div>
                        <a href="/register"
                            class=" px-8 py-4 rounded-full font-normal tracking-wide bg-gradient-to-b from-blue-600 to-blue-700 text-white outline-none focus:outline-none hover:shadow-lg hover:from-blue-700 transition duration-200 ease-in-out">
                            Get Started
                        </a>
                    </div>
                    <div class="mt-12 lg:mt-32 lg:ml-20 text-left">
                        &copy; 2023 GY. All rights reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
