<?php 
namespace AppBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface; 
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class UserPrivilegeType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('menu_id', HiddenType::class);
		$builder->add('menu', HiddenType::class);
		$builder->add('menu_pid', HiddenType::class);
		$builder->add('user_group_id', HiddenType::class);
		$builder->add('p_access', CheckboxType::class, array(
			    'required' => false
			));
        $builder->add('p_create', CheckboxType::class, array(
			    'required' => false
			));
		$builder->add('p_retrieve', CheckboxType::class, array(
			    'required' => false
			));
		$builder->add('p_update', CheckboxType::class, array(
			    'required' => false
			));
		$builder->add('p_delete', CheckboxType::class, array(
			    'required' => false
			));
    }
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => null,
        ));
    }
    
}

?>