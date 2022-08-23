<?php

//session_start();

include('Database_Connection.class.php');
include('UploadFile_Insert.php');

$db = new DatabaseConnection;

  
    if(isset($_POST['save_file']))
    {
        $inputData = [
            'name' => mysqli_real_escape_string($db->conn,$_POST['name']),
            'size' => mysqli_real_escape_string($db->conn,$_POST['size']),
            'type' => mysqli_real_escape_string($db->conn,$_POST['type']),
            'file_path' => mysqli_real_escape_string($db->conn,$_POST['file_path']),
        ];

    
        
        $upload = new UploadFile_Insert;
        $result = $upload->create($inputData);

        if($result)
        {
            // $_SESSION['message'] = "Student Added Successfully";
            // header("Location: UploadFile_Insert.php");
            // exit(0);

            echo '<script type="text/javascript">';
            echo 'alert("File Uploaded");';
            echo 'window.location.href = "index_1.php";';
            echo '</script>';
        }
        else
        {
            // $_SESSION['message'] = "Not Inserted";
            // header("Location: UploadFile_Insert.php");
            // exit(0);

            echo '<script type="text/javascript">';
            echo 'alert("File Not Uploaded");';
            echo 'window.location.href = "index_1.php";';
            echo '</script>';
        }
    }

?>


