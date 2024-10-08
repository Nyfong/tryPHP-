<?php
// header("refresh: 1;");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>First Form</title>
</head>
<body>

    <div class="flex justify-center items-center ">
    <form 
    action="welcome.php"
    method="POST"
    class="bg-orange-200 w-[800px] h-[500px] flex flex-col justify-center items-center"
    >
    <label for="
    ">Name</label> 
    <input type="text" name="name"><br>
    <label for="">Email</label> 
    <input type="text" name="email"><br>
    <input class="bg-blue-500 py-3 px-6 rounded-xl" type="submit">

    </form>
    </div>

    
</body>
</html>

<!-- Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit"> -->