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
        $__internal_5484f1e97451775a32db686c8880fd5ca44376213a132b571c19643ef2dd233d = $this->env->getExtension("native_profiler");
        $__internal_5484f1e97451775a32db686c8880fd5ca44376213a132b571c19643ef2dd233d->enter($__internal_5484f1e97451775a32db686c8880fd5ca44376213a132b571c19643ef2dd233d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5484f1e97451775a32db686c8880fd5ca44376213a132b571c19643ef2dd233d->leave($__internal_5484f1e97451775a32db686c8880fd5ca44376213a132b571c19643ef2dd233d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_33881bba3e7db2e871201a1b82d8a59b1f3ae2302763a56ab6d626d3f6e1bcb3 = $this->env->getExtension("native_profiler");
        $__internal_33881bba3e7db2e871201a1b82d8a59b1f3ae2302763a56ab6d626d3f6e1bcb3->enter($__internal_33881bba3e7db2e871201a1b82d8a59b1f3ae2302763a56ab6d626d3f6e1bcb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_33881bba3e7db2e871201a1b82d8a59b1f3ae2302763a56ab6d626d3f6e1bcb3->leave($__internal_33881bba3e7db2e871201a1b82d8a59b1f3ae2302763a56ab6d626d3f6e1bcb3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_08702569b3f9055481b7c06fa5a057d558544543e21cbb0555d3c025984884b4 = $this->env->getExtension("native_profiler");
        $__internal_08702569b3f9055481b7c06fa5a057d558544543e21cbb0555d3c025984884b4->enter($__internal_08702569b3f9055481b7c06fa5a057d558544543e21cbb0555d3c025984884b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_08702569b3f9055481b7c06fa5a057d558544543e21cbb0555d3c025984884b4->leave($__internal_08702569b3f9055481b7c06fa5a057d558544543e21cbb0555d3c025984884b4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba6a8d3c627629adccd44ee8f645a5d47f188e94d858a71a1aec690355e32d1d = $this->env->getExtension("native_profiler");
        $__internal_ba6a8d3c627629adccd44ee8f645a5d47f188e94d858a71a1aec690355e32d1d->enter($__internal_ba6a8d3c627629adccd44ee8f645a5d47f188e94d858a71a1aec690355e32d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ba6a8d3c627629adccd44ee8f645a5d47f188e94d858a71a1aec690355e32d1d->leave($__internal_ba6a8d3c627629adccd44ee8f645a5d47f188e94d858a71a1aec690355e32d1d_prof);

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
