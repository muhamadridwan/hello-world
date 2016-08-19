<?php

/* configuration/meal_category/meal_category_form.html.twig */
class __TwigTemplate_cd0c5d17e981019746a603a53e9ec153d650ec2cb653338ab4d2ad6595cb9195 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "configuration/meal_category/meal_category_form.html.twig", 1);
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
        $__internal_6c643ed23928dadd03e35299f46bbbc75a5ac1f27ef9a281e57ade0d2fc76447 = $this->env->getExtension("native_profiler");
        $__internal_6c643ed23928dadd03e35299f46bbbc75a5ac1f27ef9a281e57ade0d2fc76447->enter($__internal_6c643ed23928dadd03e35299f46bbbc75a5ac1f27ef9a281e57ade0d2fc76447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "configuration/meal_category/meal_category_form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c643ed23928dadd03e35299f46bbbc75a5ac1f27ef9a281e57ade0d2fc76447->leave($__internal_6c643ed23928dadd03e35299f46bbbc75a5ac1f27ef9a281e57ade0d2fc76447_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_aff4ba68a56d4fb4ff7a50044f56c9c8ae47729f516fc38d5fdd186d4d4cac07 = $this->env->getExtension("native_profiler");
        $__internal_aff4ba68a56d4fb4ff7a50044f56c9c8ae47729f516fc38d5fdd186d4d4cac07->enter($__internal_aff4ba68a56d4fb4ff7a50044f56c9c8ae47729f516fc38d5fdd186d4d4cac07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Meal Category Management";
        
        $__internal_aff4ba68a56d4fb4ff7a50044f56c9c8ae47729f516fc38d5fdd186d4d4cac07->leave($__internal_aff4ba68a56d4fb4ff7a50044f56c9c8ae47729f516fc38d5fdd186d4d4cac07_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_69cfe5f9d45bffb3c4287a60cf6af286ef38392e5f6da7f036a2b0849fbc24c1 = $this->env->getExtension("native_profiler");
        $__internal_69cfe5f9d45bffb3c4287a60cf6af286ef38392e5f6da7f036a2b0849fbc24c1->enter($__internal_69cfe5f9d45bffb3c4287a60cf6af286ef38392e5f6da7f036a2b0849fbc24c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h2 class=\"page-header\" style=\"margin-top:10px;\">Meal Category Management</h2>
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
            echo $this->env->getExtension('routing')->getPath("addMealCategory");
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editMealCategory", array("id" => $this->getAttribute((isset($context["mealCategory"]) ? $context["mealCategory"] : $this->getContext($context, "mealCategory")), "getCategoryId", array(), "method"))), "html", null, true);
            echo " ";
        }
        echo "\" method=post class=\"laminarin-form\">
    <dl>
        <dt>Category Name:</dt>
        <dd>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoryName", array()), 'widget');
        echo "</dd>
        <dt>Description:</dt>
        <dd>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoryDesc", array()), 'widget');
        echo "</dd>
        <dd>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "

            <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("mealCategoryIndex");
        echo "\"><button type=\"button\" class=\"btn btn-primary pull-right\">Back</button></a>
        <br/></dd>
    </dl>
</form>

  ";
        
        $__internal_69cfe5f9d45bffb3c4287a60cf6af286ef38392e5f6da7f036a2b0849fbc24c1->leave($__internal_69cfe5f9d45bffb3c4287a60cf6af286ef38392e5f6da7f036a2b0849fbc24c1_prof);

    }

    public function getTemplateName()
    {
        return "configuration/meal_category/meal_category_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 23,  103 => 21,  99 => 20,  94 => 18,  80 => 15,  75 => 12,  66 => 10,  62 => 9,  58 => 7,  56 => 6,  53 => 5,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}Meal Category Management{% endblock %}*/
/* {% block body %}*/
/* {# if session.logged_in #}*/
/* <h2 class="page-header" style="margin-top:10px;">Meal Category Management</h2>*/
/* {% if errors %}*/
/*     <div class="error">*/
/*         <ul>*/
/*         {% for error in errors %}*/
/*             <li>{{ error.message }}</li>*/
/*         {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/* {% endif %}*/
/* <form enctype="multipart/form-data" action="{% if act == 'add' %}{{ path('addMealCategory') }} {% else %} {{ path('editMealCategory',{'id': mealCategory.getCategoryId()}) }} {% endif %}" method=post class="laminarin-form">*/
/*     <dl>*/
/*         <dt>Category Name:</dt>*/
/*         <dd>{{ form_widget(form.categoryName) }}</dd>*/
/*         <dt>Description:</dt>*/
/*         <dd>{{ form_widget(form.categoryDesc) }}</dd>*/
/*         <dd>{{ form_widget(form.save) }}*/
/* */
/*             <a href="{{ path('mealCategoryIndex') }}"><button type="button" class="btn btn-primary pull-right">Back</button></a>*/
/*         <br/></dd>*/
/*     </dl>*/
/* </form>*/
/* */
/*   {# endif #}*/
/* {% endblock %}*/
