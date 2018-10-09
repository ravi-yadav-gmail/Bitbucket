<?php

namespace AppBundle\Entity;

/**
 * Employee
 */
class Employee
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $employeeName;

    /**
     * @var float
     */
    private $employeeSal = '0';


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set employeeName
     *
     * @param string $employeeName
     *
     * @return Employee
     */
    public function setEmployeeName($employeeName)
    {
        $this->employeeName = $employeeName;

        return $this;
    }

    /**
     * Get employeeName
     *
     * @return string
     */
    public function getEmployeeName()
    {
        return $this->employeeName;
    }

    /**
     * Set employeeSal
     *
     * @param float $employeeSal
     *
     * @return Employee
     */
    public function setEmployeeSal($employeeSal)
    {
        $this->employeeSal = $employeeSal;

        return $this;
    }

    /**
     * Get employeeSal
     *
     * @return float
     */
    public function getEmployeeSal()
    {
        return $this->employeeSal;
    }
}

