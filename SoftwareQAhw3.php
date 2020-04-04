<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>QA Homework 3</title>
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
  <body style="font-size:30px">

  <?php
  $choice = $_GET['choice'];
  if ($choice == "BMI")
  {?>

      <form method="post" action="QAfunctions.php?choice=BMI">
          <p>Please enter current height in inches:<input type="text" name="height"></p>
          <p>Please enter current weight:<input type="text" name="weight"></p>
          <input type="submit">
      </form>

      <?php
  }

  else if ($choice == "Retirement") {
      ?>

      <form method="post" action="QAfunctions.php?choice=Retirement">
          <p>Please enter current age: <input type="text" name="age" size="25"></p>
          <p>Please enter Annuel Salary: <input type="text" name="salary" size="25"></p>
          <p>Please enter percentage of salary to save as a decimal: <input type="text" name="decimal" size="25"></p>
          <p>Please enter desired saving goal: <input type="text" name="goal" size="25"></p>
          <input type="submit">
      </form>

      <?php
  }?>
  </body>
</html>
