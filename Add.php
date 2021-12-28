
<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
        <?php

            $user_firstname = $_POST["input-firtsname"];
            $user_gender =  $_POST["user_genderS"];
            $user_name =  $_POST["input-name"];
            $user_description =  $_POST["input-description"];



            include "./Components/DB.php"

            $sql =  " INSERT INTO user (Firstname, Name, Gender, Description) VALUES ('$user_firstname', '$user_name', '$user_genderS', '$user_description')";

                
                $result = mysqli_query($conn, $sql);
                
            ?>
                <h1>Your account is added to the Database!</h1>
            
                
                    <?php

                
            }
            $conn->close();
            ?>
        </body>
</html>
