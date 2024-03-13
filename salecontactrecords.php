<?php
$servername="localhost";
$username="root";
$password="";
$dbname="int";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
  die("connection failed:".$conn->connect_error);
}
else{
  echo "connection successfully";
}
  $sql = "select * from salecontact"; 
    $result = ($conn->query($sql)); 
    //declare array to store the data of database 
    $row = [];  
  
    if ($result->num_rows > 0)  
    { 
        // fetch all data from db into array  
        $row = $result->fetch_all(MYSQLI_ASSOC);   
    }    
?> 
  
<!DOCTYPE html> 
<html> 
<style> 
    td,th { 
        border: 1px solid pink; 
        padding: 10px; 
        margin: 5px; 
        text-align: center; 
        background: gray;
        color: white;
    } 
    th{
        color: black;
    }
</style> 
  
<body> 
    <table> 
        <thead> 
            <tr> <th>sr.no</th>
                <th>name</th> 
                <th>email</th> 
                <th>subject</th> 
                <th>message</th> 
              <!--   <th>action</th> -->
            </tr> 
        </thead> 
        <tbody> 
            <?php 
               if(!empty($row)) 
               foreach($row as $rows) 
              {  
            ?> 
            <tr> 
                <td><?php echo $rows['id']; ?></td> 
                <td><?php echo $rows['name']; ?></td> 
                <td><?php echo $rows['email']; ?></td> 
                <td><?php echo $rows['subject']; ?></td> 
                <td><?php echo $rows['message']; ?></td> 
             <!--    <td><button class="btn btn-info">Edit</button> </td> 
                 <td><button class="btn btn-info">View</button> </td> 
                  <td><button class="btn btn-danger">Delete</button> </td>  -->
  
            </tr> 
            <?php } ?> 
        </tbody> 
    </table> 
</body> 
</html> 
  
<?php    
    mysqli_close($conn); 
?>