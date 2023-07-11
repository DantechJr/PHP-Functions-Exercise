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

    <div class="text-center mx-3">
      <h3 class=" my-5 mx-5">
      5. Create a function that determine if the given number is an Armstrong Number. An Armstrong Number is a number such that the sum of the cubes of its digits is equal to the number itself.
      </h3>
      <h5>E.g. 153,  1*1*1 + 5*5*5 + 3*3*3 = 153 is an Armstrong number (other armstong numbers: 0, 1, 153, 370, 371, 407) </h5>
    </div>

<div class="container p-3 my-5"  style="text-align:center; margin-top: 100px; border: black 1px solid; width:450px">

    <form class="text-start" method="post" action="">
        <label for="number">Enter a number:</label>
        <input class="form-control" type="text" id="number" name="number">
        <input class="btn btn-dark my-2" style="width:100%;" type="submit" value="Check">
    </form>
    
    <?php
    // Process user input
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $num = $_POST['number'];
        $total = 0;
        $x = $num;

        while ($x != 0) {
            $rem = $x % 10;
            $total += $rem * $rem * $rem;
            $x = floor($x / 10);
        }

        if ($num == $total) {
            echo $num . ' is an Armstrong number.';
        } else {
            echo $num . ' is not an Armstrong number.';
        }
    }
    ?>
</div>

    <footer class="bg-dark text-light text-center mx-auto mt-5 py-2 fixed-bottom">
      <h5>&copy; 2023 | Dante C. Alcantara Jr.™</h5>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>