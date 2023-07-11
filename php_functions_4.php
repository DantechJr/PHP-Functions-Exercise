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
      4. Create a function that delete the recurring elements inside a sorted list of strings.
      </h3>
    </div>


<div class="container p-3 my-5"  style="text-align:center; margin-top: 100px; border: black 1px solid; width:450px">
    <form class="text-start" method="post" action="">
        <label for="list">Enter a list of words (one word per line):</label>
        <br>
        <textarea id="list" name="list" rows="5" cols="53"></textarea>
        <br>
        <input class="btn btn-dark my-2" style="width:100%;" type="submit" value="Remove Recurring Elements">
    </form>

    <?php
    function removeRecurringElements($sortedList) {
        $uniqueList = array();
        $previousElement = null;

        foreach ($sortedList as $element) {
            if ($element !== $previousElement) {
                $uniqueList[] = $element;
                $previousElement = $element;
            }
        }

        return $uniqueList;
    }

    // Process user input
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $inputList = $_POST['list'];

        // Convert the input into an array of strings
        $sortedList = explode("\n", $inputList);
        $sortedList = array_map('trim', $sortedList);

        // Remove empty elements
        $sortedList = array_filter($sortedList);

        if (!empty($sortedList)) {
            $uniqueList = removeRecurringElements($sortedList);
            echo '<h3>Unique Elements:</h3>';
            echo '<ul>';
            foreach ($uniqueList as $element) {
                echo '<li>' . $element . '</li>';
            }
            echo '</ul>';
        } else {
            echo 'Please enter a valid list of strings.';
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