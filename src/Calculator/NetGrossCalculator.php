<?php

namespace App\Calculator;

final class NetGrossCalculator
{
    public function calculateNetSalary(int $grossSalary, int $months): NetGrossCalculatorResult
    {
        $annualGrossSalary = $months * $grossSalary;

        $taxedAnnualGrossSalary = $annualGrossSalary - (($annualGrossSalary * 7.8) / 100) - 132;

        $taxes = $this->calculateTaxes($taxedAnnualGrossSalary);

        $socialInsurances = ($annualGrossSalary * 0.078 >= 4.243) ? 4.243 : ($annualGrossSalary * 0.078);

        $annualNetSalary = $annualGrossSalary - $taxes - $socialInsurances;
        
        return new NetGrossCalculatorResult($annualGrossSalary, $annualNetSalary, $socialInsurances, $taxes);
    }

    private function calculateTaxes(int $annualGrossSalary): float
    {
        if ($annualGrossSalary <= 19500) {
            return 0;
        }

        if ($annualGrossSalary <= 28000) {
            return ($annualGrossSalary - 19500) * 0.20;
        }

        if ($annualGrossSalary <= 36300) {
            return ((28000 - 19500) * 0.20) + (($annualGrossSalary - 28000) * 0.25);
        }

        if ($annualGrossSalary <= 60000) {
            return ((28000 - 19500) * 0.20) + ((36300 - 28000) * 0.25) + (($annualGrossSalary - 36300) * 0.30);
        }

        return ((28000 - 19500) * 0.20) + ((36300 - 28000) * 0.25) + ((60000 - 36300) * 0.30) + (($annualGrossSalary - 60000) * 0.35);
    }
}