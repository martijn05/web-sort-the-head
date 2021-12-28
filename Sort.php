<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sort</title>
        <link rel="stylesheet" href="./Assets/Css/style.css">
    </head>
    <body>
        <div class="container">
            <h1>
                Sort Your heads
            </h1>
    
            <?php
    
            include "./Components/DB.php"
    
            //$sql = "SELECT input-firtsname,user-genderS,input-name from user'";
    
    
             //$result = mysqli_query($conn, $sql);
          //$user = $result->fetch_all(MYSQLI_ASSOC);

        //   foreach ($user as $item) {
        //     echo ($item["input-firtsname"]);
        //     echo ($item["input-name"]);  
        //     echo ($item["user_genderS"]);
        //     echo ($item["input-description"]);  
            
        }
            ?>
    
            <img src="./Assets/Images/Sorting_Hat.png" alt="sorting head" id="sortingheadsort">
            <img src="./Assets/Images/no-profile-picture-icon-18.jpg" alt="profile picture" id="profilepic">
    
    
            <button class="choose-Gryffondor">This is a Gryffindor!</button>
            <button class="choose-Slytherin">This is a Slytherin!</button>
            <button class="choose-Ravenclaw">This is a Ravenclaw!</button>
            <button class="choose-Hufflepuff">This is a Hufflepuff!</button>
        </div>
        

        <script src="./Assets/JS/script.js"></script>
    </body>
</html>