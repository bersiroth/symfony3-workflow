<?php

namespace OuicarBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CarType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('mileage')
            ->add('priceDay1')
            ->add('priceDay3')
            ->add('priceDay7');

        $builder->get('mileage')
            ->addModelTransformer(new CallbackTransformer(
                function ($mileage) {
                    // transform the array to a string
                    return implode(', ', $tagsAsArray);
                },
                function ($id) {
                    // transform the string back to an array
                    return explode(', ', $tagsAsString);
                }
            ))
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OuicarBundle\Entity\Car',
            'csrf_protection' => false
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ouicarbundle_car';
    }


}
