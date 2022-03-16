<?php 
session_start();

	include("connection.php");
	include("functions_faculty.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://cdn.tailwindcss.com"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/thinline.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/solid.css">
    <title>Homepage</title>
</head>

<body class="bg-gray-900">
    <!-- navbar -->
    <header class="text-gray-400 bg-gray-900 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
                <span class="ml-3 text-xl">Faculty Portal</span>
            </a>
            <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
                <a class="mr-5 hover:text-white" href="#">Home</a>
                <a class="mr-5 hover:text-white" href="#">About</a>
                <a class="mr-5 hover:text-white" href="#">Services</a>
            </nav>
            <!-- <span class="ml-3 mr-5 text-l"><?php echo $user_data['user_name']; ?> </span> -->
            <button
                class="inline-flex items-center bg-gray-800 border-0 py-1 px-3 focus:outline-none hover:bg-gray-700 rounded text-base mt-4 md:mt-0"
                onclick=""><a href="logout_faculty.php">Logout</a>
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </button>   
        </div>
    </header>

    <!-- TILES -->
    <section class="text-gray-400 bg-gray-900 body-font h-15">
        <div class="container px-5 py-24 mx-auto">
            <div class="text-center mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium text-center title-font text-white mb-4">MBCET Faculty Portal
                </h1>
                <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">Welcome <?php echo $user_data['faculty_name']; ?> </p>
                <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">Subject : <?php echo $user_data['faculty_subject']; ?> </p>
            </div>
            <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
                <div class="p-2 sm:w-1/2 w-full">
                    <a href="internal_faculty.php">
                        <div class="bg-gray-800 rounded flex p-4 h-full items-center text-center">

                            <span class="title-font font-medium text-white">Internal Marks</span>
							<!-- <span style="font-size: 28px;" class="content-end"><a href=><i class="uil uil-arrow-right"></i></a></span> -->
                        </div>
                    </a> 
                </div>
                <div class="p-2 sm:w-1/2 w-full">
                    <a href="attendance_faculty.php" >
                        <div class="bg-gray-800 rounded flex p-4 h-full items-center">

                            <span class="title-font font-medium text-white">Attendance</span>
                        </div>
                    </a>
                </div>
                <div class="p-2 sm:w-1/2 w-full">
                    <a href="assignment_faculty.php">
                        <div class="bg-gray-800 rounded flex p-4 h-full items-center">

                            <span class="title-font font-medium text-white">Assignments</span>
                        </div>
                    </a>
                </div>
                <div class="p-2 sm:w-1/2 w-full">
                    <a href="grievance_view.php" >
                        <div class="bg-gray-800 rounded flex p-4 h-full items-center">
                            <span class="title-font font-medium text-white">Grievences</span>
                        </div>
                    </a>
                </div>
                <!-- <div class="p-2 sm:w-1/2 w-full">
                    <a href="internals_edit.php">
                        <div class="bg-gray-800 rounded flex p-4 h-full items-center">

                            <span class="title-font font-medium text-white">Delete Attendance</span>
                        </div>
                    </a>
                </div> -->
            </div>
        </div>
    </section>
</body>

</html>