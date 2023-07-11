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

<div>
  <h3 class="text-center my-5 mx-5">1. Create a function that check if a character is a vowel or consonant.</h3>
</div>

<div class="container p-5"  style="text-align:center; margin-top: 100px; border: black 1px solid; width:450px" >
    <form class="text-start" method="post" action="" >
        <label for="character">Enter a character:</label>
        <input class="form-control" type="text" id="character" name="character">
        <input class="btn btn-dark my-2" style="width:100%;" type="submit" value="Check">
    </form>




<?php
    function isVowel($character) {
        $vowels = array('a', 'e', 'i', 'o', 'u');
        $character = strtolower($character); // Convert character to lowercase for case-insensitive comparison
        
        if (in_array($character, $vowels)) {
            return true; // Character is a vowel
        } else {
            return false; // Character is a consonant
        }
    }
    
    // Process user input
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $char = $_POST['character'];
        
        if (strlen($char) === 1) {
            if (isVowel($char)) {
                echo $char . ' is a vowel.';
            } else {
                echo $char . ' is a consonant.';
            }
        } else {
            echo 'Please enter a single character.';
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