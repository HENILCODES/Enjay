<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Henil code</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<style>
  .Fav_color {
    width: 50px;
    height: 50px;
    padding: 10px;
    margin: auto;
  }

  .Img {
    width: 80px;
  }
</style>

<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a href="index.php" class="nav-link active"> Home</a>
        </li>
        <li class="nav-item">
          <a href="add.php" class="nav-link "> add </a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="p-3">

    <table class="table table-primary table-responsive table-bordered">
      <thead class="table-borderless table-dark">
        <th>SPID</th>
        <th>Student Name</th>
        <th>Student Password </th>
        <th>Student Email</th>
        <th>Contact</th>
        <th>Semester</th>
        <th>Hobby</th>
        <th>Gender</th>
        <th>Favorite Color</th>
        <th>Intrest in coding</th>
        <th>Date of Birth</th>
        <th>Website</th>
        <th>Photo</th>
        <th>Opreation</th>
      </thead>
      <tbody>
        <?php
        include "PHP/db.php";
        $sele = "select * from student";
        $resS = mysqli_query($conn, $sele);
        while ($row = mysqli_fetch_array($resS)) {
        ?>
          <tr>
            <td> <?php echo $row['SPID']; ?></td>
            <td> <?php echo $row['S_NAME']; ?></td>
            <td> <?php echo $row['S_PASSWORD']; ?></td>
            <td> <?php echo $row['S_EMAIL']; ?></td>
            <td> <?php echo $row['S_CONTACT']; ?></td>
            <td> <?php echo $row['S_SEM']; ?></td>
            <td> <?php echo $row['S_HOBBY']; ?></td>
            <td> <?php echo $row['S_GENDER']; ?></td>
            <td>
              <div class="Fav_color" style="background-color:<?php echo $row['S_FAV_COLOR']; ?>;">
              </div>
            </td>
            <td> <?php echo $row['S_INTREST']; ?></td>
            <td> <?php echo $row['S_DOB']; ?></td>
            <td> <a href="<?php echo $row['S_WEBSITE']; ?>" target="_blank"><?php echo $row['S_WEBSITE']; ?></a></td>
            <td class="text-center"> <img class="Img" src="upload/<?php echo $row['S_PHOTO']; ?>" alt="<?php echo $row['S_PHOTO']; ?>"></td>
            <td>
              <a class="btn btn-success bi bi-pencil-square" href="PHP/updateForm.php?updateId=<?php echo $row['SPID']; ?>"></a>
              <a class="btn btn-danger bi bi-trash3-fill" href="PHP/delete.php?deleteData=<?php echo $row['SPID']; ?>"></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>