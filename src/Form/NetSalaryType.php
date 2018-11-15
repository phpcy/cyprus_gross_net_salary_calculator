<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

final class NetSalaryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('grossSalary', TextType::class, [
                'label' => 'Monthly Gross Salary',
            ])
            ->add('months', ChoiceType::class, [
                'choices' => [
                    '12' => 12,
                    '13' => 13,
                    '14' => 14,
                ],
            ])
            ->add('calculate', SubmitType::class, [
                'label' => 'Calculate',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => NetSalary::class,
        ]);
    }
}
