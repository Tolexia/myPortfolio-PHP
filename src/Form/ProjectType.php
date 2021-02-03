<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Project;
use App\Entity\UsedTechnology;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ProjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('fromDate')
            ->add('toDate')
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
