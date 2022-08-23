<?php

require('header.php');
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "test";
 
 // Create connection
 $conn = mysqli_connect($servername, $username, $password, $database);
 
 // Check connection
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }

 $sql_vid = "SELECT * FROM displaytextfile where isDeleted=0";
 $result_vid = $conn->query($sql_vid);
 //$mysqli->query($sql_vid);


 if(isset($_REQUEST['submit']))
{
    $sql7 = "Update filename set isDeleted = '1' where ID=".$_REQUEST['id'];
    $result7 = $conn->query($sql7);
    if(($result7))
    {
        echo '<script type="text/javascript">';
        echo 'alert("Record Deleted Sucessfully");';
        echo 'window.location.href = "text.php";';
        echo '</script>';
    }
    else
    {
        echo"Record Not Del";
    }
}

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

    while($rows = $result_vid->fetch_assoc()) 
                            { ?>
                                <tr>
                                    <?php $v1 = $rows['ID']; ?>
                                    
                                    <td><?php echo $rows['name']; ?></td>
                                    <td><?php echo $rows['size']; ?></td>
                                    <td><?php echo $rows['type']; ?></td>
                                    <td><?php echo $rows['DateTime']; ?></td>
                                    <td><form action="" method="POST">
                                            <input type="hidden" name="id" value="<?=$rows['ID']?>">
                                            <input type="submit" class="btn btn-sm btn-danger" name="submit" value="DELETE">
                                        </form>    
                                    </td>
                                </tr>
                            
                            <?php } 
                            ?>
<?php $conn->close();?>
<?php require('footer.php')?>


 