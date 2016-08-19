<?php

/* configuration/resto_table/index.html.twig */
class __TwigTemplate_4100f9147030ccc1c8d0b1489dc879788998b23a05be9c6942918dc38b2f6c24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "configuration/resto_table/index.html.twig", 2);
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
        $__internal_7e73448e6d08b9d966add834253be73eedde06bc53a6ad738f98121842448d6c = $this->env->getExtension("native_profiler");
        $__internal_7e73448e6d08b9d966add834253be73eedde06bc53a6ad738f98121842448d6c->enter($__internal_7e73448e6d08b9d966add834253be73eedde06bc53a6ad738f98121842448d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "configuration/resto_table/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e73448e6d08b9d966add834253be73eedde06bc53a6ad738f98121842448d6c->leave($__internal_7e73448e6d08b9d966add834253be73eedde06bc53a6ad738f98121842448d6c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b883812fa13692b6d67152a8f7ac199877240a8b531ee6de628bb5698acde438 = $this->env->getExtension("native_profiler");
        $__internal_b883812fa13692b6d67152a8f7ac199877240a8b531ee6de628bb5698acde438->enter($__internal_b883812fa13692b6d67152a8f7ac199877240a8b531ee6de628bb5698acde438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Resto Table Management";
        
        $__internal_b883812fa13692b6d67152a8f7ac199877240a8b531ee6de628bb5698acde438->leave($__internal_b883812fa13692b6d67152a8f7ac199877240a8b531ee6de628bb5698acde438_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fbdce22c9463c3be31b7b0cb0c55cebbbbefb7cd6e81bdd52e36ba4eb2e7bae = $this->env->getExtension("native_profiler");
        $__internal_8fbdce22c9463c3be31b7b0cb0c55cebbbbefb7cd6e81bdd52e36ba4eb2e7bae->enter($__internal_8fbdce22c9463c3be31b7b0cb0c55cebbbbefb7cd6e81bdd52e36ba4eb2e7bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h2 class=\"page-header\" style=\"margin-top:10px;\">Resto Table Management</h2>
<!--<ul class=entries>-->
<div class=\"panel panel-default\">
    ";
        // line 9
        $context["successMessages"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method");
        // line 10
        echo "    ";
        if ((isset($context["successMessages"]) ? $context["successMessages"] : $this->getContext($context, "successMessages"))) {
            // line 11
            echo "        <div class=\"alert-success success\">
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["successMessages"]) ? $context["successMessages"] : $this->getContext($context, "successMessages")));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 13
                echo "            ";
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo " 
        </div>
    ";
        }
        // line 17
        echo "    ";
        $context["errorMessages"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method");
        // line 18
        echo "    ";
        if ((isset($context["errorMessages"]) ? $context["errorMessages"] : $this->getContext($context, "errorMessages"))) {
            // line 19
            echo "        <div class=\"alert-danger error\">
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errorMessages"]) ? $context["errorMessages"] : $this->getContext($context, "errorMessages")));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 21
                echo "            ";
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo " 
        </div>
    ";
        }
        // line 25
        echo "    <div class=\"panel-heading\" style=\"height:3em;padding:0.2em;padding-right:1em;\">
    
    <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("addRestoTable");
        echo "\"><button type=\"button\" class=\"btn btn-primary pull-right\">Add</button></a>
    
    </div>
    <!-- Table -->
    <table class=\"table\">
        <tr>
            <th>No</th>
            <th>Table</th>
            <th>Action</th>
        </tr>
        ";
        // line 37
        $context["idx"] = 1;
        // line 38
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["restoTable"]) ? $context["restoTable"] : $this->getContext($context, "restoTable")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["table"]) {
            // line 39
            echo "        <tr>
            <td>";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : $this->getContext($context, "idx")), "html", null, true);
            echo "</td>
            <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["table"], "getCustomerName", array(), "method"), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 44
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editRestoTable", array("id" => $this->getAttribute($context["table"], "getCustomerId", array(), "method"))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\" style=\"margin-right:0.3em\"></span></a>
                <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deleteRestoTable", array("id" => $this->getAttribute($context["table"], "getCustomerId", array(), "method"))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a>
                ";
            // line 47
            echo "            </td>
        </tr>
        ";
            // line 49
            $context["idx"] = ((isset($context["idx"]) ? $context["idx"] : $this->getContext($context, "idx")) + 1);
            // line 50
            echo "        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            echo "        <em>Unbelievable.  No entries here so far</em>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['table'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "    </table>
</div>
    
";
        
        $__internal_8fbdce22c9463c3be31b7b0cb0c55cebbbbefb7cd6e81bdd52e36ba4eb2e7bae->leave($__internal_8fbdce22c9463c3be31b7b0cb0c55cebbbbefb7cd6e81bdd52e36ba4eb2e7bae_prof);

    }

    public function getTemplateName()
    {
        return "configuration/resto_table/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 53,  168 => 51,  163 => 50,  161 => 49,  157 => 47,  153 => 45,  148 => 44,  143 => 41,  139 => 40,  136 => 39,  130 => 38,  128 => 37,  115 => 27,  111 => 25,  106 => 22,  97 => 21,  93 => 20,  90 => 19,  87 => 18,  84 => 17,  79 => 14,  70 => 13,  66 => 12,  63 => 11,  60 => 10,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
    }
}
/* */
/* {% extends 'base.html.twig' %}*/
/* {% block title %}Resto Table Management{% endblock %}*/
/*      */
/* {% block body %}*/
/* <h2 class="page-header" style="margin-top:10px;">Resto Table Management</h2>*/
/* <!--<ul class=entries>-->*/
/* <div class="panel panel-default">*/
/*     {% set successMessages = app.session.flashbag.get('success') %}*/
/*     {% if successMessages %}*/
/*         <div class="alert-success success">*/
/*         {% for flashMessage in successMessages %}*/
/*             {{ flashMessage }}*/
/*         {% endfor %} */
/*         </div>*/
/*     {% endif %}*/
/*     {% set errorMessages = app.session.flashbag.get('error') %}*/
/*     {% if errorMessages %}*/
/*         <div class="alert-danger error">*/
/*         {% for flashMessage in errorMessages %}*/
/*             {{ flashMessage }}*/
/*         {% endfor %} */
/*         </div>*/
/*     {% endif %}*/
/*     <div class="panel-heading" style="height:3em;padding:0.2em;padding-right:1em;">*/
/*     */
/*     <a href="{{ path('addRestoTable') }}"><button type="button" class="btn btn-primary pull-right">Add</button></a>*/
/*     */
/*     </div>*/
/*     <!-- Table -->*/
/*     <table class="table">*/
/*         <tr>*/
/*             <th>No</th>*/
/*             <th>Table</th>*/
/*             <th>Action</th>*/
/*         </tr>*/
/*         {% set idx = 1 %}*/
/*         {% for table in restoTable %}*/
/*         <tr>*/
/*             <td>{{idx}}</td>*/
/*             <td>{{ table.getCustomerName() }}</td>*/
/*             <td>*/
/*                 {# if session.logged_in #}*/
/*                 <a href="{{ path('editRestoTable', {'id': table.getCustomerId()}) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="margin-right:0.3em"></span></a>*/
/*                 <a href="{{ path('deleteRestoTable', {'id': table.getCustomerId()}) }}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>*/
/*                 {# endif #}*/
/*             </td>*/
/*         </tr>*/
/*         {% set idx = idx +1 %}*/
/*         {% else %}*/
/*         <em>Unbelievable.  No entries here so far</em>*/
/*         {% endfor %}*/
/*     </table>*/
/* </div>*/
/*     */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
