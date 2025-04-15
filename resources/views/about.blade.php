@extends('layout.master')

@section('title', 'درباره ما')

@section('contact')
<style>
    .glass-card {
        background: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }
    .team-member:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }
</style>

@if(session('contact'))
    <div class="alert alert-success">
        {{ session('contact') }}
    </div>
@endif

<main>
    <!-- هیرو -->
    <section class="relative bg-gradient-to-r from-indigo-500 to-purple-600 text-white py-20">
        <div class="absolute inset-0 opacity-10" style="background-image: url('https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'); background-size: cover;"></div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">درباره نوآوران</h1>
            <p class="text-xl md:text-2xl max-w-3xl mx-auto">ما تیمی از متخصصان خلاق هستیم که با اشتیاق به حل مشکلات کسب‌وکارها می‌پردازیم</p>
        </div>
    </section>

    <!-- داستان ما -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0 md:pr-10">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">داستان ما</h2>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        شرکت نوآوران در سال ۱۳۹۵ با هدف ارائه راهکارهای دیجیتال خلاقانه تأسیس شد. ما باور داریم که هر کسب‌وکاری شایسته بهترین راهکارهای فناوری است.
                    </p>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        در طول این سال‌ها، ما به بیش از ۲۰۰ کسب‌وکار در سراسر کشور کمک کرده‌ایم تا حضور دیجیتال خود را تقویت کنند و به اهداف تجاری خود دست یابند.
                    </p>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-indigo-50 p-4 rounded-lg">
                            <h3 class="text-indigo-600 font-bold text-xl">+۲۰۰</h3>
                            <p class="text-gray-600">پروژه موفق</p>
                        </div>
                        <div class="bg-purple-50 p-4 rounded-lg">
                            <h3 class="text-purple-600 font-bold text-xl">۹۵٪</h3>
                            <p class="text-gray-600">رضایت مشتریان</p>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                         alt="تیم نوآوران" 
                         class="rounded-xl shadow-lg w-full h-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- ارزش‌های ما -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-16">ارزش‌های ما</h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- ارزش ۱ -->
                <div class="glass-card p-8 rounded-xl shadow-sm hover:shadow-md transition">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-lightbulb text-indigo-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">خلاقیت</h3>
                    <p class="text-gray-600">ما با تفکر خارج از چارچوب‌ها و ارائه راهکارهای نوآورانه، کسب‌وکار شما را متمایز می‌کنیم.</p>
                </div>
                
                <!-- ارزش ۲ -->
                <div class="glass-card p-8 rounded-xl shadow-sm hover:shadow-md transition">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-medal text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">کیفیت</h3>
                    <p class="text-gray-600">تعهد ما به کیفیت بی‌چون و چرا است. هر پروژه را با بالاترین استانداردها اجرا می‌کنیم.</p>
                </div>
                
                <!-- ارزش ۳ -->
                <div class="glass-card p-8 rounded-xl shadow-sm hover:shadow-md transition">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-hands-helping text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">همکاری</h3>
                    <p class="text-gray-600">با شما همگام می‌شویم تا به اهدافتان برسید. موفقیت شما، موفقیت ماست.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- تیم ما -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">با تیم ما آشنا شوید</h2>
            <p class="text-gray-600 text-center max-w-2xl mx-auto mb-16">متخصصان بااستعداد و پرانرژی که پشت هر پروژه موفق ایستاده‌اند</p>
            
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- عضو تیم ۱ -->
                <div class="team-member bg-white rounded-xl overflow-hidden shadow-md transition duration-300">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" 
                         alt="علی محمدی" 
                         class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800">علی محمدی</h3>
                        <p class="text-indigo-600 mb-3">مدیرعامل و مؤسس</p>
                        <p class="text-gray-600 text-sm">کارآفرین سریالی با بیش از ۱۵ سال تجربه در زمینه فناوری اطلاعات</p>
                        <div class="flex space-x-3 space-x-reverse mt-4">
                            <a href="#" class="text-gray-500 hover:text-indigo-600"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-gray-500 hover:text-indigo-600"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- عضو تیم ۲ -->
                <div class="team-member bg-white rounded-xl overflow-hidden shadow-md transition duration-300">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" 
                         alt="سارا احمدی" 
                         class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800">سارا احمدی</h3>
                        <p class="text-purple-600 mb-3">مدیر طراحی</p>
                        <p class="text-gray-600 text-sm">طراح تجربه کاربری با تمرکز بر ایجاد رابط‌های کاربری جذاب و کاربرپسند</p>
                        <div class="flex space-x-3 space-x-reverse mt-4">
                            <a href="#" class="text-gray-500 hover:text-indigo-600"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-gray-500 hover:text-indigo-600"><i class="fab fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- عضو تیم ۳ -->
                <div class="team-member bg-white rounded-xl overflow-hidden shadow-md transition duration-300">
                    <img src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" 
                         alt="رضا حسینی" 
                         class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800">رضا حسینی</h3>
                        <p class="text-blue-600 mb-3">توسعه‌دهنده ارشد</p>
                        <p class="text-gray-600 text-sm">متخصص فول‌استک با تسلط بر آخرین فناوری‌های وب</p>
                        <div class="flex space-x-3 space-x-reverse mt-4">
                            <a href="#" class="text-gray-500 hover:text-indigo-600"><i class="fab fa-github"></i></a>
                            <a href="#" class="text-gray-500 hover:text-indigo-600"><i class="fab fa-stack-overflow"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- عضو تیم ۴ -->
                <div class="team-member bg-white rounded-xl overflow-hidden shadow-md transition duration-300">
                    <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" 
                         alt="نازنین کریمی" 
                         class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800">نازنین کریمی</h3>
                        <p class="text-pink-600 mb-3">مدیر بازاریابی</p>
                        <p class="text-gray-600 text-sm">استراتژیست دیجیتال مارکتینگ با تخصص در رشد کسب‌وکارها</p>
                        <div class="flex space-x-3 space-x-reverse mt-4">
                            <a href="#" class="text-gray-500 hover:text-indigo-600"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-gray-500 hover:text-indigo-600"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 bg-gradient-to-r from-indigo-600 to-purple-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">آماده همکاری با ما هستید؟</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">بیایید درباره پروژه شما صحبت کنیم و بهترین راهکار را ارائه دهیم</p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4 sm:space-x-reverse">
                <a href="#" class="px-8 py-3 bg-white text-indigo-600 rounded-full font-medium hover:bg-gray-100 transition shadow-lg">
                    درخواست مشاوره رایگان
                </a>
                <a href="#" class="px-8 py-3 border-2 border-white text-white rounded-full font-medium hover:bg-white/10 transition">
                    تماس با ما
                </a>
            </div>
        </div>
    </section>
</main>
@endsection
