<title>Quiz Submission</title>

<?php
//access the global array called $_POST to get the values from the text fields
$ans1 = $_POST["ans1"];
$ans2 = $_POST["ans2"];
$ans3 = $_POST["ans3"];
$ans4 = $_POST["ans4"];
$ans5 = $_POST["ans5"];


echo "Question 1: What is 2 + 2? " . "<br> Your Answer: " . $ans1 . "<br> Correct Answer: 4 <br><br>";
echo "Question 2: Who was the first president of the US? " . "<br> Your Answer: " . $ans2 . "<br> Correct Answer: George Washington<br><br>";
echo "Question 3: What is the square root of 4? " . "<br> Your Answer: " . $ans3 . "<br> Correct Answer: 2 <br><br>";
echo "Question 4: Who created Facebook? " . "<br> Your Answer: " . $ans4 . "<br> Correct Answer: Mark Zuckerberg <br><br>";
echo "Question 5: What letter is after C? " . "<br> Your Answer: " . $ans5 . "<br> Correct Answer: D <br><br>";

$totalScore = 0;
if ($ans1 == "4")
  $totalScore++;
if ($ans2 == "George Washington")
  $totalScore++;
if ($ans3 == "2")
  $totalScore++;
if ($ans4 == "Mark Zuckerberg")
  $totalScore++;
if ($ans5 == "D")
  $totalScore++;

echo "You answered " . $totalScore . " total questions correct. <br>";

$percent = $totalScore / .05;

echo "You scored a " . $percent . "%.";

?>
