<?php

//include('UploadFile.php');

class UploadFile_Insert 
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }



    public function create($inputData)
    {
        $target_dir = "uploaded/";

        $target_file = $target_dir . basename($_FILES["file"]["name"]);

        //$target_file1 = realpath($target_file);

        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

        if (file_exists($target_file)) 
        {
            echo '<script type="text/javascript">';
            echo 'alert("Sorry, File Already Exists");';
            echo 'window.location.href = "index_1.php";';
            echo '</script>';
            $uploadOk = 0;
        }

        if ($_FILES["file"]["size"] > 500000000) 
        {
            echo '<script type="text/javascript">';
            echo 'alert("Sorry,your file is too Large");';
            echo 'window.location.href = "index_1.php";';
            echo '</script>';
            $uploadOk = 0;
        }

        if ($uploadOk == 0)
        {
            echo "Sorry, your file was not uploaded.";
        }
        else 
        {
            $root = getcwd();
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) 
            {

                $file_name = $inputData["file"]["name"];
                $file_size = $inputData[$vidsize1];
                $vidsize2 = filesize($target_file);
                $vidsize1 = formatfileConvertsize($vidsize2);

                $file = explode('.',$file_name);
                $end = end($file);
                $filepath = $target_dir.$end;

                $file_type = $inputData["file"]["type"];
                $file_path = $inputData[$filepath];

                $UploadQuery = "INSERT INTO filename (name, size, type, file_path) VALUES ('$file_name','$file_size','$file_type','$file_path')";
                $result = $this->conn->query($UploadQuery);
                if($result){
                    return true;
                }else{
                    return false;
                }
            }
        }        
    }
}

?>