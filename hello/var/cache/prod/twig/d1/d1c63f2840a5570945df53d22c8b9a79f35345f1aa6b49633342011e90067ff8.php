<?php

/* lucky/number.html.twig */
class __TwigTemplate_ac2ebbb18321269dbc970365c5180c419cdd861534eb73b08b834d1e354aa392 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "lucky/number.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a775bc0b30cf3db34c9b72a53b48f08978d8e81fcd77ba0bd4a7c827ca561ed = $this->env->getExtension("native_profiler");
        $__internal_9a775bc0b30cf3db34c9b72a53b48f08978d8e81fcd77ba0bd4a7c827ca561ed->enter($__internal_9a775bc0b30cf3db34c9b72a53b48f08978d8e81fcd77ba0bd4a7c827ca561ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a775bc0b30cf3db34c9b72a53b48f08978d8e81fcd77ba0bd4a7c827ca561ed->leave($__internal_9a775bc0b30cf3db34c9b72a53b48f08978d8e81fcd77ba0bd4a7c827ca561ed_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a87d2efb6d24602149db0d6a648b48406a06c82a21ba91a7331ff0996b7510b7 = $this->env->getExtension("native_profiler");
        $__internal_a87d2efb6d24602149db0d6a648b48406a06c82a21ba91a7331ff0996b7510b7->enter($__internal_a87d2efb6d24602149db0d6a648b48406a06c82a21ba91a7331ff0996b7510b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Number";
        
        $__internal_a87d2efb6d24602149db0d6a648b48406a06c82a21ba91a7331ff0996b7510b7->leave($__internal_a87d2efb6d24602149db0d6a648b48406a06c82a21ba91a7331ff0996b7510b7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a59267b51a95a72d64e1aaef950a5f0d6bafba2cd5bfcf7607edeea20a5c48d8 = $this->env->getExtension("native_profiler");
        $__internal_a59267b51a95a72d64e1aaef950a5f0d6bafba2cd5bfcf7607edeea20a5c48d8->enter($__internal_a59267b51a95a72d64e1aaef950a5f0d6bafba2cd5bfcf7607edeea20a5c48d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1> lucky Numbers: ";
        echo twig_escape_filter($this->env, (isset($context["luckyNumberList"]) ? $context["luckyNumberList"] : $this->getContext($context, "luckyNumberList")), "html", null, true);
        echo "</h1>
";
        
        $__internal_a59267b51a95a72d64e1aaef950a5f0d6bafba2cd5bfcf7607edeea20a5c48d8->leave($__internal_a59267b51a95a72d64e1aaef950a5f0d6bafba2cd5bfcf7607edeea20a5c48d8_prof);

    }

    public function getTemplateName()
    {
        return "lucky/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}Number{% endblock %}*/
/* {% block body %}*/
/* <h1> lucky Numbers: {{luckyNumberList}}</h1>*/
/* {% endblock %}*/
