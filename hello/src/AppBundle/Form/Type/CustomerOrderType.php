<?php 
namespace AppBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface; 
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;


class CustomerOrderType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {

    	$builder->add('customer', EntityType::class, array(
				    'class' => 'AppBundle:Customer',
				    'choice_label' => 'customerName',
				    'choices' => $options['restoTable']));
		$builder->add('orderDate', DateTimeType::class, array(
		    'attr' => array('class'=>hidden)
		));
		$builder->add('orderType', IntegerType::class, array(
		    'attr' => array('class'=>hidden)
		));
		$builder->add('cashier', EntityType::class, array(
				    'disabled' => true,
				    'class' => 'AppBundle:Employee',
				    'choice_label' => 'employeeName',
				    'choices' => $options['cashier']));
		$builder->add('paymentMethod', TextType::class, array(
						'disabled' => true
						));
		$builder->add('orderStatus', IntegerType::class, array(
						'disabled' => true,
						'attr' => array('class' => 'hidden')
						));
		
    }
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => null,
            'restoTable' => array(),
            'cashier' => array()
        ));
    }
    
}

?>