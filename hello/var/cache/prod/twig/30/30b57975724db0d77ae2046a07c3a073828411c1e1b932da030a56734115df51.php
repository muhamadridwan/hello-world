<?php

/* configuration/meal/meal_form.html.twig */
class __TwigTemplate_d15d23496578826b5c909570f0d641b1d886f7c5258e7d2f079cb2b9cc9cc6d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "configuration/meal/meal_form.html.twig", 1);
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
        $__internal_424961db0ce3a86966d7ea202070028ffcec6fa088419da9e4b1973ecebcd83b = $this->env->getExtension("native_profiler");
        $__internal_424961db0ce3a86966d7ea202070028ffcec6fa088419da9e4b1973ecebcd83b->enter($__internal_424961db0ce3a86966d7ea202070028ffcec6fa088419da9e4b1973ecebcd83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "configuration/meal/meal_form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_424961db0ce3a86966d7ea202070028ffcec6fa088419da9e4b1973ecebcd83b->leave($__internal_424961db0ce3a86966d7ea202070028ffcec6fa088419da9e4b1973ecebcd83b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c0b490e241777a5e6d41a1cf2275655315f78c8fe18868586e4cfdb33112ff7 = $this->env->getExtension("native_profiler");
        $__internal_6c0b490e241777a5e6d41a1cf2275655315f78c8fe18868586e4cfdb33112ff7->enter($__internal_6c0b490e241777a5e6d41a1cf2275655315f78c8fe18868586e4cfdb33112ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Meal Management";
        
        $__internal_6c0b490e241777a5e6d41a1cf2275655315f78c8fe18868586e4cfdb33112ff7->leave($__internal_6c0b490e241777a5e6d41a1cf2275655315f78c8fe18868586e4cfdb33112ff7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd0323c9f10cb91b5dc74498744cbfcd5483afcab364494587caf84c88470fe4 = $this->env->getExtension("native_profiler");
        $__internal_dd0323c9f10cb91b5dc74498744cbfcd5483afcab364494587caf84c88470fe4->enter($__internal_dd0323c9f10cb91b5dc74498744cbfcd5483afcab364494587caf84c88470fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h2 class=\"page-header\" style=\"margin-top:10px;\">Meal Management</h2>
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
            echo $this->env->getExtension('routing')->getPath("addMeal");
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editMeal", array("id" => $this->getAttribute((isset($context["meal"]) ? $context["meal"] : $this->getContext($context, "meal")), "getMealId", array(), "method"))), "html", null, true);
            echo " ";
        }
        echo "\" method=post class=\"laminarin-form\">
    <dl>
        <dt>Meal Category:</dt>
        <dd>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'widget');
        echo "</dd>
        <dt>Meal Name:</dt>
        <dd>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mealName", array()), 'widget');
        echo "</dd>
        <dt>Desctiption:</dt>
        <dd>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mealDesc", array()), 'widget');
        echo "</dd>
        <dt>Price:</dt>
        <dd>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mealPrice", array()), 'widget');
        echo "</dd>
        <dt>Discount(%):</dt>
        <dd>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "discount", array()), 'widget');
        echo "</dd>
        <dt>Picture:</dt>
        <dd>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "picture", array()), 'widget');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictureFile", array()), 'widget');
        echo "</dd>
        <dd><img id=\"cust-pic-preview\" class=\"img-thumbnail\" width=\"200em\" onerror=\"getDefaultImage(this)\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/images/meal/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meal"]) ? $context["meal"] : $this->getContext($context, "meal")), "getPicture", array(), "method"), "html", null, true);
        echo "\" />
        </dd>
        <dd>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
            <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("mealIndex");
        echo "\"><button type=\"button\" class=\"btn btn-primary pull-right\">Back</button></a>
        <br/>
        </dd>
    </dl>
</form>

  ";
        
        $__internal_dd0323c9f10cb91b5dc74498744cbfcd5483afcab364494587caf84c88470fe4->leave($__internal_dd0323c9f10cb91b5dc74498744cbfcd5483afcab364494587caf84c88470fe4_prof);

    }

    public function getTemplateName()
    {
        return "configuration/meal/meal_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 32,  130 => 31,  124 => 29,  119 => 28,  114 => 26,  109 => 24,  104 => 22,  99 => 20,  94 => 18,  80 => 15,  75 => 12,  66 => 10,  62 => 9,  58 => 7,  56 => 6,  53 => 5,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}Meal Management{% endblock %}*/
/* {% block body %}*/
/* {# if session.logged_in #}*/
/* <h2 class="page-header" style="margin-top:10px;">Meal Management</h2>*/
/* {% if errors %}*/
/*     <div class="error">*/
/*         <ul>*/
/*         {% for error in errors %}*/
/*             <li>{{ error.message }}</li>*/
/*         {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/* {% endif %}*/
/* <form enctype="multipart/form-data" action="{% if act == 'add' %}{{ path('addMeal') }} {% else %} {{ path('editMeal',{'id': meal.getMealId()}) }} {% endif %}" method=post class="laminarin-form">*/
/*     <dl>*/
/*         <dt>Meal Category:</dt>*/
/*         <dd>{{ form_widget(form.category) }}</dd>*/
/*         <dt>Meal Name:</dt>*/
/*         <dd>{{ form_widget(form.mealName) }}</dd>*/
/*         <dt>Desctiption:</dt>*/
/*         <dd>{{ form_widget(form.mealDesc) }}</dd>*/
/*         <dt>Price:</dt>*/
/*         <dd>{{ form_widget(form.mealPrice) }}</dd>*/
/*         <dt>Discount(%):</dt>*/
/*         <dd>{{ form_widget(form.discount) }}</dd>*/
/*         <dt>Picture:</dt>*/
/*         <dd>{{ form_widget(form.picture) }}{{ form_widget(form.pictureFile) }}</dd>*/
/*         <dd><img id="cust-pic-preview" class="img-thumbnail" width="200em" onerror="getDefaultImage(this)" src="{{asset('bundles/images/meal/')}}{{meal.getPicture()}}" />*/
/*         </dd>*/
/*         <dd>{{ form_widget(form.save) }}*/
/*             <a href="{{ path('mealIndex') }}"><button type="button" class="btn btn-primary pull-right">Back</button></a>*/
/*         <br/>*/
/*         </dd>*/
/*     </dl>*/
/* </form>*/
/* */
/*   {# endif #}*/
/* {% endblock %}*/
