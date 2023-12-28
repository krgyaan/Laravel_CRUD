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
    <div class="h-screen bg-indigo-100 flex justify-center items-center">
        <div class="lg:w-2/5 md:w-1/2 w-2/3">
            <form class="bg-white p-7 rounded-lg shadow-lg min-w-full" method="POST" action="" autocomplete="off">
                <h1 class="text-center text-2xl mb-6 font-bold font-sans">Registration Form</h1>
                <div>
                    <label class="text-gray-800 font-semibold block mb-1 text-md" for="username">Username</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text"
                        name="username" id="username" placeholder="Your Username" />
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block mb-1 text-md" for="email">Email</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text"
                        name="email" id="email" placeholder="Your email" />
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block mb-1 text-md" for="password">Password</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text"
                        name="password" id="password" placeholder="Your Password" />
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block mb-1 text-md" for="confirm">Confirm
                        password</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text"
                        name="confirm" id="confirm" placeholder="Confirm Password" />
                </div>
                <button type="submit"
                    class="w-full mt-6 bg-indigo-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans">Register
                </button>
                <div class="text-center mt-2">
                    Already have an account?
                    <a href="/login" class="underline cursor-pointer">Login</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
