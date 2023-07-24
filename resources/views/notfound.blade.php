<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Not Found</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" href="">
</head>

<body class="bg-fixed bg-left-top" style="background-image: url('./assets/bg-404.png')">
    <div class="relative w-screen flex justify-center">
        <img src="./assets/burger.png" alt="burger vector" class="h-[600px]">
        <div class="absolute top-28 flex flex-col items-center">
            <div class="flex gap-x-[500px]">
                <img src="./assets/vector_4.png" alt="4 vector" class="h-[340px]">
                <img src="./assets/vector_4.png" alt="4 vector" class="h-[340px]">
            </div>
            <h1 class="font-bold text-4xl mt-14">Page not Found</h1>
            <p class="font-bold text-2xl text-center text-gray-400 mt-6 w-[1000px]">Lorem ipsum dolor sit amet,
                consectetur
                adipiscing
                elit. Facilisis
                viverra laoreet lorem diam sed egestas tincidunt dolor.</p>
            {{-- <button><a href="http://">Back to home</a></button> --}}
            <a href="/"
                class="w-40 h-11 bg-orange-500 rounded-3xl mt-6 flex justify-center items-center text-white font-normal text-base">Back
                to
                home</a>
        </div>
    </div>
</body>

</html>
