<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login_student.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Sign Up</title>
</head>

<body class="bg-gray-900">
    <section class="text-gray-400 bg-gray-900 body-font">
    <form method="POST">
        <div
            class="lg:w-2/6 md:w-1/2 bg-gray-100 bg-opacity-10 rounded-lg p-8 flex flex-col md:ml-auto w-full container mx-auto mt-14 flex flex-col px-5 py-10 justify-center items-center">
            <h2 class="text-white text-lg font-medium title-font mb-5">Student SignUp</h2>
            <div class="relative mb-4 w-full mx-28">
                <label for="full-name" class="leading-7 text-sm text-gray-400">Full Name</label>
                <input type="text" id="full-name" name="user_name"
                    class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <!-- <div class="relative mb-4 w-full mx-28">
                <label for="subject-name" class="leading-7 text-sm text-gray-400">Subject Name</label>
                <input type="text" id="subject-name" name="subject-name"
                    class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div> -->
            <!-- <div class="relative mb-4 w-full mx-28">
                <label for="email-id" class="leading-7 text-sm text-gray-400">Email</label>
                <input type="email" id="email" name="email"
                    class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div> -->
            <div class="relative mb-4 w-full mx-28">
                <label for="password" class="leading-7 text-sm text-gray-400">Password</label>
                <input type="password" id="password" name="password"
                    class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <button
                class="text-white mt-8 bg-indigo-700 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-md"
                onclick="">SignUp</button>
        </div>
        </form>
    </section>
</body>

</html>

