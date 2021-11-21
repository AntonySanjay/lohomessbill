<?php
$server_name = "sql6.freesqldatabase.com";
$username = "sql6452619";
$password = "xbBMcz75VT";
$database_name = "sql6452619";
$conn = mysqli_connect($server_name, $username, $password, $database_name);
if (!$conn) {
    die("connection failed" . mysqli_connect_error());
}

if (isset($_POST['save'])) {

    $account_number = $_POST['account_number'];
    $student_name = $_POST['student_name'];
    $total_days = $_POST['total_days'];
    $amount = 0;
    $mess = $_POST['mess'];


    if ($mess == "VEG") {
        $amount = $total_days * 100;
    } else if ($mess == "NON-VEG") {
        $amount = $total_days * 150;
    }

    $sql_query = "INSERT INTO `mess` (`account_number`, `student_name`, `total_days`, `mess`, `bill`) VALUES ('$account_number','$student_name','$total_days','$mess','$amount')";


    if (mysqli_query($conn, $sql_query) ) {
        echo "Mess Bill=Rs." . $amount;
    } else {
        echo "error";
    }
    mysqli_close($conn);
}
