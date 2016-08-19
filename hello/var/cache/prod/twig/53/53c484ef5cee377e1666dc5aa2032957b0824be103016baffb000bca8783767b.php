<?php

/* orders/order/check_out_the_orders.html.twig */
class __TwigTemplate_d06520a174531e728128a3f2c3d71dcba3e4f30e940c78050769f0eb76016dcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "orders/order/check_out_the_orders.html.twig", 1);
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
        $__internal_a1bfaf6430f3bfd6faea7045aea616d3b3f9a26394cf84298b1c1b039571fc7b = $this->env->getExtension("native_profiler");
        $__internal_a1bfaf6430f3bfd6faea7045aea616d3b3f9a26394cf84298b1c1b039571fc7b->enter($__internal_a1bfaf6430f3bfd6faea7045aea616d3b3f9a26394cf84298b1c1b039571fc7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "orders/order/check_out_the_orders.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1bfaf6430f3bfd6faea7045aea616d3b3f9a26394cf84298b1c1b039571fc7b->leave($__internal_a1bfaf6430f3bfd6faea7045aea616d3b3f9a26394cf84298b1c1b039571fc7b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d194c38cf5b24b82e75c0d8c125d7c0c6986dad40f1c2ac5d7ddc3be6fcb783f = $this->env->getExtension("native_profiler");
        $__internal_d194c38cf5b24b82e75c0d8c125d7c0c6986dad40f1c2ac5d7ddc3be6fcb783f->enter($__internal_d194c38cf5b24b82e75c0d8c125d7c0c6986dad40f1c2ac5d7ddc3be6fcb783f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Check out the orders";
        
        $__internal_d194c38cf5b24b82e75c0d8c125d7c0c6986dad40f1c2ac5d7ddc3be6fcb783f->leave($__internal_d194c38cf5b24b82e75c0d8c125d7c0c6986dad40f1c2ac5d7ddc3be6fcb783f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ecbf1fab99c8a00deb9d099515fc372c6ab01f4fc309001aeecb5edb894b104 = $this->env->getExtension("native_profiler");
        $__internal_0ecbf1fab99c8a00deb9d099515fc372c6ab01f4fc309001aeecb5edb894b104->enter($__internal_0ecbf1fab99c8a00deb9d099515fc372c6ab01f4fc309001aeecb5edb894b104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<!--<ul class=entries>-->
<div class=\"panel panel-default\">
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["custOrderForm"]) ? $context["custOrderForm"] : $this->getContext($context, "custOrderForm")), 'form_start');
        echo "
    <div class=\"panel-heading\" style=\"padding:1em;padding-right:1em;\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["custOrderForm"]) ? $context["custOrderForm"] : $this->getContext($context, "custOrderForm")), "custOrder", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custOrder"]) {
            // line 10
            echo "            <dl>
                <dd>Table : ";
            // line 11
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["custOrder"], "customer", array()), 'widget');
            echo "</dd>
                <dd>Cahier : ";
            // line 12
            if ($this->getAttribute($this->getAttribute($this->getAttribute($context["custOrder"], "cashier", array()), "vars", array()), "data", array())) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["custOrder"], "cashier", array()), "vars", array()), "data", array()), "getEmployeeName", array(), "method"), "html", null, true);
                echo " ";
            }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["custOrder"], "cashier", array()), 'widget');
            echo "</dd>
                <dd>Order Date : ";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["custOrder"], "orderDate", array()), "vars", array()), "data", array()), "Y-m-d H:m:i", "Asia/Jakarta"), "html", null, true);
            echo "
                        ";
            // line 14
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["custOrder"], "orderDate", array()), 'widget');
            echo "
                </dd>
                <dd>Payment Method : ";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["custOrder"], "paymentMethod", array()), 'widget');
            echo "</dd>
                <dd>";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["custOrder"], "orderType", array()), 'widget');
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["custOrder"], "orderStatus", array()), 'widget');
            echo "</dd>
            </dl>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custOrder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </div>
    <div style=\"padding-bottom:50px;\">
    <table  class=\"table\">
        <thead>
            <tr>
                <th width=\"32\">No</th>
                <th>Menu</th>
                <th>Quatity</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        
        ";
        // line 36
        $context["idx"] = 1;
        // line 37
        echo "        ";
        $context["grandTotal"] = 0;
        // line 38
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["custOrderForm"]) ? $context["custOrderForm"] : $this->getContext($context, "custOrderForm")), "orderDetail", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["od"]) {
            // line 39
            echo "            <tr>
            <td class=\"center\">";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : $this->getContext($context, "idx")), "html", null, true);
            echo "</td>
            <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["od"], "meal", array()), "vars", array()), "data", array()), "getMealName", array(), "method"), "html", null, true);
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["od"], "meal", array()), 'widget');
            echo "</td>
            <td>";
            // line 42
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["od"], "qty", array()), 'widget');
            echo "</td>
            <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["od"], "meal", array()), "vars", array()), "data", array()), "getMealPrice", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["od"], "meal", array()), "vars", array()), "data", array()), "getDiscount", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["od"], "vars", array()), "data", array()), "getTotal", array(), "method"), "html", null, true);
            echo "
                ";
            // line 46
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["od"], "total", array()), 'widget');
            echo "
                ";
            // line 47
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["od"], "totalBeforeDiscount", array()), 'widget');
            echo "
                ";
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["od"], "totalDiscount", array()), 'widget');
            echo "
            </td>
            <td>
                ";
            // line 52
            echo "                
                <a href=\"#\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a>
                ";
            // line 55
            echo "            </td>
            </tr>
            ";
            // line 57
            $context["idx"] = ((isset($context["idx"]) ? $context["idx"] : $this->getContext($context, "idx")) + 1);
            // line 58
            echo "            ";
            $context["grandTotal"] = ((isset($context["grandTotal"]) ? $context["grandTotal"] : $this->getContext($context, "grandTotal")) + $this->getAttribute($this->getAttribute($this->getAttribute($context["od"], "vars", array()), "data", array()), "getTotal", array(), "method"));
            // line 59
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['od'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        <tr>
            <td colspan=\"5\"><strong>Grand Total</strong></td>
            <td>";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["grandTotal"]) ? $context["grandTotal"] : $this->getContext($context, "grandTotal")), "html", null, true);
        echo "</td>
            <td></td>
        </tr>
        </tbody>
    </table>
    ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["custOrderForm"]) ? $context["custOrderForm"] : $this->getContext($context, "custOrderForm")), "save", array()), 'widget');
        echo "
    </div>
    
        
    
    <!-- <a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("checkOutTheOrders");
        echo "\" class=\"btn btn-success pull-right\" style=\"margin-right:10px;\" role=\"button\">Check Out</a>  -->
    ";
        // line 73
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["custOrderForm"]) ? $context["custOrderForm"] : $this->getContext($context, "custOrderForm")), 'form_end');
        echo "
    
</div>

  ";
        
        $__internal_0ecbf1fab99c8a00deb9d099515fc372c6ab01f4fc309001aeecb5edb894b104->leave($__internal_0ecbf1fab99c8a00deb9d099515fc372c6ab01f4fc309001aeecb5edb894b104_prof);

    }

    public function getTemplateName()
    {
        return "orders/order/check_out_the_orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 73,  214 => 72,  206 => 67,  198 => 62,  194 => 60,  188 => 59,  185 => 58,  183 => 57,  179 => 55,  175 => 52,  169 => 48,  165 => 47,  161 => 46,  157 => 45,  153 => 44,  149 => 43,  145 => 42,  140 => 41,  136 => 40,  133 => 39,  128 => 38,  125 => 37,  123 => 36,  105 => 20,  95 => 17,  91 => 16,  86 => 14,  82 => 13,  73 => 12,  69 => 11,  66 => 10,  62 => 9,  57 => 7,  53 => 5,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}Check out the orders{% endblock %}*/
/* {% block body %}*/
/* {# if session.logged_in #}*/
/* <!--<ul class=entries>-->*/
/* <div class="panel panel-default">*/
/*     {{ form_start(custOrderForm) }}*/
/*     <div class="panel-heading" style="padding:1em;padding-right:1em;">*/
/*         {% for custOrder in custOrderForm.custOrder %}*/
/*             <dl>*/
/*                 <dd>Table : {{ form_widget(custOrder.customer) }}</dd>*/
/*                 <dd>Cahier : {% if custOrder.cashier.vars.data %} {{custOrder.cashier.vars.data.getEmployeeName() }} {%endif%}{{ form_widget(custOrder.cashier) }}</dd>*/
/*                 <dd>Order Date : {{ custOrder.orderDate.vars.data|date('Y-m-d H:m:i', 'Asia/Jakarta') }}*/
/*                         {{ form_widget(custOrder.orderDate) }}*/
/*                 </dd>*/
/*                 <dd>Payment Method : {{ form_widget(custOrder.paymentMethod) }}</dd>*/
/*                 <dd>{{ form_widget(custOrder.orderType) }}{{ form_widget(custOrder.orderStatus) }}</dd>*/
/*             </dl>*/
/*         {% endfor %}*/
/*     </div>*/
/*     <div style="padding-bottom:50px;">*/
/*     <table  class="table">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="32">No</th>*/
/*                 <th>Menu</th>*/
/*                 <th>Quatity</th>*/
/*                 <th>Price</th>*/
/*                 <th>Discount</th>*/
/*                 <th>Total</th>*/
/*                 <th>Action</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         */
/*         {% set idx = 1 %}*/
/*         {% set grandTotal = 0 %}*/
/*         {% for od in custOrderForm.orderDetail %}*/
/*             <tr>*/
/*             <td class="center">{{idx}}</td>*/
/*             <td>{{od.meal.vars.data.getMealName()}}{{ form_widget(od.meal)}}</td>*/
/*             <td>{{ form_widget(od.qty)}}</td>*/
/*             <td>{{od.meal.vars.data.getMealPrice()}}</td>*/
/*             <td>{{od.meal.vars.data.getDiscount()}}</td>*/
/*             <td>{{od.vars.data.getTotal()}}*/
/*                 {{ form_widget(od.total)}}*/
/*                 {{ form_widget(od.totalBeforeDiscount)}}*/
/*                 {{ form_widget(od.totalDiscount)}}*/
/*             </td>*/
/*             <td>*/
/*                 {# if session.logged_in #}*/
/*                 */
/*                 <a href="#"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>*/
/*                 {# endif #}*/
/*             </td>*/
/*             </tr>*/
/*             {% set idx = idx +1 %}*/
/*             {% set grandTotal = grandTotal + od.vars.data.getTotal() %}*/
/*         {% endfor %}*/
/*         <tr>*/
/*             <td colspan="5"><strong>Grand Total</strong></td>*/
/*             <td>{{grandTotal}}</td>*/
/*             <td></td>*/
/*         </tr>*/
/*         </tbody>*/
/*     </table>*/
/*     {{ form_widget(custOrderForm.save) }}*/
/*     </div>*/
/*     */
/*         */
/*     */
/*     <!-- <a href="{{path('checkOutTheOrders')}}" class="btn btn-success pull-right" style="margin-right:10px;" role="button">Check Out</a>  -->*/
/*     {{ form_end(custOrderForm) }}*/
/*     */
/* </div>*/
/* */
/*   {# endif #}*/
/* {% endblock %}*/
