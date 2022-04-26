<?php
$servername = "127.0.0.1";
$username ="scse";
$password = "scse";
$dbname = "test";
$con = mysqli_connect($servername, $username, $password, $dbname); 

if ($con) {
    echo 'CONNECTION SUCCESSFUL' . "<br>";
} else {
    echo 'connection unsuccessful' . "<BR>";
}
if (isset($_POST['submit'])) {
    $sql = "INSERT INTO data( mobile_name , mobinum , user_name , price ) VALUES('$_POST[mobile]','$_POST[mobinum]','$_POST[name]','$_POST[price]')";
    if (mysqli_query($con, $sql)) {
        echo 'data added successfully';
    }
}
if (isset($_POST['delete'])) {

    $result = $_POST['mobinum'];
    $sql = "DELETE FROM data WHERE mobinum = $result";
    if (mysqli_query($con, $sql)) {
        echo 'sucessfully deleted';
    } else {
        echo 'number not present';
    }
}
if (isset($_POST['view'])) {
    echo 'enteries with mobile priced less than 5000' . "<br>" .
        $sql = "SELECT * FROM data WHERE price<5000";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($result)) {
        echo $row[0] . " " . $row[1] . " " . $row[2] . " " . $row[3] . " " . $row[4] . "<br>";
    }
}
