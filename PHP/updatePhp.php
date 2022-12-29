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
    $query = "UPDATE student SET names='$s_name',passwords='$s_password',emails='$s_email',contacts=$s_contact,sems=$s_semester,hobbys='$s_hobby',genders='$s_gender',fav_colors='$s_color',intrests='$s_intrestcoding',dobs='$s_dob',websites='$s_website',photos='$s_photo' WHERE id = $s_spid";
    $exec_query = mysqli_query($conn,$query);
    if ($exec_query) {
    header("location: ../index.php");
    }

}
