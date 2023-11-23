<?php
$conn=mysqli_connect("localhost","root","","user1");
if($conn)
echo "Connected to database!!!";
else
echo "Failed to connect:".mysql_error()
mysqli_select_db($conn,"user1") or die("No database existing:"mysql_error());
$name=$_REQUEST['name'];
$pass=$_REQUEST['pass'];
$sql="SELECT email,phone FROM register WHERE name='$name" and pass='pass'";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
if($count==1)
{
    $row = mysqli_fetch_assoc($result);
    echo"<center><h1>WELCOME</h1></center><br><br>";
    echo"USERNAME:"$name."<br>";
    echo"PASSWORD:"$pass."<br>";
    echo"EMAIL ID:"$row['phone']."<br>";
echo"<center><form action='login.html'><input type='submit' value='LOGOUT'/></form></center>";
}
else
{
    echo"<script>alert('invalid details!');</script>";
    header("refresh:1;url=login.html");
}
for($i=0,$i<sizeof($name);$i++)
{
    if($name[$name[$i]==$USERNAME&&$pwd[$i]==$password)
    {
        echo'WELCOME<b>'.$username.'</b>';
        break;
    }
}
if($i==sizeof($name))
{
    echo"You are not an authenticated user";
    echo"<script>alert('Invalid details');</script>";
    header("refresh:1;url=login.html")
}
?>   