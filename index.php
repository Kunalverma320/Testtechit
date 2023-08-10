<!DOCTYPE html>
<html>
<head>
<title>Tasktechit</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

<h2>Contact Us</h2>

<?php
    if (isset($_GET['success'])) {
        echo '<p style="color: green;">Form submitted successfully. Thank you!</p>';
    }
?>

<form action="submit_form.php" method="post">
<div class="mb-3">
  <label for="fullname" class="form-label">Full Name</label>
  <input type="text" class="form-control" name="fullname" id="fullname"  required minlength="2" maxlength="50">
</div>
<div class="mb-3">
  <label for="phone" class="form-label">Phone Number:</label>
  <input type="tel" class="form-control" name="phone" id="phone" pattern="[0-9]{10}" required>
</div>
<div class="mb-3">
  <label for="email" class="form-label">Email address</label>
  <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="subject" class="form-label">Subject:</label>
  <input type="text" class="form-control" name="subject" id="subject" required>
</div>
<div class="mb-3">
  <label for="message" class="form-label">Message</label>
  <textarea class="form-control" name="message" id="message" rows="3"></textarea>
</div>


    <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Submit</button>
  </div>

</form>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>



