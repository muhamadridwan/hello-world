<?php 
namespace AppBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface; 
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class OrderDetailType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('meal', EntityType::class, array(
				    // query choices from this entity
				    'class' => 'AppBundle:Meal',
				    // use the User.username property as the visible option string
				    'choice_label' => 'mealName'));
		$builder->add('qty', IntegerType::class, array('attr' => array('min' => 0)));
    }
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => null,
        ));
    }
    
}

?>