<?php

require('header.php');
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "test";
$response = array(); 
 // Create connection
 $conn = mysqli_connect($servername, $username, $password, $database);
 
 // Check connection
 if ($conn) 
 {
    $sql_vid = "SELECT * FROM displayvideofile where isDeleted=0";
    $result_vid = $conn->query($sql_vid);
    //$mysqli->query($sql_vid);
   //echo json_encode($result_vid);
   
    if(isset($_REQUEST['submit']))
   {
       $sql7 = "Update filename set isDeleted = '1' where ID=".$_REQUEST['id'];
       $result7 = $conn->query($sql7);
       if(($result7))
       {
           echo '<script type="text/javascript">';
           echo 'alert("Record Deleted Sucessfully");';
           echo 'window.location.href = "video.php";';
           echo '</script>';
       }
   
       else
       {
           echo"Record Not Del";
       }
   }
   
   //echo json_encode($result7);
   ?>
   
   
   <div class="main-body-content w-100 ets-pt">
                   <div class="table-responsive bg-light">
                       <?php ?>
                       <table class="table">
                           <tr>
                               <th>File Name</th>
                               <th>File Size</th>
                               <th>File Type</th>
                               <th>Date Time</th>
                               <th>------</th>
                           </tr>
   <?php
   if ($result_vid){
            while($rows = $result_vid->fetch_assoc()) 
            { ?>
                <tr>
                    <?php
                    $x = 0;
                    $v1 = $response[$x]['ID'] = $rows['ID']; ?>
                    
                    <td><?php  echo $response[$x]['name'] = $rows['name']; ?></td>
                    <td><?php  echo $response[$x]['size'] = $rows['size']; ?></td>
                    <td><?php  echo $response[$x]['type'] = $rows['type']; ?></td>
                    <td><?php  echo $response[$x]['DateTime'] = $rows['DateTime']; $x++;?></td>
                    <td><form action="" method="POST">
                            <input type="hidden" name="id" value="<?=$rows['ID']?>">
                            <input type="submit" class="btn btn-sm btn-danger" name="submit" value="DELETE">
                        </form>    
                    </td>
                </tr>
                <?php }
                echo json_encode($response, JSON_PRETTY_PRINT);
        }
    }
  

 else{
    die("Connection failed: " . mysqli_connect_error());
 }
 
 require('footer.php')?>


 


 