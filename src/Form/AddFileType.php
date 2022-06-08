<?php

namespace App\Form;

use App\Entity\FichierClient;
use App\Entity\FichierDemande;
use App\Repository\InfoClientRepository;
use App\Repository\FichierDemandeRepository;
use App\Entity\InfoClient;
use App\Entity\Admin;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

use Symfony\Component\Security\Core\Security;

class AddFileType extends AbstractType
{
    
    private $security;

public function __construct(Security $security)
{
    $this->security = $security;
}
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $id_client = $options['id_client'];
        $builder
     
            ->add('id_cli',EntityType::class,[
            
            'class'=>InfoClient::class,
            'choice_label'=> function (InfoClient $cli){return $cli->getNom().'-'.$cli->getNomSociete();},
            'attr'=>array('class'=>'form-select','value'=>'0'),
            
            'query_builder' => function(InfoClientRepository $er)  {
                $user = $this->security->getUser();                
                return $er->createQueryBuilder('u')
                ->where('u.id_adm = :id')                
                ->setParameter('id', $user->getId());
                
                }

               
       
            
            
            
            
            ])
            ->add('nom_fichier',EntityType::class,[
            'class'=>FichierDemande::class,
            'choice_label'=>'Nom',
            'attr'=>array('class'=>'form-select'),
            

            ])
         
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FichierClient::class,
            'id_secteur' => InfoClient::class,
        ]);
    }
}
