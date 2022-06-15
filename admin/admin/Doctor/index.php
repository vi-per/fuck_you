<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Doctor_page</title>
</head>
<?php include 'header.php'?>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 m-auto border border-primary mt-3">
        <form action="insert.php" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <p class="text-center fw-bold fs-3 text-warning">Doctor Table</p>
          </div>
          <div class="mb-3">
            <label class="form-label">Doctor Name</label>
            <input type="text" name="name" class="form-control" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label class="form-label">Doctor Fees</label>
            <input type="text" name="fees" class="form-control" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label class="form-label">Doctor specialisation</label>
            <input type="text" name="specialisation" class="form-control" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label class="form-label">Medicine Category</label>
            <select class="form-select" name="Pages">
              <option value="None">None</option>
              <option value="Medicine">Medicine</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Surgeon Category</label>
            <select class="form-select" name="Pages1">
            <option value="None">None</option>
              <option value="Surgeon">Surgeon</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Index Category</label>
            <select class="form-select" name="Pages2">
            <option value="None">None</option>
              <option value="Home">Home</option>
            </select>
          </div>
          
          <button name="submit" class="bg-danger fs-4 fe-bold my-3 form-control text-white">UPLOAD</button>
        </form>
      </div>
    </div>
  </div>


  
  
</body>

</html>