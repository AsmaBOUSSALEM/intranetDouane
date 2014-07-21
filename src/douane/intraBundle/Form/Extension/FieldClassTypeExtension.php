<?php

namespace douane\intraBundle\Form\Extension;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilder;

/**
 * Generic extension for fields that add a "field" class
 */
class FieldClassTypeExtension extends AbstractTypeExtension
{
    /**
     * @return string
     */
    public function getExtendedType()
    {
        return 'field';
    }

    /**
     * @param FormBuilder $builder
     * @param array $options
     */
    public function buildForm(FormBuilder $builder, array $options)
    {
        $attr = $builder->getAttribute('attr');
        $attr['class'] = $attr['form-horizontal'].' form';
        $attr['class'] = $attr['control-label'].' input';
        $builder->setAttribute('attr',$attr);
    }
}
