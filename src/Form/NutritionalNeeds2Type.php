<?php

namespace App\Form;

use App\Entity\NutritionalNeeds;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NutritionalNeeds2Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('speciesNeeds')
            ->add('productionStatusNeeds')
            ->add('sexNeeds')
            ->add('minimumWeightNeeds')
            ->add('maximumWeightNeeds')
            ->add('productionGoalNeeds')
            ->add('nutritionalValueNeeds')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => NutritionalNeeds::class,
        ]);
    }
}