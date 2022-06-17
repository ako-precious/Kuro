@php
$Page = 'service';
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
        <script src="{{ asset('js/more.js') }}" rel="stylesheet"></script>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased" id='body'>
        <div class="relative m-auto  justify-center min-h-screen items-center sm:pt-0">
            @include('layouts.nav')
            <header>
    
                <div class="w-full bannerdiv bg-center bg-cover z-10 " style=" background-image: url({{ asset('images/istockphoto-133.jpg') }});
                        clip-path: ellipse(72% 100% at 49.78% 0%);   ">
                    <div class="flex flex-col items-center justify-center w-full min-h-screen bg-gray-900 bg-opacity-50">
                        
    <div class="flex items-center py-4 overflow-y-auto whitespace-nowrap">
        <a href="/" class="text-gray-100 dark:text-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
            </svg>
        </a>

        <span class="mx-5 text-gray-100 dark:text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            </svg>
        </span>

        <a href="/services" class="text-gray-100 dark:text-gray-200 hover:underline">
            Our Services
        </a>

        

       
    </div>
    <h1
                            class="xl:text-8xl text-7xl text-center uppercase text-white font-extrabold pb-6 sm:w-4/6 w-5/6 mx-auto">
                            Our Services</h1>
                            <p 
                                class="block mt-2 text-normal font-semibold text-white transition-colors duration-200 transform dark:text-white hover:text-gray-600 ">
    
                                Know what we do
</p>
                            </div>
                        </div>
                    </header>
                </div>
                
                
                <section class=" bg-white overflow-hidden w-full h-full py-10 dark:bg-gray-900">
                    <div class="container flex justify-center mx-auto pt-16">
                        <div>
                            
                            <h1 class="xl:text-4xl text-3xl text-center text-orange-800 uppercase font-extrabold pb-6 sm:w-4/6 w-5/6 mx-auto">
                                What we do?
                                </h1>
                            <p
                                class="block mt-2 text-normal font-semibold text-orange-900 transition-colors duration-200 transform dark:text-white hover:text-gray-600 ">
                    
                                We provide the following solutions to our prospective clients
                            </p>
                </div>
            </div>
            <div class="container mx-auto md:px-12 py-16">
    
                <div
                    class=" w-full my-8 flex flex-row justify-between items-center flex-wrap overflow-hidden  dark:bg-gray-800">
                    <div class="md:w-6/12 h-96 px-8 py-12 relative  w-full mx-auto">
    
                        <div class="rounded shadow absolute w-80 h-60 top-0 left-0 bg-orange-900" >
                        </div>
                        <div class="rounded shadow absolute w-80 h-60 bottom-0 right-0 bg-orange-900" >
                        </div>
                        <div class="absolute rounded shadow"
                            style="height: 70%;width: 75%; top: 50%; left: 50%;  transform: translate(-50%, -50%);">
                            <img src="{{ asset('images/img1.jpg') }}"
                                class="rounded shadow img-responsive w-full h-full" alt="">
                        </div>
                    </div>
    
                    <div class="md:w-6/12 w-full mx-auto p-6">
                        <div class="p-6">
                            <h2 
                                class="text-orange-900 block mt-2 text-2xl hover:text-orange-800 font-semibold text-black transition-colors duration-200 transform dark:text-white hover:text-gray-600 ">
                                Concept Development And Strategic Planning
                            </h2>
                             <p
                                class="text-orange-900 block mt-2 text-sm hover:text-orange-800 font-semibold text-black transition-colors duration-200 transform dark:text-white hover:text-gray-600 ">
                                Our rock-solid concept development and strategic planning is the road map that keeps your project on target, from the initial description of requirements through deployment.
                            </p>
                            <p
                                class="text-orange-900 block mt-2 text-sm hover:text-orange-800 font-semibold text-black transition-colors duration-200 transform dark:text-white hover:text-gray-600 ">
                            
                                 Our concept augmentation services help you stay on top, by providing objective, big-picture perspectives grounded in over 20 years of industry expertise. We help you pinpoint problems, develop new strategies, or build an entirely new concept.
                            </p>
    
                        </div>
                    </div>
                </div>
                <div
                    class=" w-full my-8 flex flex-row-reverse justify-between items-center flex-wrap overflow-hidden  dark:bg-gray-800">
                    <div class="md:w-6/12 h-96 relative  w-full mx-auto">
    
                        <div class="rounded shadow absolute w-80 h-60 top-0 right-0 bg-orange-900" >
                        </div>
                        <div class="rounded shadow absolute w-80 h-60 bottom-0 left-0 bg-orange-900" >
                        </div>
                        <div class="absolute rounded shadow"
                            style="height: 70%;width: 75%; top: 50%; left: 50%;  transform: translate(-50%, -50%);">
                            <img src="{{ asset('images/img2.jpg') }}"
                                class="rounded shadow img-responsive w-full h-full" alt="">
                        </div>
                    </div>
    
                    <div class="md:w-6/12 w-full mx-auto p-6">
                        <div class="p-6">
                            <h2
                                class="text-orange-900 block mt-2 text-2xl font-semibold text-black transition-colors duration-200 transform dark:text-white hover:text-gray-600 ">
                                Project Management
                            </h2>
                            <p
                            class="text-orange-900 block mt-2 text-sm hover:text-orange-800 font-semibold text-black transition-colors duration-200 transform dark:text-white hover:text-gray-600 ">
                            We focus on project management services for a wide range of clients in diverse industries both in the public and private sector.</p><p
                            class="text-orange-900 block mt-2 text-sm hover:text-orange-800 font-semibold text-black transition-colors duration-200 transform dark:text-white hover:text-gray-600 ">
                            We deliver simple to complex professional coordination of strategic events right from the planning, coordination, control and to an eventual successful execution of a series of planned and structured events leading to the implementation of a designed objectives that meet the clients needs in formalized and internationally accepted and evaluated manner.

                        </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mx-auto md:px-12 py-16">
    
                <div
                    class=" w-full my-8 flex flex-row justify-between items-center flex-wrap overflow-hidden  dark:bg-gray-800">
                    <div class="md:w-6/12 h-96 px-8 py-12 relative  w-full mx-auto">
    
                        <div class="rounded shadow absolute w-80 h-60 top-0 left-0 bg-orange-900" >
                        </div>
                        <div class="rounded shadow absolute w-80 h-60 bottom-0 right-0 bg-orange-900" >
                        </div>
                        <div class="absolute rounded shadow"
                            style="height: 70%;width: 75%; top: 50%; left: 50%;  transform: translate(-50%, -50%);">
                            <img src="{{ asset('images/img1.jpg') }}"
                                class="rounded shadow img-responsive w-full h-full" alt="">
                        </div>
                    </div>
    
                    <div class="md:w-6/12 w-full mx-auto p-6">
                        <div class="p-6">
                            <h2 
                                class="text-orange-900 block mt-2 text-2xl hover:text-orange-800 font-semibold text-black transition-colors duration-200 transform dark:text-white hover:text-gray-600 ">
                                Concept Development And Strategic Planning
                            </h2>
                             <p
                                class="text-orange-900 block mt-2 text-sm hover:text-orange-800 font-semibold text-black transition-colors duration-200 transform dark:text-white hover:text-gray-600 ">
                                Our rock-solid concept development and strategic planning is the road map that keeps your project on target, from the initial description of requirements through deployment.
                            </p>
                            <p
                                class="text-orange-900 block mt-2 text-sm hover:text-orange-800 font-semibold text-black transition-colors duration-200 transform dark:text-white hover:text-gray-600 ">
                            
                                 Our concept augmentation services help you stay on top, by providing objective, big-picture perspectives grounded in over 20 years of industry expertise. We help you pinpoint problems, develop new strategies, or build an entirely new concept.
                            </p>
    
                        </div>
                    </div>
                </div>
                <div
                    class=" w-full my-8 flex flex-row-reverse justify-between items-center flex-wrap overflow-hidden  dark:bg-gray-800">
                    <div class="md:w-6/12 h-96 relative  w-full mx-auto">
                        <div class="rounded shadow absolute w-80 h-60 top-0 right-0 bg-orange-900" >
                        </div>
                        <div class="rounded shadow absolute w-80 h-60 bottom-0 left-0 bg-orange-900" >
                        </div>
                        <div class="absolute rounded shadow"
                            style="height: 70%;width: 75%; top: 50%; left: 50%;  transform: translate(-50%, -50%);">
                            <img src="{{ asset('images/img2.jpg') }}"
                                class="rounded shadow img-responsive w-full h-full" alt="">
                        </div>
                       
                    </div>
    
                    <div class="md:w-6/12 w-full mx-auto p-6">
                        <div class="p-6">
                            <h2
                                class="text-orange-900 block mt-2 text-2xl font-semibold text-black transition-colors duration-200 transform dark:text-white hover:text-gray-600 ">
                                Project Management
                            </h2>
                            <p
                            class="text-orange-900 block mt-2 text-sm hover:text-orange-800 font-semibold text-black transition-colors duration-200 transform dark:text-white hover:text-gray-600 ">
                            We focus on project management services for a wide range of clients in diverse industries both in the public and private sector.</p><p
                            class="text-orange-900 block mt-2 text-sm hover:text-orange-800 font-semibold text-black transition-colors duration-200 transform dark:text-white hover:text-gray-600 ">
                            We deliver simple to complex professional coordination of strategic events right from the planning, coordination, control and to an eventual successful execution of a series of planned and structured events leading to the implementation of a designed objectives that meet the clients needs in formalized and internationally accepted and evaluated manner.

                        </p>
                        </div>
                    </div>
                </div>
            </div>
           
    
        </section>
    
    
    
        @include('layouts.footer')
    </body>

  
    

</html>
