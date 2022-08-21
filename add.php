<?php
include_once 'db_conn.php';
if (isset($_POST["submit"]))
{

    $name = $_POST["name"];
    $price = $_POST["price"];
    $about = $_POST["about"];
    $sql = "INSERT INTO products (name,price,about)
    VALUES ('$name','$price','$about')";
    if (mysqli_query($conn, $sql)) {
       echo "New record has been added successfully !";
    } else {
       echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
            <form action="add.php" method="POST">
                <center>
                    <br><br>
                    Name<input type="text" name="name">
                    <br><br>
                    price<input type="numbers" name="price">
                    <br><br>
                    about<input type="text" name="about">
                    <br><br>
                    <input type="submit" name="submit" value="submit">
                </center>
            </form>

    </body>
</html>
