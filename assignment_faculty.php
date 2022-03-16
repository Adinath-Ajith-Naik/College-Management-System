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
    <title>Assignment</title>
</head>
 
<body class="bg-gray-900">
    <section class="text-gray-400 bg-gray-900 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-white">Assignments</h1>
            </div>
            <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                <table class="table-auto w-full text-left whitespace-no-wrap">
                    <thead>
                        <tr>
                            <th
                                class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800 rounded-tl rounded-bl">
                                Student Name</th>
                            <th
                                class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800 rounded-tl rounded-bl">
                                Assignment Name</th>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">
                                Due Date</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php

                        $sql="select * from assignment where subjects = '".$user_data['faculty_subject']."'";
                        $result=mysqli_query($con,$sql);
                        while($record=mysqli_fetch_array($result))
                        {
                            echo "<tr>";
                            echo "<td>" .$record['user_name']. "</td>";
                            echo "<td>" .$record['topic']. "</td>";
                            echo "<td>" .$record['due']. "</td>";
                        echo "</tr>";
                        }
                        

                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container px-48 py-18 mx-auto">
            <div class="flex flex-wrap text-center">
                <button
                class="flex mx-auto mb-10 text-white bg-gray-800 border-0 py-2 px-8 focus:outline-none hover:bg-gray-700 rounded text-lg"
                onclick=""><a href="assignment_delete.php">Delete</a></button>
                <button
                class="flex mx-auto mb-10 text-white bg-gray-800 border-0 py-2 px-8 focus:outline-none hover:bg-gray-700 rounded text-lg"
                onclick=""><a href="assignment_update.php">Update</a></button>
                <button
                class="flex mx-auto mb-10 text-white bg-gray-800 border-0 py-2 px-8 focus:outline-none hover:bg-gray-700 rounded text-lg"
                onclick=""><a href="assignment_add.php">Add</a></button>
            </div>
          </div>
        <div class="flex w-full justify-center items-end">
            <button
                class="flex mx-auto mb-10 text-white bg-gray-800 border-0 py-2 px-8 focus:outline-none hover:bg-gray-700 rounded text-lg mt-0"
                onclick=""><a href="index_faculty.php">Go Back</a></button>
        </div>
    </section>
</body>

</html>