<?php

/* login.html.twig */
class __TwigTemplate_403714bab5fa9c9760a5bb2f4d47d9a81c0222e5731be7b9a194c568e8e1ae95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c191e312be38858acbd6210401bb3392622e0c2de1deeacac83b94d34de23fdd = $this->env->getExtension("native_profiler");
        $__internal_c191e312be38858acbd6210401bb3392622e0c2de1deeacac83b94d34de23fdd->enter($__internal_c191e312be38858acbd6210401bb3392622e0c2de1deeacac83b94d34de23fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c191e312be38858acbd6210401bb3392622e0c2de1deeacac83b94d34de23fdd->leave($__internal_c191e312be38858acbd6210401bb3392622e0c2de1deeacac83b94d34de23fdd_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e70ac621e1f945aca7ec7d38b5807eadd09b86366b625a05ef3128392543842a = $this->env->getExtension("native_profiler");
        $__internal_e70ac621e1f945aca7ec7d38b5807eadd09b86366b625a05ef3128392543842a->enter($__internal_e70ac621e1f945aca7ec7d38b5807eadd09b86366b625a05ef3128392543842a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h2>Login</h2>
  ";
        // line 4
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            echo "<p class=error>
    <strong>Error: ";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</strong>";
        }
        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=post>
        <dl>
            <dt>Username:
            <dd><input type=\"text\" name=\"_username\">
            <dt>Password:
            <dd><input type=\"password\" name=\"_password\">
            <dd>
            <button type=\"submit\">Login</button>
        </dl>
    </form>
";
        
        $__internal_e70ac621e1f945aca7ec7d38b5807eadd09b86366b625a05ef3128392543842a->leave($__internal_e70ac621e1f945aca7ec7d38b5807eadd09b86366b625a05ef3128392543842a_prof);

    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 6,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <h2>Login</h2>*/
/*   {% if error %}<p class=error>*/
/*     <strong>Error: {{ error.messageKey|trans(error.messageData,'security') }}</strong>{% endif %}*/
/*     <form action="{{ path('login') }}" method=post>*/
/*         <dl>*/
/*             <dt>Username:*/
/*             <dd><input type="text" name="_username">*/
/*             <dt>Password:*/
/*             <dd><input type="password" name="_password">*/
/*             <dd>*/
/*             <button type="submit">Login</button>*/
/*         </dl>*/
/*     </form>*/
/* {% endblock %}*/
