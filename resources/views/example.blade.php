@extends('layout.master')

@section('title','نمونه کار')

@section('contact')
<style>
    .portfolio-filter button.active {
        background: linear-gradient(to right, #4f46e5, #7c3aed);
        color: white;
    }
    .portfolio-item {
        transition: all 0.3s ease;
        overflow: hidden;
    }
    .portfolio-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
    .portfolio-overlay {
        background: rgba(79, 70, 229, 0.9);
        opacity: 0;
        transition: all 0.3s ease;
    }
    .portfolio-item:hover .portfolio-overlay {
        opacity: 1;
    }
</style>
</head>
<body class="bg-gray-50">

<!-- بخش اصلی نمونه کارها -->
<main>
    <!-- هیرو -->
    <section class="relative bg-gradient-to-r from-indigo-500 to-purple-600 text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">نمونه کارهای ما</h1>
            <p class="text-xl md:text-2xl max-w-3xl mx-auto">برخی از پروژه‌های موفق ما که با خلاقیت و تخصص اجرا شده‌اند</p>
        </div>
    </section>

    <!-- فیلتر نمونه کارها -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="portfolio-filter flex flex-wrap justify-center gap-3 mb-12">
                <button class="active px-6 py-2 rounded-full border border-gray-300 hover:border-indigo-500 transition">همه</button>
                <button class="px-6 py-2 rounded-full border border-gray-300 hover:border-indigo-500 transition">طراحی وبسایت</button>
                <button class="px-6 py-2 rounded-full border border-gray-300 hover:border-indigo-500 transition">اپلیکیشن موبایل</button>
                <button class="px-6 py-2 rounded-full border border-gray-300 hover:border-indigo-500 transition">برندینگ</button>
                <button class="px-6 py-2 rounded-full border border-gray-300 hover:border-indigo-500 transition">دیجیتال مارکتینگ</button>
            </div>

            <!-- گالری نمونه کارها -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- پروژه ۱ -->
                <div class="portfolio-item bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                             alt="پروژه فروشگاه اینترنتی" 
                             class="w-full h-64 object-cover">
                        <div class="portfolio-overlay absolute inset-0 flex items-center justify-center p-6">
                            <div class="text-white text-center">
                                <h3 class="text-xl font-bold mb-2">فروشگاه اینترنتی</h3>
                                <p class="mb-4">طراحی و توسعه فروشگاه آنلاین با امکانات پیشرفته</p>
                                <a href="#" class="px-4 py-2 bg-white text-indigo-600 rounded-full text-sm font-medium">مشاهده جزئیات</a>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">فروشگاه اینترنتی پوشاک</h3>
                        <p class="text-gray-600">طراحی وبسایت - توسعه فروشگاه</p>
                    </div>
                </div>

                <!-- پروژه ۲ -->
                <div class="portfolio-item bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                             alt="پروژه اپلیکیشن موبایل" 
                             class="w-full h-64 object-cover">
                        <div class="portfolio-overlay absolute inset-0 flex items-center justify-center p-6">
                            <div class="text-white text-center">
                                <h3 class="text-xl font-bold mb-2">اپلیکیشن غذا</h3>
                                <p class="mb-4">توسعه اپلیکیشن سفارش غذا با رابط کاربری جذاب</p>
                                <a href="#" class="px-4 py-2 bg-white text-indigo-600 rounded-full text-sm font-medium">مشاهده جزئیات</a>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">اپلیکیشن سفارش غذا</h3>
                        <p class="text-gray-600">توسعه اپلیکیشن موبایل - iOS و Android</p>
                    </div>
                </div>

                <!-- پروژه ۳ -->
                <div class="portfolio-item bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                             alt="پروژه برندینگ" 
                             class="w-full h-64 object-cover">
                        <div class="portfolio-overlay absolute inset-0 flex items-center justify-center p-6">
                            <div class="text-white text-center">
                                <h3 class="text-xl font-bold mb-2">هویت بصری برند</h3>
                                <p class="mb-4">طراحی هویت بصری و استراتژی برندینگ</p>
                                <a href="#" class="px-4 py-2 bg-white text-indigo-600 rounded-full text-sm font-medium">مشاهده جزئیات</a>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">هویت بصری کافی شاپ</h3>
                        <p class="text-gray-600">برندینگ - طراحی لوگو - هویت بصری</p>
                    </div>
                </div>

                <!-- پروژه ۴ -->
                <div class="portfolio-item bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                             alt="پروژه سئو" 
                             class="w-full h-64 object-cover">
                        <div class="portfolio-overlay absolute inset-0 flex items-center justify-center p-6">
                            <div class="text-white text-center">
                                <h3 class="text-xl font-bold mb-2">بهینه‌سازی سایت</h3>
                                <p class="mb-4">بهینه‌سازی موتورهای جستجو و افزایش ترافیک</p>
                                <a href="#" class="px-4 py-2 bg-white text-indigo-600 rounded-full text-sm font-medium">مشاهده جزئیات</a>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">بهینه‌سازی سایت فروشگاهی</h3>
                        <p class="text-gray-600">سئو - دیجیتال مارکتینگ</p>
                    </div>
                </div>

                <!-- پروژه ۵ -->
                <div class="portfolio-item bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                             alt="پروژه وبسایت شرکتی" 
                             class="w-full h-64 object-cover">
                        <div class="portfolio-overlay absolute inset-0 flex items-center justify-center p-6">
                            <div class="text-white text-center">
                                <h3 class="text-xl font-bold mb-2">وبسایت شرکتی</h3>
                                <p class="mb-4">طراحی وبسایت شرکتی با امکانات مدیریت محتوا</p>
                                <a href="#" class="px-4 py-2 bg-white text-indigo-600 rounded-full text-sm font-medium">مشاهده جزئیات</a>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">وبسایت شرکت فناوری</h3>
                        <p class="text-gray-600">طراحی وبسایت - توسعه CMS اختصاصی</p>
                    </div>
                </div>

                <!-- پروژه ۶ -->
                <div class="portfolio-item bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1559028012-481c04fa702d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                             alt="پروژه شبکه‌های اجتماعی" 
                             class="w-full h-64 object-cover">
                        <div class="portfolio-overlay absolute inset-0 flex items-center justify-center p-6">
                            <div class="text-white text-center">
                                <h3 class="text-xl font-bold mb-2">مدیریت شبکه‌های اجتماعی</h3>
                                <p class="mb-4">استراتژی و مدیریت شبکه‌های اجتماعی</p>
                                <a href="#" class="px-4 py-2 bg-white text-indigo-600 rounded-full text-sm font-medium">مشاهده جزئیات</a>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">کمپین اینستاگرامی</h3>
                        <p class="text-gray-600">دیجیتال مارکتینگ - مدیریت شبکه‌های اجتماعی</p>
                    </div>
                </div>
            </div>

            <!-- دکمه مشاهده بیشتر -->
            <div class="text-center mt-12">
                <button class="px-8 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-full hover:from-indigo-700 hover:to-purple-700 transition shadow-lg">
                    مشاهده پروژه‌های بیشتر
                </button>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">آماده شروع پروژه خود هستید؟</h2>
            <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">با ما در تماس باشید تا درباره پروژه شما صحبت کنیم</p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4 sm:space-x-reverse">
                <a href="#" class="px-8 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-full hover:from-indigo-700 hover:to-purple-700 transition shadow-lg">
                    درخواست مشاوره رایگان
                </a>
                <a href="#" class="px-8 py-3 border-2 border-indigo-600 text-indigo-600 rounded-full hover:bg-indigo-50 transition">
                    تماس با ما
                </a>
            </div>
        </div>
    </section>
</main>

<script>
    // فیلتر نمونه کارها
    document.querySelectorAll('.portfolio-filter button').forEach(button => {
        button.addEventListener('click', function() {
            document.querySelector('.portfolio-filter button.active').classList.remove('active');
            this.classList.add('active');
        });
    });
</script>
@endsection