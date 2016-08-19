<?php

/* administration/user/user_form.html.twig */
class __TwigTemplate_a7be487587cef367d1d8fad69212f02e990dd216cea0cf598ee3a4ddb401a6b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "administration/user/user_form.html.twig", 1);
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
        $__internal_8bd3ca9ee973687f71e977379393c948d190c51f158480173d96182769677784 = $this->env->getExtension("native_profiler");
        $__internal_8bd3ca9ee973687f71e977379393c948d190c51f158480173d96182769677784->enter($__internal_8bd3ca9ee973687f71e977379393c948d190c51f158480173d96182769677784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "administration/user/user_form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bd3ca9ee973687f71e977379393c948d190c51f158480173d96182769677784->leave($__internal_8bd3ca9ee973687f71e977379393c948d190c51f158480173d96182769677784_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ddae46f8cef234c02d51949c2f4cdf26604939e1de631f5a4a0cbd2f2feecf12 = $this->env->getExtension("native_profiler");
        $__internal_ddae46f8cef234c02d51949c2f4cdf26604939e1de631f5a4a0cbd2f2feecf12->enter($__internal_ddae46f8cef234c02d51949c2f4cdf26604939e1de631f5a4a0cbd2f2feecf12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "User Management";
        
        $__internal_ddae46f8cef234c02d51949c2f4cdf26604939e1de631f5a4a0cbd2f2feecf12->leave($__internal_ddae46f8cef234c02d51949c2f4cdf26604939e1de631f5a4a0cbd2f2feecf12_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb6961dd3e75cb9746be39e6ca7791fe9c26515e0e4f149f67b542bee5128e0f = $this->env->getExtension("native_profiler");
        $__internal_fb6961dd3e75cb9746be39e6ca7791fe9c26515e0e4f149f67b542bee5128e0f->enter($__internal_fb6961dd3e75cb9746be39e6ca7791fe9c26515e0e4f149f67b542bee5128e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h2 class=\"page-header\" style=\"margin-top:10px;\">User Management</h2>
";
        // line 6
        if ((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) {
            // line 7
            echo "    <div class=\"error\">
        <ul>
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 10
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        </ul>
    </div>
";
        }
        // line 15
        echo "<form enctype=\"multipart/form-data\" action=\"";
        if (((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")) == "add")) {
            echo $this->env->getExtension('routing')->getPath("addUser");
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editUser", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo " ";
        }
        echo "\" method=post class=\"laminarin-form\">
    <dl>
        <dt>Username:</dt>
        <dd>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "</dd>
        <dt>User Group:</dt>
        <dd>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userGroup", array()), 'widget');
        echo "</dd>
        <dt>Email:</dt>
        <dd>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "</dd>
        <dd>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "

            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("userIndex");
        echo "\"><button type=\"button\" class=\"btn btn-primary pull-right\">Back</button></a>
        <br/></dd>
    </dl>
</form>

  ";
        
        $__internal_fb6961dd3e75cb9746be39e6ca7791fe9c26515e0e4f149f67b542bee5128e0f->leave($__internal_fb6961dd3e75cb9746be39e6ca7791fe9c26515e0e4f149f67b542bee5128e0f_prof);

    }

    public function getTemplateName()
    {
        return "administration/user/user_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 25,  108 => 23,  104 => 22,  99 => 20,  94 => 18,  80 => 15,  75 => 12,  66 => 10,  62 => 9,  58 => 7,  56 => 6,  53 => 5,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}User Management{% endblock %}*/
/* {% block body %}*/
/* {# if session.logged_in #}*/
/* <h2 class="page-header" style="margin-top:10px;">User Management</h2>*/
/* {% if errors %}*/
/*     <div class="error">*/
/*         <ul>*/
/*         {% for error in errors %}*/
/*             <li>{{ error.message }}</li>*/
/*         {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/* {% endif %}*/
/* <form enctype="multipart/form-data" action="{% if act == 'add' %}{{ path('addUser') }} {% else %} {{ path('editUser',{'id': user.id}) }} {% endif %}" method=post class="laminarin-form">*/
/*     <dl>*/
/*         <dt>Username:</dt>*/
/*         <dd>{{ form_widget(form.username) }}</dd>*/
/*         <dt>User Group:</dt>*/
/*         <dd>{{ form_widget(form.userGroup) }}</dd>*/
/*         <dt>Email:</dt>*/
/*         <dd>{{ form_widget(form.email) }}</dd>*/
/*         <dd>{{ form_widget(form.save) }}*/
/* */
/*             <a href="{{ path('userIndex') }}"><button type="button" class="btn btn-primary pull-right">Back</button></a>*/
/*         <br/></dd>*/
/*     </dl>*/
/* </form>*/
/* */
/*   {# endif #}*/
/* {% endblock %}*/
