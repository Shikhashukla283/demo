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
                <form action="{{route('blogprocess')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="flex mb-2 gap-3">
                    <input type="hidden" name="blog_id" value="<?php echo (isset($user_data->blog_id) && $user_data->blog_id!='')?$user_data->blog_id:'';?>">
                    <input type="text" name="title" class="w-full border border-black rounded py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline focus:border-purple-500" required placeholder="title" value="<?php echo (isset($user_data->title) && $user_data->title!='')?$user_data->title:'';?>">
                        </div>
                        <div class="flex mb-2 gap-3">

                        
                        <textarea type="text" name="descreption" class="w-full border border-black rounded py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline focus:border-purple-500" required placeholder="Description"><?php echo (isset($user_data->descreption) && $user_data->descreption!='')?$user_data->descreption:'';?></textarea>
                    </div>
                    
                    <div class="flex mb-2 gap-3">
                    <input type="date" name="startdate" class=" w-1/2 border border-black rounded py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline focus:border-purple-500" required value="<?php echo isset($user_data->startdate)?$user_data->startdate:''?>">
                    <input type="date" name="enddate" class=" w-1/2 border border-black rounded py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline focus:border-purple-500" required value="<?php echo isset($user_data->enddate)?$user_data->enddate:''?>">
                    </div>

                    <div class="flex mb-2 gap-3">
                    <input type="file" name="image" class=" w-1/2 border border-black rounded py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline focus:border-purple-500" required value="<?php echo (isset($user_data->enddate) && $user_data->enddate!='')?date('',$user_data->title):'';?>">
                        <select name="active" class=" w-1/2 border border-black rounded py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline focus:border-purple-500" required>
                            <option>Select</option>
                            <option value="1" <?php echo (isset($user_data->active) && $user_data->active==1)?"selected":'';?>>Yes</option>
                            <option value="2" <?php echo (isset($user_data->active) && $user_data->active==2)?"selected":'';?>>No</option>
                        </select>
                    </div>

                    <div>
                        <input type="submit" class="btn bg-[#33c2d0] px-4 py-2 w-full" value="Save">
                    </div>
                </form>
            </div>
        </div>


    </div>





</body>

</html>