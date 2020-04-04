<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style type="text/css">
      body {
    margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%) }
    </style>
  </head>
  <body style="font-size:30px"style="font-size:30px">
<?php
$choice = $_GET['choice'];
if ($choice == "BMI")
{
  {
  $height = $_POST['height'];
  $weight = $_POST['weight'];

  $kg = $weight * .45;

  $meters = $height * 0.025;

  $newheight = pow($meters, 2);

  $currentBMI = $kg / $newheight;
  $currentBMI = number_format($currentBMI, 2, '.', '');
  echo "Your current BMI is:  $currentBMI";

  if ($currentBMI < 18.5)
  {
  echo " which is Underweight.";
  }

  if ($currentBMI >= 18.5 && $currentBMI <= 24.9)
  {
  echo " which is Normal weight.";
  }

  if ($currentBMI >= 25 && $currentBMI <= 29.9)
  {
  echo" which is Overweight.";
  }

  if ($currentBMI >= 30)
  {
  echo " which is Obese.";
  }
  }
}
if ($choice == "Retirement")
{
  // code...
  $age = $_POST['age'];
  $salary = $_POST['salary'];
  $decimal = $_POST['decimal'];
  $goal = $_POST['goal'];
  $currentsavings=0;
  $annualsavings=0;
  while ($currentsavings <= $goal && $age < 100)
  {
    $annualsavings = ($salary * $decimal) * .35;
    $currentsavings = $currentsavings + ($salary * $decimal) + $annualsavings;
    $age = $age + 1;
  }

  if ($currentsavings > $goal)
  {
  echo "You have reached your goal at the age of $age with $currentsavings! Time to retire.";
  }

   if ($age == 100)
  {
    echo "You did not reach your goal before age 100...";
  }
}
?>
</body>
</html>
