<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>بازیابی رمز عبور</title>
    <style>
        body {
            font-family: Tahoma, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
            line-height: 1.7;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }
        .button {
            display: inline-block;
            background-color: #6c63ff;
            color: white;
            padding: 12px 25px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 20px;
        }
        .footer {
            margin-top: 40px;
            font-size: 13px;
            color: #777;
            text-align: center;
        }
        .text{
            color: #6c63ff
        }
        .text-blue{
            color: #63d3ff
        }
    </style>
</head>
<body dir="rtl">
    <div class="container">
        <h2>درخواست تغییر رمز عبور برای وبسایت <span class="text">نوآوران</span></h2>

        <p>کاربر عزیز، شما درخواست بازیابی رمز عبور کردید از وبسایت رسمی <span class="text">نوآوران</span> با آدرس <span class="text-blue">Noauaran.com</span></p>

        <p>شما یا شخصی با استفاده از این ایمیل، درخواستی برای تغییر رمز عبور حساب کاربری شما ارسال کرده است.</p>

        <p>اگر این درخواست از طرف شما بوده است، لطفاً روی دکمه زیر کلیک کنید تا رمز عبور خود را تغییر دهید:</p>

        <a href="{{ route('reset.password', ['token' => $token]) }}" class="button">تغییر رمز عبور</a>

        <p>اگر شما این درخواست را ارسال نکرده‌اید، نیازی به هیچ اقدامی نیست. این ایمیل را نادیده بگیرید و رمز عبور شما بدون تغییر باقی خواهد ماند.</p>

        <div class="footer">
            اگر با مشکلی مواجه شدید، لطفاً با پشتیبانی تماس بگیرید.<br>
            {{ config('about') }}
        </div>
    </div>
</body>
</html>
