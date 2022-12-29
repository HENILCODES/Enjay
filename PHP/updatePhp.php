<?php
include "db.php";
if (isset($_REQUEST['update'])) {
    $s_spid = $_REQUEST['spid'];
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

    if (isset($_REQUEST['UDphoto'])) {
        $s_photo = $_REQUEST['Prev_Photo'];
    } else {
        $s_photo = $_FILES['UDphoto']['name'];
        move_uploaded_file($_FILES['UDphoto']['tmp_name'], "../upload/" . $s_photo);
    }
    $query = "UPDATE student SET S_NAME='$s_name',S_PASSWORD='$s_password',S_EMAIL='$s_email',S_CONTACT=$s_contact,S_SEM=$s_semester,S_HOBBY='$s_hobby',S_GENDER='$s_gender',S_FAV_COLOR='$s_color',S_INTREST='$s_intrestcoding',S_DOB='$s_dob',S_WEBSITE='$s_website',S_PHOTO='$s_photo' WHERE SPID = $s_spid";
    $exec_query = mysqli_query($conn,$query);
    if ($exec_query) {
    header("location: ../index.php");
    }

}
