@extends('layout.master')

@section('title', 'ثبت نام')

@section('contact')
<section class="min-h-screen flex items-center justify-center bg-gradient-to-tr from-indigo-100 via-purple-100 to-white py-20 px-4">
    <div class="bg-white shadow-2xl rounded-xl p-10 w-full max-w-md">
        <h2 class="text-3xl font-bold text-center text-indigo-600 mb-8">ایجاد حساب کاربری</h2>
        @if(session()->has('error'))
            <div class="text-white px-4 py-1 bg-red-600">{{ session('error') }}</div>
        @endif
        @if(session()->has('success'))
            <div class="text-white bg-green-700 py-1 px-3">{{ session('success') }}</div>
        @endif
        <form action="{{ route('register.post') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label for="name" class="block text-gray-700 font-semibold mb-1">نام کامل</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" 
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-300">
                @error('name')
                    <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="email" class="block text-gray-700 font-semibold mb-1">ایمیل</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" 
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-300">
                @error('email')
                    <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="relative">
                <label for="password" class="block text-gray-700 font-semibold mb-1">رمز عبور</label>
                <div class="relative">
                    <input type="password" name="password" id="password" 
                           class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-300 pr-4">
                    <button type="button" class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500 hover:text-gray-700" 
                            onclick="togglePassword('password')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </button>
                </div>
                @error('password')
                    <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="relative">
                <label for="password_confirmation" class="block text-gray-700 font-semibold mb-1">تکرار رمز عبور</label>
                <div class="relative">
                    <input type="password" name="password_confirmation" id="password_confirmation" 
                           class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-300 pr-4">
                    <button type="button" class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500 hover:text-gray-700" 
                            onclick="togglePassword('password_confirmation')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </button>
                </div>
            </div>

            <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition duration-300 font-bold">
                ثبت‌نام
            </button>
        </form>

        <p class="text-center text-sm text-gray-500 mt-6">
            حساب کاربری دارید؟ <a href="{{ route('login') }}" class="text-indigo-600 hover:underline font-semibold">ورود</a>
        </p>
    </div>
</section>

<script>
    function togglePassword(fieldId) {
        const field = document.getElementById(fieldId);
        field.type = field.type === "password" ? "text" : "password";
    }
</script>
@endsection