
<?php
require_once ("database.php");
$result=mysqli_query($conn,"SELECT * FROM visitor");
$c=0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $c=$row["count"]+1;
        $result2=mysqli_query($conn,"UPDATE visitor SET count='".$c."'  ");

    }
}
else {
    echo "No value";
    $c=1;
    $result1=mysqli_query($conn,"INSERT into visitor (count) VALUES ('".$c."')  ");
}
