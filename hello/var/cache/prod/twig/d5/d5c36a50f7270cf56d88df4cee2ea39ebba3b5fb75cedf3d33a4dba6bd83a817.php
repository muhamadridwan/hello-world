<?php

/* orders/order/index.html.twig */
class __TwigTemplate_9702be6a87be2365963782773d9d5005a83feba06cb22146981ef1c8fa61a9ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "orders/order/index.html.twig", 2);
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
        $__internal_260c65883acc83a22b55d5de888b2b109ed5eb2098a0553d2d88cc31b066aa3a = $this->env->getExtension("native_profiler");
        $__internal_260c65883acc83a22b55d5de888b2b109ed5eb2098a0553d2d88cc31b066aa3a->enter($__internal_260c65883acc83a22b55d5de888b2b109ed5eb2098a0553d2d88cc31b066aa3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "orders/order/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_260c65883acc83a22b55d5de888b2b109ed5eb2098a0553d2d88cc31b066aa3a->leave($__internal_260c65883acc83a22b55d5de888b2b109ed5eb2098a0553d2d88cc31b066aa3a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a2772cc0fe4176ff14a41b42b7be3801f613d06feab0fe59ddd846038e1c3a4 = $this->env->getExtension("native_profiler");
        $__internal_0a2772cc0fe4176ff14a41b42b7be3801f613d06feab0fe59ddd846038e1c3a4->enter($__internal_0a2772cc0fe4176ff14a41b42b7be3801f613d06feab0fe59ddd846038e1c3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "User Management";
        
        $__internal_0a2772cc0fe4176ff14a41b42b7be3801f613d06feab0fe59ddd846038e1c3a4->leave($__internal_0a2772cc0fe4176ff14a41b42b7be3801f613d06feab0fe59ddd846038e1c3a4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_54b4829e4d6d3095d11fb3b9bf5ef510018bc7f6074f7fac2b7f40ff08d48dc6 = $this->env->getExtension("native_profiler");
        $__internal_54b4829e4d6d3095d11fb3b9bf5ef510018bc7f6074f7fac2b7f40ff08d48dc6->enter($__internal_54b4829e4d6d3095d11fb3b9bf5ef510018bc7f6074f7fac2b7f40ff08d48dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"row\">
\t<div class=\"col-sm-2\">
\t\t\t<a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("checkOutTheOrders");
        echo "\" class=\"btn btn-success\" style=\"margin-bottom:25px;\" role=\"button\">Check Out</a> 
                        
\t\t\t<div class=\"navbar navbar-inverse navbar-left meal-cat-nav\" style=\"border-color:#fff\">
\t\t\t\t<ul class=\"nav meal-cat-nav\">
\t\t\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mealCategory"]) ? $context["mealCategory"] : $this->getContext($context, "mealCategory")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 13
            echo "\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("orderIndex", array("category_id" => $this->getAttribute($context["category"], "getCategoryId", array(), "method"))), "html", null, true);
            echo "\" class=\"white-text ";
            if (((isset($context["activeCategoryId"]) ? $context["activeCategoryId"] : $this->getContext($context, "activeCategoryId")) == $this->getAttribute($context["category"], "getCategoryId", array(), "method"))) {
                echo "active";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "getCategoryName", array(), "method"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t
\t</div>
\t<div class=\"col-sm-10\">
        <div class=\"row\">
\t\t<form enctype=\"multipart/form-data\" action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pickTheMeal", array("category_id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["orderDetailForm"]) ? $context["orderDetailForm"] : $this->getContext($context, "orderDetailForm")), "category_id", array()), "vars", array()), "data", array()))), "html", null, true);
        echo "\" method=\"post\">
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["orderDetailForm"]) ? $context["orderDetailForm"] : $this->getContext($context, "orderDetailForm")), "category_id", array()), 'widget');
        echo "
\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["orderDetailForm"]) ? $context["orderDetailForm"] : $this->getContext($context, "orderDetailForm")), "orderDetail", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["od"]) {
            // line 24
            echo "            <div class=\"col-sm-6 col-md-4\">
                <div class=\"thumbnail\">
                  <img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["mealDir"]) ? $context["mealDir"] : $this->getContext($context, "mealDir"))), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["od"], "vars", array()), "data", array()), "meal", array(), "array"), "getPicture", array(), "method"), "html", null, true);
            echo "\" onerror=\"getDefaultImage(this)\">
                  <div class=\"caption\">
                    <h3>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["od"], "vars", array()), "data", array()), "meal", array(), "array"), "getMealName", array(), "method"), "html", null, true);
            echo "</h3>
                    <p>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["od"], "vars", array()), "data", array()), "meal", array(), "array"), "getMealDesc", array(), "method"), "html", null, true);
            echo "</p>
                    <p>
                        ";
            // line 31
            if (twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["od"], "vars", array()), "data", array()), "meal", array(), "array"), "getMealId", array(), "method"), twig_get_array_keys_filter((isset($context["listOfOrderedMeal"]) ? $context["listOfOrderedMeal"] : $this->getContext($context, "listOfOrderedMeal"))))) {
                // line 32
                echo "                        <span class=\"alert-info\">Has been ordered. Qty : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["od"], "vars", array()), "data", array()), "qty", array(), "array"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t<a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cancelPickTheMeal", array("meal_id" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["od"], "vars", array()), "data", array()), "meal", array(), "array"), "getMealId", array(), "method"), "category_id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["orderDetailForm"]) ? $context["orderDetailForm"] : $this->getContext($context, "orderDetailForm")), "category_id", array()), "vars", array()), "data", array()))), "html", null, true);
                echo "\" class=\"btn btn-default pull-right\" role=\"button\">Cancel</a> 
                        ";
            } else {
                // line 35
                echo "\t\t\t\t\t\t";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["od"], "meal", array()), 'widget');
                echo "
\t\t\t\t\t\tQuantity: ";
                // line 36
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["od"], "qty", array()), 'widget');
                echo "
\t\t\t\t\t\t";
                // line 37
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["od"], "save", array()), 'widget');
                echo "                 
                        ";
            }
            // line 39
            echo "                    </p>
                  </div>
                </div>
            </div>

            
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['od'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    \t</form>
\t\t</div>
\t</div>
</div>

    
";
        
        $__internal_54b4829e4d6d3095d11fb3b9bf5ef510018bc7f6074f7fac2b7f40ff08d48dc6->leave($__internal_54b4829e4d6d3095d11fb3b9bf5ef510018bc7f6074f7fac2b7f40ff08d48dc6_prof);

    }

    public function getTemplateName()
    {
        return "orders/order/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 47,  148 => 39,  143 => 37,  139 => 36,  134 => 35,  129 => 33,  124 => 32,  122 => 31,  117 => 29,  113 => 28,  107 => 26,  103 => 24,  99 => 23,  95 => 22,  91 => 21,  83 => 15,  68 => 13,  64 => 12,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
    }
}
/* */
/* {% extends 'base.html.twig' %}*/
/* {% block title %}User Management{% endblock %}*/
/*      */
/* {% block body %}*/
/* <div class="row">*/
/* 	<div class="col-sm-2">*/
/* 			<a href="{{path('checkOutTheOrders')}}" class="btn btn-success" style="margin-bottom:25px;" role="button">Check Out</a> */
/*                         */
/* 			<div class="navbar navbar-inverse navbar-left meal-cat-nav" style="border-color:#fff">*/
/* 				<ul class="nav meal-cat-nav">*/
/* 					{% for category in mealCategory %}*/
/* 						<li><a href="{{ path('orderIndex', {'category_id': category.getCategoryId()}) }}" class="white-text {% if activeCategoryId == category.getCategoryId() %}active{%endif%}">{{ category.getCategoryName() }}</a></li>*/
/* 					{% endfor %}*/
/* 				</ul>*/
/* 			</div>*/
/* 		*/
/* 	</div>*/
/* 	<div class="col-sm-10">*/
/*         <div class="row">*/
/* 		<form enctype="multipart/form-data" action="{{ path('pickTheMeal', {'category_id':orderDetailForm.category_id.vars.data}) }}" method="post">*/
/*         {{ form_widget(orderDetailForm.category_id)}}*/
/* 		{% for od in orderDetailForm.orderDetail %}*/
/*             <div class="col-sm-6 col-md-4">*/
/*                 <div class="thumbnail">*/
/*                   <img src="{{asset(mealDir)}}{{od.vars.data['meal'].getPicture()}}" onerror="getDefaultImage(this)">*/
/*                   <div class="caption">*/
/*                     <h3>{{od.vars.data['meal'].getMealName()}}</h3>*/
/*                     <p>{{od.vars.data['meal'].getMealDesc()}}</p>*/
/*                     <p>*/
/*                         {% if od.vars.data['meal'].getMealId() in listOfOrderedMeal|keys %}*/
/*                         <span class="alert-info">Has been ordered. Qty : {{od.vars.data['qty'] }}</span>*/
/* 						<a href="{{ path('cancelPickTheMeal', {'meal_id': od.vars.data['meal'].getMealId(), 'category_id': orderDetailForm.category_id.vars.data }) }}" class="btn btn-default pull-right" role="button">Cancel</a> */
/*                         {% else %}*/
/* 						{{ form_widget(od.meal)}}*/
/* 						Quantity: {{ form_widget(od.qty)}}*/
/* 						{{ form_widget(od.save)}}                 */
/*                         {% endif %}*/
/*                     </p>*/
/*                   </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             */
/*             */
/*         {% endfor %}*/
/*     	</form>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/*     */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
