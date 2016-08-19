<?php

/* configuration/meal/index.html.twig */
class __TwigTemplate_cd255c3829ada0da5654c8f2b3a02d00b0b5d25857fd95f7e2b5e5121ba7a31b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "configuration/meal/index.html.twig", 2);
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
        $__internal_9c5f5336ff775c17528ec4ac96cd5a076851a062fc703b446a8e78376117c388 = $this->env->getExtension("native_profiler");
        $__internal_9c5f5336ff775c17528ec4ac96cd5a076851a062fc703b446a8e78376117c388->enter($__internal_9c5f5336ff775c17528ec4ac96cd5a076851a062fc703b446a8e78376117c388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "configuration/meal/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c5f5336ff775c17528ec4ac96cd5a076851a062fc703b446a8e78376117c388->leave($__internal_9c5f5336ff775c17528ec4ac96cd5a076851a062fc703b446a8e78376117c388_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7898dc92582989e92d154155a465585ebd7ad6403c309ccee8f5bd24c9732942 = $this->env->getExtension("native_profiler");
        $__internal_7898dc92582989e92d154155a465585ebd7ad6403c309ccee8f5bd24c9732942->enter($__internal_7898dc92582989e92d154155a465585ebd7ad6403c309ccee8f5bd24c9732942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Meal Management";
        
        $__internal_7898dc92582989e92d154155a465585ebd7ad6403c309ccee8f5bd24c9732942->leave($__internal_7898dc92582989e92d154155a465585ebd7ad6403c309ccee8f5bd24c9732942_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_adfe0e4d0b188cb092f1a38003c7ee20496eaba5e3f6bae79c5a900ca3293c87 = $this->env->getExtension("native_profiler");
        $__internal_adfe0e4d0b188cb092f1a38003c7ee20496eaba5e3f6bae79c5a900ca3293c87->enter($__internal_adfe0e4d0b188cb092f1a38003c7ee20496eaba5e3f6bae79c5a900ca3293c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h2 class=\"page-header\" style=\"margin-top:10px;\">Meal Management</h2>
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
    ";
        // line 27
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("addMeal");
        echo "\"><button type=\"button\" class=\"btn btn-primary pull-right\">Add</button></a>
    ";
        // line 29
        echo "    </div>
    <!-- Table -->
    <table class=\"table\">
        <tr>
            <th>No</th>
            <th>Meal Name</th>
            <th>Category</th>
            <th>Description</th>
            <th>Price</th>
            <th>Discount</th>
            <th class=\"align-center\">Picture</th>
            <th>Action</th>
        </tr>
        ";
        // line 42
        $context["idx"] = 1;
        // line 43
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["meals"]) ? $context["meals"] : $this->getContext($context, "meals")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["meal"]) {
            // line 44
            echo "        <tr>
            <td>";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : $this->getContext($context, "idx")), "html", null, true);
            echo "</td>
            <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["meal"], "getMealName", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["meal"], "getCategory", array(), "method"), "getCategoryName", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["meal"], "getMealDesc", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["meal"], "getMealPrice", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["meal"], "getDiscount", array(), "method"), "html", null, true);
            echo "</td>
            <td>
            
            <img class=\"img-thumbnail center-block\" width=\"100em\" onerror=\"getDefaultImage(this)\" src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/images/meal/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["meal"], "getPicture", array(), "method"), "html", null, true);
            echo "\" />
            
            </td>
            <td>
                ";
            // line 58
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editMeal", array("id" => $this->getAttribute($context["meal"], "getMealId", array(), "method"))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\" style=\"margin-right:0.3em\"></span></a>
                <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deleteMeal", array("id" => $this->getAttribute($context["meal"], "getMealId", array(), "method"))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a>
                ";
            // line 61
            echo "            </td>
        </tr>
        ";
            // line 63
            $context["idx"] = ((isset($context["idx"]) ? $context["idx"] : $this->getContext($context, "idx")) + 1);
            // line 64
            echo "        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 65
            echo "        <em>Unbelievable.  No entries here so far</em>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "    </table>
</div>
    
";
        
        $__internal_adfe0e4d0b188cb092f1a38003c7ee20496eaba5e3f6bae79c5a900ca3293c87->leave($__internal_adfe0e4d0b188cb092f1a38003c7ee20496eaba5e3f6bae79c5a900ca3293c87_prof);

    }

    public function getTemplateName()
    {
        return "configuration/meal/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 67,  199 => 65,  194 => 64,  192 => 63,  188 => 61,  184 => 59,  179 => 58,  171 => 53,  165 => 50,  161 => 49,  157 => 48,  153 => 47,  149 => 46,  145 => 45,  142 => 44,  136 => 43,  134 => 42,  119 => 29,  114 => 27,  111 => 25,  106 => 22,  97 => 21,  93 => 20,  90 => 19,  87 => 18,  84 => 17,  79 => 14,  70 => 13,  66 => 12,  63 => 11,  60 => 10,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
    }
}
/* */
/* {% extends 'base.html.twig' %}*/
/* {% block title %}Meal Management{% endblock %}*/
/*      */
/* {% block body %}*/
/* <h2 class="page-header" style="margin-top:10px;">Meal Management</h2>*/
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
/*     <a href="{{ path('addMeal') }}"><button type="button" class="btn btn-primary pull-right">Add</button></a>*/
/*     {# endif #}*/
/*     </div>*/
/*     <!-- Table -->*/
/*     <table class="table">*/
/*         <tr>*/
/*             <th>No</th>*/
/*             <th>Meal Name</th>*/
/*             <th>Category</th>*/
/*             <th>Description</th>*/
/*             <th>Price</th>*/
/*             <th>Discount</th>*/
/*             <th class="align-center">Picture</th>*/
/*             <th>Action</th>*/
/*         </tr>*/
/*         {% set idx = 1 %}*/
/*         {% for meal in meals %}*/
/*         <tr>*/
/*             <td>{{idx}}</td>*/
/*             <td>{{ meal.getMealName() }}</td>*/
/*             <td>{{ meal.getCategory().getCategoryName() }}</td>*/
/*             <td>{{ meal.getMealDesc() }}</td>*/
/*             <td>{{ meal.getMealPrice() }}</td>*/
/*             <td>{{ meal.getDiscount() }}</td>*/
/*             <td>*/
/*             */
/*             <img class="img-thumbnail center-block" width="100em" onerror="getDefaultImage(this)" src="{{asset('bundles/images/meal/')}}{{meal.getPicture()}}" />*/
/*             */
/*             </td>*/
/*             <td>*/
/*                 {# if session.logged_in #}*/
/*                 <a href="{{ path('editMeal', {'id': meal.getMealId()}) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="margin-right:0.3em"></span></a>*/
/*                 <a href="{{ path('deleteMeal', {'id': meal.getMealId()}) }}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>*/
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
