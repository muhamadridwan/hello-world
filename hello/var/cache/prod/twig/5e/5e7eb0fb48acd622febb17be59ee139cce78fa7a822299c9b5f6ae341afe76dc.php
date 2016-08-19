<?php

/* orders/order_history/detail_order.html.twig */
class __TwigTemplate_94eaa33e15574bc1750346ffbc35fbbe9404966dc35d892227815ce47fa3c3ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "orders/order_history/detail_order.html.twig", 1);
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
        $__internal_dc5628e087d33188cbd4b02c52ec77b93f59b2815c1a74969e9a00578b565abd = $this->env->getExtension("native_profiler");
        $__internal_dc5628e087d33188cbd4b02c52ec77b93f59b2815c1a74969e9a00578b565abd->enter($__internal_dc5628e087d33188cbd4b02c52ec77b93f59b2815c1a74969e9a00578b565abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "orders/order_history/detail_order.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc5628e087d33188cbd4b02c52ec77b93f59b2815c1a74969e9a00578b565abd->leave($__internal_dc5628e087d33188cbd4b02c52ec77b93f59b2815c1a74969e9a00578b565abd_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b61e8b50d86a58ca01851b690861cfd953f6c0858b13b2b1f1aca85da3c7a3c7 = $this->env->getExtension("native_profiler");
        $__internal_b61e8b50d86a58ca01851b690861cfd953f6c0858b13b2b1f1aca85da3c7a3c7->enter($__internal_b61e8b50d86a58ca01851b690861cfd953f6c0858b13b2b1f1aca85da3c7a3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Order History Detail";
        
        $__internal_b61e8b50d86a58ca01851b690861cfd953f6c0858b13b2b1f1aca85da3c7a3c7->leave($__internal_b61e8b50d86a58ca01851b690861cfd953f6c0858b13b2b1f1aca85da3c7a3c7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_57bd7eeb98b2f0ac47b70e3aa2a4a5d4efb5135f5ba4836c07788dc893c351fa = $this->env->getExtension("native_profiler");
        $__internal_57bd7eeb98b2f0ac47b70e3aa2a4a5d4efb5135f5ba4836c07788dc893c351fa->enter($__internal_57bd7eeb98b2f0ac47b70e3aa2a4a5d4efb5135f5ba4836c07788dc893c351fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"panel panel-default\">
    <div class=\"panel-heading\" style=\"padding:1em;padding-right:1em;\">
        
            <dl>
                <dd>Table : ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["custOrderData"]) ? $context["custOrderData"] : $this->getContext($context, "custOrderData")), "custOrder", array()), "getCustomer", array(), "method"), "getCustomerName", array(), "method"), "html", null, true);
        echo "</dd>
                <dd>Cahier : ";
        // line 10
        if ($this->getAttribute($this->getAttribute((isset($context["custOrderData"]) ? $context["custOrderData"] : $this->getContext($context, "custOrderData")), "custOrder", array()), "cashier", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["custOrderData"]) ? $context["custOrderData"] : $this->getContext($context, "custOrderData")), "custOrder", array()), "cashier", array()), "getEmployeeName", array(), "method"), "html", null, true);
            echo " ";
        }
        echo "</dd>
                <dd>Order Date : ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["custOrderData"]) ? $context["custOrderData"] : $this->getContext($context, "custOrderData")), "custOrder", array()), "orderDate", array()), "Y-m-d H:m:i", "Asia/Jakarta"), "html", null, true);
        echo "
                </dd>
                <dd>Payment Method : ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["custOrderData"]) ? $context["custOrderData"] : $this->getContext($context, "custOrderData")), "custOrder", array()), "getPaymentMethod", array(), "method"), "html", null, true);
        echo "</dd>
                <dd>Payment is Confirmed By : ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["custOrderData"]) ? $context["custOrderData"] : $this->getContext($context, "custOrderData")), "custOrder", array()), "confirmedBy", array()), "getEmployeeName", array(), "method"), "html", null, true);
        echo " </dd>
            </dl>
        
    </div>
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
            </tr>
        </thead>
        <tbody>
        
        ";
        // line 32
        $context["idx"] = 1;
        // line 33
        echo "        ";
        $context["grandTotal"] = 0;
        // line 34
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["custOrderData"]) ? $context["custOrderData"] : $this->getContext($context, "custOrderData")), "orderDetail", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["od"]) {
            // line 35
            echo "            <tr>
            <td class=\"center\">";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : $this->getContext($context, "idx")), "html", null, true);
            echo "</td>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["od"], "meal", array()), "getMealName", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["od"], "getQty", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["od"], "meal", array()), "getMealPrice", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["od"], "meal", array()), "getDiscount", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["od"], "getTotal", array(), "method"), "html", null, true);
            echo "</td>
            </tr>
            ";
            // line 43
            $context["idx"] = ((isset($context["idx"]) ? $context["idx"] : $this->getContext($context, "idx")) + 1);
            // line 44
            echo "            ";
            $context["grandTotal"] = ((isset($context["grandTotal"]) ? $context["grandTotal"] : $this->getContext($context, "grandTotal")) + $this->getAttribute($context["od"], "getTotal", array(), "method"));
            // line 45
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['od'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        <tr>
            <td colspan=\"5\"><strong>Grand Total</strong></td>
            <td>";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["grandTotal"]) ? $context["grandTotal"] : $this->getContext($context, "grandTotal")), "html", null, true);
        echo "</td>
        </tr>
        </tbody>
    </table>
    
    </div>
    
        
    
</div>

  ";
        
        $__internal_57bd7eeb98b2f0ac47b70e3aa2a4a5d4efb5135f5ba4836c07788dc893c351fa->leave($__internal_57bd7eeb98b2f0ac47b70e3aa2a4a5d4efb5135f5ba4836c07788dc893c351fa_prof);

    }

    public function getTemplateName()
    {
        return "orders/order_history/detail_order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 48,  150 => 46,  144 => 45,  141 => 44,  139 => 43,  134 => 41,  130 => 40,  126 => 39,  122 => 38,  118 => 37,  114 => 36,  111 => 35,  106 => 34,  103 => 33,  101 => 32,  80 => 14,  76 => 13,  71 => 11,  63 => 10,  59 => 9,  53 => 5,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}Order History Detail{% endblock %}*/
/* {% block body %}*/
/* {# if session.logged_in #}*/
/* <div class="panel panel-default">*/
/*     <div class="panel-heading" style="padding:1em;padding-right:1em;">*/
/*         */
/*             <dl>*/
/*                 <dd>Table : {{ custOrderData.custOrder.getCustomer().getCustomerName() }}</dd>*/
/*                 <dd>Cahier : {% if custOrderData.custOrder.cashier %} {{custOrderData.custOrder.cashier.getEmployeeName() }} {%endif%}</dd>*/
/*                 <dd>Order Date : {{ custOrderData.custOrder.orderDate|date('Y-m-d H:m:i', 'Asia/Jakarta') }}*/
/*                 </dd>*/
/*                 <dd>Payment Method : {{ custOrderData.custOrder.getPaymentMethod() }}</dd>*/
/*                 <dd>Payment is Confirmed By : {{custOrderData.custOrder.confirmedBy.getEmployeeName() }} </dd>*/
/*             </dl>*/
/*         */
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
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         */
/*         {% set idx = 1 %}*/
/*         {% set grandTotal = 0 %}*/
/*         {% for od in custOrderData.orderDetail %}*/
/*             <tr>*/
/*             <td class="center">{{idx}}</td>*/
/*             <td>{{od.meal.getMealName()}}</td>*/
/*             <td>{{ od.getQty()}}</td>*/
/*             <td>{{od.meal.getMealPrice()}}</td>*/
/*             <td>{{od.meal.getDiscount()}}</td>*/
/*             <td>{{od.getTotal()}}</td>*/
/*             </tr>*/
/*             {% set idx = idx +1 %}*/
/*             {% set grandTotal = grandTotal + od.getTotal() %}*/
/*         {% endfor %}*/
/*         <tr>*/
/*             <td colspan="5"><strong>Grand Total</strong></td>*/
/*             <td>{{grandTotal}}</td>*/
/*         </tr>*/
/*         </tbody>*/
/*     </table>*/
/*     */
/*     </div>*/
/*     */
/*         */
/*     */
/* </div>*/
/* */
/*   {# endif #}*/
/* {% endblock %}*/
