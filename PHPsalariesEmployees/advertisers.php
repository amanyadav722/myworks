<html>
<head>
<title>A PHP Program.</title>
</head>
<body>
    <center>
    <h1 style="color:green">A PHP Program to find the gross salary of an Employee</h1>
    <hr><br><br>
<form method="post">
    <h2 style="color:blue">Check the salary here!</h2>
<table border="0">
<tr>
<td> <input type="text" name="salary" value="" placeholder="Enter basic salary"/><br><br>
</td>
</tr>
<tr>
<td> <input type="number" name="no_of_sale" value="" placeholder="Enter number of sales"/><br><br>
</td>
</tr>
<tr>
<td> <input type="number" name="no_of_yearsSpent" value="" placeholder="Enter number of year spent"/><br><br>
</td>
</tr>
<tr>
<td> <input style="background-color:green" type="submit" name="submit" value="Get Results!"/>
</td>
</tr>
</table>
</form>
<center>

<?php
if(isset($_POST['submit']))
{
  $basic_salary = $_POST['salary'];        // or we can set the basic salary of advertisers or  employés commercial to 2100 as in question
  $no_of_sale = $_POST['no_of_sale'];
  $no_of_yearsSpent = $_POST['no_of_yearsSpent'];
  $bonusAmountOneSale = 100;
  $TotalbonusPerSale = $no_of_sale * $bonusAmountOneSale;
  $bonusPerYear = (3/100 * $basic_salary);
  $bonusTotalYearsSpent = $no_of_yearsSpent * $bonusPerYear;
  //gross salary
  $gross_salary = $basic_salary + $TotalbonusPerSale + $bonusTotalYearsSpent;
  echo "Basic Salary : ".$basic_salary. "/-";
  echo "  TotalbonusPerSale: " .$TotalbonusPerSale. "/-";
  echo "  bonusPerYear : " .$bonusPerYear. "/-";
  echo "  bonusTotalYearsSpent :" .$bonusTotalYearsSpent ."/";
  echo "  Gross Salary : " .$gross_salary. "/-";
  return 0;
}
?>

</body>
</html>