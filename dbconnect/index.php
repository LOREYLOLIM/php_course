<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Handling</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <h1>Add Account</h1>
        <div class="col-lg-6">
            <form action="includes/formhandling.inc.php" method="POST">
                <div class="mb-3">
                    <label for="firstname" class="form-label">First Name:</label>
                    <input type="text" id="username" name="username" placeholder="Username" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Password:</label>
                    <input type="password" id="pwd" name="pwd" placeholder="Password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="firstname" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Email" class="form-control" required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Signup</button>
            </form>
        </div>
    </div>

    <div class="row justify-content-center">
        <h1>Change Account Account</h1>
        <div class="col-lg-6">
            <form action="includes/userupdate.inc.php" method="POST">
                <div class="mb-3">
                    <label for="firstname" class="form-label">First Name:</label>
                    <input type="text" id="username" name="username" placeholder="Username" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Password:</label>
                    <input type="password" id="pwd" name="pwd" placeholder="Password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="firstname" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Email" class="form-control" required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>

    <div class="row justify-content-center">
        <h1>Delete Account</h1>
        <div class="col-lg-6">
            <form action="includes/userdelete.inc.php" method="POST">
                <div class="mb-3">
                    <label for="firstname" class="form-label">First Name:</label>
                    <input type="text" id="username" name="username" placeholder="Username" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Password:</label>
                    <input type="password" id="pwd" name="pwd" placeholder="Password" class="form-control" required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Delete</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
