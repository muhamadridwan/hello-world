<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e345b83248b72c6371ce0e17a60cd3fab18d1d452408797db594925903a04dd7 extends Twig_Template
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
        $__internal_a91280f82ca43254b56637f7bd9f344cd653c8d7cb7f24e1f1d26daea4a1b236 = $this->env->getExtension("native_profiler");
        $__internal_a91280f82ca43254b56637f7bd9f344cd653c8d7cb7f24e1f1d26daea4a1b236->enter($__internal_a91280f82ca43254b56637f7bd9f344cd653c8d7cb7f24e1f1d26daea4a1b236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a91280f82ca43254b56637f7bd9f344cd653c8d7cb7f24e1f1d26daea4a1b236->leave($__internal_a91280f82ca43254b56637f7bd9f344cd653c8d7cb7f24e1f1d26daea4a1b236_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f4fe08fcb6164d1847419f95c8833ec74815c483f3fe8d7f663a8aef28d8a998 = $this->env->getExtension("native_profiler");
        $__internal_f4fe08fcb6164d1847419f95c8833ec74815c483f3fe8d7f663a8aef28d8a998->enter($__internal_f4fe08fcb6164d1847419f95c8833ec74815c483f3fe8d7f663a8aef28d8a998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f4fe08fcb6164d1847419f95c8833ec74815c483f3fe8d7f663a8aef28d8a998->leave($__internal_f4fe08fcb6164d1847419f95c8833ec74815c483f3fe8d7f663a8aef28d8a998_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_364767c43cb4a21e5f35ff2f4f97ea7584ba346aef54b26f80c9b89ac6920646 = $this->env->getExtension("native_profiler");
        $__internal_364767c43cb4a21e5f35ff2f4f97ea7584ba346aef54b26f80c9b89ac6920646->enter($__internal_364767c43cb4a21e5f35ff2f4f97ea7584ba346aef54b26f80c9b89ac6920646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_364767c43cb4a21e5f35ff2f4f97ea7584ba346aef54b26f80c9b89ac6920646->leave($__internal_364767c43cb4a21e5f35ff2f4f97ea7584ba346aef54b26f80c9b89ac6920646_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5290210c2ffb4a42a875b8cda65599bdf0b49b6ae812ef72eb71ae817125e099 = $this->env->getExtension("native_profiler");
        $__internal_5290210c2ffb4a42a875b8cda65599bdf0b49b6ae812ef72eb71ae817125e099->enter($__internal_5290210c2ffb4a42a875b8cda65599bdf0b49b6ae812ef72eb71ae817125e099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5290210c2ffb4a42a875b8cda65599bdf0b49b6ae812ef72eb71ae817125e099->leave($__internal_5290210c2ffb4a42a875b8cda65599bdf0b49b6ae812ef72eb71ae817125e099_prof);

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
