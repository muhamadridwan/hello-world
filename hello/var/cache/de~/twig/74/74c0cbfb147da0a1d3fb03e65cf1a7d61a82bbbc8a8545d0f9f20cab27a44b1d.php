<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_6b524199df90c9283a4dc0f735ad8b74ceeb40d9f84a1df5127af42e1d8c1760 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38e46ceddf7a9d6b2309fb9c49afd2372375a85efa2a0d8b86cd83d47ca0a156 = $this->env->getExtension("native_profiler");
        $__internal_38e46ceddf7a9d6b2309fb9c49afd2372375a85efa2a0d8b86cd83d47ca0a156->enter($__internal_38e46ceddf7a9d6b2309fb9c49afd2372375a85efa2a0d8b86cd83d47ca0a156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_38e46ceddf7a9d6b2309fb9c49afd2372375a85efa2a0d8b86cd83d47ca0a156->leave($__internal_38e46ceddf7a9d6b2309fb9c49afd2372375a85efa2a0d8b86cd83d47ca0a156_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
