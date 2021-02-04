<?php

namespace App\Form;

use App\Entity\Asset;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AssetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('image', FileType::class, [
                'multiple' => true,
                'by_reference' => false,
                'attr' => [
                    'accept' => 'image/*',
                    'multiple' => 'multiple'
                ]
            ])
            ->add('save', SubmitType::class, [
                'label'=>'Insert Image',
                'attr' => [
                    'class'=>'btn btn-primary',
                    'style'=>'margin-bottom:15px',
                ]
            ])
        ;
        $builder->get('image')->addModelTransformer(new CallBackTransformer(
            function ($asset) {
                return null;
            },
            function ($asset) {
                return $asset;
            }
        ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Asset::class,
        ]);
    }
}
