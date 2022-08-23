<?php

include('DatabaseConnection.class.php');
class DisplayTable
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }

    public function DisplayFiles()
    {
        $query = "Select * From filename";
        $sql = $this->connect()->query($query);
        while($rows = $sql->fetch_assoc()) 
        { 
            echo "<tr>";
            echo $v1 = $rows['ID'];
                                
            echo"<td>".$rows['name']."</td>";
            echo"<td>".$rows['size']."</td>";
            echo"<td>".$rows['type']."</td>";
            echo"<td>".$rows['DateTime']."</td>";?>
            <td><form action='' method='POST'>
                <input type='hidden' name='id' value='<?=$rows['ID']?>'>
                <input type='submit' class='btn btn-sm btn-danger' name='submit' value='DELETE'>
                </form></td></tr>";
<?php                        
        } 
                        
    }
}

?>