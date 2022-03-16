<?php

session_start();

	include("connection.php");
	include("functions_faculty.php");

	$user_data = check_login($con);
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {

    $student_name = $_POST['student_name'];
    $topic = $_POST['topic_field'];
    $originalDate = $_POST['date_field'];

	if(!empty($student_name) && !empty($topic) && !empty($originalDate))

   {
		$sql = "update assignment set topic='".$topic."', due= '".$originalDate."' where user_name ='".$student_name."' and subjects='".$user_data['faculty_subject']."'";
        mysqli_query($con, $sql);
        header("Location: assignment_faculty.php");
		die; 
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
    <title>Insert Assignment</title>
</head>

<body class="bg-gray-900">
    <section class="text-gray-400 bg-gray-900 body-font relative">
        <form method="POST">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-12">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">Update Assignment </h1>
                </div>
                <div class="lg:w-full md:w-2/3 mx-auto">
                    <div class="flex flex-wrap -m-2">
                        <div class="flex w-full justify-center items-end">
                            <div class="relative mr-4 lg:w-full align-middle xl:w-1/2 w-2/4 md:w-full text-left">
                                <label for="hero-field" class="leading-7 text-sm text-gray-400">Student Name *</label>
                                <input type="text"  name="student_name"
                                    class="w-full bg-white rounded border bg-opacity-40 border-gray-700 focus:ring-2 focus:ring-red-900 focus:bg-transparent focus:border-red-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <!-- <div class="flex w-full justify-center items-end">
                    <div class="relative my-4 mr-4 lg:w-full align-middle xl:w-1/2 w-2/4 md:w-full text-left">
                        <label for="hero-field" class="leading-7 text-sm text-gray-400">Subject Name</label>
                        <input type="text" id="sub_name" name="sub_field"
                            class="w-full bg-white rounded border bg-opacity-40 border-gray-700 focus:ring-2 focus:ring-red-900 focus:bg-transparent focus:border-red-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                </div> -->

                <div class="flex w-full justify-center items-end">
                            <div class="relative mr-4 my-4 lg:w-full align-middle xl:w-1/2 w-2/4 md:w-full text-left">
                                <label for="hero-field" class="leading-7 text-sm text-gray-400">Topic *</label>
                                <input type="text"  name="topic_field"
                                    class="w-full bg-white rounded border bg-opacity-40 border-gray-700 focus:ring-2 focus:ring-red-900 focus:bg-transparent focus:border-red-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>

                        <div class="flex w-full justify-center items-end">
                            <div class="relative mr-4 lg:w-full align-middle xl:w-1/2 w-2/4 md:w-full text-left">
                                <label for="hero-field" class="leading-7 text-sm text-gray-400">Due Date *</label>
                                <input type="text"  name="date_field" 
                                    class="w-full bg-white rounded border bg-opacity-40 border-gray-700 focus:ring-2 focus:ring-red-900 focus:bg-transparent focus:border-red-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                       
                            <div class="p-2 w-full mt-4">
                                <button
                                    class="flex mx-auto text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-gray-600 rounded text-lg" type="submit" value="submit">Assign</button>
                            </div>
                            <div class="flex w-full justify-center items-end">
                                <button
                                    class="flex mx-auto mb-10 text-white bg-gray-800 border-0 py-2 px-8 focus:outline-none hover:bg-gray-700 rounded text-lg mt-0"
                                    onclick=""><a href="assignment_faculty.php">Go Back</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </body>
</html>