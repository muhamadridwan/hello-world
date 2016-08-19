<?php

/* configuration/meal_category/index.html.twig */
class __TwigTemplate_27795aa35ffd20d79d69cbe566e9da7ee91444c4641ce815b5450807a0daa35d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "configuration/meal_category/index.html.twig", 2);
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
        $__internal_34f004a61a19db38f9b591c485f9a59b598927ae4036ee918c413eb8de535127 = $this->env->getExtension("native_profiler");
        $__internal_34f004a61a19db38f9b591c485f9a59b598927ae4036ee918c413eb8de535127->enter($__internal_34f004a61a19db38f9b591c485f9a59b598927ae4036ee918c413eb8de535127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "configuration/meal_category/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34f004a61a19db38f9b591c485f9a59b598927ae4036ee918c413eb8de535127->leave($__internal_34f004a61a19db38f9b591c485f9a59b598927ae4036ee918c413eb8de535127_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_919427ee07d5ea646f27c41d36e8f2423a3514c324100f21b1a80bfa53df2dfc = $this->env->getExtension("native_profiler");
        $__internal_919427ee07d5ea646f27c41d36e8f2423a3514c324100f21b1a80bfa53df2dfc->enter($__internal_919427ee07d5ea646f27c41d36e8f2423a3514c324100f21b1a80bfa53df2dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Meal Category Management";
        
        $__internal_919427ee07d5ea646f27c41d36e8f2423a3514c324100f21b1a80bfa53df2dfc->leave($__internal_919427ee07d5ea646f27c41d36e8f2423a3514c324100f21b1a80bfa53df2dfc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa54f752d337bc6b7b6f07d8770356ad4607604d41960cb74d2623387419299a = $this->env->getExtension("native_profiler");
        $__internal_aa54f752d337bc6b7b6f07d8770356ad4607604d41960cb74d2623387419299a->enter($__internal_aa54f752d337bc6b7b6f07d8770356ad4607604d41960cb74d2623387419299a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <h2 class=\"page-header\" style=\"margin-top:10px;\">Meal Category Management</h2>

<!--<ul class=entries>-->
<div class=\"panel panel-default\">
    ";
        // line 10
        $context["successMessages"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method");
        // line 11
        echo "    ";
        if ((isset($context["successMessages"]) ? $context["successMessages"] : $this->getContext($context, "successMessages"))) {
            // line 12
            echo "        <div class=\"alert-success success\">
        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["successMessages"]) ? $context["successMessages"] : $this->getContext($context, "successMessages")));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 14
                echo "            ";
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo " 
        </div>
    ";
        }
        // line 18
        echo "    ";
        $context["errorMessages"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method");
        // line 19
        echo "    ";
        if ((isset($context["errorMessages"]) ? $context["errorMessages"] : $this->getContext($context, "errorMessages"))) {
            // line 20
            echo "        <div class=\"alert-danger error\">
        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errorMessages"]) ? $context["errorMessages"] : $this->getContext($context, "errorMessages")));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 22
                echo "            ";
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo " 
        </div>
    ";
        }
        // line 26
        echo "    <div class=\"panel-heading\" style=\"height:3em;padding:0.2em;padding-right:1em;\">
    ";
        // line 28
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("addMealCategory");
        echo "\"><button type=\"button\" class=\"btn btn-primary pull-right\">Add</button></a>
    ";
        // line 30
        echo "    </div>
    <!-- Table -->
    <table class=\"table\">
        <tr>
            <th>No</th>
            <th>Meal Category</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        ";
        // line 39
        $context["idx"] = 1;
        // line 40
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mealCategories"]) ? $context["mealCategories"] : $this->getContext($context, "mealCategories")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 41
            echo "        <tr>
            <td>";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : $this->getContext($context, "idx")), "html", null, true);
            echo "</td>
            <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "getCategoryName", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "getCategoryDesc", array(), "method"), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 47
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editMealCategory", array("id" => $this->getAttribute($context["c"], "getCategoryId", array(), "method"))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\" style=\"margin-right:0.3em\"></span></a>
                <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deleteMealCategory", array("id" => $this->getAttribute($context["c"], "getCategoryId", array(), "method"))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a>
                ";
            // line 50
            echo "            </td>
        </tr>
        ";
            // line 52
            $context["idx"] = ((isset($context["idx"]) ? $context["idx"] : $this->getContext($context, "idx")) + 1);
            // line 53
            echo "        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 54
            echo "        <em>Unbelievable.  No entries here so far</em>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    </table>
</div>
    
";
        
        $__internal_aa54f752d337bc6b7b6f07d8770356ad4607604d41960cb74d2623387419299a->leave($__internal_aa54f752d337bc6b7b6f07d8770356ad4607604d41960cb74d2623387419299a_prof);

    }

    public function getTemplateName()
    {
        return "configuration/meal_category/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 56,  175 => 54,  170 => 53,  168 => 52,  164 => 50,  160 => 48,  155 => 47,  150 => 44,  146 => 43,  142 => 42,  139 => 41,  133 => 40,  131 => 39,  120 => 30,  115 => 28,  112 => 26,  107 => 23,  98 => 22,  94 => 21,  91 => 20,  88 => 19,  85 => 18,  80 => 15,  71 => 14,  67 => 13,  64 => 12,  61 => 11,  59 => 10,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
    }
}
/* */
/* {% extends 'base.html.twig' %}*/
/* {% block title %}Meal Category Management{% endblock %}*/
/*      */
/* {% block body %}*/
/*   <h2 class="page-header" style="margin-top:10px;">Meal Category Management</h2>*/
/* */
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
/*     {# if session.logged_in #}*/
/*     <a href="{{ path('addMealCategory') }}"><button type="button" class="btn btn-primary pull-right">Add</button></a>*/
/*     {# endif #}*/
/*     </div>*/
/*     <!-- Table -->*/
/*     <table class="table">*/
/*         <tr>*/
/*             <th>No</th>*/
/*             <th>Meal Category</th>*/
/*             <th>Description</th>*/
/*             <th>Action</th>*/
/*         </tr>*/
/*         {% set idx = 1 %}*/
/*         {% for c in mealCategories %}*/
/*         <tr>*/
/*             <td>{{idx}}</td>*/
/*             <td>{{ c.getCategoryName() }}</td>*/
/*             <td>{{ c.getCategoryDesc() }}</td>*/
/*             <td>*/
/*                 {# if session.logged_in #}*/
/*                 <a href="{{ path('editMealCategory', {'id': c.getCategoryId()}) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="margin-right:0.3em"></span></a>*/
/*                 <a href="{{ path('deleteMealCategory', {'id': c.getCategoryId()}) }}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>*/
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
