<?php

namespace Ranga\CatalogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('summary')
            ->add('isActive')
            ->add('slug')
            ->add('brand','entity',
                    array('class' => 'RangaCatalogBundle:Brand',
                           'property'=> 'name'
                        ))
            ->add('category','entity',array('class' => 'RangaCatalogBundle:Category',
                'property'=>'name',
                'multiple'=>true,
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ranga\CatalogBundle\Entity\Product'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ranga_catalogbundle_product';
    }
}
