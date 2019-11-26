<!DOCTYPE html>
<html>
<body>
<?php
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Amountindollar=$_POST['Amount in dollar'];
if (!empty($Name)|| !empty($Email)|| !empty($Amount in dollar)){
    $host="localhost";
    $dbName="root";
    $Email="root";
    $Amountindollar="root";
    $dbname="African_Child";
    // create a connection
    $conn = new msqli($host,$dbName,$dbEmail,$dbAmountindollar);
    if(mysqli_connect_error()){
        die('connect error('.mysqli_connect_error().')'.mysqli_connect_error());
    }else{
        $SELECT ="SELECT Email From Donate  where Email=? Limit";
        $INSERT ="INSERT Into Donate (Name,Email,Amout in dollar) values(?,?,?)";
        //prepare statement
        $stmt=$conn->prepare(SELECT);
        $stmt->bind_param("s",$Email);
        $stmt->execute();
        $stmt->bind_result($Email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        if ($rnum==0) {
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssssii",$Name,$Email,$Amountindollar);
            $stnt->execute();
            echo "New record inserted successfully";
        } else{
            echo "someone already register using this email";
        }
        $stmt->close();
        $conn->close();
    }
}else{
    echo "all fied are required";
    die();
}

?>
</body>
</html>