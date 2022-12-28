<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Henil code</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<?php
include "db.php";

if (isset($_REQUEST['updateId'])) {
    $query = "select * from student where SPID=$_REQUEST[updateId]";
    $execu = mysqli_query($conn, $query);
    if ($row = mysqli_fetch_array($execu)) {
        # code...
        $spid = $row['SPID'];
        $name = $row['S_NAME'];
        $password = $row['S_PASSWORD'];
        $email = $row['S_EMAIL'];
        $contact = $row['S_CONTACT'];
        $semester = $row['S_SEM'];
        $hobby = explode(" , ",$row['S_HOBBY']);
        $gender = $row['S_GENDER'];
        $color = $row['S_FAV_COLOR'];
        $intrestcoding = $row['S_INTREST'];
        $dob = $row['S_DOB'];
        $website = $row['S_WEBSITE'];
        $photo = $row['S_PHOTO'];
    }
}
?>

<div class="container my-3">
    <h1>Update Form</h1>
    <div class="container">
        <div class="card rounded float-end w-25">
            <img class="card-img-top" src="../upload/<?php echo $row['S_PHOTO']; ?>" alt="<?php echo $row['S_PHOTO']; ?>">
            <div class="card-body">
                <label for="photo" class="btn btn-primary">Change</label>
            </div>
        </div>
    </div>
    <form class="row g-3 w-50 m-auto" action="updateD.php" method="get" enctype="multipart/form-data">
        <div class="input-group">
            <spna class="input-group-text w-25 justify-content-center">SPID</spna>
            <input required type="text" class="form-control" name="spid" value="<?php echo $spid ?>" readonly placeholder="Student id" id="sname">
        </div>
        <div class="input-group">
            <spna class="input-group-text w-25 justify-content-center">Student name</spna>
            <input required type="text" class="form-control" name="sname" value="<?php echo $name ?>" placeholder="Student name" id="sname">
        </div>
        <div class="input-group">
            <span class="input-group-text w-25 justify-content-center">Password</span>
            <input required type="text" class="form-control" name="spassword" value="<?php echo $password ?>" placeholder="Password" id="spassword">
        </div>
        <div class="input-group">
            <span class="input-group-text w-25 justify-content-center">Email</span>
            <input required type="email" class="form-control" name="semail" value="<?php echo $email ?>" placeholder="email" id="sEmail">
        </div>
        <div class="input-group">
            <span class="input-group-text w-25 justify-content-center">Contact</span>
            <input required type="tel" class="form-control" name="scontact" value="<?php echo $contact ?>" placeholder="contact number" id="scontact">
        </div>
        <div class="input-group">
            <label class="input-group-text">Semester</label>
            <select class="form-select" name="semester" id="sem">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
        </div>
        <div class="input-group">
            <label class="input-group-text">Hobby</label>
            <div class="form-check m-2">
                <input class="form-check-input" name="hobby[]" id="programming" type="checkbox" value="Programming" <?php if (in_array('Programming',$hobby)) { ?>checked <?php } ?>>
                <label class="form-check-label" for="programming">
                    Programming
                </label>
            </div>
            <div class="form-check m-2">
                <input class="form-check-input" name="hobby[]" id="cricket" type="checkbox" value="Cricket" <?php if (in_array('Cricket',$hobby)) { ?>checked <?php } ?>>
                <label class="form-check-label" for="cricket">
                    Cricket
                </label>
            </div>
            <div class="form-check m-2">
                <input class="form-check-input" name="hobby[]" id="football" type="checkbox" value="Football" <?php if (in_array('Football',$hobby)) { ?>checked <?php } ?>>
                <label class="form-check-label" for="football">
                    Football
                </label>
            </div>
            <div class="form-check m-2">
                <input class="form-check-input" name="hobby[]" id="otherHobby" type="checkbox" value="other" <?php if (in_array('other',$hobby)) { ?>checked <?php } ?>>
                <label class="form-check-label" for="otherHobby">
                    Other
                </label>
            </div>
        </div>
        <div class="input-group">
            <label class="input-group-text">Gender</label>
            <div class="form-check m-2">
                <input required class="form-check-input" type="radio" id="male" name="gender" value="Male" <?php if ($gender == 'Male') { ?>checked <?php } ?>>
                <label class="form-check-label" for="male">
                    Male
                </label>
            </div>
            <div class="form-check m-2">
                <input required class="form-check-input" type="radio" id="female" name="gender" value="Female" <?php if ($gender == 'Female') { ?>checked<?php } ?>>
                <label class="form-check-label" for="female">
                    Female
                </label>
            </div>
            <div class="form-check m-2">
                <input required class="form-check-input" type="radio" id="otherGender" name="gender" value="Other" <?php if ($gender == 'Other') { ?>checked <?php } ?>>
                <label class="form-check-label" for="otherGender">
                    Other
                </label>
            </div>
        </div>
        <div class="input-group w-50">
            <label class="input-group-text">favorite Color </label>
            <input required type="color" name="sfcolor" id="fvcolor" value="<?php echo $color ?>" class="form-control form-control-color">
        </div>
        <div class="input-group">
            <label class="input-group-text">interest in coding</label>
            <input required type="range" class="form-control" id="intrest" value="<?php echo $intrestcoding ?>" name="intrestcoding" min="0" max="100" value="0">
        </div>
        <div class="input-group">
            <label class="input-group-text">Dob </label>
            <input required type="date" name="dob" id="dob" value="<?php echo $dob ?>" class="form-control">
        </div>
        <div class="input-group">
            <label class="input-group-text">WebSite </label>
            <input required type="url" class="form-control" value="<?php echo $website ?>" id="website" name="website" placeholder="https://">
        </div>
        <div class="input-group">
            <input type="file" id="photo" class="form-control form-control-lg" name="UDphoto" accept="image/*">
        </div>
        <input type="hidden" name="Prev_Photo" value="<?php echo $photo ?>">
        <div class="mt-5 text-center">
            <button class="btn btn-primary w-50" name="update">update</button>
        </div>
    </form>
</div>