<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Project;
use App\Entity\UsedTechnology;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ProjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, ['label' => 'Project name'])
            ->add('description', TextareaType::class, ['label' => 'Description'])
            ->add('fromDate', DateType::class, ['label' => 'Start Date'])
            ->add('toDate', DateType::class, ['label' => 'End Date'])
            ->add('usedTechnology', EntityType::class, [
                'class' => UsedTechnology::class,
                'choice_label' => 'technology',
                'label' => 'Used technologies',
                'multiple' => true,
                'expanded' => true,
                ])
            ->add('category', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'category',
                'label' => 'Category'
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Project::class,
        ]);
    }
}
