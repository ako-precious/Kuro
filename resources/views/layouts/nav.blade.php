<nav class="bg-white border-gray-200 w-full z-50 border-gray-200 px-2 fixed sm:px-4 py-2.5 dark:bg-gray-800" id="header-menu">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
    <a href="#" class="flex items-center">
    <img src="{{ asset('images/logo.png') }}" class="mr-3 h-6 sm:h-9" alt="Kuro Communication Logo">
    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Kuro Communication</span>
    </a>
    <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu" aria-expanded="false">
    <span class="sr-only">Open main menu</span>
    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
    <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
    <li>
    <a href="/" class="block py-2 pr-4 pl-3 @if($Page == 'home') text-white  bg-orange-900 md:text-orange-900  @else text-gray-700 hover:text-orange-700 @endif rounded md:bg-transparent  md:p-0 dark:text-white" >Home</a>
    </li>
    <li> <li>
    <a href="/" class="block py-2 pr-4 pl-3 @if($Page == 'about') text-white  bg-orange-900 md:text-orange-900  @else text-gray-700 hover:text-orange-700 @endif rounded md:bg-transparent  md:p-0 dark:text-white" >About</a>
    </li>
    <li> <li>
    <a href="/service" class="block py-2 pr-4 pl-3 @if($Page == 'service') text-white  bg-orange-900 md:text-orange-900  @else text-gray-700 hover:text-orange-700 @endif rounded md:bg-transparent  md:p-0 dark:text-white" >Services</a>
    </li>
    <li> <li>
    <a href="/" class="block py-2 pr-4 pl-3 @if($Page == 'pricing') text-white  bg-orange-900 md:text-orange-900  @else text-gray-700 hover:text-orange-700 @endif rounded md:bg-transparent  md:p-0 dark:text-white" >Pricing</a>
    </li>
    <li> <li>
    <a href="contact" class="block py-2 pr-4 pl-3 @if($Page == 'contact') text-white  bg-orange-900 md:text-orange-900  @else text-gray-700 hover:text-orange-700 @endif rounded md:bg-transparent  md:p-0 dark:text-white" >Contact</a>
    </li>
    <li>
   
    </ul>
    </div>
    </div>
</nav> 