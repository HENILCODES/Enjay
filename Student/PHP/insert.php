<?php

include "db.php";

if (isset($_REQUEST['upload'])) {
    $s_name = $_REQUEST['sname'];
    $s_password = $_REQUEST['spassword'];
    $s_email = $_REQUEST['semail'];
    $s_contact = $_REQUEST['scontact'];
    $s_semester = $_REQUEST['semester'];
    $s_hobby = implode(" , ", $_REQUEST['hobby']);
    $s_gender = $_REQUEST['gender'];
    $s_color = $_REQUEST['sfcolor'];
    $s_intrestcoding = $_REQUEST['intrestcoding'];
    $s_dob = $_REQUEST['dob'];
    $s_website = $_REQUEST['website'];
    $s_photo = $_FILES['photo']['name'];

    if (move_uploaded_file($_FILES['photo']['tmp_name'], "../upload/".$s_photo)) {

        $insert = "INSERT INTO student (`names`, `passwords`, `emails`, `contacts`, `sems`, `hobbys`, `genders`, `fav_colors`, `intrests`, `dobs`, `websites`, `photos`) VALUES ('$s_name','$s_password','$s_email',$s_contact,$s_semester,'$s_hobby','$s_gender','$s_color','$s_intrestcoding','$s_dob','$s_website','$s_photo')";
        $exe_query = mysqli_query($conn, $insert);

        if ($exe_query) {
            header("location: ../index.php");
        }
    }
}
