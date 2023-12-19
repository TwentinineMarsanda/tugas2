<?php

class employee
{
    private $id;
    private $employeeNumber;
    private $fullName;
    private $hourlyWage;
    private $overtimeWagePercentage;

    public function __construct($id, $employeeNumber, $fullName, $hourlyWage, $overtimeWagePercentage)
    {
        $this->id = $id;
        $this->employeeNumber = $employeeNumber;
        $this->fullName = $fullName;
        $this->hourlyWage = $hourlyWage;
        $this->overtimeWagePercentage = $overtimeWagePercentage;
    }

    // Metode setter untuk $id
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    // Getter dan setter methods untuk properti lainnya...

    public function calculateWeeklyPay($hoursWorked)
    {
        $overtimeHours = max($hoursWorked - 48, 0);
        $regularHours = $hoursWorked - $overtimeHours;

        $overtimePay = $overtimeHours * ($this->hourlyWage * (1 + $this->overtimeWagePercentage / 100));
        $regularPay = $regularHours * $this->hourlyWage;

        return $overtimePay + $regularPay;
    }
}

?>
