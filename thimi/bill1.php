<?php




?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
 <title>users cart</title> 
  <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
  <link rel="stylesheet" type="text/css" href="css/table.css">


</head>
    
<script type='text/javascript'>
  function del(){
   var txt;
  
var r = confirm("remove from the cart?");
if (r == true) {
    return true;
} else {
    return false;
} 
}
function conform(){
   var txt1;
  
var r1 = confirm("Confirm making the purchase?");
if (r1 == true) {
    return true;
} else {
    return false;
} 
}

</script>


  
  
  <form class="loginform">
    <!-- <input type="button" class="joinbtn1" onclick="location.href='dashboard.php';" style="background-color: white; color: black; text-align: center; display: inline;" value="Go Back" /> -->
    <input type="button" class="joinbtn1" onclick="location.href='admin/customerlist.php';" style="display: inline; text-align: center;" value="Back" />
      </form>

<?php
$name=$_POST["tempId"];

$host="localhost";
$uname="root";
$pass="";
$dbname="thimi";
$conn=new mysqli($host,$uname,$pass,$dbname);
if($conn->connect_error){
  die("connect error");
}

$sql="select * from bill where customer='".$name."'";
$result=$conn->query($sql);
$ss=0;
echo "<div class='table-title'>";
echo "<h3>Recent purchases</h3>";
echo "</div>";
echo "<table class='table-fill'>";
echo "<thead>";
echo "<tr>";
echo "

<th class='text-left'>Bought</th>
<th class='text-left'>Transaction($)</th>
<th class='text-left'>Date</th>

</tr>
</thead>
<tbody class='table-hover'>";
if($result->num_rows>0){
while($rowdata=$result->fetch_assoc()){
  

  echo"<tr>
  <td class='text-left'>".$rowdata['products']."</td>
<td class='text-left'>".$rowdata['price']."</td>
<td class='text-left'>".$rowdata['date']."</td>
</td></tr>";
}
}else{
    
      //      echo "<script type='text/javascript'>alert('No data found');</script>";
}


// echo $_SESSION["customer"];
// echo $_SESSION["date"];
// echo "</tbody></table>";
// echo "$money";
// echo "\n$items";
// echo "\n$name";
// echo "$today";
// print_r($today);

// $sql1="insert into bill(customer, products, price, date) values ('".$name."','".$items."',".$money.",'".$today."')";

// $result1=$conn->query($sql1);
//     echo "<script type='text/javascript'>alert('Added to cart..');</script>";
//              echo "<script type='text/javascript'>location.href = 'pageuser.php';</script>";



$conn->close();
?>
<!-- 

<form method='POST'>
  <input type='submit' name='submit-btn' value='Total Price:' style='



    background-color: #44494e;
    color: white;
    font-size: 20px !important ;
    border-radius: 9px;
    cursor: pointer;
    border: none;
    width: 106px !important;
    text-align: center;
    height: 35px;
    margin-top: -79px;
    margin-right: 98px;
    float: right;
' onclick='return conform()' />
</form>


<form>
  <input type='submit' name='submit-btn' value='<?php echo $money; ?>' style='



    background-color: #44494e;
    color: white;
    font-size: 20px !important ;
    border-radius: 9px;
    cursor: pointer;
    border: none;
    width: 100px !important;
    text-align: center;
    height: 35px;
    margin-top: -50px;
    margin-right: 98px;
    float: right;
' onclick='return conform()' />
</form>


<form action='PURCHASE.php' method='POST'>
  <input type='submit' name='submit-btn' value='Purchase' style='



    background-color: #ae0f0f;
    color: white;
    font-size: 20px !important ;
    border-radius: 9px;
    cursor: pointer;
    border: none;
    width: 100px !important;
    text-align: center;
    height: 35px;
    margin-top: -121px;
    margin-right: 98px;
    float: right;
' onclick='return conform()' />
</form>

<!-- <form class="loginform">
    <input type="button" class="joinbtn1" onclick="location.href='dashboard.php';" style="background-color: white; color: black; text-align: center; display: inline;" value="Go Back" />
    <input type="button" class="joinbtn1" onclick="location.href='PURCHASE.php';" style="display: inline; text-align: center;" value="PURCHASE" />
      </form>
 -->
  </body>
  </html>