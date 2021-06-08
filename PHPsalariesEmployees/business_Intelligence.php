<html>
<head>
<title>A PHP Program.</title>
</head>
<body>
    <center>
    <h1 style="color:green">A PHP Program to find the gross salary of an Employee</h1>
    <hr><br><br>
    <form method="post">
    <h2 style="color:blue">Check the web designer salary here!</h2>
<table border="0">
<tr>
<td> <input type="number" name="salary_business_intelligence" value="" placeholder="Enter basic salary business intelligence"/><br><br>
</td>
</tr>
<tr>
<td> <input type="number" name="no_of_yearsSpent" value="" placeholder="Enter number of year spent"/><br><br>
</td>
</tr>
<tr>
<td> <input style="background-color:yellow" type="submit" name="submit" value="Get web designer salary!"/>
</td>
</tr>
</table>
</form>
<center>

<?php
if(isset($_POST['submit']))
{
  $basic_salary = $_POST['salary_business_intelligence'];   // or we can set the basic salary of business intelligence employees to 2200 as in question
  $no_of_yearsSpent = $_POST['no_of_yearsSpent'];
  $bonusPerYear = (3/100 * $basic_salary);
  $bonusTotalYearsSpent = $no_of_yearsSpent * $bonusPerYear;

   if ($no_of_yearsSpent == 2) {
     $increaseSalary = (10/100 * $basic_salary);
   }
   elseif($no_of_yearsSpent >= 4 && $no_of_yearsSpent <= 6 ) {
     $increaseSalary = (15/100 * $basic_salary);
   }
   elseif($no_of_yearsSpent >= 6) {
     $increaseSalary = (20/100 * $basic_salary);
   }
   else {
     $increaseSalary = $basic_salary;
   }

  //gross salary
  $gross_salary = $basic_salary + $bonusTotalYearsSpent + $increaseSalary;
  echo "Basic Salary : ".$basic_salary. "/-";
  echo " No. of years spent: " .$no_of_yearsSpent. "/-";
  echo " bonusPerYear : " .$bonusPerYear. "/-";
  echo " bonusTotalYearsSpent :" .$bonusTotalYearsSpent."/";
  echo " Increases in salary  :" .$increaseSalary."/";
  echo " Gross Salary : " .$gross_salary. "/-";
  return 0;
}

?>

</body>
</html>