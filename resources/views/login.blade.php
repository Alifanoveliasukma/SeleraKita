<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" href="">
</head>

<body class="container mx-auto flex items-center h-screen bg-orange-50">
    <div class="w-1/3">
        <img src="./assets/logo/logo_aprycot.png" alt="Logo" class="w-[185px] h-[62px]">
        <h1 class="font-bold text-4xl text-center mt-6">Sign In</h1>
        <p class="font-normal text-base text-gray-400 text-center mt-4">Sign in to stay connected.</p>
        <form class="flex flex-col">
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
                class="place-self-center text-white bg-orange-500 hover:bg-orange-600 focus:ring-2 focus:outline-none focus:ring-orange-300 text-base font-normal rounded-3xl w-48 mt-4 py-2 text-center">
                Sign in
            </button>
        </form>
        <p class="font-normal text-base text-center mt-4">or sign in with other accounts?</p>
        <div class="mt-4 flex flex-row w-full justify-center gap-6">
            <button type="button" class="w-6">
                <img src="./assets/logo/google.png" alt="Google Sign In">
            </button>
            <button type="button" class="w-6">
                <img src="./assets/logo/facebook.png" alt="Facebook Sign In">
            </button>
            <button type="button" class="w-6">
                <img src="./assets/logo/instagram.png" alt="Instagram Sign In">
            </button>
            <button type="button" class="w-6">
                <img src="./assets/logo/linkedin.png" alt="Linked In Sign In">
            </button>
        </div>
        <div class="flex flex-row justify-center gap-1">
            <p class="font-normal text-base text-center mt-4">Don’t have an account?</p>
            <button type="button" class="font-normal text-base text-orange-500 text-center mt-4">Click here to sign
                up.</button>
        </div>
    </div>
    <div class="w-2/3 h-screen flex items-center justify-end">
        <img src="./assets/illustration/food.png" alt="Food Illustration" class="w-[800px]">
    </div>
</body>

</html>
