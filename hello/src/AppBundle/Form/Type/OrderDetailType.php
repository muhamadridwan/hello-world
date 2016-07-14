<?php 
namespace AppBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface; 
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotNull;


class OrderDetailType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {
    	var_dump($options);
        $builder->add('meal', EntityType::class, array(
				    'class' => 'AppBundle:Meal',
				    'choice_label' => 'mealName',
				    'choices' => $options['meals'],
					'attr' => array('class'=>'hidden')));
		$builder->add('qty', IntegerType::class, array(
						'attr'=> array(
							'min' => 0
						)));
		$builder->add('total', MoneyType::class, array(
						'disabled' => true,
						'currency' => 'IDR',
						'attr'=> array(
							'class' => 'hidden'
						)));
		$builder->add('totalBeforeDiscount', MoneyType::class, array(
						'disabled' => true,
						'currency' => 'IDR',
						'attr'=> array(
							'class' => 'hidden'
						)));
		$builder->add('totalDiscount', MoneyType::class, array(
						'disabled' => true,
						'currency' => 'IDR',
						'attr'=> array(
							'class' => 'hidden'
						)));
		
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
    	parent::configureOptions($resolver);
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\OrderDetail',
            'meals' => null
        ));
    }

    /*public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'meals' => 'AppBundle\Entity\Meal',
        ));
    }*/

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setRequired(array(
            'meals'
        ));

    }
    

    
}

?>