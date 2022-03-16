<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>DBMS</title>
</head>

<body class="bg-gray-900">
    <section class="text-gray-400 bg-gray-900 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 md:mb-0 mb-10">
                <img class="object-cover object-center rounded" alt="hero"
                    src="https://mbcet.ac.in/wp-content/themes/mbcet/images/footer-logo.png">
            </div>
            <div
                class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">MBCET PORTAL
                </h1>
                <p class="mb-8 leading-relaxed">MBCET Portal a place where students can view their marks, share their grievances and know about 
                their positions.<br> The portal consists of Faculty Login and Student Login from where all the details can be viewed and addressed. </p>
                <div class="flex justify-left w-full mt-4">
                    <div class="max-w-md w-full space-y-8">
                        <button type="submit" onclick=""
                            class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <a href="login_student.php">Student Login</a>
                        </button>

                        <button type="submit" onclick=""
                            class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <a href="login_faculty.php">Faculty Login</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>