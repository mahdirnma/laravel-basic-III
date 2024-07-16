<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="w-svw h-svh flex justify-center items-center bg-gray-200">
    <div class="w-2/6 h-5/6 bg-white rounded-xl flex flex-col items-center justify-start">
        <h1 class="text-3xl pt-8">لاگین</h1>
        <form action="" method="get" class="w-5/6 flex flex-col items-end justify-start mt-10">
            <label for="username">نام کاربری</label>
            <input type="text" name="username" id="username" class="w-full h-10 bg-gray-100 rounded mb-10 mt-3">
            <label for="password">رمز عبور</label>
            <input type="password" name="password" id="password" class="w-full h-10 bg-gray-100 rounded mb-10 mt-3">
            <input type="submit" value="ورود" class="mt-10 w-full h-12 text-gray-100 bg-gray-600 rounded  cursor-pointer">
        </form>
    </div>
</div>
</body>
</html>
