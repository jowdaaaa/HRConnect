@include('partials.header')

<div class="min-h-screen bg-[#f1fcf6] flex flex-col relative overflow-hidden font-sans">
    
    <div class="absolute -top-24 -left-24 w-96 h-96 bg-[#009944] opacity-10 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-[#009944] opacity-10 rounded-full blur-3xl"></div>

    <!-- <div class="p-8 z-20">
        <img src="{{ asset('images/ace-logo.png') }}" alt="ACE Logo" class="h-16 w-auto">
    </div> -->

    <div class="flex-grow flex items-center justify-center px-6">
        <div class="max-w-4xl w-full text-center z-10">
            
            <div class="mb-6 flex justify-center">
                <div class="relative">
                    <div class="absolute inset-0 bg-[#009944] blur-2xl opacity-20 rounded-full scale-150"></div>
                    <img src="{{ asset('images/ace-logo.png') }}" alt="ACE Center" class="relative h-28 w-auto">
                </div>
            </div>

            <h1 class="text-5xl md:text-6xl font-extrabold text-[#1a1a1a] mb-6 tracking-tight">
                Welcome to <span class="text-[#009944]">HRConnect</span>
            </h1>

            <p class="text-xl md:text-2xl font-semibold text-gray-700 mb-4">
                Your Gateway to Smarter <span class="text-[#009944] font-['Montserrat'] ">Human Resource Solutions</span>
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                {{-- <a href="/login"
                   class="flex items-center px-10 py-4 bg-[#009944] text-white font-bold rounded-full shadow-lg shadow-green-100 hover:bg-[#007a36] hover:scale-105 transition-all duration-300">
                   <i class="fas fa-user-plus mr-2 text-lg" aria-hidden="true"></i>
                   Admin Login
                </a> --}}

                <a href="/login"
                   class="flex items-center px-10 py-4 bg-white text-[#009944] font-bold rounded-full border-2 border-[#009944]/20 shadow-sm hover:bg-[#eefcf4] hover:border-[#009944] transition-all duration-300 group">
                   Login Here
                   <i class="fas fa-arrow-right ml-2 text-lg group-hover:translate-x-1 transition-transform" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>

    {{-- <div class="pb-10 flex flex-col items-center animate-bounce opacity-40">
        <div class="w-6 h-10 border-2 border-gray-400 rounded-full flex justify-center p-1">
            <div class="w-1 h-2 bg-gray-400 rounded-full"></div>
        </div>
        <span class="text-[10px] uppercase font-bold tracking-widest text-gray-400 mt-2">Scroll to explore</span>
    </div> --}}
</div>

@include('partials.footer')