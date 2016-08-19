<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5f568f00ff4297cad5c46ca60e334afb34ba0c3c1d833f585e08706c812615cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4cac2038153d9f1c8dc90a2fd6e7afee62bfce6a180a74490e5aa7a55bd795cb = $this->env->getExtension("native_profiler");
        $__internal_4cac2038153d9f1c8dc90a2fd6e7afee62bfce6a180a74490e5aa7a55bd795cb->enter($__internal_4cac2038153d9f1c8dc90a2fd6e7afee62bfce6a180a74490e5aa7a55bd795cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cac2038153d9f1c8dc90a2fd6e7afee62bfce6a180a74490e5aa7a55bd795cb->leave($__internal_4cac2038153d9f1c8dc90a2fd6e7afee62bfce6a180a74490e5aa7a55bd795cb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7e0876037e3c9130adb8a2dea0821821d650e0cbb6bc081bafb44d83ac293461 = $this->env->getExtension("native_profiler");
        $__internal_7e0876037e3c9130adb8a2dea0821821d650e0cbb6bc081bafb44d83ac293461->enter($__internal_7e0876037e3c9130adb8a2dea0821821d650e0cbb6bc081bafb44d83ac293461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7e0876037e3c9130adb8a2dea0821821d650e0cbb6bc081bafb44d83ac293461->leave($__internal_7e0876037e3c9130adb8a2dea0821821d650e0cbb6bc081bafb44d83ac293461_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_96811fe4d97c1fa982a97084326e2eb5c1534c001e6f485e1f465564e8e64260 = $this->env->getExtension("native_profiler");
        $__internal_96811fe4d97c1fa982a97084326e2eb5c1534c001e6f485e1f465564e8e64260->enter($__internal_96811fe4d97c1fa982a97084326e2eb5c1534c001e6f485e1f465564e8e64260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_96811fe4d97c1fa982a97084326e2eb5c1534c001e6f485e1f465564e8e64260->leave($__internal_96811fe4d97c1fa982a97084326e2eb5c1534c001e6f485e1f465564e8e64260_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff7dfd149553f5091e00a8c71df16395b85a4c53bb6f318c5e92f7ade610caf6 = $this->env->getExtension("native_profiler");
        $__internal_ff7dfd149553f5091e00a8c71df16395b85a4c53bb6f318c5e92f7ade610caf6->enter($__internal_ff7dfd149553f5091e00a8c71df16395b85a4c53bb6f318c5e92f7ade610caf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ff7dfd149553f5091e00a8c71df16395b85a4c53bb6f318c5e92f7ade610caf6->leave($__internal_ff7dfd149553f5091e00a8c71df16395b85a4c53bb6f318c5e92f7ade610caf6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
