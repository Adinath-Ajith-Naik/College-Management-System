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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Grievance Report</title>
</head>
<body class="bg-gray-900">
    <section class="text-gray-400 bg-gray-900 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-white">Grievance Report</h1>

          </div>
          <div class="lg:w-2/3 w-full mx-auto overflow-auto">
            <table class="table-auto w-full text-left whitespace-no-wrap">
              <thead>
                <tr>
                  <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800 rounded-tl rounded-bl">Student Name</th>
                  <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Grievances</th>
                </tr>
              </thead>
              <tbody>

              <?php

                $sql="select * from grievances where subjects ='".$user_data['faculty_subject']."'";
                $result=mysqli_query($con,$sql);
                while($record=mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    echo "<td>".$record['user_name']."</td>";
                    echo "<td>".$record['statement']."</td>";
                  echo "</tr>";
                }
                echo "<br>"  ;

             ?>
                <!-- <tr>
                  <td class="border-t-2 border-gray-800 px-4 py-3">Joel</td>
                  <td class="border-t-2 border-gray-800 px-4 py-3">I love poorna miss</td>
                  
                </tr> -->
              </tbody>
            </table>
          </div>
        </div>
        <button
            class="flex mx-auto mb-10 text-white bg-gray-800 border-0 py-2 px-8 focus:outline-none hover:bg-gray-700 rounded text-lg"
            onclick=""><a href="index_faculty.php">Go Back</a></button>
      </section>
</body>
</html>