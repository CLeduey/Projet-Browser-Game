<?php

namespace App\Form;

use App\Entity\Boss;
use Faker;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class BossNewType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $faker = Faker\Factory::create('fr_FR');
        
        $builder
            ->add('name', TextType::class,[
                "data" => $faker->lastName()     
            ])
            ->add('health', IntegerType::class,[
                "data" => 1000
            ])
            ->add('armour', IntegerType::class,[
                "data" => rand(5, 35)
            ])
            ->add('resist_fire', IntegerType::class,[
                "data" => rand(5, 35)
            ])
            ->add('resist_ice', IntegerType::class,[
                "data" => rand(5, 35)
            ])
            ->add('power', IntegerType::class,[
                "data" => rand(35, 65)
            ])
            ->add('power_ice', IntegerType::class,[
                "data" => rand(35, 65)
            ])
            ->add('power_fire', IntegerType::class,[
                "data" => rand(35, 65)
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Boss::class,
        ]);
    }
}
