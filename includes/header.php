<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Font-awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title>Ruhani Softwares</title>
  </head>
  <body>
    <!-- Navbar start -->
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid ms-3">
        <a class="navbar-brand" href="index.php">
          <b>
            <img src="images/ruhanilogo.png" alt="RUHANI Logo" width="150" height="35" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end me-5" id="navbarNav">
          <ul class="navbar-nav float-end">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <!-- Register popup start -->
              <button type="button" class="btn btn-brand ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal"> Register </button>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <!-- Registration form start -->
                      <form action="register.php" method="POST">
                        <div class="mb-3">
                          <label for="fullName" class="form-label">Full-Name</label>
                          <input type="text" class="form-control" name="fullName">
                        </div>
                        <div class="mb-3">
                          <label for="givenEmail" class="form-label">Email address</label>
                          <input type="email" class="form-control" id="givenEmail" name="givenEmail">
                        </div>
                        <div class="mb-3">
                          <label for="givenPass" class="form-label">Password</label>
                          <input type="password" class="form-control" id="givenPass" name="givenPass">
                        </div>
                        <div class="mb-3">
                          <label for="gender" class="form-label">Gender</label>
                          <br>
                          <input type="radio" id="html" name="gender" value="male">
                          <label for="male">Male</label>
                          <br>
                          <input type="radio" id="css" name="gender" value="female">
                          <label for="female">Female</label>
                          <br>
                          <input type="radio" id="javascript" name="gender" value="others">
                          <label for="others">Others</label>
                        </div>
                        <div class="mb-3">
                          <label for="education-year" class="form-label">University student of:</label>
                          <select id="education-year" class="form-control" name="educationYear">
                            <option value="year-1">Year 1</option>
                            <option value="year-2">Year 2</option>
                            <option value="year-3">Year 3</option>
                            <option value="year-4">Year 4</option>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="upload" class="form-label">Upload your photo:</label>
                          <input type="file" id="upload" class="form-control" name="upload">
                        </div>
                        <div class="mb-3 form-check">
                          <input type="checkbox" class="form-check-input" id="terms-conditions">
                          <label class="form-check-label" for="terms-conditions">You are accepting our terms and policy</label>
                        </div>
                        <button type="submit" class="btn btn-brand">Register</button>
                        <input type="reset" class="btn btn-secondary">
                      </form>
                      <!-- Registration form end -->
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <!-- <button type="button" class="btn btn-primary">Register</button> -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- Register popup end -->
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar end -->