<html>
<head>
<title>A PHP Program.</title>
</head>
<body>
    <center>
    <h1 style="color:green">A PHP Program to find the gross salary of an Employee</h1>
    <hr><br><br>

    <form method="post">
    <h2 style="color:blue">Check the salary of front-end developers here!</h2>
<table border="0">
<tr>
<td> <input type="number" name="salary_web_designer" value="" placeholder="Enter basic salary front_end_developer"/><br><br>
</td>
</tr>
<tr>
<td> <input type="number" name="no_of_yearsSpent" value="" placeholder="Enter number of year spent"/><br><br>
</td>
</tr>
<tr>
<td> <input style="background-color:lightgreen" type="submit" name="submit3" value="Get back-end developer salary!"/>
</td>
</tr>
</table>
</form>


<center>

<?php
    if(isset($_POST['submit3']))
{
  $basic_salary = $_POST['salary_front_end_developer'];
  $no_of_yearsSpent = $_POST['no_of_yearsSpent'];
  $bonusPerYear = (3/100 * $basic_salary);
  $bonusTotalYearsSpent = $no_of_yearsSpent * $bonusPerYear;
  $AdditionalSalary = (25/100 * $basic_salary);
  //gross salary
  $gross_salary = $basic_salary + $bonusTotalYearsSpent + $AdditionalSalary;
  echo "Basic Salary : ".$basic_salary. "/-";
  echo " No. of years spent: " .$no_of_yearsSpent. "/-";
  echo " bonusPerYear : " .$bonusPerYear. "/-";
  echo " bonusTotalYearsSpent :" .$bonusTotalYearsSpent."/";
  echo " AdditionalSalary : " .$AdditionalSalary. "/-";
  echo " Gross Salary of back-end developers : " .$gross_salary. "/-";

  return 0;
}

?>

</body>
</html>