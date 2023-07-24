<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" href="">
</head>
<body>
    <header class="bg-slate-600 p-2">
        <nav class="container mx-auto flex items-center justify-between">
            <!-- Logo atau Nama Website -->
            <div class="relative">
                <div class="w-[294px] h-11 px-4 py-2 bg-white rounded-3xl border border-neutral-200 justify-start items-center gap-2 inline-flex">
                    <div class="w-3.5 h-3.5 relative">
                      <div class="w-[11.08px] h-[11.08px] left-[1.75px] top-[1.17px] absolute">
                        <div class="w-[10.62px] h-[10.37px] left-0 top-0 absolute rounded-full border border-neutral-400"></div>
                      </div>
                    </div>
                    <input type="text" class="w-60 text-neutral-400 text-base font-normal leading-7 tracking-tight outline-none" value="Search">
                  </div>
            </div>
            
            <!-- Kotak di dalam Navbar -->
            <div class="bg-slate-400 mr-8">
                <ul class="flex space-x-4 py-0">
                    <div class="flex items-center gap-1 p-1">
                    <li><div class="w-6 h-6 bg-gray-900"></div></li>
                    <li><div class="w-6 h-6 bg-gray-900"></div></li>
                    <li><div class="w-6 h-6 bg-gray-900"></div></li>
                    <li><div class="w-6 h-6 bg-gray-900"></div></li>
                    <li><div class="w-11 h-11 rounded-full bg-gray-900"></div></li>
                    <li><p class="text-base font-normal not-italic">Austin Robertson</p>
                        <p class="text-xs font-normal not-italic">Marketing Administrator</p></li>
                    </div>                                     
                </ul>
            </div>
        </nav>
    </header>
    <main class="max-w-7xl mx-auto grid md:grid-cols-3 gap-4 mt-8 mx-8"> <!-- Container -->

        <article class="md:col-span-2 bg-orange-100 p-4"> <!-- Content -->
        
            <p class="border border-slate-500 h-56">Content 2/3</p>
            <p class="border border-slate-500 h-[500px] mt-4">Content 2/3</p>
        
            <section class="grid md:grid-cols-2 gap-4 mt-4">
                

                <div class="border border-indigo-500 mt-10">
                Related content 1/2
                </div>
                
                <div class="border border-pink-700 mt-10">
                Related content 1/2
                </div>
            
            </section>
        
        </article> <!-- ./Conten -->
        
        <aside class="bg-green-200 p-4"> <!-- Aside -->
        
            <div class="border border-slate-600 h-56 bg-slate-800 ">Sidebar 1/3</div>
            <div class="border border-slate-600 h-[500px] bg-gray-200 mt-4 ">Sidebar 1/3</div>
        
        </aside> <!-- ./Aside -->
    
    </main> <!-- ./Container-->
</body>
</html>