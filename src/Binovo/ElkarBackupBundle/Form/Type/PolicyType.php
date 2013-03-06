<?php

namespace Binovo\ElkarBackupBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class PolicyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $t = $options['translator'];
        $builder->add('name'              , 'text'    , array('label' => $t->trans('Name'       , array(), 'BinovoElkarBackup'),
                                                              'attr' => array('class'    => 'span10')))
                ->add('description'       , 'textarea', array('label' => $t->trans('Description', array(), 'BinovoElkarBackup'),
                                                              'required' => false,
                                                              'attr' => array('class'    => 'span10')))
                ->add('hourlyHours'       , 'hidden'  , array('required' => false))
                ->add('hourlyDaysOfMonth' , 'hidden'  , array('required' => false))
                ->add('hourlyDaysOfWeek'  , 'hidden'  , array('required' => false))
                ->add('hourlyMonths'      , 'hidden'  , array('required' => false))
                ->add('hourlyCount'       , 'hidden'  , array('required' => false))
                ->add('dailyHours'        , 'hidden'  , array('required' => false))
                ->add('dailyDaysOfMonth'  , 'hidden'  , array('required' => false))
                ->add('dailyDaysOfWeek'   , 'hidden'  , array('required' => false))
                ->add('dailyMonths'       , 'hidden'  , array('required' => false))
                ->add('dailyCount'        , 'hidden'  , array('required' => false))
                ->add('weeklyHours'       , 'hidden'  , array('required' => false))
                ->add('weeklyDaysOfMonth' , 'hidden'  , array('required' => false))
                ->add('weeklyDaysOfWeek'  , 'hidden'  , array('required' => false))
                ->add('weeklyMonths'      , 'hidden'  , array('required' => false))
                ->add('weeklyCount'       , 'hidden'  , array('required' => false))
                ->add('monthlyHours'      , 'hidden'  , array('required' => false))
                ->add('monthlyDaysOfMonth', 'hidden'  , array('required' => false))
                ->add('monthlyDaysOfWeek' , 'hidden'  , array('required' => false))
                ->add('monthlyMonths'     , 'hidden'  , array('required' => false))
                ->add('monthlyCount'      , 'hidden'  , array('required' => false))
                ->add('yearlyHours'       , 'hidden'  , array('required' => false))
                ->add('yearlyDaysOfMonth' , 'hidden'  , array('required' => false))
                ->add('yearlyDaysOfWeek'  , 'hidden'  , array('required' => false))
                ->add('yearlyMonths'      , 'hidden'  , array('required' => false))
                ->add('yearlyCount'       , 'hidden'  , array('required' => false))
                ->add('exclude'           , 'textarea', array('label' => $t->trans('Exclude', array(), 'BinovoElkarBackup'),
                                                              'required' => false,
                                                              'attr' => array('class'    => 'span10')))
                ->add('include'           , 'textarea', array('label' => $t->trans('Include', array(), 'BinovoElkarBackup'),
                                                              'required' => false,
                                                              'attr' => array('class'    => 'span10')))
                ->add('syncFirst'         , 'checkbox', array('label' => $t->trans('Sync first', array(), 'BinovoElkarBackup'),
                                                              'required' => false))
            ;
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Binovo\ElkarBackupBundle\Entity\Policy',
            'translator' => null,
        );
    }

    public function getName()
    {
        return 'Policy';
    }
}