<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // Initialize $a and $b
    $a = isset($_POST['a']) ? $_POST['a'] : 0;
    $b = isset($_POST['b']) ? $_POST['b'] : 0;

    // Function to add
    function add($a, $b){
        return $a + $b;
    }

    // Function to subtract
    function sub($a, $b){
        return $a - $b;
    }

    // Function to multiply
    function multiply($a, $b){
        return $a * $b;
    }

    // Function to divide
    function divide($a, $b){
        if ($b != 0) {
            return $a / $b;
        } else {
            return "Cannot divide by zero";
        }
    }

    // Function for exponential
    function exponential($a, $b){
        return $a ** $b;
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $choice = $_POST['choice'];

        // Perform the selected operation
        switch ($choice) {
            case 1:
                echo "Result: " . add($a, $b) . "<br>";
                break;

            case 2:
                echo "Result: " . sub($a, $b) . "<br>";
                break;

            case 3:
                echo "Result: " . multiply($a, $b) . "<br>";
                break;

            case 4:
                echo "Result: " . divide($a, $b) . "<br>";
                break;

            case 5:
                echo "Result: " . exponential($a, $b) . "<br>";
                break;

            default:
                echo "Invalid choice";
        }
    }
    ?>

    <!-- HTML form -->
    <form method='post'>
        Enter first number: <input type='text' name='a'><br><br>
        Enter second number: <input type='text' name='b'><br><br>
        Choose an operation:<br>
        [1] Addition<br>
        [2] Subtraction<br>
        [3] Multiplication<br>
        [4] Divide<br>
        [5] Exponential<br>
        Your choice: <input type='number' name='choice'><br><br>
        <input type='submit' value='Submit'>
    </form>
</body>
</html>
