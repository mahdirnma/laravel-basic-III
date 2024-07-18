<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="w-svw h-svh">
    <div class="w-full h-[12%] flex items-center flex-row-reverse pr-12 text-xl">
        <h1 class="font-bold text-xl">پنل مدیریت</h1>
        <div class="w-5/6 h-full flex items-center justify-center">
            <nav>
                <ul class="flex flex-row-reverse">
                    <li class="w-32 h-full flex justify-center items-center font-mono text-balance"><a href="{{route('index')}}">داشبورد</a></li>
                    <li class="w-32 h-full flex justify-center items-center font-mono text-balance"><a href="{{route('product.index')}}">محصولات</a></li>
                    <li class="w-32 h-full flex justify-center items-center font-mono text-balance"><a href="">دسته بندی</a></li>
                </ul>
            </nav>
        </div>
    </div>
    @yield('content')
</div>
</body>
</html>
