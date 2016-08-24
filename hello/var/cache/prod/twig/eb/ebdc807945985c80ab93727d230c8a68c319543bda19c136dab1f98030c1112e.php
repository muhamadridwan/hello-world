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
        $__internal_d4c777e622b222020cbc0d623ce47370dc7a51506a66046591bae3572630ea57 = $this->env->getExtension("native_profiler");
        $__internal_d4c777e622b222020cbc0d623ce47370dc7a51506a66046591bae3572630ea57->enter($__internal_d4c777e622b222020cbc0d623ce47370dc7a51506a66046591bae3572630ea57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4c777e622b222020cbc0d623ce47370dc7a51506a66046591bae3572630ea57->leave($__internal_d4c777e622b222020cbc0d623ce47370dc7a51506a66046591bae3572630ea57_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f65158c5a6b4d03fe7448bcb43bd9ed318a5b3bd7dde34601b0b7d9efd48be2a = $this->env->getExtension("native_profiler");
        $__internal_f65158c5a6b4d03fe7448bcb43bd9ed318a5b3bd7dde34601b0b7d9efd48be2a->enter($__internal_f65158c5a6b4d03fe7448bcb43bd9ed318a5b3bd7dde34601b0b7d9efd48be2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f65158c5a6b4d03fe7448bcb43bd9ed318a5b3bd7dde34601b0b7d9efd48be2a->leave($__internal_f65158c5a6b4d03fe7448bcb43bd9ed318a5b3bd7dde34601b0b7d9efd48be2a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_816bf07805e2f41ea219e3ebbeee3df7dab3c0e4fcade181167473ab902a2ba7 = $this->env->getExtension("native_profiler");
        $__internal_816bf07805e2f41ea219e3ebbeee3df7dab3c0e4fcade181167473ab902a2ba7->enter($__internal_816bf07805e2f41ea219e3ebbeee3df7dab3c0e4fcade181167473ab902a2ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_816bf07805e2f41ea219e3ebbeee3df7dab3c0e4fcade181167473ab902a2ba7->leave($__internal_816bf07805e2f41ea219e3ebbeee3df7dab3c0e4fcade181167473ab902a2ba7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ab8624e12f27b28ef154328f13c60d3fe06d2a4b0cd0dc94eb7f93d5b231f00 = $this->env->getExtension("native_profiler");
        $__internal_8ab8624e12f27b28ef154328f13c60d3fe06d2a4b0cd0dc94eb7f93d5b231f00->enter($__internal_8ab8624e12f27b28ef154328f13c60d3fe06d2a4b0cd0dc94eb7f93d5b231f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8ab8624e12f27b28ef154328f13c60d3fe06d2a4b0cd0dc94eb7f93d5b231f00->leave($__internal_8ab8624e12f27b28ef154328f13c60d3fe06d2a4b0cd0dc94eb7f93d5b231f00_prof);

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
