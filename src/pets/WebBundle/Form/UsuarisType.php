<?php

namespace pets\WebBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType; 
use Symfony\Component\Form\Extension\Core\Type\TextareaType; 
use Symfony\Component\Form\Extension\Core\Type\SubmitType; 
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use pets\WebBundle\Entity\Departament;

class UsuarisType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom', TextType::class)->add('cognoms', TextType::class)->add('email', EmailType::class)->add('perfil', TextType::class)->add('password', PasswordType::class)->add('Departament', EntityType::class, array(
                'class' => 'petsWebBundle:Departament',
                'choice_label' => 'nom',
                'multiple' => FALSE,
                'label_attr'=> array('class' => 'labelT'), 
                'attr' => array('class' => 'form-control')
                ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'pets\WebBundle\Entity\Usuaris'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'pets_webbundle_usuaris';
    }


}
