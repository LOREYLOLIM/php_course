<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
                <div class="mb-3">
                    <input type="number" id="num01" name="num01" placeholder="Number One">
                </div>
                <div class="mb-3">
                    <select id="operator" name="operator">
                        <option value="add">+</option>
                        <option value="subtract">-</option>
                        <option value="multiply">*</option>
                        <option value="divide">/</option>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="number" id="num02" name="num02" placeholder="Number Two">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Calculate</button>
            </form>
            <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $num01 = $_POST["num01"];
                
            }
            ?>
        </div>
    </div>
</div>

</body>
</html>