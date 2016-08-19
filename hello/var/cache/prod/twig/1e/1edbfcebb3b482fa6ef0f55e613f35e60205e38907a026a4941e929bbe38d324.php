<?php

/* configuration/resto_table/resto_table_form.html.twig */
class __TwigTemplate_0ffdf211c18757f158ec4d8e4a88e402d9a935f61bd477d6dfc6cde0c704b7c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "configuration/resto_table/resto_table_form.html.twig", 1);
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
        $__internal_3ae7ae508351969f40aeaf9dffcc9318042020ab057256e92ce67e7a7bc72465 = $this->env->getExtension("native_profiler");
        $__internal_3ae7ae508351969f40aeaf9dffcc9318042020ab057256e92ce67e7a7bc72465->enter($__internal_3ae7ae508351969f40aeaf9dffcc9318042020ab057256e92ce67e7a7bc72465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "configuration/resto_table/resto_table_form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ae7ae508351969f40aeaf9dffcc9318042020ab057256e92ce67e7a7bc72465->leave($__internal_3ae7ae508351969f40aeaf9dffcc9318042020ab057256e92ce67e7a7bc72465_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe033a37433a30c1dbd53a8e1081d420c0b4e810e194a461016b7e724283aaba = $this->env->getExtension("native_profiler");
        $__internal_fe033a37433a30c1dbd53a8e1081d420c0b4e810e194a461016b7e724283aaba->enter($__internal_fe033a37433a30c1dbd53a8e1081d420c0b4e810e194a461016b7e724283aaba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Restorant Table Management";
        
        $__internal_fe033a37433a30c1dbd53a8e1081d420c0b4e810e194a461016b7e724283aaba->leave($__internal_fe033a37433a30c1dbd53a8e1081d420c0b4e810e194a461016b7e724283aaba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2444200c2f179daab4196247e91760788bd193b5e755126b58760dd0e29e5ef = $this->env->getExtension("native_profiler");
        $__internal_d2444200c2f179daab4196247e91760788bd193b5e755126b58760dd0e29e5ef->enter($__internal_d2444200c2f179daab4196247e91760788bd193b5e755126b58760dd0e29e5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h2 class=\"page-header\" style=\"margin-top:10px;\">Resto Table Management</h2>
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
            echo $this->env->getExtension('routing')->getPath("addRestoTable");
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editRestoTable", array("id" => $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "getCustomerId", array(), "method"))), "html", null, true);
            echo " ";
        }
        echo "\" method=post class=\"laminarin-form\">
    <dl>
        <dt>Table Name:</dt>
        <dd>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "customerName", array()), 'widget');
        echo "</dd>
        <dd>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
            <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("restoTableIndex");
        echo "\"><button type=\"button\" class=\"btn btn-primary pull-right\">Back</button></a>
        <br/>
        </dd>
    </dl>
</form>

  ";
        
        $__internal_d2444200c2f179daab4196247e91760788bd193b5e755126b58760dd0e29e5ef->leave($__internal_d2444200c2f179daab4196247e91760788bd193b5e755126b58760dd0e29e5ef_prof);

    }

    public function getTemplateName()
    {
        return "configuration/resto_table/resto_table_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 20,  98 => 19,  94 => 18,  80 => 15,  75 => 12,  66 => 10,  62 => 9,  58 => 7,  56 => 6,  53 => 5,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}Restorant Table Management{% endblock %}*/
/* {% block body %}*/
/* {# if session.logged_in #}*/
/* <h2 class="page-header" style="margin-top:10px;">Resto Table Management</h2>*/
/* {% if errors %}*/
/*     <div class="error">*/
/*         <ul>*/
/*         {% for error in errors %}*/
/*             <li>{{ error.message }}</li>*/
/*         {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/* {% endif %}*/
/* <form enctype="multipart/form-data" action="{% if act == 'add' %}{{ path('addRestoTable') }} {% else %} {{ path('editRestoTable',{'id': customer.getCustomerId()}) }} {% endif %}" method=post class="laminarin-form">*/
/*     <dl>*/
/*         <dt>Table Name:</dt>*/
/*         <dd>{{ form_widget(form.customerName) }}</dd>*/
/*         <dd>{{ form_widget(form.save) }}*/
/*             <a href="{{ path('restoTableIndex') }}"><button type="button" class="btn btn-primary pull-right">Back</button></a>*/
/*         <br/>*/
/*         </dd>*/
/*     </dl>*/
/* </form>*/
/* */
/*   {# endif #}*/
/* {% endblock %}*/
