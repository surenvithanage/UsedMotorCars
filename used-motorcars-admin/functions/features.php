<?php
    $msg = "";

    // connect to the database
    $db = mysqli_connect("localhost", "root", "", "company");

    if (isset($_POST['save'])) {

        // retrieve form data
        $code = $_POST['code'];
        $name = $_POST['name'];

        $sql = "INSERT INTO features(code, name) VALUES ('$code', '$name')";
        mysqli_query($db, $sql);
        header('Location:../features.php?inserted');
    }

    if(isset($_POST["delete"])) {
        $id = $_POST["id"];

        $sql = "DELETE FROM features where id=$id";
        
            try {
              mysqli_query($db, $sql);
              header('Location:../features.php?deleted');
              }
             catch (Exception $e) {
                $e->getMessage();
                echo "Error";
            }
        
        }
    

?>