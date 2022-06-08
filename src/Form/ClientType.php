<?php

namespace App\Form;

use App\Entity\InfoClient;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

use Symfony\Component\Form\Extension\Core\Type\TextType;


class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom',TextType::class,array( 'attr' => array( 'class' => 'form-control' ) ))
            ->add('Prenom',TextType::class,array( 'attr' => array( 'class' => 'form-control' ) ))
            ->add('Mail',TextType::class,array( 'attr' => array( 'class' => 'form-control' ) ))
            ->add('nom_Societe',TextType::class,array( 'attr' => array( 'class' => 'form-control' ) ))
            ->add('Adresse',TextType::class,array( 'attr' => array( 'class' => 'form-control' ) ))
            ->add('Num_pro',TextType::class,array( 'attr' => array( 'class' => 'form-control' ) ))
            ->add('Cp',TextType::class,array( 'attr' => array( 'class' => 'form-control' ) ))
            ->add('Ville',TextType::class,array( 'attr' => array( 'class' => 'form-control' ) ))
            ->add('num_siret',TextType::class,array( 'attr' => array( 'class' => 'form-control' ) ))
            ->add('id_adm',HiddenType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => InfoClient::class,
        ]);
    }
}
