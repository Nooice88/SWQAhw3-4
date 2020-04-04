<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>QA Homework 3</title>
    <style type="text/css">
    select {
    width: 150px;
    margin: 10px;
}
select:focus {
    min-width: 150px;
    width: auto;
}
      body {
    margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%) }
    </style>
  </head>
  <body>
    <form method="GET" action="SoftwareQAhw3.php">
    <h1 style="font-size:30px;"> Please Choose an Option:</h1>
    <select style="size:25" name="choice">
      <option>BMI</option>
      <option>Retirement</option>
    </select>
    <input type="submit">
  </body>
</html>
