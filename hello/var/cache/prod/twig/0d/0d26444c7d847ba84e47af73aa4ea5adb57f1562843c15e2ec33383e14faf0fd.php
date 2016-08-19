<?php

/* orders/active_order/payment_confirmation.html.twig */
class __TwigTemplate_c5f2d48e130a61897da98afedad32b465b93b003829f2b6f27b773f2e9cf5814 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "orders/active_order/payment_confirmation.html.twig", 1);
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
        $__internal_a5fc5a6751a5b62e89d283e3219b09be4431f5f47a544e8fecaed064fd2f3b33 = $this->env->getExtension("native_profiler");
        $__internal_a5fc5a6751a5b62e89d283e3219b09be4431f5f47a544e8fecaed064fd2f3b33->enter($__internal_a5fc5a6751a5b62e89d283e3219b09be4431f5f47a544e8fecaed064fd2f3b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "orders/active_order/payment_confirmation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5fc5a6751a5b62e89d283e3219b09be4431f5f47a544e8fecaed064fd2f3b33->leave($__internal_a5fc5a6751a5b62e89d283e3219b09be4431f5f47a544e8fecaed064fd2f3b33_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b0028590402b15624e82b77619e57947962d66f340d2518ba6ff6a7eaefe29c = $this->env->getExtension("native_profiler");
        $__internal_7b0028590402b15624e82b77619e57947962d66f340d2518ba6ff6a7eaefe29c->enter($__internal_7b0028590402b15624e82b77619e57947962d66f340d2518ba6ff6a7eaefe29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Payment Confirmation";
        
        $__internal_7b0028590402b15624e82b77619e57947962d66f340d2518ba6ff6a7eaefe29c->leave($__internal_7b0028590402b15624e82b77619e57947962d66f340d2518ba6ff6a7eaefe29c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d2f6030d93e957184d184d7a6743e1daae7dade66a11cadcf497499696551c6 = $this->env->getExtension("native_profiler");
        $__internal_9d2f6030d93e957184d184d7a6743e1daae7dade66a11cadcf497499696551c6->enter($__internal_9d2f6030d93e957184d184d7a6743e1daae7dade66a11cadcf497499696551c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<!--<ul class=entries>-->
";
        // line 6
        $context["errorMessages"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method");
        // line 7
        if ((isset($context["errorMessages"]) ? $context["errorMessages"] : $this->getContext($context, "errorMessages"))) {
            // line 8
            echo "    <div class=\"alert-danger error\">
    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errorMessages"]) ? $context["errorMessages"] : $this->getContext($context, "errorMessages")));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 10
                echo "        ";
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo " 
    </div>
";
        }
        // line 14
        echo "<div class=\"panel panel-default\">
    <div class=\"panel-heading\" style=\"padding:1em;padding-right:1em;\">
        
            <dl>
                <dd>Table : ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["custOrderData"]) ? $context["custOrderData"] : $this->getContext($context, "custOrderData")), "custOrder", array()), "getCustomer", array(), "method"), "getCustomerName", array(), "method"), "html", null, true);
        echo "</dd>
                <dd>Cahier : ";
        // line 19
        if ($this->getAttribute($this->getAttribute((isset($context["custOrderData"]) ? $context["custOrderData"] : $this->getContext($context, "custOrderData")), "custOrder", array()), "cashier", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["custOrderData"]) ? $context["custOrderData"] : $this->getContext($context, "custOrderData")), "custOrder", array()), "cashier", array()), "getEmployeeName", array(), "method"), "html", null, true);
            echo " ";
        }
        echo "</dd>
                <dd>Order Date : ";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["custOrderData"]) ? $context["custOrderData"] : $this->getContext($context, "custOrderData")), "custOrder", array()), "orderDate", array()), "Y-m-d H:m:i", "Asia/Jakarta"), "html", null, true);
        echo "
                </dd>
                <dd>Payment Method : ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["custOrderData"]) ? $context["custOrderData"] : $this->getContext($context, "custOrderData")), "custOrder", array()), "getPaymentMethod", array(), "method"), "html", null, true);
        echo "</dd>
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
        // line 40
        $context["idx"] = 1;
        // line 41
        echo "        ";
        $context["grandTotal"] = 0;
        // line 42
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["custOrderData"]) ? $context["custOrderData"] : $this->getContext($context, "custOrderData")), "orderDetail", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["od"]) {
            // line 43
            echo "            <tr>
            <td class=\"center\">";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : $this->getContext($context, "idx")), "html", null, true);
            echo "</td>
            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["od"], "meal", array()), "getMealName", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["od"], "getQty", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["od"], "meal", array()), "getMealPrice", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["od"], "meal", array()), "getDiscount", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["od"], "getTotal", array(), "method"), "html", null, true);
            echo "</td>
            </tr>
            ";
            // line 51
            $context["idx"] = ((isset($context["idx"]) ? $context["idx"] : $this->getContext($context, "idx")) + 1);
            // line 52
            echo "            ";
            $context["grandTotal"] = ((isset($context["grandTotal"]) ? $context["grandTotal"] : $this->getContext($context, "grandTotal")) + $this->getAttribute($context["od"], "getTotal", array(), "method"));
            // line 53
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['od'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        <tr>
            <td colspan=\"5\"><strong>Grand Total</strong></td>
            <td>";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["grandTotal"]) ? $context["grandTotal"] : $this->getContext($context, "grandTotal")), "html", null, true);
        echo "</td>
        </tr>
        </tbody>
    </table>
    <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("confirmPayment", array("customer_order_id" => $this->getAttribute($this->getAttribute((isset($context["custOrderData"]) ? $context["custOrderData"] : $this->getContext($context, "custOrderData")), "custOrder", array()), "getOrderId", array(), "method"))), "html", null, true);
        echo "\" class=\"btn btn-success pull-right\" style=\"margin-right:10px;\" role=\"button\">Confirm Payment</a>
    </div>
    
        
    
</div>

  ";
        
        $__internal_9d2f6030d93e957184d184d7a6743e1daae7dade66a11cadcf497499696551c6->leave($__internal_9d2f6030d93e957184d184d7a6743e1daae7dade66a11cadcf497499696551c6_prof);

    }

    public function getTemplateName()
    {
        return "orders/active_order/payment_confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 60,  178 => 56,  174 => 54,  168 => 53,  165 => 52,  163 => 51,  158 => 49,  154 => 48,  150 => 47,  146 => 46,  142 => 45,  138 => 44,  135 => 43,  130 => 42,  127 => 41,  125 => 40,  104 => 22,  99 => 20,  91 => 19,  87 => 18,  81 => 14,  76 => 11,  67 => 10,  63 => 9,  60 => 8,  58 => 7,  56 => 6,  53 => 5,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}Payment Confirmation{% endblock %}*/
/* {% block body %}*/
/* {# if session.logged_in #}*/
/* <!--<ul class=entries>-->*/
/* {% set errorMessages = app.session.flashbag.get('error') %}*/
/* {% if errorMessages %}*/
/*     <div class="alert-danger error">*/
/*     {% for flashMessage in errorMessages %}*/
/*         {{ flashMessage }}*/
/*     {% endfor %} */
/*     </div>*/
/* {% endif %}*/
/* <div class="panel panel-default">*/
/*     <div class="panel-heading" style="padding:1em;padding-right:1em;">*/
/*         */
/*             <dl>*/
/*                 <dd>Table : {{ custOrderData.custOrder.getCustomer().getCustomerName() }}</dd>*/
/*                 <dd>Cahier : {% if custOrderData.custOrder.cashier %} {{custOrderData.custOrder.cashier.getEmployeeName() }} {%endif%}</dd>*/
/*                 <dd>Order Date : {{ custOrderData.custOrder.orderDate|date('Y-m-d H:m:i', 'Asia/Jakarta') }}*/
/*                 </dd>*/
/*                 <dd>Payment Method : {{ custOrderData.custOrder.getPaymentMethod() }}</dd>*/
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
/*     <a href="{{path('confirmPayment', {'customer_order_id':custOrderData.custOrder.getOrderId()} )}}" class="btn btn-success pull-right" style="margin-right:10px;" role="button">Confirm Payment</a>*/
/*     </div>*/
/*     */
/*         */
/*     */
/* </div>*/
/* */
/*   {# endif #}*/
/* {% endblock %}*/
