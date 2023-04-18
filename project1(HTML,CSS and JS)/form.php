<?php
$conn=mysqli_connect("localhost","root","Hari@5184","test");
$name=$_POST['nm'];
$password=$_POST['pwd'];
$email=$_POST['em'];
$dob=$_POST['DOB'];
$gender=$_POST['Gender'];
$religion=$_POST['Religion'];
$address=$_POST['address'];
$d="insert into details values('$name','$password','$email','$dob','$gender','$religion','$address');";
$conn->query($d);
if($conn){
    $s="select * from details;";
    $re=$conn->query($s);
    echo "<table>";
    if($re->num_rows>0){
        echo "<tr><th>name</th><th>email</th><th>dob</th><th>gender</th><th>religon</th><th>address</th></tr>";
        while($rows=$re->fetch_assoc()){
        echo "<tr><td>$rows[name]</td><td>$rows[email]</td><td>$rows[dob]</td><td>$rows[gender]</td><td>$rows[religion]</td><td>$rows[address]</td></tr>";
        }
    }
}
?>
<style>
    table{
        border: 3px dotted red ;
    }
    th,td{
        border: 4px solid green;
    }

</style>