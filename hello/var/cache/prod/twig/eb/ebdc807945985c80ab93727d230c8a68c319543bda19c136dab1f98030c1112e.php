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
        $__internal_a0cdd3ec5e8b61270b77e196b5510cbfddd4ac5c25af5ffb0c6644e4eb97dd99 = $this->env->getExtension("native_profiler");
        $__internal_a0cdd3ec5e8b61270b77e196b5510cbfddd4ac5c25af5ffb0c6644e4eb97dd99->enter($__internal_a0cdd3ec5e8b61270b77e196b5510cbfddd4ac5c25af5ffb0c6644e4eb97dd99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0cdd3ec5e8b61270b77e196b5510cbfddd4ac5c25af5ffb0c6644e4eb97dd99->leave($__internal_a0cdd3ec5e8b61270b77e196b5510cbfddd4ac5c25af5ffb0c6644e4eb97dd99_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ba68990b00764a6fa429106ebf80d2eb3f4b0e8d10fcd38263977527ea84ee67 = $this->env->getExtension("native_profiler");
        $__internal_ba68990b00764a6fa429106ebf80d2eb3f4b0e8d10fcd38263977527ea84ee67->enter($__internal_ba68990b00764a6fa429106ebf80d2eb3f4b0e8d10fcd38263977527ea84ee67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ba68990b00764a6fa429106ebf80d2eb3f4b0e8d10fcd38263977527ea84ee67->leave($__internal_ba68990b00764a6fa429106ebf80d2eb3f4b0e8d10fcd38263977527ea84ee67_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4356839ba6cc34137c2b5129c5f2f9ba813ed8a55a10544d054cee44e4ef62f = $this->env->getExtension("native_profiler");
        $__internal_c4356839ba6cc34137c2b5129c5f2f9ba813ed8a55a10544d054cee44e4ef62f->enter($__internal_c4356839ba6cc34137c2b5129c5f2f9ba813ed8a55a10544d054cee44e4ef62f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c4356839ba6cc34137c2b5129c5f2f9ba813ed8a55a10544d054cee44e4ef62f->leave($__internal_c4356839ba6cc34137c2b5129c5f2f9ba813ed8a55a10544d054cee44e4ef62f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a7c93c525dfd53e01b29ddf9fd59f61c19ef1ebca938978398ce566aacdcc2c = $this->env->getExtension("native_profiler");
        $__internal_5a7c93c525dfd53e01b29ddf9fd59f61c19ef1ebca938978398ce566aacdcc2c->enter($__internal_5a7c93c525dfd53e01b29ddf9fd59f61c19ef1ebca938978398ce566aacdcc2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5a7c93c525dfd53e01b29ddf9fd59f61c19ef1ebca938978398ce566aacdcc2c->leave($__internal_5a7c93c525dfd53e01b29ddf9fd59f61c19ef1ebca938978398ce566aacdcc2c_prof);

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
