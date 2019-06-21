<?php

namespace App\Form;

use App\Entity\Departement;
// use Symfony\Component\Form\AbstractType;
use Doctrine\Migrations\Version\Direction;
use App\Form\DirectionType;
use App\Entity\Company;
use App\Entity\CompanySize;
use App\Entity\Country;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DepartementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Nomdepartement')
            ->add('direction', EntityType::class,
            array(
                'label' =>"Direction",
                'class' => Direction::class,
                // 'choice_label' => 'label',
                // 'choice_value' => 'id',
                'translation_domain' => 'departement'
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Departement::class,
        ]);
    }
}
