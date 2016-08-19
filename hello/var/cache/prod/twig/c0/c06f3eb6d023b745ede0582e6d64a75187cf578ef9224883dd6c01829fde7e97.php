<?php

/* orders/active_order/index.html.twig */
class __TwigTemplate_949207565bf896e8b08e827a55577f285b0020d2c4a567a61323d710ca9873d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "orders/active_order/index.html.twig", 2);
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
        $__internal_a234a46f10e74fde292521fd43e3a6c6f5007c398b3ae656c243b4450b7f0a93 = $this->env->getExtension("native_profiler");
        $__internal_a234a46f10e74fde292521fd43e3a6c6f5007c398b3ae656c243b4450b7f0a93->enter($__internal_a234a46f10e74fde292521fd43e3a6c6f5007c398b3ae656c243b4450b7f0a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "orders/active_order/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a234a46f10e74fde292521fd43e3a6c6f5007c398b3ae656c243b4450b7f0a93->leave($__internal_a234a46f10e74fde292521fd43e3a6c6f5007c398b3ae656c243b4450b7f0a93_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d56b74a24c34bf97cf7ea328c6b0ace7aef290a8544c5fdd56ece0d8bd596c4 = $this->env->getExtension("native_profiler");
        $__internal_1d56b74a24c34bf97cf7ea328c6b0ace7aef290a8544c5fdd56ece0d8bd596c4->enter($__internal_1d56b74a24c34bf97cf7ea328c6b0ace7aef290a8544c5fdd56ece0d8bd596c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Active Orders";
        
        $__internal_1d56b74a24c34bf97cf7ea328c6b0ace7aef290a8544c5fdd56ece0d8bd596c4->leave($__internal_1d56b74a24c34bf97cf7ea328c6b0ace7aef290a8544c5fdd56ece0d8bd596c4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee1248cf6d72d6251d1741c493942e282080e77d42a908b06d386d4bffa9bb95 = $this->env->getExtension("native_profiler");
        $__internal_ee1248cf6d72d6251d1741c493942e282080e77d42a908b06d386d4bffa9bb95->enter($__internal_ee1248cf6d72d6251d1741c493942e282080e77d42a908b06d386d4bffa9bb95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"row\">
    <div class=\"col-sm-2\">
            <div class=\"navbar navbar-inverse navbar-left meal-cat-nav\" style=\"border-color:#fff\">
                <ul class=\"nav meal-cat-nav\">
                    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activeOrderMenus"]) ? $context["activeOrderMenus"] : $this->getContext($context, "activeOrderMenus")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 11
            echo "                        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activeOrderIndex", array("order_status" => $context["key"])), "html", null, true);
            echo "\" class=\"white-text ";
            if (((isset($context["orderStatus"]) ? $context["orderStatus"] : $this->getContext($context, "orderStatus")) == $context["key"])) {
                echo "active";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "                    
                        
                    
                </ul>
            </div>
        
    </div>
    <div class=\"col-sm-10\">
        <div class=\"row\" style=\"margin-right:15px;\">
        ";
        // line 22
        $context["successMessages"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method");
        // line 23
        echo "        ";
        if ((isset($context["successMessages"]) ? $context["successMessages"] : $this->getContext($context, "successMessages"))) {
            // line 24
            echo "            <div class=\"alert-success success\">
            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["successMessages"]) ? $context["successMessages"] : $this->getContext($context, "successMessages")));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 26
                echo "                ";
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo " 
            </div>
        ";
        }
        // line 30
        echo "        <table class=\"table\">
            <tr>
                <th>No</th>
                <th>Order ID</th>
                <th>Customer/Table</th>
                <th>The Orders</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            ";
        // line 39
        $context["idx"] = 1;
        // line 40
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["activeOrders"]) ? $context["activeOrders"] : $this->getContext($context, "activeOrders")), "custOrders", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
            // line 41
            echo "            <tr>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : $this->getContext($context, "idx")), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "getOrderId", array(), "method"), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 45
            if ($this->getAttribute($context["o"], "getCustomer", array(), "method")) {
                // line 46
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["o"], "getCustomer", array(), "method"), "getCustomerName", array(), "method"), "html", null, true);
                echo "
                    ";
            } else {
                // line 48
                echo "                        -
                    ";
            }
            // line 50
            echo "                </td>
                <td>
                    ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["activeOrders"]) ? $context["activeOrders"] : $this->getContext($context, "activeOrders")), "orderDetails", array()), $this->getAttribute($context["o"], "getOrderId", array()), array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["od"]) {
                // line 53
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
            // line 55
            echo "                </td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "getOrderStatusDesc", array(), "method"), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 58
            if (($this->getAttribute($context["o"], "getOrderStatus", array(), "method") == 0)) {
                // line 59
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cooksTheFood", array("customer_order_id" => $this->getAttribute($context["o"], "getOrderId", array(), "method"))), "html", null, true);
                echo "\" class=\"btn btn-success\" style=\"margin-bottom:25px;\" role=\"button\">Cooks the food</a>
                    ";
            } elseif (($this->getAttribute(            // line 60
$context["o"], "getOrderStatus", array(), "method") == 2)) {
                // line 61
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("servesTheFood", array("customer_order_id" => $this->getAttribute($context["o"], "getOrderId", array(), "method"))), "html", null, true);
                echo "\" class=\"btn btn-success\" style=\"margin-bottom:25px;\" role=\"button\">Serves the food</a>
                    ";
            } elseif (($this->getAttribute(            // line 62
$context["o"], "getOrderStatus", array(), "method") == 4)) {
                // line 63
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paymentIndex", array("customer_order_id" => $this->getAttribute($context["o"], "getOrderId", array(), "method"))), "html", null, true);
                echo "\" class=\"btn btn-success\" style=\"margin-bottom:25px;\" role=\"button\">Payment</a>
                    ";
            }
            // line 65
            echo "                    
                </td>
            </tr>
            ";
            // line 68
            $context["idx"] = ((isset($context["idx"]) ? $context["idx"] : $this->getContext($context, "idx")) + 1);
            // line 69
            echo "            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 70
            echo "            <em>Unbelievable.  No entries here so far</em>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['o'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        </table>
        </div>
    </div>
</div>

    
";
        
        $__internal_ee1248cf6d72d6251d1741c493942e282080e77d42a908b06d386d4bffa9bb95->leave($__internal_ee1248cf6d72d6251d1741c493942e282080e77d42a908b06d386d4bffa9bb95_prof);

    }

    public function getTemplateName()
    {
        return "orders/active_order/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 72,  219 => 70,  214 => 69,  212 => 68,  207 => 65,  201 => 63,  199 => 62,  194 => 61,  192 => 60,  187 => 59,  185 => 58,  180 => 56,  177 => 55,  166 => 53,  162 => 52,  158 => 50,  154 => 48,  148 => 46,  146 => 45,  141 => 43,  137 => 42,  134 => 41,  128 => 40,  126 => 39,  115 => 30,  110 => 27,  101 => 26,  97 => 25,  94 => 24,  91 => 23,  89 => 22,  78 => 13,  63 => 11,  59 => 10,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
    }
}
/* */
/* {% extends 'base.html.twig' %}*/
/* {% block title %}Active Orders{% endblock %}*/
/*      */
/* {% block body %}*/
/* <div class="row">*/
/*     <div class="col-sm-2">*/
/*             <div class="navbar navbar-inverse navbar-left meal-cat-nav" style="border-color:#fff">*/
/*                 <ul class="nav meal-cat-nav">*/
/*                     {% for key,value in activeOrderMenus %}*/
/*                         <li><a href="{{path('activeOrderIndex', {'order_status': key })}}" class="white-text {% if orderStatus == key %}active{%endif%}">{{value}}</a></li>*/
/*                     {% endfor %}*/
/*                     */
/*                         */
/*                     */
/*                 </ul>*/
/*             </div>*/
/*         */
/*     </div>*/
/*     <div class="col-sm-10">*/
/*         <div class="row" style="margin-right:15px;">*/
/*         {% set successMessages = app.session.flashbag.get('success') %}*/
/*         {% if successMessages %}*/
/*             <div class="alert-success success">*/
/*             {% for flashMessage in successMessages %}*/
/*                 {{ flashMessage }}*/
/*             {% endfor %} */
/*             </div>*/
/*         {% endif %}*/
/*         <table class="table">*/
/*             <tr>*/
/*                 <th>No</th>*/
/*                 <th>Order ID</th>*/
/*                 <th>Customer/Table</th>*/
/*                 <th>The Orders</th>*/
/*                 <th>Status</th>*/
/*                 <th>Action</th>*/
/*             </tr>*/
/*             {% set idx = 1 %}*/
/*             {% for o in activeOrders.custOrders %}*/
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
/*                     {% for od in activeOrders.orderDetails[o.getOrderId] %}*/
/*                         {{od.getMeal().getMealName()}}({{od.getQty()}});*/
/*                     {% endfor %}*/
/*                 </td>*/
/*                 <td>{{ o.getOrderStatusDesc() }}</td>*/
/*                 <td>*/
/*                     {% if o.getOrderStatus() == 0 %}*/
/*                         <a href="{{path('cooksTheFood', {'customer_order_id':o.getOrderId()} )}}" class="btn btn-success" style="margin-bottom:25px;" role="button">Cooks the food</a>*/
/*                     {% elseif o.getOrderStatus() == 2  %}*/
/*                         <a href="{{path('servesTheFood', {'customer_order_id':o.getOrderId()} )}}" class="btn btn-success" style="margin-bottom:25px;" role="button">Serves the food</a>*/
/*                     {% elseif o.getOrderStatus() == 4  %}*/
/*                         <a href="{{path('paymentIndex', {'customer_order_id':o.getOrderId()} )}}" class="btn btn-success" style="margin-bottom:25px;" role="button">Payment</a>*/
/*                     {% endif %}*/
/*                     */
/*                 </td>*/
/*             </tr>*/
/*             {% set idx = idx +1 %}*/
/*             {% else %}*/
/*             <em>Unbelievable.  No entries here so far</em>*/
/*             {% endfor %}*/
/*         </table>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/*     */
/* {% endblock %}*/
