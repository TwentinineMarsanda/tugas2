<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candy</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
require_once 'employee.php';
require_once 'WorkHour.php';

$wayan = new Employee(1, 101, 'Wayan', 35000, 15);
$made = new Employee(2, 102, 'Made', 45000, 15);
$kadek = new Employee(3, 103, 'Kadek', 25000, 15);
$nyoman = new Employee(4, 104, 'Nyoman', 55000, 15);
$ketut = new Employee(5, 105, 'Ketut', 65000, 15);

$week1Wayan = new WorkHour($wayan->getId(), 1, 50);
$week1Made = new WorkHour($made->getId(), 1, 45);
$week1kadek = new WorkHour($kadek->getId(), 1, 40);
$week1nyoman = new WorkHour($nyoman->getId(), 1, 35);
$week1ketut = new WorkHour($ketut->getId(), 1, 30);

$week1PayWayan = $wayan->calculateWeeklyPay($week1Wayan->getHoursWorked());
$week1PayMade = $made->calculateWeeklyPay($week1Made->getHoursWorked());
$week1Paykadek = $kadek->calculateWeeklyPay($week1kadek->getHoursWorked());
$week1Paynyoman = $nyoman->calculateWeeklyPay($week1nyoman->getHoursWorked());
$week1Payketut = $ketut->calculateWeeklyPay($week1ketut->getHoursWorked());
?>

<table border="10">
    <tr>
        <th>Employee</th>
        <th>Week 1 Pay</th>
    </tr>
    <tr>
        <td>Wayan</td>
        <td>Rp. <?php echo number_format($week1PayWayan, 2); ?></td>
    </tr>
    <tr>
        <td>Made</td>
        <td>Rp. <?php echo number_format($week1PayMade, 2); ?></td>
    </tr>
    <tr>
        <td>Kadek</td>
        <td>Rp. <?php echo number_format($week1Paykadek, 2); ?></td>
    </tr>
    <tr>
        <td>Nyoman</td>
        <td>Rp. <?php echo number_format($week1Paynyoman, 2); ?></td>
    </tr>
    <tr>
        <td>Ketut</td>
        <td>Rp. <?php echo number_format($week1Payketut, 2); ?></td>
    </tr>
</table>

</body>
</html>
