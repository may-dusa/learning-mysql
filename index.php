<?php

  $conn = mysqli_connect("localhost", "root", "");

  $success = false;

  if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO `learning`.`users`(`name`, `email`, `date`, `gender`) VALUES ('$name', '$email', '$date', '$gender')";

    if(mysqli_query($conn, $sql)) {
      $success = true;
    } else {
      $success = false;
    }

    mysqli_close($conn);
  }

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Forms - Validation</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous">
    </script>
    <script src="main.js" charset="utf-8"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main.min.css">
  </head>
  <body>
    <div class="body-container">
      <h2>Welcome to form validator</h2>
      <p>Enter your details and click on the submit button.</p>
      <form class="form-container" action="index.php" method="post" autocomplete="off">
        <div class="form-element full">
          <p>Name</p>
          <input type="text" name="name" placeholder="Enter full name" value="<?php echo $name; ?>">
        </div>
        <div class="form-element full">
          <p>Email</p>
          <input type="text" name="email" placeholder="Enter email-id" value="<?php echo $email; ?>">
        </div>
        <div class="form-element half">
          <p>Date of Birth</p>
          <input type="date" name="date" id="date">
        </div>
        <div class="form-element half" id="gender">
          <p>Gender</p>
          <div>
            <input type="radio" name="gender" value="male" checked="checked">
            Male
          </div>
          <div>
            <input type="radio" name="gender" value="female">
            Female
          </div>
        </div>
        <input type="submit" name="submit" value="Submit" id="submit-btn">
      </form>
    </div>
    <div class="body-container">
      <?php

        if($success) {
          echo "Recorded successfully!";
        } else {
          echo "There was some error!";
        }

      ?>
    </div>
  </body>
</html>
