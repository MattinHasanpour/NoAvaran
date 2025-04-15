
<style>
    .mobile-menu {
        height: 100vh;
        height: 100dvh;
    }
</style>

<header x-data="{ 
    mobileMenuOpen: false, 
    scrollY: 0,
    searchOpen: false,
    dropdownOpen: false
}" 
@scroll.window="scrollY = window.scrollY" 
:class="{'shadow-xl bg-white/95': scrollY > 10, 'bg-white/90': scrollY <= 10}"
class="sticky top-0 z-50 backdrop-blur-md transition-all duration-500 ease-in-out border-b border-gray-100">
    
    <div class="container mx-auto px-4 xl:px-0">
        <!-- بخش اصلی هدر -->
        <div class="flex justify-between items-center py-4">
            <!-- لوگو -->
            <a href="{{ route('home') }}" class="flex items-center group flex-shrink-0">
                <div class="w-12 h-12 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-lg flex items-center justify-center mr-3 transition-all duration-500 group-hover:rotate-12 shadow-md">
                    <i class="fas fa-rocket text-white text-xl"></i>
                </div>
                <span class="text-2xl mx-2 font-bold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">نوآوران</span>
            </a>
            <!-- دکمه منو موبایل -->
            <button @click="mobileMenuOpen = true" class="lg:hidden text-gray-700 hover:text-indigo-600 transition">
                <i class="fas fa-bars text-2xl"></i>
            </button>
            <!-- منوی دسکتاپ -->
            <nav class="hidden lg:flex items-center space-x-8 space-x-reverse">
                <a href="{{ route('home') }}" class="relative py-2 px-1 font-medium text-gray-700 hover:text-indigo-600 transition-all group">
                    صفحه اصلی
                    <span class="absolute bottom-0 right-0 w-0 h-0.5 bg-indigo-600 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="{{ route('services') }}" class="relative py-2 px-1 font-medium text-gray-700 hover:text-indigo-600 transition-all group">
                    خدمات
                    <span class="absolute bottom-0 right-0 w-0 h-0.5 bg-indigo-600 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="{{ route('example') }}" class="relative py-2 px-1 font-medium text-gray-700 hover:text-indigo-600 transition-all group">
                    نمونه کارها
                    <span class="absolute bottom-0 right-0 w-0 h-0.5 bg-indigo-600 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="{{ route('about') }}" class="relative py-2 px-1 font-medium text-gray-700 hover:text-indigo-600 transition-all group">
                    درباره ما
                    <span class="absolute bottom-0 right-0 w-0 h-0.5 bg-indigo-600 transition-all duration-300 group-hover:w-full"></span>
                </a>
            </nav>
            <!-- دکمه‌های کاربر در دسکتاپ -->
            <div class="hidden lg:flex items-center space-x-4 space-x-reverse">
                @auth
                    <p>{{ auth()->user()->name }}</p>
                    <a href="{{ route('logout') }}" class="px-6 py-2 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-full hover:from-indigo-700 hover:to-purple-700 transition shadow-md">
                        <i class="fas fa-sign-in-alt ml-2"></i>
                        خروج
                    </a>
                @endauth
                @guest
                    <a href="{{ route('login') }}" class="px-4 py-2 text-gray-700 hover:text-indigo-600 transition">
                        <i class="fas fa-sign-in-alt ml-2"></i>
                        ورود
                    </a>
                    <a href="{{ route('register') }}" class="px-6 py-2 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-full hover:from-indigo-700 hover:to-purple-700 transition shadow-md">
                        <i class="fas fa-user-plus ml-2"></i>
                        ثبت‌نام
                    </a>
                @endguest
            </div>
        </div>
    </div>
    <!-- منوی موبایل تمام‌صفحه -->
    <div x-show="mobileMenuOpen"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 translate-x-full"
         x-transition:enter-end="opacity-100 translate-x-0"
         x-transition:leave="transition ease-in duration-250"
         x-transition:leave-start="opacity-100 translate-x-0"
         x-transition:leave-end="opacity-0 translate-x-full"
         class="fixed inset-0 z-50 bg-white mobile-menu overflow-y-auto"
         @click.away="mobileMenuOpen = false"
         @keydown.escape.window="mobileMenuOpen = false">
        
        <div class="container mx-auto px-4 py-6 h-full flex flex-col">
            <!-- هدر منوی موبایل -->
            <div class="flex justify-between items-center mb-8">
                <a href="{{ route('home') }}" class="flex items-center">
                    <div class="w-10 h-10 bg-indigo-600 rounded-lg flex items-center justify-center mr-2">
                        <i class="fas fa-rocket text-white text-xl"></i>
                    </div>
                    <span class="text-xl mx-2 font-bold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">نوآوران</span>
                </a>
                <button @click="mobileMenuOpen = false" class="text-gray-700 hover:text-red-500 transition">
                    <i class="fas fa-times text-2xl"></i>
                </button>
            </div>
            <!-- دکمه‌های کاربر در موبایل -->
            <div class="mt-auto py-6 border-y border-gray-200 flex flex-col space-y-4">
                @auth
                <p class="mx-auto">{{ auth()->user()->name }}</p>
                <a href="{{ route('logout') }}" class="w-full py-3 px-6 text-center bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-full hover:from-indigo-700 hover:to-purple-700 transition shadow-md flex items-center justify-center">
                    <i class="fas fa-sign-in-alt ml-2"></i>
                    خروج
                </a>
                @endauth
                   
                @guest
                    <a href="{{ route('login') }}" class="w-full py-3 px-6 text-center bg-gray-100 text-gray-800 rounded-full hover:bg-gray-200 transition flex items-center justify-center">
                        <i class="fas fa-sign-in-alt ml-2"></i>
                        ورود به حساب کاربری
                    </a>
                    <a href="{{ route('register') }}" class="w-full py-3 px-6 text-center bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-full hover:from-indigo-700 hover:to-purple-700 transition shadow-md flex items-center justify-center">
                        ثبت‌نام
                    </a>
                @endguest
            </div>
            <!-- منوی موبایل -->
            <nav class="flex-grow space-y-4">
                <a href="{{ route('home') }}" class="block py-4 px-4 text-xl font-medium text-gray-800 hover:bg-indigo-50 hover:text-indigo-600 rounded-lg transition items-center">
                    <i class="fas fa-home ml-2 text-indigo-500"></i>
                    صفحه اصلی
                </a>
                <a href="{{ route('services') }}" class="block py-4 px-4 text-xl font-medium text-gray-800 hover:bg-indigo-50 hover:text-indigo-600 rounded-lg transition items-center">
                    <i class="fas fa-cogs ml-2 text-indigo-500"></i>
                    خدمات
                </a>
                <a href="{{ route('example') }}" class="block py-4 px-4 text-xl font-medium text-gray-800 hover:bg-indigo-50 hover:text-indigo-600 rounded-lg transition items-center">
                    <i class="fas fa-briefcase ml-2 text-indigo-500"></i>
                    نمونه کارها
                </a>
                <a href="{{ route('about') }}" class="block py-4 px-4 text-xl font-medium text-gray-800 hover:bg-indigo-50 hover:text-indigo-600 rounded-lg transition items-center">
                    <i class="fas fa-info-circle ml-2 text-indigo-500"></i>
                    درباره ما
                </a>
                <a href="#" class="block py-4 px-4 text-xl font-medium text-gray-800 hover:bg-indigo-50 hover:text-indigo-600 rounded-lg transition items-center">
                    <i class="fas fa-phone ml-2 text-indigo-500"></i>
                    تماس با ما
                </a>
            </nav>
        
            <!-- اطلاعات تماس در موبایل -->
            <div class="mt-8 pt-6 border-t border-gray-200 space-y-3">
                <div class="flex items-center text-gray-700">
                    <i class="fas fa-phone-alt ml-2 text-indigo-500"></i>
                    <span>021-12345678</span>
                </div>
                <div class="flex items-center text-gray-700">
                    <i class="fas fa-envelope ml-2 text-indigo-500"></i>
                    <span>info@navaran.com</span>
                </div>
                <div class="flex space-x-4 space-x-reverse pt-3 justify-center">
                    <a href="#" class="text-gray-600 hover:text-indigo-600 transition"><i class="fab fa-telegram text-2xl"></i></a>
                    <a href="#" class="text-gray-600 hover:text-indigo-600 transition"><i class="fab fa-instagram text-2xl"></i></a>
                    <a href="#" class="text-gray-600 hover:text-indigo-600 transition"><i class="fab fa-linkedin text-2xl"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>