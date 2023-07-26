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
    <header class=" bg-navbar bg-white p-2">
        <nav class="container mx-auto flex items-center justify-between">
            <!-- Logo atau Nama Website -->
            <div class="bg-white ml-[91px]">
                <ul class="flex space-x-7 gap-5 py-0">
                    <div class="flex items-center gap-1 p-1">
                    <li><div class="w-[294px] h-11 px-4 py-2 bg-white rounded-3xl  border-neutral-200 justify-start border-2 items-center gap-2 inline-flex">
                        <div class="w-3.5 h-3.5 relative">
                          <div class="w-[11.08px] h-[11.08px] left-[1.75px] top-[1.17px] absolute">
                            <div class="w-[10.62px] h-[10.37px] left-0 top-0 absolute rounded-full border border-neutral-400"></div>
                          </div>
                        </div>
                        <input type="text" class="w-60 text-neutral-400 text-base font-normal leading-7 tracking-tight outline-none" value="Search">
                      </div></li>
                    </div>                                     
                </ul>
            </div>
            
            <!-- Kotak di dalam Navbar -->
            <div class="bg-white mr-20">
                <ul class="flex space-x-4 py-0">
                    <div class="flex items-center gap-1 p-1">
                    <li><div class="max-w-sm rounded overflow-hidden shadow-lg mr-4"><img class="w-full h-12 object-cover rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cGVvcGxlfGVufDB8fDB8fHww&auto=format&fit=crop&w=600&q=60" alt="Deskripsi gambar"></div></li>
                    <li><p class="text-base font-normal not-italic">Austin Robertson</p>
                        <p class="text-xs font-normal not-italic">Marketing Administrator</p></li>
                    </div>                                     
                </ul>
            </div>
        </nav>
    </header>
    <div class="flex bg-[#F9F5F6]">
    
        <main class="bg-[#F9F5F6] max-w-7xl mx-auto grid md:grid-cols-3 bg-basic gap-4 mt-8  h-[1340px]"> <!-- Container -->
        

            <article class="md:col-span-2 bg-[#F9F5F6] p-4"> <!-- Content -->
                  
                <div class="relative border rounded-2xl border-slate-500 h-56 bg-stone-300 "><img class="  w-full h-56 rounded-2xl object-cover" src="{{ asset('assets/images/banner.jpg') }}" alt="Deskripsi gambar">
                <div class="absolute rounded-2xl top-0 left-0 w-full h-56 bg-black opacity-30">
                </div>
                <div class="absolute top-0 left-5 right-0 bottom-0 flex justify-start items-center h-full text-white text-left">
                    <div class="px-4 mb-12">
                      <div class="font-bold text-3xl text-white mb-2">Hello, Alifa Novelia Sukma</div>
                      <p class="text-gray-200 text-base">Get FREE information for every food </p>
                    </div>
                  </div>
                {{-- Menu category --}}
                <div class=" bg-[#F9F5F6] mt-10">
                    <section class="grid md:grid-cols-1 gap-4 mt-4">
                        <div class="h-[52px] bg-[#F9F5F6]-200 flex  items-center">
                            <h3 class="text-4xl text-orange-600 text-center">KATEGORI</h3>
                        </div>
    
                        <div class="h-[237px] mt-10 bg-[#F9F5F6]-200 flex space-x-10">

                            <div class="w-[206px] h-[237px] rounded-2xl bg-white ">
                                <div class="w-[206px] h-[130px] rounded-xl bg-white mt-0 flex justify-center  ">
                                    <div class="w-[185px] h-[120px] rounded-xl bg-slate-400 mt-2  ">
                                        <img class="object-cover rounded-xl" src="https://images.unsplash.com/photo-1588315029754-2dd089d39a1a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHBpenphfGVufDB8fDB8fHww&auto=format&fit=crop&w=600&q=60" alt="Deskripsi gambar">
                                    </div>
                                </div>
                                <ul class="flex py-0 bg-white ml-2">
                                    <div class="flex items-center gap-1 p-1 space-x-10">
                                    <li><p class="text-orange-500 text-xs font-semibold">22 min</p></li>
                                    <li><p class="text-orange-500 text-xs font-semibold">4.9</p></li>
                                    <li><p class="text-orange-500 text-xs font-semibold">0.8 km</p></li>

                                </ul>
                                <ul class="flex space-x-4 py-0 bg-white">
                                    <div class="flex items-center gap-1 pl-3">
                                    <li><p class="text-black text-lg font-bold">Pizza Mozarella</p></div></li>                           
                                </ul>
                                <ul class="flex py-0 bg-white mt-2 ">
                                    <div class="flex items-center gap-1 p-1 space-x-8 pl-3">
                                    <li><p class="text-gray-500 text-xs font-normal">Price start from:</p></li>
                                    <li><p class="text-orange-500 text-LG font-bold">IDR 32.000</p></li>                           
                                </ul>
                            </div> 
                            <div class="w-[206px] h-[237px] rounded-2xl bg-white ">
                                <div class="w-[206px] h-[130px] rounded-xl bg-white mt-0 flex justify-center  ">
                                    <div class="w-[185px] h-[120px] rounded-xl bg-slate-400 mt-2 overflow-hidden ">
                                        <img class="object-cover rounded-xl" src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGZvb2R8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=600&q=60" alt="Deskripsi gambar">
                                    </div>
                                </div>
                                <ul class="flex py-0 bg-white ml-2">
                                    <div class="flex items-center gap-1 p-1 space-x-10">
                                    <li><p class="text-orange-500 text-xs font-semibold">22 min</p></li>
                                    <li><p class="text-orange-500 text-xs font-semibold">4.9</p></li>
                                    <li><p class="text-orange-500 text-xs font-semibold">0.8 km</p></li>

                                </ul>
                                <ul class="flex space-x-4 py-0 bg-white">
                                    <div class="flex items-center gap-1 pl-3">
                                    <li><p class="text-black text-lg font-bold">Pizza Mozarella</p></div></li>                           
                                </ul>
                                <ul class="flex py-0 bg-white mt-2 ">
                                    <div class="flex items-center gap-1 p-1 space-x-8 pl-3">
                                    <li><p class="text-gray-500 text-xs font-normal">Price start from:</p></li>
                                    <li><p class="text-orange-500 text-LG font-bold">IDR 32.000</p></li>                           
                                </ul>
                            </div>  
                            <div class="w-[206px] h-[237px] rounded-2xl bg-white ">
                                <div class="w-[206px] h-[130px] rounded-xl bg-white mt-0 flex justify-center overflow-hidden ">
                                    <div class="w-[185px] h-[120px] rounded-xl bg-slate-400 mt-2  ">
                                        <img class="object-cover rounded-xl" src="https://images.unsplash.com/photo-1529042410759-befb1204b468?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjZ8fGZvb2R8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=600&q=60" alt="Deskripsi gambar">
                                    </div>
                                </div>
                                <ul class="flex py-0 bg-white ml-2">
                                    <div class="flex items-center gap-1 p-1 space-x-10">
                                    <li><p class="text-orange-500 text-xs font-semibold">22 min</p></li>
                                    <li><p class="text-orange-500 text-xs font-semibold">4.9</p></li>
                                    <li><p class="text-orange-500 text-xs font-semibold">0.8 km</p></li>

                                </ul>
                                <ul class="flex space-x-4 py-0 bg-white">
                                    <div class="flex items-center gap-1 pl-3">
                                    <li><p class="text-black text-lg font-bold">Pizza Mozarella</p></div></li>                           
                                </ul>
                                <ul class="flex py-0 bg-white mt-2 ">
                                    <div class="flex items-center gap-1 p-1 space-x-8 pl-3">
                                    <li><p class="text-gray-500 text-xs font-normal">Price start from:</p></li>
                                    <li><p class="text-orange-500 text-LG font-bold">IDR 32.000</p></li>                           
                                </ul>
                            </div>   

                        </div>
                    </section>
                </div>
                {{-- Tranding order --}}
                <div class=" h-[575px] bg-[#F9F5F6] mt-14">
                    <section class="grid md:grid-cols-1 gap-4 mt-4">
                        <div class="h-[52px] bg-[#F9F5F6] flex  items-center">
                            <h3 class="text-4xl text-orange-600 text-center">LOREM IPSUM</h3>
                        </div>
    
                        <div class="h-[237px] mt-10 bg-[#F9F5F6]-200 flex space-x-10">

                            <div class="w-[206px] h-[237px] rounded-2xl bg-white ">
                                <div class="w-[206px] h-[130px] rounded-xl bg-white mt-0 flex justify-center  ">
                                    <div class="w-[185px] h-[120px] rounded-xl bg-slate-400 mt-2 overflow-hidden ">
                                        <img class="object-cover rounded-xl" src="https://images.unsplash.com/photo-1496116218417-1a781b1c416c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDZ8fGZvb2R8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=600&q=60" alt="Deskripsi gambar">
                                    </div>
                                </div>
                                <ul class="flex py-0 bg-white ml-2">
                                    <div class="flex items-center gap-1 p-1 space-x-10">
                                    <li><p class="text-orange-500 text-xs font-semibold">22 min</p></li>
                                    <li><p class="text-orange-500 text-xs font-semibold">4.9</p></li>
                                    <li><p class="text-orange-500 text-xs font-semibold">0.8 km</p></li>

                                </ul>
                                <ul class="flex space-x-4 py-0 bg-white">
                                    <div class="flex items-center gap-1 pl-3">
                                    <li><p class="text-black text-lg font-bold">Pizza Mozarella</p></div></li>                           
                                </ul>
                                <ul class="flex py-0 bg-white mt-2 ">
                                    <div class="flex items-center gap-1 p-1 space-x-8 pl-3">
                                    <li><p class="text-gray-500 text-xs font-normal">Price start from:</p></li>
                                    <li><p class="text-orange-500 text-LG font-bold">IDR 32.000</p></li>                           
                                </ul>
                            </div>  
                            <div class="w-[206px] h-[237px] rounded-2xl bg-white ">
                                <div class="w-[206px] h-[130px] rounded-xl bg-white mt-0 flex justify-center  ">
                                    <div class="w-[185px] h-[120px] rounded-xl bg-slate-400 mt-2 overflow-hidden ">
                                        <img class="object-cover rounded-xl" src="https://images.unsplash.com/photo-1432139555190-58524dae6a55?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTF8fGZvb2R8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=600&q=60" alt="Deskripsi gambar">
                                    </div>
                                </div>
                                <ul class="flex py-0 bg-white ml-2">
                                    <div class="flex items-center gap-1 p-1 space-x-10">
                                    <li><p class="text-orange-500 text-xs font-semibold">22 min</p></li>
                                    <li><p class="text-orange-500 text-xs font-semibold">4.9</p></li>
                                    <li><p class="text-orange-500 text-xs font-semibold">0.8 km</p></li>

                                </ul>
                                <ul class="flex space-x-4 py-0 bg-white">
                                    <div class="flex items-center gap-1 pl-3">
                                    <li><p class="text-black text-lg font-bold">Pizza Mozarella</p></div></li>                           
                                </ul>
                                <ul class="flex py-0 bg-white mt-2 ">
                                    <div class="flex items-center gap-1 p-1 space-x-8 pl-3">
                                    <li><p class="text-gray-500 text-xs font-normal">Price start from:</p></li>
                                    <li><p class="text-orange-500 text-LG font-bold">IDR 32.000</p></li>                           
                                </ul>
                            </div>  
                            <div class="w-[206px] h-[237px] rounded-2xl bg-white ">
                                <div class="w-[206px] h-[130px] rounded-xl bg-white mt-0 flex justify-center  ">
                                    <div class="w-[185px] h-[120px] rounded-xl bg-slate-400 mt-2 overflow-hidden ">
                                        <img class="object-cover rounded-xl" src="https://images.unsplash.com/photo-1475090169767-40ed8d18f67d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTh8fGZvb2R8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=600&q=60" alt="Deskripsi gambar">
                                    </div>
                                </div>
                                <ul class="flex py-0 bg-white ml-2">
                                    <div class="flex items-center gap-1 p-1 space-x-10">
                                    <li><p class="text-orange-500 text-xs font-semibold">22 min</p></li>
                                    <li><p class="text-orange-500 text-xs font-semibold">4.9</p></li>
                                    <li><p class="text-orange-500 text-xs font-semibold">0.8 km</p></li>

                                </ul>
                                <ul class="flex space-x-4 py-0 bg-white">
                                    <div class="flex items-center gap-1 pl-3">
                                    <li><p class="text-black text-lg font-bold">Pizza Mozarella</p></div></li>                           
                                </ul>
                                <ul class="flex py-0 bg-white mt-2 ">
                                    <div class="flex items-center gap-1 p-1 space-x-8 pl-3">
                                    <li><p class="text-gray-500 text-xs font-normal">Price start from:</p></li>
                                    <li><p class="text-orange-500 text-LG font-bold">IDR 32.000</p></li>                           
                                </ul>
                            </div>  

                        </div>
                        
                        <div class="h-[237px] mt-10 bg-[#F9F5F6]-200 flex space-x-10">

                            <div class="w-[206px] h-[237px] rounded-2xl bg-white ">
                                <div class="w-[206px] h-[130px] rounded-xl bg-white mt-0 flex justify-center  ">
                                    <div class="w-[185px] h-[120px] rounded-xl bg-slate-400 mt-2 overflow-hidden ">
                                        <img class="object-cover rounded-xl" src="https://images.unsplash.com/photo-1539136788836-5699e78bfc75?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NjZ8fGZvb2R8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=600&q=60" alt="Deskripsi gambar">
                                    </div>
                                </div>
                                <ul class="flex py-0 bg-white ml-2">
                                    <div class="flex items-center gap-1 p-1 space-x-10">
                                    <li><p class="text-orange-500 text-xs font-semibold">22 min</p></li>
                                    <li><p class="text-orange-500 text-xs font-semibold">4.9</p></li>
                                    <li><p class="text-orange-500 text-xs font-semibold">0.8 km</p></li>

                                </ul>
                                <ul class="flex space-x-4 py-0 bg-white">
                                    <div class="flex items-center gap-1 pl-3">
                                    <li><p class="text-black text-lg font-bold">Pizza Mozarella</p></div></li>                           
                                </ul>
                                <ul class="flex py-0 bg-white mt-2 ">
                                    <div class="flex items-center gap-1 p-1 space-x-8 pl-3">
                                    <li><p class="text-gray-500 text-xs font-normal">Price start from:</p></li>
                                    <li><p class="text-orange-500 text-LG font-bold">IDR 32.000</p></li>                           
                                </ul>
                            </div> 
                            <div class="w-[206px] h-[237px] rounded-2xl bg-white ">
                                <div class="w-[206px] h-[130px] rounded-xl bg-white mt-0 flex justify-center  ">
                                    <div class="w-[185px] h-[120px] rounded-xl bg-slate-400 mt-2 overflow-hidden ">
                                        <img class="object-cover rounded-xl" src="https://images.unsplash.com/photo-1563379926898-05f4575a45d8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTl8fGZvb2R8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=600&q=60" alt="Deskripsi gambar">
                                    </div>
                                </div>
                                <ul class="flex py-0 bg-white ml-2">
                                    <div class="flex items-center gap-1 p-1 space-x-10">
                                    <li><p class="text-orange-500 text-xs font-semibold">22 min</p></li>
                                    <li><p class="text-orange-500 text-xs font-semibold">4.9</p></li>
                                    <li><p class="text-orange-500 text-xs font-semibold">0.8 km</p></li>

                                </ul>
                                <ul class="flex space-x-4 py-0 bg-white">
                                    <div class="flex items-center gap-1 pl-3">
                                    <li><p class="text-black text-lg font-bold">Pizza Mozarella</p></div></li>                           
                                </ul>
                                <ul class="flex py-0 bg-white mt-2 ">
                                    <div class="flex items-center gap-1 p-1 space-x-8 pl-3">
                                    <li><p class="text-gray-500 text-xs font-normal">Price start from:</p></li>
                                    <li><p class="text-orange-500 text-LG font-bold">IDR 32.000</p></li>                           
                                </ul>
                            </div>
                            <div class="w-[206px] h-[237px] rounded-2xl bg-white ">
                                <div class="w-[206px] h-[130px] rounded-xl bg-white mt-0 flex justify-center  ">
                                    <div class="w-[185px] h-[120px] rounded-xl bg-slate-400 mt-2 overflow-hidden ">
                                        <img class="object-cover rounded-xl" src="https://images.unsplash.com/photo-1569718212165-3a8278d5f624?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NzV8fGZvb2R8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=600&q=60" alt="Deskripsi gambar">
                                    </div>
                                </div>
                                <ul class="flex py-0 bg-white ml-2">
                                    <div class="flex items-center gap-1 p-1 space-x-10">
                                    <li><p class="text-orange-500 text-xs font-semibold">22 min</p></li>
                                    <li><p class="text-orange-500 text-xs font-semibold">4.9</p></li>
                                    <li><p class="text-orange-500 text-xs font-semibold">0.8 km</p></li>

                                </ul>
                                <ul class="flex space-x-4 py-0 bg-white">
                                    <div class="flex items-center gap-1 pl-3">
                                    <li><p class="text-black text-lg font-bold">Pizza Mozarella</p></div></li>                           
                                </ul>
                                <ul class="flex py-0 bg-white mt-2 ">
                                    <div class="flex items-center gap-1 p-1 space-x-8 pl-3">
                                    <li><p class="text-gray-500 text-xs font-normal">Price start from:</p></li>
                                    <li><p class="text-orange-500 text-LG font-bold">IDR 32.000</p></li>                           
                                </ul>
                            </div>  

                        </div>
                    
                    </section>
                </div>
                  
            </article> <!-- ./Conten -->
            
            <aside class="bg-[#F9F5F6] rounded-2xl p-4 relative"> <!-- Aside -->
            
                <div class="border h-56 bg-[#E5E0FF] ">
                    <img class="  w-full h-56 rounded-2xl object-cover" src="{{ asset('assets/images/banner-mini.jpg') }}" alt="Deskripsi gambar">
                </div>
                <div class="sticky top-6 bottom-6">
                    <div class="max-w-md mx-auto bg-white dark:bg-slate-800 shadow-lg h-80 sticky rounded-2xl overflow-hidden ring-1 ring-slate-900/5 mt-16">
                        <h3 class="text-3xl text-center text-orange-600">RESEP</h3>
                        <div class="overflow-auto flex flex-col divide-y h-80 dark:divide-slate-200/5">
                          <div class="flex items-center gap-4 p-4">
                            <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Zm9vZHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=600&q=60">
                            <strong class="text-slate-900 text-sm font-medium dark:text-slate-200">Andrew Alfred</strong>
                          </div>
                          <div class="flex items-center gap-4 p-4">
                            <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Zm9vZHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=600&q=60">
                            <strong class="text-slate-900 text-sm font-medium dark:text-slate-200">Debra Houston</strong>
                          </div>
                          <div class="flex items-center gap-4 p-4">
                            <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Zm9vZHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=600&q=60">
                            <strong class="text-slate-900 text-sm font-medium dark:text-slate-200">Jane White</strong>
                          </div>
                          <div class="flex items-center gap-4 p-4">
                            <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Zm9vZHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=600&q=60">
                            <strong class="text-slate-900 text-sm font-medium dark:text-slate-200">Ray Flint</strong>
                          </div>
                          <div class="flex items-center gap-4 p-4">
                            <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Zm9vZHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=600&q=60">
                            <strong class="text-slate-900 text-sm font-medium dark:text-slate-200">Mindy Albrect</strong>
                          </div>
                          <div class="flex items-center gap-4 p-4">
                            <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Zm9vZHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=600&q=60">
                            <strong class="text-slate-900 text-sm font-medium dark:text-slate-200">David Arnold</strong>
                          </div>
                        </div>
                      </div>
                      <div class=" border-spacing-4 rounded-2xl h-[200px] bg-white mt-6 shadow-lg "></div>
                </div>
                
                
            
            </aside> <!-- ./Aside -->
        
        </main> <!-- ./Container-->
    </div>
</body>
</html>


{{-- Cadangan --}}
{{-- <div class="max-w-md bg-white rounded-xl overflow-hidden shadow-md">
    <img class="w-full h-48 object-cover" src="{{ asset('assets/images/banner.jpg') }}" alt="Deskripsi gambar">
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2">Judul Card</div>
      <p class="text-gray-500 text-base">
        Deskripsi card Anda dapat diletakkan di sini.
      </p>
    </div>
  </div> --}}