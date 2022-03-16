<?php 

session_start();

	include("connection.php");
	include("functions_faculty.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$faculty_name = $_POST['faculty_name'];
		$password = $_POST['password'];

		if(!empty($faculty_name) && !empty($password) && !is_numeric($faculty_name))
		{

			//read from database
			$query = "select * from faculty where faculty_name = '$faculty_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['faculty_id'] = $user_data['faculty_id'];
						header("Location: index_faculty.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!-- <!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body class="bg-gray-900">

	<style type="text/css">
	

	@import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body{
  margin: 0;
  padding: 0;
  background: linear-gradient(120deg,#2980b9, #8e44ad);
  height: 100vh;
  overflow: hidden;
}
.center{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 400px;
  background: white;
  border-radius: 10px;
  box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
}
.center h1{
  text-align: center;
  padding: 20px 0;
  border-bottom: 1px solid silver;
}
.center form{
  padding: 0 40px;
  box-sizing: border-box;
}
form .txt_field{
  position: relative;
  border-bottom: 2px solid #adadad;
  margin: 30px 0;
}
.txt_field input{
  width: 100%;
  padding: 0 5px;
  height: 40px;
  font-size: 16px;
  border: none;
  background: none;
  outline: none;
}
.txt_field label{
  position: absolute;
  top: 50%;
  left: 5px;
  color: #adadad;
  transform: translateY(-50%);
  font-size: 16px;
  pointer-events: none;
  transition: .5s;
}
.txt_field span::before{
  content: '';
  position: absolute;
  top: 40px;
  left: 0;
  width: 0%;
  height: 2px;
  background: #2691d9;
  transition: .5s;
}
.txt_field input:focus ~ label,
.txt_field input:valid ~ label{
  top: -5px;
  color: #2691d9;
}
.txt_field input:focus ~ span::before,
.txt_field input:valid ~ span::before{
  width: 100%;
}
.pass{
  margin: -5px 0 20px 5px;
  color: #a6a6a6;
  cursor: pointer;
}
.pass:hover{
  text-decoration: underline;
}
input[type="submit"]{
  width: 100%;
  height: 50px;
  border: 1px solid;
  background: #2691d9;
  border-radius: 25px;
  font-size: 18px;
  color: #e9f4fb;
  font-weight: 700;
  cursor: pointer;
  outline: none;
}
input[type="submit"]:hover{
  border-color: #2691d9;
  transition: .5s;
}
.signup_link{
  margin: 30px 0;
  text-align: center;
  font-size: 16px;
  color: #666666;
}
.signup_link a{
  color: #2691d9;
  text-decoration: none;
}
.signup_link a:hover{
  text-decoration: underline;
}

	</style>
	<div class="center">
      <h1>Faculty Login</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" required name="faculty_name">
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" required name="password">
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="signup_faculty.php">Signup</a>
        </div>
      </form>
    </div>
</body>
</html> -->

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
    <form method="post">
        <div
            class="lg:w-2/6 md:w-1/2 bg-gray-100 bg-opacity-10 rounded-lg p-8 flex flex-col md:ml-auto w-full container mx-auto mt-14 flex flex-col px-5 py-10 justify-center items-center">
            <h2 class="text-white text-lg font-medium title-font mb-5">Faculty Login</h2>
            <div class="relative mb-4 w-full mx-28">
                <label for="full-name" class="leading-7 text-sm text-gray-400">user name</label>
                <input type="text" id="full-name" name="faculty_name"
                    class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4 w-full mx-28">
                <label for="email-id" class="leading-7 text-sm text-gray-400">Password</label>
                <input type="password"  name="password"
                    class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <button
                class="text-white mt-8 bg-indigo-700 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-md"
                onclick="">Login</button>
                <p class="text-white text-sm mt-8 inline-flex items-center md:mb-2 lg:mb-0">Not a member?</p>
                <a href="signup_faculty.php" class="text-red-400 font-medium inline-flex items-center md:mb-2 lg:mb-0"> Sign Up
                  </a>
        </div>
        </form>
    </section>
</body>

</html>