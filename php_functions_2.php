<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>PHP Functions Exercise 2</title>
</head>
<body >

<header class="bg-dark text-light">
  <h1 class="mx-5">PHP Functions Exercise 2</h1>
</header>
<body>

<div>
  <h3 class="text-center my-5 mx-5">2. Create a function that convert a digit into its word counterpart. E.g. 721 to Seven Two One. </h3>
</div>

  <div class="container p-5"  style="text-align:center; margin-top: 100px; border: black 1px solid; width:450px" >
    <form method="post" action=""  class="text-start">
        <label for="number">Enter a number:</label>
        <input class="form-control" type="text" id="number" name="number">
        <input class="btn btn-dark my-2" style="width:100%;" type="submit" value="Convert">
    </form>
    
    <?php
    function digitToWord($number) {
        $wordMap = array(
            0 => 'Zero',
            1 => 'One',
            2 => 'Two',
            3 => 'Three',
            4 => 'Four',
            5 => 'Five',
            6 => 'Six',
            7 => 'Seven',
            8 => 'Eight',
            9 => 'Nine'
        );

        $digits = str_split($number);
        $word = '';

        foreach ($digits as $digit) {
            if (isset($wordMap[$digit])) {
                $word .= $wordMap[$digit] . ' ';
            }
        }

        return trim($word);
    }

    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $number = $_POST['number'];

        if (is_numeric($number) && strpos($number, '.') === false && $number >= 0) {
            $word = digitToWord($number);
            echo $number . ' -> ' . $word;
        } else {
            echo 'Please enter a valid non-negative integer.';
        }
    }
    ?>

</div>
<footer class="bg-dark text-light text-center mx-auto py-2 fixed-bottom">
      <h5>&copy; 2023 | Dante C. Alcantara Jr.™</h5>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
