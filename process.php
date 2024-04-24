<?php

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $msg = $_POST['msg'];

        if(empty($name) || empty($email) || empty($subject) || empty($msg)) {  
        echo "empty field";
    }
}
?>
