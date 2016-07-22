<?php 
namespace AppBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface; 
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\OptionsResolver\OptionsResolver;


class CustomerOrderType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {

    	$builder->add('customer', EntityType::class, array(
				    'class' => 'AppBundle:Customer',
				    'choice_label' => 'customerName',
				    'choices' => $options['restoTable']));
		$builder->add('orderDate', DateTimeType::class, array(
		    'attr' => array('class'=>'hidden')
		));
		$builder->add('orderType', IntegerType::class, array(
		    'attr' => array('class'=>'hidden')
		));
		$builder->add('cashier', EntityType::class, array(
				    'disabled' => true,
				    'class' => 'AppBundle:Employee',
				    'choice_label' => 'employeeName',
				    'choices' => $options['cashier'],
					'attr' => array('class' => 'hidden')));
		$builder->add('paymentMethod', TextType::class, array(
						'disabled' => true
						));
		$builder->add('orderStatus', IntegerType::class, array(
						'disabled' => true,
						'attr' => array('class' => 'hidden')
						));
		
    }

    public function configureOptions(OptionsResolver $resolver)
    {
    	parent::configureOptions($resolver);
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\CustomerOrder',
            'restoTable' => array(),
            'cashier' => array()
        ));
    }
    /*public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => null,
            'restoTable' => array(),
            'cashier' => array()
        ));
    }*/
    
}

?>