<?php

/* orders/order_history/index.html.twig */
class __TwigTemplate_dbe881087f3a7bfe9b3a59229920f36b28dbd87c18af1cb6b5b79ce0a0b58c48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "orders/order_history/index.html.twig", 2);
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
        $__internal_908700ae72e9e1dffe96136fc13b2b290314957b1438b3c298c060a47d38e35b = $this->env->getExtension("native_profiler");
        $__internal_908700ae72e9e1dffe96136fc13b2b290314957b1438b3c298c060a47d38e35b->enter($__internal_908700ae72e9e1dffe96136fc13b2b290314957b1438b3c298c060a47d38e35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "orders/order_history/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_908700ae72e9e1dffe96136fc13b2b290314957b1438b3c298c060a47d38e35b->leave($__internal_908700ae72e9e1dffe96136fc13b2b290314957b1438b3c298c060a47d38e35b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf4e5f9544e4aee06158dc80a21272c7290857fbd2f84d682dcc58ab19fc7119 = $this->env->getExtension("native_profiler");
        $__internal_cf4e5f9544e4aee06158dc80a21272c7290857fbd2f84d682dcc58ab19fc7119->enter($__internal_cf4e5f9544e4aee06158dc80a21272c7290857fbd2f84d682dcc58ab19fc7119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Order History";
        
        $__internal_cf4e5f9544e4aee06158dc80a21272c7290857fbd2f84d682dcc58ab19fc7119->leave($__internal_cf4e5f9544e4aee06158dc80a21272c7290857fbd2f84d682dcc58ab19fc7119_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_45b76256c005762ce12f9d2c705041fa55c480d7ea79a5315f4fafe7370b0b27 = $this->env->getExtension("native_profiler");
        $__internal_45b76256c005762ce12f9d2c705041fa55c480d7ea79a5315f4fafe7370b0b27->enter($__internal_45b76256c005762ce12f9d2c705041fa55c480d7ea79a5315f4fafe7370b0b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<!--<ul class=entries>-->
<div class=\"panel panel-default\">
    <div class=\"panel-heading\" style=\"height:3em;padding:0.2em;padding-right:1em;\"></div>
    <table class=\"table\">
            <tr>
                <th>No</th>
                <th>Order ID</th>
                <th>Customer/Table</th>
                <th>The Orders</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            ";
        // line 19
        $context["idx"] = 1;
        // line 20
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["orderHistory"]) ? $context["orderHistory"] : $this->getContext($context, "orderHistory")), "custOrders", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
            // line 21
            echo "            <tr>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : $this->getContext($context, "idx")), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "getOrderId", array(), "method"), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 25
            if ($this->getAttribute($context["o"], "getCustomer", array(), "method")) {
                // line 26
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["o"], "getCustomer", array(), "method"), "getCustomerName", array(), "method"), "html", null, true);
                echo "
                    ";
            } else {
                // line 28
                echo "                        -
                    ";
            }
            // line 30
            echo "                </td>
                <td>
                    ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["orderHistory"]) ? $context["orderHistory"] : $this->getContext($context, "orderHistory")), "orderDetails", array()), $this->getAttribute($context["o"], "getOrderId", array()), array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["od"]) {
                // line 33
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["od"], "getMeal", array(), "method"), "getMealName", array(), "method"), "html", null, true);
                echo "(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["od"], "getQty", array(), "method"), "html", null, true);
                echo ");
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['od'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                </td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "getOrderStatusDesc", array(), "method"), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailHistoryIndex", array("customer_order_id" => $this->getAttribute($context["o"], "getOrderId", array(), "method"))), "html", null, true);
            echo "\" class=\"btn btn-success\" style=\"margin-bottom:25px;\" role=\"button\">Detail</a>
                </td>
            </tr>
            ";
            // line 41
            $context["idx"] = ((isset($context["idx"]) ? $context["idx"] : $this->getContext($context, "idx")) + 1);
            // line 42
            echo "            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 43
            echo "            <em>Unbelievable.  No entries here so far</em>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['o'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </table>
</div>
    
";
        
        $__internal_45b76256c005762ce12f9d2c705041fa55c480d7ea79a5315f4fafe7370b0b27->leave($__internal_45b76256c005762ce12f9d2c705041fa55c480d7ea79a5315f4fafe7370b0b27_prof);

    }

    public function getTemplateName()
    {
        return "orders/order_history/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 45,  140 => 43,  135 => 42,  133 => 41,  127 => 38,  122 => 36,  119 => 35,  108 => 33,  104 => 32,  100 => 30,  96 => 28,  90 => 26,  88 => 25,  83 => 23,  79 => 22,  76 => 21,  70 => 20,  68 => 19,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
    }
}
/* */
/* {% extends 'base.html.twig' %}*/
/* {% block title %}Order History{% endblock %}*/
/*      */
/* {% block body %}*/
/* */
/* <!--<ul class=entries>-->*/
/* <div class="panel panel-default">*/
/*     <div class="panel-heading" style="height:3em;padding:0.2em;padding-right:1em;"></div>*/
/*     <table class="table">*/
/*             <tr>*/
/*                 <th>No</th>*/
/*                 <th>Order ID</th>*/
/*                 <th>Customer/Table</th>*/
/*                 <th>The Orders</th>*/
/*                 <th>Status</th>*/
/*                 <th>Action</th>*/
/*             </tr>*/
/*             {% set idx = 1 %}*/
/*             {% for o in orderHistory.custOrders %}*/
/*             <tr>*/
/*                 <td>{{idx}}</td>*/
/*                 <td>{{ o.getOrderId() }}</td>*/
/*                 <td>*/
/*                     {% if o.getCustomer() %}*/
/*                         {{ o.getCustomer().getCustomerName() }}*/
/*                     {% else %}*/
/*                         -*/
/*                     {% endif %}*/
/*                 </td>*/
/*                 <td>*/
/*                     {% for od in orderHistory.orderDetails[o.getOrderId] %}*/
/*                         {{od.getMeal().getMealName()}}({{od.getQty()}});*/
/*                     {% endfor %}*/
/*                 </td>*/
/*                 <td>{{ o.getOrderStatusDesc() }}</td>*/
/*                 <td>*/
/*                     <a href="{{path('detailHistoryIndex', {'customer_order_id':o.getOrderId()} )}}" class="btn btn-success" style="margin-bottom:25px;" role="button">Detail</a>*/
/*                 </td>*/
/*             </tr>*/
/*             {% set idx = idx +1 %}*/
/*             {% else %}*/
/*             <em>Unbelievable.  No entries here so far</em>*/
/*             {% endfor %}*/
/*         </table>*/
/* </div>*/
/*     */
/* {% endblock %}*/
