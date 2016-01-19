<form action="imgdir.php" method="POST" enctype="multipart/form-data">

    File: 
        <input type="file" name="image"> 
        <input type="submit" value="Upload">
</form>

<?php error_reporting(E_ALL ^ E_NOTICE);
    
    // connect to database
    
    mysql_connect ("localhost", "root", "") or die (mysql_error());
    mysql_select_db ("images");
    
    // file properties 
    
    $file = $_FILES['image']['tmp_name'];
    
    // checking if the file is submitted
    
    if (!isset ($file))
        echo "Please select an image";
    else 
        {
            $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
            $image_name = addslashes($_FILES ['image']['name']);
            $image_size = getimagesize ($_FILES ['image']['tmp_name']);
            $image_path = "immgs/".basename($image_name); // File destination 
            
            if ($image_size == FALSE)
                echo "That's not an image";
                
            else 
            {    
                if(move_uploaded_file($image_name, $image_path))
                echo "File uploaded";
                
                if (!$insert = mysql_query ("INSERT INTO images VALUES ('', '$image_name', '', '$image_path')"))
                    echo "Problem uploading image";
                    
                else 
                {
                    $lastid = mysql_insert_id ();
                            echo "Image uploaded! <p>View image:</p> <img src=get.php?id=$lastid>";
                }    
            }    
                                
        }
?>
