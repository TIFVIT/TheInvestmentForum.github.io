<html> 
<head>
    <title>Records of Registration</title>
</head>
<style>
    table th{
    padding: 5px 5px ;
    }
</style>

<body >
    <table border="3px" style="margin: auto; padding-top: 5px">
        <tr> 
            <th>srno</th>
            <th>name</th>
            <th>phone</th>
            <th>prn</th>
            <th>email</th>
            <th>username</th>
        </tr>
</body> 
<?php
error_reporting(0);
include('connection.php');
$query="select * from reg";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);


// echo $result['FullName']."   ".$result['Email']."   ".$result['NumberofPeopleincommunity']."   ".$result['PhoneNumber']."   ".$result['CommunityID'].
// "   ".$result['Username'];

// echo $total;
if($total!=0){
    // $result=mysqli_fetch_assoc($data);
    while($result=mysqli_fetch_assoc($data))
    {
        echo"
        <tr>
        <td>".$result['srno']."</td>
        <td>".$result['name']."</td>
        <td>".$result['phone']."</td>
        <td>".$result['prn']."</td>
        <td>".$result['email']."</td>
        <td>".$result['username']."</td>
        </tr>";
    }
    
}
else{
    echo"NO reccords ";

}

?>
</table>
</body>
</html>