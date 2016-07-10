<?php 
use Symfony\Component\Form\AbstractType;
class UserPrivilegeType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('menu_id', TextType::class);
		$builder->add('menu', TextType::class);
		$builder->add('menu_pid', TextType::class);
		$builder->add('user_group_id', TextType::class);
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