<?php 
namespace AppBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface; 
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\DataTransformer\IntegerToLocalizedStringTransformer;

class PickedMealType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('meal', EntityType::class, array(
				    // query choices from this entity
				    'class' => 'AppBundle:Meal',
				    // use the User.username property as the visible option string
				    'choice_label' => 'mealName',
					'attr' => array('class'=>'hidden')));
		$builder->add('qty', IntegerType::class, array(
						'attr'=> array(
							'min' => 0
						)));
		$builder->add('save', SubmitType::class, array('label' => 'Order','attr' => array('class'=>'btn btn-primary')));
    }
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => null,
        ));
    }
    
}

?>