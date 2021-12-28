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
            //db
            include "./Components/DB.php";
            // SElect all
            $sql = "SELECT * FROM `user`";
             
            $result = mysqli_query($conn, $sql);

            if($result) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo json_encode($row);
                }
            }

           

            // Close conn
            mysqli_close($conn);
            
              
             
           
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