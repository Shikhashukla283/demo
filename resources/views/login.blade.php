<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="container items-center">
        <div class="justify-center flex flex-col items-center h-screen">
            <div class="p-6 border-black border">
                <form action="{{route('loginprocess')}}" method="post" enctype="multipart/form-data">
                    @csrf
                   
                    <div class="flex mb-2">
                        <input type="email" name="email" class="border border-black rounded py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline focus:border-purple-500" placeholder="Email">
                    </div>
                    <div class="flex mb-2 gap-3">

                        <input type="password" name="password" class=" border border-black rounded py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline focus:border-purple-500" placeholder="Password" required>
                    </div>
                    
                    <div>
                        <input type="submit" class="btn bg-[#33c2d0] px-4 py-2 w-full" value="Login">
                    </div>
                </form>
                <p class="text-center">Not a Member? <a href="{{route('signup')}}">SignUp</a> </p>

            </div>
        </div>


    </div>





</body>

</html>