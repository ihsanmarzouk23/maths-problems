
<?php
// Generate a random math problem
$num1 = rand(0, 10);
$num2 = rand(0, 10);
$operator = rand(0, 1) ? '+' : '-';
$result = $num1 + $num2;

echo "What is $num1 $operator $num2?";

// Get the user's answer and compare it to the correct solution
if (isset($_POST['answer'])) {
    if ($_POST['answer'] == $result) {
        echo "Correct!";
    } else {
        echo "Incorrect. The answer is $result.";
    }
}
?>