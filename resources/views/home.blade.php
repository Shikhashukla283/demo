<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="h-10 bg-gray-300 flex gap-3">
    <a>LOGO</a>
    <div class="flex absolute right-0 gap-4">
    <a href="{{route('home')}}">Home</a>
    <a href="{{route('signup')}}">Blog</a>
    <a href="{{route('login')}}">Login</a>
    <a href="{{route('signup')}}">SignUp</a>
    </div>


    </div>

</body>
</html>