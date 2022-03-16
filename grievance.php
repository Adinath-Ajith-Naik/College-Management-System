<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$subjects = $_POST['subjects'];
        $statement = $_POST['statement'];

		if(!empty($user_name) && !empty($subjects) && !empty($statement))
		{

			//save to database
			$query = "insert into grievances (user_name,subjects,statement) values ('$user_name','$subjects','$statement')";

			mysqli_query($con, $query);

			header("Location: index.php");
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
    <title>Grievance</title>
</head>

<body>
    <section class="text-gray-400 bg-gray-900 body-font">
        <form method="POST">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-12">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">Grievance Form</h1>
                </div>
                <div class="flex w-full justify-center items-end">
                    <div class="relative mr-4 lg:w-full align-middle xl:w-1/2 w-2/4 md:w-full text-left">
                        <label for="hero-field" class="leading-7 text-sm text-gray-400">Full Name</label>
                        <input type="text" id="name" name="user_name"
                            class="w-full bg-gray-800 rounded border bg-opacity-40 border-gray-700 focus:ring-2 focus:ring-red-900 focus:bg-transparent focus:border-red-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                </div>
                <div class="flex w-full justify-center items-end my-4">
                    <div class="relative mr-4 lg:w-full align-middle xl:w-1/2 w-2/4 md:w-full text-left">
                        <label for="hero-field" class="leading-7 text-sm text-gray-400">Subject</label>
                        <input type="text"  name="subjects"
                            class="w-full bg-gray-800 rounded border bg-opacity-40 border-gray-700 focus:ring-2 focus:ring-red-900 focus:bg-transparent focus:border-red-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                </div>
                <div class="flex w-full justify-center items-end">
                    <div class="relative mr-4 lg:w-full align-middle xl:w-1/2 w-2/4 md:w-full text-left">
                        <label for="hero-field" class="leading-7 text-sm text-gray-400">Grievance Body</label>
                        <textarea id="message" name="statement"
                            class="w-full bg-gray-800 rounded border border-gray-700 focus:border-red-500 focus:ring-2 focus:ring-red-900 h-32 text-base outline-none text-gray-100 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out h-80"></textarea>
                    </div>
                </div>
                <div class="flex w-full justify-center items-end">
                    <button
                        class="flex mx-auto mb-10 text-white bg-gray-800 border-0 py-2 px-8 focus:outline-none hover:bg-gray-700 rounded text-lg mt-8"
                        onclick="">Submit</button>
                </div>
                <div class="flex w-full justify-center items-end">
                <button
            class="flex mx-auto mb-10 text-white bg-gray-800 border-0 py-2 px-8 focus:outline-none hover:bg-gray-700 rounded text-lg"
            ><a href="index.php">Go Back</a></button>
                </div>
                
            </div>
        </form>
    </section>
</body>

</html>

<?php




?>