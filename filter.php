<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <?php
        try {
            $conn = new PDO("mysql:host=localhost;dbname=filter", "root", "");
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          } 

          
        if(isset($_POST['filter'])){
            $GENDER = $_POST['gender'];
            $LOCATION = $_POST['location_list'];
            $sql = "SELECT * FROM `users` WHERE address = '$LOCATION' or gender = '$GENDER'";
            $result = $conn->query($sql);
            while($row = $result->fetch(PDO::FETCH_ASSOC))
                print '<br>user id :'.$row['User_id'] .'username'. $row['username'] . 'full name' . $row['fullname'] . 'email ' . $row['email'] . ' address ' . $row['address']; 
            }
        
    ?>
        <div id="filter">
            <form method="post">
                <div id="form-group">
                    <label for="female"> female</label>
                    <input type="radio" name="gender" id="female" value="female">
                    <label for="male">male</label>
                    <input type="radio" name="gender" id="male" value="male">
                    <select id="location" name="location_list">
                        <?php
                            $sql = "SELECT `address`, `gender` FROM `users` WHERE 1";
                            $result = $conn->query($sql);
                                while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <option value="<?php echo $row["address"] ?>"><?php echo $row["address"] ?></option>
                        <?php
                             } 
                        
                        ?>
                    </select>
                </div>
                <input type="submit" name="filter" value="search">
            </form>
        </div>
    </body>
</html>