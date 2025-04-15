<!-- فوتر -->
<footer class="bg-gray-900 text-gray-400 pt-16 pb-8">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
            <!-- درباره ما -->
            <div>
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 rounded-lg bg-indigo-600 flex items-center justify-center mr-2">
                        <i class="fas fa-rocket text-white text-xl"></i>
                    </div>
                    <span class="text-2xl mx-2 font-bold text-white">نوآوران</span>
                </div>
                <p class="mb-6">ما با ارائه راهکارهای دیجیتال نوآورانه، به کسب و کارها کمک می‌کنیم تا در دنیای دیجیتال پیشتاز باشند.</p>
                <div class="flex space-x-4 space-x-reverse">
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-800 hover:bg-pink-600 transition duration-300 flex items-center justify-center">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-800 hover:bg-blue-500 transition duration-300 flex items-center justify-center">
                        <i class="fab fa-telegram"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-800 hover:bg-blue-400 transition duration-300 flex items-center justify-center">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-800 hover:bg-blue-700 transition duration-300 flex items-center justify-center">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
            
            <!-- لینک‌های سریع -->
            <div>
                <h3 class="text-lg font-bold text-white mb-6">لینک‌های سریع</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="hover:text-white transition duration-300">صفحه اصلی</a></li>
                    <li><a href="#" class="hover:text-white transition duration-300">خدمات ما</a></li>
                    <li><a href="#" class="hover:text-white transition duration-300">نمونه کارها</a></li>
                    <li><a href="{{ route('posts.index') }}" class="hover:text-white transition duration-300">وبلاگ</a></li>
                    <li><a href="#" class="hover:text-white transition duration-300">تماس با ما</a></li>
                </ul>
            </div>
            
            <!-- خدمات -->
            <div>
                <h3 class="text-lg font-bold text-white mb-6">خدمات ما</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="hover:text-white transition duration-300">طراحی وبسایت</a></li>
                    <li><a href="#" class="hover:text-white transition duration-300">توسعه اپلیکیشن موبایل</a></li>
                    <li><a href="#" class="hover:text-white transition duration-300">دیجیتال مارکتینگ</a></li>
                    <li><a href="#" class="hover:text-white transition duration-300">سئو و بهینه‌سازی</a></li>
                    <li><a href="#" class="hover:text-white transition duration-300">مشاوره استراتژی دیجیتال</a></li>
                </ul>
            </div>
            
            <!-- تماس با ما -->
            <div>
                <h3 class="text-lg font-bold text-white mb-6">تماس با ما</h3>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <i class="fas fa-map-marker-alt mt-1 ml-3 text-indigo-400"></i>
                        <span>تهران، خیابان آزادی، پلاک ۱۲۳، طبقه ۴</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-phone-alt mt-1 ml-3 text-indigo-400"></i>
                        <span>+98 21 1234 5678</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-envelope mt-1 ml-3 text-indigo-400"></i>
                        <span>info@navaran.com</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
            <p>© 2025 نوآوران. تمام حقوق محفوظ است.</p>
            <div class="flex space-x-6 space-x-reverse mt-4 md:mt-0">
                <a href="#" class="hover:text-white transition duration-300">حریم خصوصی</a>
                <a href="#" class="hover:text-white transition duration-300">قوانین و مقررات</a>
            </div>
        </div>
    </div>
</footer>