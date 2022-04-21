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
     
    <a href="{{route('signup')}}">Logout</a>
    </div>
    <div class="w-36 mt-8 bg-gray-300 flex gap-3 absolute left-0 h-48">
    <div class="flex flex-col gap-4 px-3">
    <ul>
        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li><a href="{{route('blog')}}">Blog</a></li>
        <li><a href="{{route('addblog')}}">Add Blog</a></li>
 
    </ul>
    </div>


    </div>

</body>
</html>