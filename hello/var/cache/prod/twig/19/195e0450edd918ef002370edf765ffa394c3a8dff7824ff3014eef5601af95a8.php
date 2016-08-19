<?php

/* administration/employee/index.html.twig */
class __TwigTemplate_cf7c0c5bd81da7ebdcd55b43c24e077ad10b31dab985fa712631549d4ffec0f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "administration/employee/index.html.twig", 2);
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
        $__internal_acbb45b21ae8f54eceb1ddb4f752c3dd81d26438a90692f92409c7833bc7867b = $this->env->getExtension("native_profiler");
        $__internal_acbb45b21ae8f54eceb1ddb4f752c3dd81d26438a90692f92409c7833bc7867b->enter($__internal_acbb45b21ae8f54eceb1ddb4f752c3dd81d26438a90692f92409c7833bc7867b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "administration/employee/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acbb45b21ae8f54eceb1ddb4f752c3dd81d26438a90692f92409c7833bc7867b->leave($__internal_acbb45b21ae8f54eceb1ddb4f752c3dd81d26438a90692f92409c7833bc7867b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b07c36ff97604ea45e933b60b9f814977e4d923644742e4bdbf3ff69711a276 = $this->env->getExtension("native_profiler");
        $__internal_4b07c36ff97604ea45e933b60b9f814977e4d923644742e4bdbf3ff69711a276->enter($__internal_4b07c36ff97604ea45e933b60b9f814977e4d923644742e4bdbf3ff69711a276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Employee Management";
        
        $__internal_4b07c36ff97604ea45e933b60b9f814977e4d923644742e4bdbf3ff69711a276->leave($__internal_4b07c36ff97604ea45e933b60b9f814977e4d923644742e4bdbf3ff69711a276_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_39e6c749d64a30842711367fba0046a7d7b562c94c5bad2df363739d5086d62b = $this->env->getExtension("native_profiler");
        $__internal_39e6c749d64a30842711367fba0046a7d7b562c94c5bad2df363739d5086d62b->enter($__internal_39e6c749d64a30842711367fba0046a7d7b562c94c5bad2df363739d5086d62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h2 class=\"page-header\" style=\"margin-top:10px;\">Employee Management</h2>
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
    
    <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("addEmployee");
        echo "\"><button type=\"button\" class=\"btn btn-primary pull-right\">Add</button></a>
    
    </div>
    <!-- Table -->
    <table class=\"table\">
        <tr>
            <th>No</th>
            <th>Employee ID</th>
            <th>User ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th class=\"align-center\">Picture</th>
            <th>Action</th>
        </tr>
        ";
        // line 43
        $context["idx"] = 1;
        // line 44
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employees"]) ? $context["employees"] : $this->getContext($context, "employees")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            // line 45
            echo "        <tr>
            <td>";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : $this->getContext($context, "idx")), "html", null, true);
            echo "</td>
            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "getEmployeeId", array(), "method"), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 49
            if ($this->getAttribute($context["employee"], "getUser", array(), "method")) {
                // line 50
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["employee"], "getUser", array(), "method"), "getUsername", array(), "method"), "html", null, true);
                echo "
                ";
            } else {
                // line 52
                echo "                    -
                ";
            }
            // line 54
            echo "            </td>
            <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "getEmployeeFullname", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "getEmployeeAddress", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "getPhoneNumber", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "getEmail", array(), "method"), "html", null, true);
            echo "</td>
            <td>
            
            <img class=\"img-thumbnail center-block\" width=\"100em\" onerror=\"getDefaultImage(this)\" src=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/images/employee/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "getPicture", array(), "method"), "html", null, true);
            echo "\" />
            
            </td>
            <td>
                ";
            // line 66
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editEmployee", array("id" => $this->getAttribute($context["employee"], "employeeId", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\" style=\"margin-right:0.3em\"></span></a>
                <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deleteEmployee", array("id" => $this->getAttribute($context["employee"], "employeeId", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a>
                ";
            // line 69
            echo "            </td>
        </tr>
        ";
            // line 71
            $context["idx"] = ((isset($context["idx"]) ? $context["idx"] : $this->getContext($context, "idx")) + 1);
            // line 72
            echo "        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 73
            echo "        <em>Unbelievable.  No entries here so far</em>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "    </table>
</div>
    
";
        
        $__internal_39e6c749d64a30842711367fba0046a7d7b562c94c5bad2df363739d5086d62b->leave($__internal_39e6c749d64a30842711367fba0046a7d7b562c94c5bad2df363739d5086d62b_prof);

    }

    public function getTemplateName()
    {
        return "administration/employee/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 75,  215 => 73,  210 => 72,  208 => 71,  204 => 69,  200 => 67,  195 => 66,  187 => 61,  181 => 58,  177 => 57,  173 => 56,  169 => 55,  166 => 54,  162 => 52,  156 => 50,  154 => 49,  149 => 47,  145 => 46,  142 => 45,  136 => 44,  134 => 43,  115 => 27,  111 => 25,  106 => 22,  97 => 21,  93 => 20,  90 => 19,  87 => 18,  84 => 17,  79 => 14,  70 => 13,  66 => 12,  63 => 11,  60 => 10,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
    }
}
/* */
/* {% extends 'base.html.twig' %}*/
/* {% block title %}Employee Management{% endblock %}*/
/*      */
/* {% block body %}*/
/* <h2 class="page-header" style="margin-top:10px;">Employee Management</h2>*/
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
/*     */
/*     <a href="{{ path('addEmployee') }}"><button type="button" class="btn btn-primary pull-right">Add</button></a>*/
/*     */
/*     </div>*/
/*     <!-- Table -->*/
/*     <table class="table">*/
/*         <tr>*/
/*             <th>No</th>*/
/*             <th>Employee ID</th>*/
/*             <th>User ID</th>*/
/*             <th>Name</th>*/
/*             <th>Address</th>*/
/*             <th>Phone Number</th>*/
/*             <th>Email</th>*/
/*             <th class="align-center">Picture</th>*/
/*             <th>Action</th>*/
/*         </tr>*/
/*         {% set idx = 1 %}*/
/*         {% for employee in employees %}*/
/*         <tr>*/
/*             <td>{{idx}}</td>*/
/*             <td>{{ employee.getEmployeeId() }}</td>*/
/*             <td>*/
/*                 {% if employee.getUser() %}*/
/*                     {{ employee.getUser().getUsername() }}*/
/*                 {% else %}*/
/*                     -*/
/*                 {% endif %}*/
/*             </td>*/
/*             <td>{{ employee.getEmployeeFullname() }}</td>*/
/*             <td>{{ employee.getEmployeeAddress() }}</td>*/
/*             <td>{{ employee.getPhoneNumber() }}</td>*/
/*             <td>{{ employee.getEmail() }}</td>*/
/*             <td>*/
/*             */
/*             <img class="img-thumbnail center-block" width="100em" onerror="getDefaultImage(this)" src="{{asset('bundles/images/employee/')}}{{employee.getPicture()}}" />*/
/*             */
/*             </td>*/
/*             <td>*/
/*                 {# if session.logged_in #}*/
/*                 <a href="{{ path('editEmployee', {'id': employee.employeeId}) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="margin-right:0.3em"></span></a>*/
/*                 <a href="{{ path('deleteEmployee', {'id': employee.employeeId}) }}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>*/
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
