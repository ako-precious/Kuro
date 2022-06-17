@php
$Page = 'home';
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
    <body class="antialiased">
        <header>   
            @include('layouts.nav')
         <div id="controls-carousel mt-8" class="relative" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="overflow-hidden w-full relative h-screen ">
                     <!-- Item 1 -->
                    <div class="hidden duration-700 w-full h-full ease-in-out" data-carousel-item 
                    style="background: url({{ asset('images/istockphota.jpg') }});background-position: center; background-size: cover;   background-repeat: no-repeat; background-attachment: fixed;"
                    >
                        <div class="flex w-full h-full justify-center px-8 align-center items-center">
                            <h1 role="heading"
                                class=" text-gray-900 xl:text-6xl md:text-5xl text-2xl font-bold leading-10 text-white">
                                Frequently
                                Asked Questions</h1>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 w-full h-full ease-in-out" data-carousel-item="active"
                    style="background: url({{ asset('images/istockphoto-1317246838-612x612.jpg') }});background-position: center; background-size: cover; background-repeat: no-repeat; background-attachment: fixed;"
                    >
                        <div class="flex w-full h-full justify-center px-8 align-center items-center">
                            <h1 role="heading"
                                class=" text-gray-900 xl:text-6xl md:text-5xl text-2xl font-bold leading-10 text-white">
                                Frequentlyksf
                                Asked Questions</h1>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 w-full h-full ease-in-out" data-carousel-item
                    style="background: url({{ asset('images/istockphotocomm.jpg') }});background-position: center; background-size: cover;  background-repeat: no-repeat; background-attachment: fixed;"
                    >
                         <div class="flex w-full h-full justify-center px-8 align-center items-center">
                            <h1 role="heading"
                                class=" text-gray-900 xl:text-6xl md:text-5xl text-2xl font-bold leading-10 text-white">
                                Frequently
                                Asked Questions</h1>
                        </div>
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 w-full h-full ease-in-out" data-carousel-item
                    style="background: url({{ asset('images/ian-schneider-TamMbr4okv4-unsplash.jpg')  }});background-position: center;background-size: cover;  background-repeat: no-repeat; background-attachment: fixed;"
                    >
                         <div class="flex w-full h-full justify-center px-8 align-center items-center">
                            <h1 role="heading"
                                class=" text-gray-900 xl:text-6xl md:text-5xl text-2xl font-bold leading-10 text-white">
                               
                        </div>
                         </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 w-full h-full ease-in-out" data-carousel-item
                    style="background: url({{ asset('images/istockphoto-133.jpg') }});background-position: center; background-size: cover;   background-repeat: no-repeat; background-attachment: fixed;"
                    >
                         <div class="flex w-full h-full justify-center px-8 align-center items-center">
                            <h1 role="heading"
                                class=" text-gray-900 xl:text-6xl md:text-5xl text-2xl font-bold leading-10 text-white">
                                Lorem, ipsum dolor sit amet adipisicing elit. </h1>
                        </div>
                    </div>
                </div>
                <!-- Slider indicators -->
                  <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
         </div>

                <!-- Slider controls -->
                <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex justify-center items-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        <span class="hidden">Previous</span>
                    </span>
                </button>
                <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex justify-center items-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        <span class="hidden">Next</span>
                    </span>
                </button>
            </div>
        </header>
        
                
    <section class="bg-white py-12 dark:bg-gray-900">
        <div class="container flex flex-col items-center px-4 py-12 mx-auto text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white">
                WELCOME TO KURO COMMUNICATIONS
            </h2>

            <p class="block max-w-2xl mt-4 text-normal text-justify text-gray-700 dark:text-gray-300">Kuro Communications Limited (KCL) is a reputable Concepts Development and Strategic Planning, Projects Management, Monitoring and Evaluation, Professional Communications and Brand Support Consulting Company that strives to provide solutions that fit into organization’s requirements.

                When it comes to Capacity Building, Seminars, Project Management, Public Relations, Events Management and Creative Branding, KCL is your best bet. </p>
            
            <div class="mt-6">
                <div class="inline-flex w-full overflow-hidden rounded-lg shadow sm:w-auto sm:mx-3">
                    <a href="#" class="inline-flex items-center justify-center w-full px-5 py-3 text-base font-medium text-white bg-gradient-to-r from-orange-700 to-orange-900 hover:from-orange-600 hover:to-orange-600 sm:w-auto">
                        <span class="mx-2">
                            Find Out More
                        </span>
                        <svg class="w-6 h-6 mx-2 fill-current" viewBox="-28 0 512 512.00075" xmlns="http://www.w3.org/2000/svg">
                        <path d="m432.320312 215.121094-361.515624-208.722656c-14.777344-8.53125-32.421876-8.53125-47.203126 0-.121093.070312-.230468.148437-.351562.21875-.210938.125-.421875.253906-.628906.390624-14.175782 8.636719-22.621094 23.59375-22.621094 40.269532v417.445312c0 17.066406 8.824219 32.347656 23.601562 40.878906 7.390626 4.265626 15.496094 6.398438 23.601563 6.398438s16.214844-2.132812 23.601563-6.398438l361.519531-208.722656c14.777343-8.53125 23.601562-23.8125 23.601562-40.878906s-8.824219-32.347656-23.605469-40.878906zm-401.941406 253.152344c-.21875-1.097657-.351562-2.273438-.351562-3.550782v-417.445312c0-2.246094.378906-4.203125.984375-5.90625l204.324219 213.121094zm43.824219-425.242188 234.21875 135.226562-52.285156 54.539063zm-6.480469 429.679688 188.410156-196.527344 54.152344 56.484375zm349.585938-201.835938-80.25 46.332031-60.125-62.714843 58.261718-60.773438 82.113282 47.40625c7.75 4.476562 8.589844 11.894531 8.589844 14.875s-.839844 10.398438-8.589844 14.875zm0 0"></path></svg>
                        
                    </a>
                </div>
            </div>
        </div>
    </section>
        
    <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-12 mx-auto">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4">
                <div>
                    <img class="img-responsive" src="{{ asset('images/img1.jpg') }}" alt="" />
    
                    <h1 class="mt-4 text-xl font-semibold text-gray-800 dark:text-white">CONCEPT DEVELOPMENT AND STRATEGIC PLANNING</h1>
    
                    <p class="mt-2 text-gray-500 text-sm dark:text-gray-400">We implore a blend of creativity and analytics to provide options and solutions that fits into, meets, and exceeds your plans and expectations.

                    </p>
                    <p class="mt-2 text-gray-500 text-sm dark:text-gray-400">Using our unique methods, we evaluate ideas, concepts, and strategic business requirements to design an appropriate approach for our clients, so as to develop precise and specific solutions and project plan for issues resolution.</p>
                </div>
    
                <div>
                    <img class="img-responsive" src="{{ asset('images/img2.jpg') }}" alt="" />
    
                    <h1 class="mt-4 text-xl font-semibold text-gray-800 dark:text-white">PROJECT MANAGEMENT</h1>
    
                    <p class="mt-2 text-gray-500 text-sm dark:text-gray-400">We employ a methodical approach to planning and guiding project processes from start to finish to achieving its set of goals.

                    </p>
                    <p class="mt-2 text-gray-500 text-sm dark:text-gray-400">Our methodical processes are guided through five stages: initiation, planning and design, executing, Monitoring and controlling (maintaining progress of the activities that comprise the project), and closing.</p>
                </div>
    
                <div>
                    <img class="img-responsive" src="{{ asset('images/MandE.png') }}" alt="" />
    
                    <h1 class="mt-4 text-xl font-semibold text-gray-800 dark:text-white">MONITORING AND EVALUATION SYSTEMS</h1>
    
                    <p class="mt-2 text-gray-500 text-sm dark:text-gray-400">We develop and provide systems that help projects and organizations assess and manage performances so the right improvements can be made, thereby getting them on a more profitable path.

                    </p>
                    <p class="mt-2 text-gray-500 text-sm dark:text-gray-400">With KCL’s Monitoring and Evaluation system, you are sure of a greater understanding of where your organization is and where it’s headed.</p>
                </div>
    
                <div>
                    <img class="img-responsive" src="{{ asset('images/PCBS2.jpg') }}" alt="" />
    
                    <h1 class="mt-4 text-xl font-semibold text-gray-800 dark:text-white">PROFESSIONAL COMMUNICATIONS AND BRAND SUPPORT</h1>
    
                    <p class="mt-2 text-gray-500 text-sm dark:text-gray-400">We offer strategic brand marketing communication services and brand activations designed to support organizations in creating an edge in their business path. We help organizations to understand their audience and position in the marketplace, so they can optimise their existing marketing strategies.
                    </p>
                    <p class="mt-2 text-gray-500 text-sm dark:text-gray-400">We effectively helps our clients to more accurately pinpoint the techniques best-suited to their organizations to relate, get and retain their customers thereby delivering more cost-effective marketing.</p>
                </div>
    
            </div>
        </div>
    </section>
    <section>
        <div>
            <img src="{{ asset('images/questionwave.svg') }}" alt="blue pattern background"
                class="absolute w-full h-64 md:h-full object-center object-cover z-0" />
            <div class="relative flex flex-col items-center justify-center sm:px-0 px-6 z-20 pb-32">
                <div class="md:py-36 py-20">
                    <h1 role="heading"
                        class="questionheader xl:text-6xl md:text-5xl text-xl font-bold leading-10 text-white">
                        Frequently
                        Asked Questions</h1>
                </div>
                <div class="lg:w-1/2 md:w-8/12 sm:w-9/12 w-full">
                    <div class="questionleft  bg-white shadow rounded p-8">
                        <div class="flex items-center justify-between">
                            <div>
                                <h2 class="text-base font-semibold leading-none text-gray-800">Why should I use your
                                    service?</h2>
                            </div>
                            <button data-menu
                                class="data-menu focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2 ring-offset-white cursor-pointer">
                                <img class="hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-2-svg1.svg"
                                    alt="dropdown">
                                <img class="transform rotate-180"
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-2-svg1.svg" alt="dropdown">
                            </button>
                        </div>
                        <ul class="hidden">
                            <li>
                                <p class="text-base leading-normal text-gray-600 mt-4 lg:w-96">If you want to choose Pro
                                    or
                                    Business plan the you can use all payments. You can pay from Paypal, Payoneer,
                                    Master
                                    Card, Debit Card.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="questionright bg-white shadow rounded p-8 mt-8">
                        <div class="flex items-center justify-between">
                            <div>
                                <h2 class="text-base font-semibold leading-none text-gray-800">What payment method I can
                                    use?</h2>
                            </div>
                            <button data-menu
                                class="data-menu focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2 ring-offset-white cursor-pointer">
                                <img class="hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-2-svg1.svg"
                                    alt="dropdown">
                                <img class="transform rotate-180"
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-2-svg1.svg" alt="dropdown">
                            </button>
                        </div>
                        <ul class="hidden">
                            <li>
                                <p class="text-base leading-normal text-gray-600 mt-4 lg:w-96">If you want to choose Pro
                                    or
                                    Business plan the you can use all payments. You can pay from Paypal, Payoneer,
                                    Master
                                    Card, Debit Card.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="questionleft bg-white shadow rounded p-8 mt-8">
                        <div class="flex items-center justify-between">
                            <div>
                                <h2 class="text-base font-semibold leading-none text-gray-800">Is your service safe to
                                    use?
                                </h2>
                            </div>
                            <button data-menu
                                class="data-menu focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2 ring-offset-white cursor-pointer">
                                <img class="hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-2-svg1.svg"
                                    alt="dropdown">
                                <img class="transform rotate-180"
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-2-svg1.svg" alt="dropdown">
                            </button>
                        </div>
                        <ul class="hidden">
                            <li>
                                <p class="text-base leading-normal text-gray-600 mt-4 lg:w-96">If you want to choose Pro
                                    or
                                    Business plan the you can use all payments. You can pay from Paypal, Payoneer,
                                    Master
                                    Card, Debit Card.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="questionright bg-white shadow rounded p-8 mt-8">
                        <div class="flex items-center justify-between">
                            <div>
                                <h2 class="text-base font-semibold leading-none text-gray-800">Where are you located?
                                </h2>
                            </div>
                            <button data-menu
                                class="data-menu focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2 ring-offset-white cursor-pointer">
                                <img class="hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-2-svg1.svg"
                                    alt="dropdown">
                                <img class="transform rotate-180"
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-2-svg1.svg" alt="dropdown">
                            </button>
                        </div>
                        <ul class="hidden">
                            <li>
                                <p class="text-base leading-normal text-gray-600 mt-4 lg:w-96">If you want to choose Pro
                                    or
                                    Business plan the you can use all payments. You can pay from Paypal, Payoneer,
                                    Master
                                    Card, Debit Card.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="bg-white dark:bg-gray-800">
        <div class="container px-6 py-16 mx-auto text-center">
            <div class="max-w-lg mx-auto">
                <h1 class="text-3xl font-bold text-gray-800 dark:text-white md:text-4xl">Join us and get updates on special offers.</h1>
                
                <p class="mt-6 text-gray-500 dark:text-gray-300">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero similique obcaecati illum mollitia.
                </p>

                <div class="w-full max-w-sm mx-auto mt-6 bg-transparent border rounded-md dark:border-gray-700 focus-within:border-blue-400 focus-within:ring focus-within:ring-blue-300 dark:focus-within:border-blue-300 focus-within:ring-opacity-40">
                    <form class="flex flex-col md:flex-row">
                        <input type="email" placeholder="Enter your email address" class="flex-1 h-10 px-4 py-2 m-1 text-gray-700 placeholder-gray-400 bg-transparent border-none appearance-none dark:text-gray-200 focus:outline-none focus:placeholder-transparent focus:ring-0" /> 
                        
                        <button type="button" class="h-10 px-4 py-2 m-1 text-white transition-colors duration-200 transform bg-orange-500 rounded-md hover:bg-orange-400 focus:outline-none focus:bg-orange-400">
                            Join Us
                        </button>
                    </form>
                </div>
            </div>
    
            <div class="max-w-screen-xl mx-auto mt-20">
                <div class="grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5">
                    <div class="flex items-center justify-center col-span-1 md:col-span-2 lg:col-span-1">
                        <img src="{{ asset('images/mtnyellow.png') }}" alt="mtn logo" srcset="">
                    </div>
                    
                    <div class="flex items-center justify-center col-span-1 md:col-span-2 lg:col-span-1">
                        <img src="{{ asset('images/CBN.jpg') }}" alt="cbn logo" srcset="">
                        </div>
                    
                    <div class="flex items-center justify-center col-span-1 md:col-span-2 lg:col-span-1">
                        <img src="{{ asset('images/NEDC.png') }}" alt="nedc logo" srcset="">
                        </div>
                    
                    <div class="flex items-center justify-center col-span-1 md:col-span-3 lg:col-span-1">
                        <img src="{{ asset('images/mtn.png') }}" alt=" logo" srcset="">
                    </div>
                    
                    <div class="flex items-center justify-center col-span-2 md:col-span-3 lg:col-span-1">
                        <img src="{{ asset('images/FRSC.png') }}" alt="frsc logo" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    @include('layouts.footer')
    {{-- <script>
        let elements = document.querySelectorAll("[data-menu]");

        for (let i = 0; i < elements.length; i++) {
            let main = elements[i];
            main.addEventListener("click", function () {
                let element = main.parentElement.parentElement;
                let andicators = main.querySelectorAll("img");
                let child = element.querySelector("ul");
                let fontColor = element.querySelector("h2");
                child.classList.toggle("hidden");
                if (child.classList[0] !== "hidden") {
                    andicators[0].style.display = "block";
                    andicators[1].style.display = "none";
                    fontColor.style.color = "#3730A3";
                } else {
                    andicators[0].style.display = "none";
                    andicators[1].style.display = "block"
                    fontColor.style.color = "#1F2937";
                }
            });
        }
    </script> --}}
    </body>
</html>
