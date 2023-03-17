<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Insert Data In Database! </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <header>
    <div class="text-center">
      <h6 class="fw-bold pt-2">Insert Data In Databse MySql</h6>
    </div>
  </header>
  <main class="mx-5 py-2 bg-light d-flex  justify-content-center ">
    <div class=" w-100 z-3 position-absolute p-5 rounded-3">
      <?php if (isset($_SESSION['status'])) {
      ?>
        <div class="alert alert-danger text-center w-25" role="alert">
          <?php echo $_SESSION['status']; ?>
        </div>
      <?php
        unset($_SESSION['status']);
      } ?>
    </div>
    <form class="px-5 py-3 bg-primary rounded mt-5" action="process.php" method="POST">
      <div class="mb-3">
        <label for="firstname" class="form-label fw-bold">FirstName</label>
        <input type="text" class="form-control" name="firstname">
      </div>
      <div class="mb-3">
        <label for="lastname" class="form-label fw-bold">LastName</label>
        <input type="text" class="form-control" name="lastname">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label fw-bold">Email address</label>
        <input type="email" class="form-control" name="email">
      </div>
      <div class="mb-3">
        <label for="city" class="form-label fw-bold">City</label>
        <input type="text" class="form-control" name="city">
      </div>
      <button type="submit" name="save" class="btn btn-light fw-bold">Submit</button>
    </form>
  </main>
  <footer>
  </footer>
</body>

</html>