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
                <form action="{{route('signupprocess')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="flex mb-2 gap-3">
                        <input type="text" name="fname" class="w-full border border-black rounded py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline focus:border-purple-500" required placeholder="First Name">
                        <input type="text" name="lname" class="w-full border border-black rounded py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline focus:border-purple-500" required placeholder="Last Name">
                    </div>
                    <div class="flex mb-2 gap-3">
                        <input type="email" name="email" class=" w-1/2 border border-black rounded py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline focus:border-purple-500" placeholder="Email">
                        <input type="password" name="password" class=" w-1/2 border border-black rounded py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline focus:border-purple-500" placeholder="Password" required>
                    </div>
                    <div class="flex mb-2 gap-3">
                        <input type="date" name="dob" class=" w-1/2 border border-black rounded py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline focus:border-purple-500" required>
                        <input type="file" name="image" class=" w-1/2 border border-black rounded py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline focus:border-purple-500" required>
                        <select name="role" class=" w-1/2 border border-black rounded py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline focus:border-purple-500" required>
                            <option>Select</option>
                            <option value="1">User</option>
                            <option value="2">Admin</option>
                        </select>
                    </div>
                    <div>
                        <input type="submit" class="btn bg-[#33c2d0] px-4 py-2 w-full" value="SignUp">
                    </div>
                </form>
                <p class="text-center">Already a Member? <a>Login</a> </p>

            </div>
        </div>


    </div>





</body>

</html>