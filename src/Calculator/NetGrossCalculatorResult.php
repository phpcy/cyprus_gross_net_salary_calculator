<?php

namespace App\Calculator;

final class NetGrossCalculatorResult
{
    /**
     * @var int
     */
    private $annualGrossSalary;

    /**
     * @var float
     */
    private $annualNetSalary;

    /**
     * @var float
     */
    private $socialInsurances;

    /**
     * @var float
     */
    private $taxes;

    public function __construct(int $annualGrossSalary, float $annualNetSalary, float $socialInsurances, float $taxes)
    {
        $this->annualGrossSalary = $annualGrossSalary;
        $this->annualNetSalary = $annualNetSalary;
        $this->socialInsurances = $socialInsurances;
        $this->taxes = $taxes;
    }

    /**
     * @return int
     */
    public function getAnnualGrossSalary(): int
    {
        return $this->annualGrossSalary;
    }

    /**
     * @return float
     */
    public function getAnnualNetSalary(): float
    {
        return $this->annualNetSalary;
    }

    /**
     * @return float
     */
    public function getSocialInsurances(): float
    {
        return $this->socialInsurances;
    }

    /**
     * @return float
     */
    public function getTaxes(): float
    {
        return $this->taxes;
    }
}