<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" href="">
</head>

<body>
    <div class="w-[460px] bg-red-200">
        <img src="./assets/logo/logo_aprycot.png" alt="4 vector" class="w-[185px] h-[62px]">
        <h1 class="font-bold text-4xl text-center mt-6">Sign In</h1>
        <p class="font-normal text-base text-gray-400 text-center mt-4">Sign in to stay connected.</p>

        <form>
            <div class="mt-4">
                <label for="email" class="block mb-2 text-base font-normal text-gray-400">Email</label>
                <input type="email" id="email"
                    class="border border-orange-500 text-gray-900 text-sm rounded-3xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="name@flowbite.com" required>
            </div>
            <div class="mt-4">
                <label for="password" class="block mb-2 text-base font-normal text-gray-400">Password</label>
                <input type="password" id="password"
                    class="border border-orange-500 text-gray-900 text-sm rounded-3xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    required>
            </div>
            <div class="flex flex-row items-center justify-between mt-4">
                <div class="flex flex-row items-center">
                    <div class="flex items-center h-5">
                        <input id="remember" type="checkbox" value=""
                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300"
                            required>
                    </div>
                    <label for="remember" class="ml-2 text-base font-normal text-gray-400">
                        Remember me?
                    </label>
                </div>
                <a href="" class="text-base font-normal text-orange-500">Forgot Password</a>
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
        </form>

    </div>
</body>

</html>
