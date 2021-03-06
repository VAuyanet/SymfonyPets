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
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use pets\WebBundle\Entity\Usuaris;
//TextType, TextareaType, SubmitType, etc. 
class SubtasquesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titol', TextType::class)->add('descripcio', TextareaType::class)->add('dataInici', DateType::class)->add('dataFinal', DateType::class)->add('prioritat', TextType::class)->add('Usuaris', EntityType::class, array(
            'class' => 'petsWebBundle:Usuaris',
            'choice_label' => 'nom',
            'multiple' => FALSE,
            'label_attr'=> array('class' => 'labelT'), 
            'attr' => array('class' => 'form-control')
        ))->add('idTasca', HiddenType::class);
        //$builder->add('titol', TextType::class)->add('descripcio', TextareaType::class)->add('dataInici', DateType::class)->add('dataFinal', DateType::class)->add('prioritat', TextType::class)->add('Usuaris', TextType::class)->add('idTasca', HiddenType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'pets\WebBundle\Entity\Subtasques'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'pets_webbundle_subtasques';
    }


}
