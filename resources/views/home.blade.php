@extends('layout.master')

@section('title', 'خانه') 

@section('contact')
<!-- هیرو سکشن پیشرفته -->
<section class="hero-gradient text-white pt-24 pb-32 relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full opacity-10">
        <div class="absolute top-20 left-20 w-64 h-64 rounded-full bg-purple-300 filter blur-3xl"></div>
        <div class="absolute bottom-10 right-1/4 w-80 h-80 rounded-full bg-indigo-300 filter blur-3xl"></div>
    </div>
    
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row items-center">
            <div class="lg:w-1/2 mb-16 lg:mb-0 relative z-10">
                <div class="max-w-lg">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                        <span class="bg-clip-text text-transparent bg-gradient-to-r from-white to-indigo-100">تحول دیجیتال</span>
                        <br>کسب و کار شما
                    </h1>
                    <p class="text-xl text-indigo-100 mb-8 leading-relaxed">
                        با راهکارهای نوآورانه ما، کسب و کار خود را به سطح جدیدی ببرید. تیم متخصص ما آماده ارائه بهترین خدمات دیجیتال برای رشد شماست.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#" class="bg-white text-indigo-600 px-8 py-3 rounded-lg text-center font-bold hover:bg-gray-100 transition duration-300 shadow-lg hover:shadow-xl flex items-center justify-center">
                            <i class="fas fa-play-circle ml-2"></i>
                            دموی محصول
                        </a>
                        <a href="#" class="border-2 border-white text-white px-8 py-3 rounded-lg text-center font-bold hover:bg-white hover:text-indigo-600 transition duration-300 flex items-center justify-center">
                            <i class="fas fa-phone-alt ml-2"></i>
                            مشاوره رایگان
                        </a>
                    </div>
                    
                    <div class="mt-10 flex items-center">
                        <div class="flex -space-x-2">
                            <img src="https://randomuser.me/api/portraits/women/12.jpg" class="w-10 h-10 rounded-full border-2 border-white">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" class="w-10 h-10 rounded-full border-2 border-white">
                            <img src="https://randomuser.me/api/portraits/women/45.jpg" class="w-10 h-10 rounded-full border-2 border-white">
                        </div>
                        <div class="mr-4">
                            <p class="text-indigo-100 font-medium">توسط بیش از 500+ کسب و کار معتبر</p>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 ml-1"></i>
                                <i class="fas fa-star text-yellow-400 ml-1"></i>
                                <i class="fas fa-star text-yellow-400 ml-1"></i>
                                <i class="fas fa-star text-yellow-400 ml-1"></i>
                                <i class="fas fa-star text-yellow-400 ml-1"></i>
                                <span class="text-white font-bold mr-2">5.0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="lg:w-1/2 relative z-10">
                <div class="relative">
                    <div class="absolute -top-10 -right-10 w-64 h-64 bg-purple-400 rounded-full filter blur-2xl opacity-20"></div>
                    <div class="absolute -bottom-10 -left-10 w-72 h-72 bg-indigo-400 rounded-full filter blur-2xl opacity-20"></div>
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Hero Image" class="rounded-2xl shadow-2xl w-full max-w-2xl mx-auto border-8 border-white/20">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- برندهای همکار -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-10">
            <p class="text-gray-500 font-medium">همکاران و مشتریان ما</p>
        </div>
        <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16 opacity-60 hover:opacity-100 transition duration-300">
            <img src="https://logo.clearbit.com/microsoft.com" alt="Microsoft" class="h-8 grayscale hover:grayscale-0 transition duration-300">
            <img src="https://logo.clearbit.com/google.com" alt="Google" class="h-8 grayscale hover:grayscale-0 transition duration-300">
            <img src="https://logo.clearbit.com/amazon.com" alt="Amazon" class="h-8 grayscale hover:grayscale-0 transition duration-300">
            <img src="https://logo.clearbit.com/airbnb.com" alt="Airbnb" class="h-8 grayscale hover:grayscale-0 transition duration-300">
            <img src="https://logo.clearbit.com/slack.com" alt="Slack" class="h-10 grayscale hover:grayscale-0 transition duration-300">
        </div>
    </div>
</section>

<!-- ویژگی‌های کلیدی -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <span class="inline-block px-3 py-1 text-sm font-medium text-indigo-600 bg-indigo-50 rounded-full mb-4">چرا ما؟</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">راهکارهای اختصاصی برای نیازهای شما</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">ما با ارائه راهکارهای نوآورانه و تخصصی، کسب و کار شما را به سطح جدیدی می‌رسانیم</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- ویژگی 1 -->
            <div class="bg-white p-8 rounded-xl feature-card transition-all duration-300 shadow-md hover:shadow-xl">
                <div class="w-14 h-14 rounded-lg bg-indigo-50 text-indigo-600 flex items-center justify-center mb-6">
                    <i class="fas fa-bolt text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">راهکارهای سریع</h3>
                <p class="text-gray-600 mb-4">با استفاده از تکنولوژی‌های روز دنیا، سریعترین راهکارها را برای شما پیاده‌سازی می‌کنیم</p>
                <a href="#" class="text-indigo-600 font-medium flex items-center">
                    بیشتر بدانید
                    <i class="fas fa-arrow-left mr-2 mt-1"></i>
                </a>
            </div>
            
            <!-- ویژگی 2 -->
            <div class="bg-white p-8 rounded-xl feature-card transition-all duration-300 shadow-md hover:shadow-xl">
                <div class="w-14 h-14 rounded-lg bg-purple-50 text-purple-600 flex items-center justify-center mb-6">
                    <i class="fas fa-shield-alt text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">امنیت بالا</h3>
                <p class="text-gray-600 mb-4">با استانداردهای امنیتی پیشرفته، اطلاعات شما را به بهترین شکل محافظت می‌کنیم</p>
                <a href="#" class="text-purple-600 font-medium flex items-center">
                    بیشتر بدانید
                    <i class="fas fa-arrow-left mr-2 mt-1"></i>
                </a>
            </div>
            
            <!-- ویژگی 3 -->
            <div class="bg-white p-8 rounded-xl feature-card transition-all duration-300 shadow-md hover:shadow-xl">
                <div class="w-14 h-14 rounded-lg bg-green-50 text-green-600 flex items-center justify-center mb-6">
                    <i class="fas fa-headset text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">پشتیبانی 24/7</h3>
                <p class="text-gray-600 mb-4">تیم پشتیبانی ما به صورت 24 ساعته و 7 روز هفته آماده پاسخگویی به شماست</p>
                <a href="#" class="text-green-600 font-medium flex items-center">
                    بیشتر بدانید
                    <i class="fas fa-arrow-left mr-2 mt-1"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- آمار و ارقام -->
<section class="py-20 bg-indigo-600 text-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div class="p-6">
                <div class="text-4xl md:text-5xl font-bold mb-2">250+</div>
                <p class="text-indigo-100">پروژه موفق</p>
            </div>
            <div class="p-6">
                <div class="text-4xl md:text-5xl font-bold mb-2">98%</div>
                <p class="text-indigo-100">رضایت مشتریان</p>
            </div>
            <div class="p-6">
                <div class="text-4xl md:text-5xl font-bold mb-2">50+</div>
                <p class="text-indigo-100">متخصصین</p>
            </div>
            <div class="p-6">
                <div class="text-4xl md:text-5xl font-bold mb-2">24/7</div>
                <p class="text-indigo-100">پشتیبانی</p>
            </div>
        </div>
    </div>
</section>

<!-- نمونه کارها -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <span class="inline-block px-3 py-1 text-sm font-medium text-indigo-600 bg-indigo-50 rounded-full mb-4">نمونه کارها</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">پروژه‌های موفق ما</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">برخی از پروژه‌هایی که با همکاری مشتریان عزیز انجام داده‌ایم</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- پروژه 1 -->
            <div class="relative group overflow-hidden rounded-2xl shadow-lg">
                <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Project 1" class="w-full h-64 object-cover transition duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end p-6">
                    <h3 class="text-xl font-bold text-white mb-2">وبسایت فروشگاهی</h3>
                    <p class="text-indigo-200 mb-4">طراحی و توسعه یک پلتفرم تجارت الکترونیک پیشرفته</p>
                    <a href="#" class="text-white font-medium flex items-center opacity-0 group-hover:opacity-100 transition duration-300">
                        مشاهده جزئیات
                        <i class="fas fa-arrow-left mr-2 mt-1"></i>
                    </a>
                </div>
            </div>
            
            <!-- پروژه 2 -->
            <div class="relative group overflow-hidden rounded-2xl shadow-lg">
                <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Project 2" class="w-full h-64 object-cover transition duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end p-6">
                    <h3 class="text-xl font-bold text-white mb-2">اپلیکیشن موبایل</h3>
                    <p class="text-indigo-200 mb-4">توسعه یک اپلیکیشن مدیریت کسب و کار برای اندروید و iOS</p>
                    <a href="#" class="text-white font-medium flex items-center opacity-0 group-hover:opacity-100 transition duration-300">
                        مشاهده جزئیات
                        <i class="fas fa-arrow-left mr-2 mt-1"></i>
                    </a>
                </div>
            </div>
            
            <!-- پروژه 3 -->
            <div class="relative group overflow-hidden rounded-2xl shadow-lg">
                <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Project 3" class="w-full h-64 object-cover transition duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end p-6">
                    <h3 class="text-xl font-bold text-white mb-2">وبسایت شرکتی</h3>
                    <p class="text-indigo-200 mb-4">طراحی یک وبسایت مدرن و حرفه‌ای برای یک شرکت بین‌المللی</p>
                    <a href="#" class="text-white font-medium flex items-center opacity-0 group-hover:opacity-100 transition duration-300">
                        مشاهده جزئیات
                        <i class="fas fa-arrow-left mr-2 mt-1"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <a href="#" class="inline-flex items-center px-6 py-3 border border-indigo-600 text-indigo-600 rounded-lg font-bold hover:bg-indigo-600 hover:text-white transition duration-300">
                مشاهده همه پروژه‌ها
                <i class="fas fa-arrow-left mr-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- نظرات مشتریان -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <span class="inline-block px-3 py-1 text-sm font-medium text-indigo-600 bg-indigo-50 rounded-full mb-4">نظرات مشتریان</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">مشتریان ما چه می‌گویند؟</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">نظرات برخی از مشتریان عزیز که از خدمات ما استفاده کرده‌اند</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- نظر 1 -->
            <div class="testimonial-card p-8 rounded-2xl">
                <div class="flex items-center mb-6">
                    <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Customer" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="font-bold">نگار محمدی</h4>
                        <p class="text-gray-500 text-sm">مدیر عامل شرکت آرمان</p>
                    </div>
                </div>
                <p class="text-gray-700 mb-6">"با همکاری تیم نوآوران، فروش آنلاین ما 300% افزایش یافت. راهکارهای خلاقانه و پشتیبانی عالی آنها واقعا تحسین برانگیز است."</p>
                <div class="flex">
                    <i class="fas fa-star text-yellow-400 ml-1"></i>
                    <i class="fas fa-star text-yellow-400 ml-1"></i>
                    <i class="fas fa-star text-yellow-400 ml-1"></i>
                    <i class="fas fa-star text-yellow-400 ml-1"></i>
                    <i class="fas fa-star text-yellow-400 ml-1"></i>
                </div>
            </div>
            
            <!-- نظر 2 -->
            <div class="testimonial-card p-8 rounded-2xl">
                <div class="flex items-center mb-6">
                    <img src="https://randomuser.me/api/portraits/men/54.jpg" alt="Customer" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="font-bold">امیر حسینی</h4>
                        <p class="text-gray-500 text-sm">مدیر فنی شرکت دانش بنیان</p>
                    </div>
                </div>
                <p class="text-gray-700 mb-6">"اپلیکیشنی که تیم نوآوران برای ما توسعه دادند، دقیقا مطابق با نیازهای کسب و کار ما بود و در مدت کوتاهی به نتیجه رسیدیم."</p>
                <div class="flex">
                    <i class="fas fa-star text-yellow-400 ml-1"></i>
                    <i class="fas fa-star text-yellow-400 ml-1"></i>
                    <i class="fas fa-star text-yellow-400 ml-1"></i>
                    <i class="fas fa-star text-yellow-400 ml-1"></i>
                    <i class="fas fa-star text-yellow-400 ml-1"></i>
                </div>
            </div>
            
            <!-- نظر 3 -->
            <div class="testimonial-card p-8 rounded-2xl">
                <div class="flex items-center mb-6">
                    <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Customer" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="font-bold">سارا رضایی</h4>
                        <p class="text-gray-500 text-sm">مدیر بازاریابی مجموعه آریا</p>
                    </div>
                </div>
                <p class="text-gray-700 mb-6">"استراتژی دیجیتال مارکتینگ که تیم نوآوران برای ما طراحی کرد، نرخ تبدیل وبسایت ما را 5 برابر افزایش داد. واقعا حرفه‌ای هستند."</p>
                <div class="flex">
                    <i class="fas fa-star text-yellow-400 ml-1"></i>
                    <i class="fas fa-star text-yellow-400 ml-1"></i>
                    <i class="fas fa-star text-yellow-400 ml-1"></i>
                    <i class="fas fa-star text-yellow-400 ml-1"></i>
                    <i class="fas fa-star text-yellow-400 ml-1"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA بخش -->
<section class="py-20 bg-gradient-to-r from-indigo-600 to-purple-600 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">آماده تحول در کسب و کار خود هستید؟</h2>
        <p class="text-xl text-indigo-100 max-w-3xl mx-auto mb-10">همین حالا با ما تماس بگیرید و از مشاوره رایگان ما بهره‌مند شوید</p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="#" class="bg-white text-indigo-600 px-8 py-4 rounded-lg text-lg font-bold hover:bg-gray-100 transition duration-300 shadow-lg hover:shadow-xl flex items-center justify-center">
                <i class="fas fa-phone-alt ml-2"></i>
                تماس با ما
            </a>
            <a href="#" class="border-2 border-white text-white px-8 py-4 rounded-lg text-lg font-bold hover:bg-white hover:text-indigo-600 transition duration-300 flex items-center justify-center">
                <i class="fas fa-envelope ml-2"></i>
                ارسال پیام
            </a>
        </div>
    </div>
</section>

@endsection