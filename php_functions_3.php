<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <title>PHP Functions Exercise 2</title>
  </head>
  <body>
    <header class="bg-dark text-light">
      <h1 class="mx-5">PHP Functions Exercise 2</h1>
    </header>

    <div>
      <h3 class="text-center my-5 mx-5">
      3. Create a function that determine if a given number is divisible by 3.
      </h3>
    </div>


<div class="container p-5"  style="text-align:center; margin-top: 100px; border: black 1px solid; width:450px" >
    <form class="text-start" method="post" action="">
        <label for="number">Enter a number:</label>
        <input class="form-control" type="text" id="number" name="number">
        <input class="btn btn-dark my-2" style="width:100%;" type="submit" value="Check">
    </form>
    
    <?php
    function isDivisibleBy3($number) {
        if ($number % 3 === 0) {
            return true; // Number is divisible by 3
        } else {
            return false; // Number is not divisible by 3
        }
    }

    // Process user input
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $number = $_POST['number'];

        if (is_numeric($number)) {
            if (isDivisibleBy3($number)) {
                echo $number . ' is divisible by 3.';
            } else {
                echo $number . ' is not divisible by 3.';
            }
        } else {
            echo 'Please enter a valid number.';
        }
    }
    ?>

</div>









    <footer class="bg-dark text-light text-center mx-auto py-2 fixed-bottom">
      <h5>&copy; 2023 | Dante C. Alcantara Jr.™</h5>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
