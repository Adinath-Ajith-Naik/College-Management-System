<?php

session_start();

include("connection.php");
include("functions_faculty.php");

$user_data = check_login($con);

if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$student_name = $_POST['student_name'];
		
        echo "Entering the if stattement";
		if(!empty($student_name))
		{
            echo "enterd IF Condition";
			//save to database
			$query = "delete from assignment where user_name='".$student_name."' and subjects='".$user_data['faculty_subject']."'";

			mysqli_query($con, $query);

			header("Location: assignment_faculty.php");
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
    <title>Login</title>
</head>

<body class="bg-gray-900">
    <section class="text-gray-400 bg-gray-900 body-font">
    <form method="POST">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-12">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">Delete Assignment</h1>
            </div>
            <div class="flex w-full justify-center items-end">
                <div class="relative mr-4 lg:w-full align-middle xl:w-1/2 w-2/4 md:w-full text-left">
                    <label for="hero-field" class="leading-7 text-sm text-gray-400">Student Name *</label>
                    <input type="text" id="name" name="student_name"
                        class="w-full bg-gray-800 rounded border bg-opacity-40 border-gray-700 focus:ring-2 focus:ring-red-900 focus:bg-transparent focus:border-red-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
            </div>
            <!-- <div class="flex w-full justify-center items-end my-4">
                <div class="relative mr-4 lg:w-full align-middle xl:w-1/2 w-2/4 md:w-full text-left">
                    <label for="hero-field" class="leading-7 text-sm text-gray-400">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full bg-gray-800 rounded border bg-opacity-40 border-gray-700 focus:ring-2 focus:ring-red-900 focus:bg-transparent focus:border-red-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
            </div> -->
            <div class="flex w-full justify-center items-end">
                <button
                    class="flex mx-auto mb-10 text-white bg-gray-800 border-0 py-2 px-8 focus:outline-none hover:bg-red-700 rounded text-lg mt-8"
                    onclick="" >Delete</button>
                    <button
                    class="flex mx-auto mb-10 text-white bg-gray-800 border-0 py-2 px-8 focus:outline-none hover:bg-red-700 rounded text-lg mt-8"
                    onclick="" ><a href="attendance_faculty.php">Go Back</a></button>
                    
                    
            </div>
        </div>
        </form>
    </section>
</body>

</html>