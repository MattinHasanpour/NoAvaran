@extends('layout.master')

@section('title', 'خدمات')

@section('contact')
    <style>
        .service-card {
            transition: all 0.3s ease;
        }
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(79, 70, 229, 0.1);
        }
        .service-icon {
            width: 80px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            border-radius: 20px;
            font-size: 32px;
            color: white;
            background: linear-gradient(135deg, #4f46e5, #7c3aed);
        }
        .tab-button.active {
            background: linear-gradient(to right, #4f46e5, #7c3aed);
            color: white;
        }
    </style>

    <!-- بخش اصلی خدمات -->
    <main>
        <!-- هیرو -->
        <section class="relative bg-gradient-to-r from-indigo-500 to-purple-600 text-white py-20">
            <div class="container mx-auto px-4 text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">خدمات تخصصی ما</h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto">راهکارهای دیجیتال اختصاصی برای رشد کسب‌وکار شما</p>
            </div>
        </section>

        <!-- تب‌های خدمات -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap justify-center gap-3 mb-12">
                    <button class="tab-button active px-6 py-2 rounded-full">همه خدمات</button>
                    <button class="tab-button px-6 py-2 rounded-full border border-gray-300">طراحی وبسایت</button>
                    <button class="tab-button px-6 py-2 rounded-full border border-gray-300">توسعه نرم‌افزار</button>
                    <button class="tab-button px-6 py-2 rounded-full border border-gray-300">دیجیتال مارکتینگ</button>
                    <button class="tab-button px-6 py-2 rounded-full border border-gray-300">برندینگ</button>
                </div>

                <!-- خدمات -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- خدمت ۱ -->
                    <div class="service-card bg-white p-8 rounded-xl shadow-md">
                        <div class="service-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3 class="text-xl font-bold text-center text-gray-800 mb-4">طراحی وبسایت اختصاصی</h3>
                        <p class="text-gray-600 text-center mb-6">
                            طراحی وبسایت کاملاً سفارشی متناسب با هویت برند و نیازهای کسب‌وکار شما
                        </p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check text-indigo-500 ml-2"></i>
                                طراحی ریسپانسیو و واکنش‌گرا
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check text-indigo-500 ml-2"></i>
                                رابط کاربری مدرن
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check text-indigo-500 ml-2"></i>
                                بهینه‌سازی برای سئو
                            </li>
                        </ul>
                        <div class="text-center">
                            <a href="#" class="inline-block px-6 py-2 bg-indigo-50 text-indigo-600 rounded-full hover:bg-indigo-100 transition">
                                جزئیات بیشتر
                            </a>
                        </div>
                    </div>

                    <!-- خدمت ۲ -->
                    <div class="service-card bg-white p-8 rounded-xl shadow-md">
                        <div class="service-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3 class="text-xl font-bold text-center text-gray-800 mb-4">توسعه اپلیکیشن موبایل</h3>
                        <p class="text-gray-600 text-center mb-6">
                            طراحی و توسعه اپلیکیشن‌های موبایل بومی و هیبریدی برای پلتفرم‌های مختلف
                        </p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check text-indigo-500 ml-2"></i>
                                توسعه برای iOS و Android
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check text-indigo-500 ml-2"></i>
                                رابط کاربری جذاب
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check text-indigo-500 ml-2"></i>
                                یکپارچه‌سازی با سرویس‌های مختلف
                            </li>
                        </ul>
                        <div class="text-center">
                            <a href="#" class="inline-block px-6 py-2 bg-indigo-50 text-indigo-600 rounded-full hover:bg-indigo-100 transition">
                                جزئیات بیشتر
                            </a>
                        </div>
                    </div>

                    <!-- خدمت ۳ -->
                    <div class="service-card bg-white p-8 rounded-xl shadow-md">
                        <div class="service-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h3 class="text-xl font-bold text-center text-gray-800 mb-4">بهینه‌سازی موتورهای جستجو (سئو)</h3>
                        <p class="text-gray-600 text-center mb-6">
                            بهبود رتبه سایت شما در نتایج جستجو و افزایش ترافیک ارگانیک
                        </p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check text-indigo-500 ml-2"></i>
                                تحلیل کامل سایت
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check text-indigo-500 ml-2"></i>
                                بهینه‌سازی محتوا
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check text-indigo-500 ml-2"></i>
                                لینک‌بیلدینگ حرفه‌ای
                            </li>
                        </ul>
                        <div class="text-center">
                            <a href="#" class="inline-block px-6 py-2 bg-indigo-50 text-indigo-600 rounded-full hover:bg-indigo-100 transition">
                                جزئیات بیشتر
                            </a>
                        </div>
                    </div>

                    <!-- خدمت ۴ -->
                    <div class="service-card bg-white p-8 rounded-xl shadow-md">
                        <div class="service-icon">
                            <i class="fas fa-ad"></i>
                        </div>
                        <h3 class="text-xl font-bold text-center text-gray-800 mb-4">تبلیغات دیجیتال</h3>
                        <p class="text-gray-600 text-center mb-6">
                            مدیریت کمپین‌های تبلیغاتی در گوگل ادز، اینستاگرام و سایر پلتفرم‌ها
                        </p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check text-indigo-500 ml-2"></i>
                                تبلیغات گوگل ادز
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check text-indigo-500 ml-2"></i>
                                تبلیغات اینستاگرام
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check text-indigo-500 ml-2"></i>
                                تبلیغات در شبکه‌های اجتماعی
                            </li>
                        </ul>
                        <div class="text-center">
                            <a href="#" class="inline-block px-6 py-2 bg-indigo-50 text-indigo-600 rounded-full hover:bg-indigo-100 transition">
                                جزئیات بیشتر
                            </a>
                        </div>
                    </div>

                    <!-- خدمت ۵ -->
                    <div class="service-card bg-white p-8 rounded-xl shadow-md">
                        <div class="service-icon">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <h3 class="text-xl font-bold text-center text-gray-800 mb-4">طراحی هویت بصری</h3>
                        <p class="text-gray-600 text-center mb-6">
                            طراحی لوگو و هویت بصری منحصر به فرد برای برند شما
                        </p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check text-indigo-500 ml-2"></i>
                                طراحی لوگو حرفه‌ای
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check text-indigo-500 ml-2"></i>
                                راهنمای هویت بصری
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check text-indigo-500 ml-2"></i>
                                طراحی کارت ویزیت و سربرگ
                            </li>
                        </ul>
                        <div class="text-center">
                            <a href="#" class="inline-block px-6 py-2 bg-indigo-50 text-indigo-600 rounded-full hover:bg-indigo-100 transition">
                                جزئیات بیشتر
                            </a>
                        </div>
                    </div>

                    <!-- خدمت ۶ -->
                    <div class="service-card bg-white p-8 rounded-xl shadow-md">
                        <div class="service-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3 class="text-xl font-bold text-center text-gray-800 mb-4">مشاوره استراتژی دیجیتال</h3>
                        <p class="text-gray-600 text-center mb-6">
                            ارائه راهکارهای تخصصی برای رشد کسب‌وکار شما در فضای دیجیتال
                        </p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check text-indigo-500 ml-2"></i>
                                تحلیل بازار و رقبا
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check text-indigo-500 ml-2"></i>
                                تدوین استراتژی محتوا
                            </li>
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check text-indigo-500 ml-2"></i>
                                برنامه‌ریزی کمپین‌های تبلیغاتی
                            </li>
                        </ul>
                        <div class="text-center">
                            <a href="#" class="inline-block px-6 py-2 bg-indigo-50 text-indigo-600 rounded-full hover:bg-indigo-100 transition">
                                جزئیات بیشتر
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- فرآیند کار -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-16">فرآیند همکاری با ما</h2>
                
                <div class="flex flex-col md:flex-row">
                    <!-- مرحله ۱ -->
                    <div class="md:w-1/4 px-4 mb-10 md:mb-0">
                        <div class="bg-white p-6 rounded-xl shadow-sm text-center h-full">
                            <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-indigo-600 font-bold text-xl">۱</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">مشاوره اولیه</h3>
                            <p class="text-gray-600">
                                بررسی نیازها و اهداف کسب‌وکار شما در جلسه مشاوره رایگان
                            </p>
                        </div>
                    </div>
                    
                    <!-- مرحله ۲ -->
                    <div class="md:w-1/4 px-4 mb-10 md:mb-0">
                        <div class="bg-white p-6 rounded-xl shadow-sm text-center h-full">
                            <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-indigo-600 font-bold text-xl">۲</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">تحلیل و پیشنهاد</h3>
                            <p class="text-gray-600">
                                ارائه پیشنهاد فنی و مالی متناسب با نیازهای شما
                            </p>
                        </div>
                    </div>
                    
                    <!-- مرحله ۳ -->
                    <div class="md:w-1/4 px-4 mb-10 md:mb-0">
                        <div class="bg-white p-6 rounded-xl shadow-sm text-center h-full">
                            <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-indigo-600 font-bold text-xl">۳</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">اجرا و توسعه</h3>
                            <p class="text-gray-600">
                                پیاده‌سازی پروژه با بالاترین استانداردهای فنی
                            </p>
                        </div>
                    </div>
                    
                    <!-- مرحله ۴ -->
                    <div class="md:w-1/4 px-4">
                        <div class="bg-white p-6 rounded-xl shadow-sm text-center h-full">
                            <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-indigo-600 font-bold text-xl">۴</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">تحویل و پشتیبانی</h3>
                            <p class="text-gray-600">
                                تحویل پروژه و ارائه پشتیبانی بلندمدت
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-16 bg-gradient-to-r from-indigo-600 to-purple-600 text-white">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-3xl font-bold mb-6">آماده شروع پروژه خود هستید؟</h2>
                <p class="text-xl mb-8 max-w-2xl mx-auto">با ما در تماس باشید تا درباره نیازهای کسب‌وکار شما صحبت کنیم</p>
                <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4 sm:space-x-reverse">
                    <a href="/contact" class="px-8 py-3 bg-white text-indigo-600 rounded-full font-medium hover:bg-gray-100 transition shadow-lg">
                        درخواست مشاوره رایگان
                    </a>
                    <a href="tel:+982112345678" class="px-8 py-3 border-2 border-white text-white rounded-full font-medium hover:bg-white/10 transition">
                        تماس با ما
                    </a>
                </div>
            </div>
        </section>
    </main>

    <script>
        // فعال کردن تب‌ها
        document.querySelectorAll('.tab-button').forEach(button => {
            button.addEventListener('click', function() {
                document.querySelector('.tab-button.active').classList.remove('active');
                this.classList.add('active');
            });
        });
    </script>

@endsection