<?php

class WorkHour
{
    private $id;
    private $employeeId;
    private $weekNumber;
    private $hoursWorked;

    public function __construct($employeeId, $weekNumber, $hoursWorked)
    {
        $this->employeeId = $employeeId;
        $this->weekNumber = $weekNumber;
        $this->hoursWorked = $hoursWorked;
    }

    // Getter dan setter methods untuk properti lainnya...

    public function getHoursWorked()
    {
        return $this->hoursWorked;
    }
}

?>
