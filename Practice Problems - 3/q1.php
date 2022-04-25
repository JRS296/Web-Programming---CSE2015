<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .container {
            background-color: grey;
            text-align: center;
            padding: 20px;
        }

        h1 {
            background-color: black;
            color: white;
            text-align: center;
            row-gap: 20px;
        }
    </style>
</head>

<body>
    <h1> VALIDATION</div>
        <div class="container">
            <?php

            echo "DATA ENTERED BY YOU : <br>";

            $name = $_POST['f_name'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            echo "<br>";

            echo "NAME :" . $name . "<br>";
            echo "ADDRESS :" . $address . "<br>";
            echo "EMAIL : " . $email . "<br>";
            if (!empty($_POST['radio'])) {
                echo 'NUMBER OF FRUITS - ' . $_POST['radio'] . "<BR>";
            } else {
                echo 'Please select the value.' . "<BR>";
            }
            if (!empty($_POST['CH'])) {
                echo ' ' . $_POST['CH'] . "<BR>";
            }
            if (isset($_POST['fruit'])) {
                $varf = $_POST['fruit'];
                echo ' Selected fruit is : ' . $varf . "<br>";

                // - - - snip - - - 
            } else {
                echo 'please select an option';
            }

            ?>
        </div>
</body>

</html>