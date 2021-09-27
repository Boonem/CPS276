<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  </head>
  <title>Form Project</title>
  <body>
    <div class= "container">
      <form action="#" method="post">
        <div class="form-group">
          <div class="row g-3">
            <div class="col-md-6">
              <label for="fname" class="form-label">First Name</label>
              <input type="text" class="form-control" id="fname">
            </div>
            <div class="col-md-6">
              <label for="lname" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="lname">
            </div>
            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address">
            </div>
            <div class="col-md-6">
              <label for="city" class="form-label">City</label>
              <input type="text" class="form-control" id="city">
            </div>
            <div class="col-md-4">
              <label for="state" class="form-label">State</label>
              <select id="state" class="form-select">
                <option>Idaho</option>
                <option>Montana</option>
                <option selected>Michigan</option>
                <option>Wisconsin</option>
                <option>Florida</option>
              </select>
            </div>
            <div class="col-md-2">
              <label for="zip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="zip">
            </div>
            <div class="col-12">
              <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" id="male">
                <label for="male" class="form-label">Male</label>
              </div>
              <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" id="female">
                <label for="female" class="form-label">Female</label>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <button type="register" class="btn btn-primary">Register</button>
        </div>
      </form>
    </div>
</body>
</html>


