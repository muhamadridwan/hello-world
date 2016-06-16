<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_85a364c7837fb7911107a8e2fb147a7bcb62e4ef40a4d85db3d96a6918610adf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea52731c592a403e7e0f5d28295d619e6959621c195d610e98642ec12c528d3c = $this->env->getExtension("native_profiler");
        $__internal_ea52731c592a403e7e0f5d28295d619e6959621c195d610e98642ec12c528d3c->enter($__internal_ea52731c592a403e7e0f5d28295d619e6959621c195d610e98642ec12c528d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea52731c592a403e7e0f5d28295d619e6959621c195d610e98642ec12c528d3c->leave($__internal_ea52731c592a403e7e0f5d28295d619e6959621c195d610e98642ec12c528d3c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0a6db9abb24e8229c803dad0d81e8cff84b124def792df774b46ced8457e5486 = $this->env->getExtension("native_profiler");
        $__internal_0a6db9abb24e8229c803dad0d81e8cff84b124def792df774b46ced8457e5486->enter($__internal_0a6db9abb24e8229c803dad0d81e8cff84b124def792df774b46ced8457e5486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0a6db9abb24e8229c803dad0d81e8cff84b124def792df774b46ced8457e5486->leave($__internal_0a6db9abb24e8229c803dad0d81e8cff84b124def792df774b46ced8457e5486_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a7109308321d9d7ba3a601ea2c4a61935171e9760ff74c711ca51680ebc2ebf5 = $this->env->getExtension("native_profiler");
        $__internal_a7109308321d9d7ba3a601ea2c4a61935171e9760ff74c711ca51680ebc2ebf5->enter($__internal_a7109308321d9d7ba3a601ea2c4a61935171e9760ff74c711ca51680ebc2ebf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a7109308321d9d7ba3a601ea2c4a61935171e9760ff74c711ca51680ebc2ebf5->leave($__internal_a7109308321d9d7ba3a601ea2c4a61935171e9760ff74c711ca51680ebc2ebf5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c7a1c00f3416fa290e25c7573ce5d106a04431a180fa515d33559522a8805720 = $this->env->getExtension("native_profiler");
        $__internal_c7a1c00f3416fa290e25c7573ce5d106a04431a180fa515d33559522a8805720->enter($__internal_c7a1c00f3416fa290e25c7573ce5d106a04431a180fa515d33559522a8805720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c7a1c00f3416fa290e25c7573ce5d106a04431a180fa515d33559522a8805720->leave($__internal_c7a1c00f3416fa290e25c7573ce5d106a04431a180fa515d33559522a8805720_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
