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
        $__internal_f7f0b50ce22dc7f4100b842cd5a9490e83be54e3639046c24735827464e07026 = $this->env->getExtension("native_profiler");
        $__internal_f7f0b50ce22dc7f4100b842cd5a9490e83be54e3639046c24735827464e07026->enter($__internal_f7f0b50ce22dc7f4100b842cd5a9490e83be54e3639046c24735827464e07026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7f0b50ce22dc7f4100b842cd5a9490e83be54e3639046c24735827464e07026->leave($__internal_f7f0b50ce22dc7f4100b842cd5a9490e83be54e3639046c24735827464e07026_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fde51645760467e0489d432c1c38c745dcc59c6c9624126b01417d315090b27 = $this->env->getExtension("native_profiler");
        $__internal_7fde51645760467e0489d432c1c38c745dcc59c6c9624126b01417d315090b27->enter($__internal_7fde51645760467e0489d432c1c38c745dcc59c6c9624126b01417d315090b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "    
    <form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=post>
        <dl>
            <dt>Username:</dt>
            <dd><input type=\"text\" name=\"_username\"></dd>
            <dt>Password:</dt>
            <dd><input type=\"password\" name=\"_password\"></dd>
            <dd>
            <button type=\"submit\">Login</button></dd>
        </dl>
    </form>
";
        
        $__internal_7fde51645760467e0489d432c1c38c745dcc59c6c9624126b01417d315090b27->leave($__internal_7fde51645760467e0489d432c1c38c745dcc59c6c9624126b01417d315090b27_prof);

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
        return array (  54 => 7,  51 => 6,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <h2>Login</h2>*/
/*   {% if error %}<p class=error>*/
/*     <strong>Error: {{ error.messageKey|trans(error.messageData,'security') }}</strong>{% endif %}*/
/*     */
/*     <form action="{{ path('login') }}" method=post>*/
/*         <dl>*/
/*             <dt>Username:</dt>*/
/*             <dd><input type="text" name="_username"></dd>*/
/*             <dt>Password:</dt>*/
/*             <dd><input type="password" name="_password"></dd>*/
/*             <dd>*/
/*             <button type="submit">Login</button></dd>*/
/*         </dl>*/
/*     </form>*/
/* {% endblock %}*/
