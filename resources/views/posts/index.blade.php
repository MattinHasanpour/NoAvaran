@extends('layout.master')

@section('title', 'مجله تخصصی')

@section('contact')
    <div class="posts-page bg-gray-50 py-8">
        <div class="container mx-auto px-4">
            <!-- هدر صفحه -->
            <header class="text-center mb-12">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">مجله تخصصی</h1>
                <p class="text-gray-600 max-w-2xl mx-auto">آخرین مقالات و مطالب تخصصی در زمینه‌های مختلف</p>
            </header>

           
            <!-- جستجو -->
            <div class="search-box mb-8">
                <div class="relative max-w-md mx-auto">
                    <input type="text" placeholder="جستجو در مقالات..." 
                           class="w-full pr-10 pl-4 py-2 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button class="absolute left-3 top-2 text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- لیست مقالات -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                @foreach ($posts as $post)
                <article class="bg-white mb-5 rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-lg hover:-translate-y-1">
                    <a href="#">
                        <img src="https://source.unsplash.com/random/600x400/?startup" alt="مقاله استارتاپ" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-2">
                                <span>استارتاپ</span>
                                <span class="mx-2">•</span>
                                <span>۳ ماه پیش</span>
                            </div>
                            <h2 class="text-xl font-bold text-gray-800 mb-3">{{ $post->title }}</h2>
                            <p class="text-gray-600 mb-4 line-clamp-2">{{ $post->body }}</p>
                            <div class="flex items-center text-blue-600 font-medium">
                                <span>مطالعه بیشتر</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                </svg>
                            </div>
                        </div>
                    </a>
                </article>
                @endforeach
            

            
        </div>
    </div>
@endsection
