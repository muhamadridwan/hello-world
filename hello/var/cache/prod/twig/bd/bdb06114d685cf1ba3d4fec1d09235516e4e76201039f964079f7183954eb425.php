<?php

/* administration/admin/index.html.twig */
class __TwigTemplate_c4f18e041908babc9c36a738e9c3ac73be5a69206bbcaa103aafe7c4a2a9b825 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "administration/admin/index.html.twig", 2);
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
        $__internal_0455ababba4ba8d6014c8c571e08c4d34613b3fcc490c8a5efd9ece44cca100b = $this->env->getExtension("native_profiler");
        $__internal_0455ababba4ba8d6014c8c571e08c4d34613b3fcc490c8a5efd9ece44cca100b->enter($__internal_0455ababba4ba8d6014c8c571e08c4d34613b3fcc490c8a5efd9ece44cca100b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "administration/admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0455ababba4ba8d6014c8c571e08c4d34613b3fcc490c8a5efd9ece44cca100b->leave($__internal_0455ababba4ba8d6014c8c571e08c4d34613b3fcc490c8a5efd9ece44cca100b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc8583d731640fc188344647ca044c11c722ee5ef5784a8a12d908864a77fd54 = $this->env->getExtension("native_profiler");
        $__internal_dc8583d731640fc188344647ca044c11c722ee5ef5784a8a12d908864a77fd54->enter($__internal_dc8583d731640fc188344647ca044c11c722ee5ef5784a8a12d908864a77fd54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin Management";
        
        $__internal_dc8583d731640fc188344647ca044c11c722ee5ef5784a8a12d908864a77fd54->leave($__internal_dc8583d731640fc188344647ca044c11c722ee5ef5784a8a12d908864a77fd54_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_51246297bd73b0cabc58eec9d8c704881f56bf21de100fddbe42f75afa3b223f = $this->env->getExtension("native_profiler");
        $__internal_51246297bd73b0cabc58eec9d8c704881f56bf21de100fddbe42f75afa3b223f->enter($__internal_51246297bd73b0cabc58eec9d8c704881f56bf21de100fddbe42f75afa3b223f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h2 class=\"page-header\" style=\"margin-top:10px;\">Admin Management</h2>
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
        echo $this->env->getExtension('routing')->getPath("addAdmin");
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "employeeId", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 48
            if ($this->getAttribute($context["employee"], "getUser", array(), "method")) {
                // line 49
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["employee"], "getUser", array(), "method"), "getUsername", array(), "method"), "html", null, true);
                echo "
                ";
            } else {
                // line 51
                echo "                    -
                ";
            }
            // line 53
            echo "
            </td>
            <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "employeeFullname", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "employeeAddress", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "phoneNumber", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "email", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deleteAdmin", array("id" => $this->getAttribute($context["employee"], "employeeId", array()))), "html", null, true);
            echo "\" class=\"center-block\"><span class=\"center-block glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a>
                ";
            // line 68
            echo "            </td>
        </tr>
        ";
            // line 70
            $context["idx"] = ((isset($context["idx"]) ? $context["idx"] : $this->getContext($context, "idx")) + 1);
            // line 71
            echo "        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 72
            echo "        <em>Unbelievable.  No entries here so far</em>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "    </table>
</div>
    
";
        
        $__internal_51246297bd73b0cabc58eec9d8c704881f56bf21de100fddbe42f75afa3b223f->leave($__internal_51246297bd73b0cabc58eec9d8c704881f56bf21de100fddbe42f75afa3b223f_prof);

    }

    public function getTemplateName()
    {
        return "administration/admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 74,  211 => 72,  206 => 71,  204 => 70,  200 => 68,  195 => 66,  187 => 61,  181 => 58,  177 => 57,  173 => 56,  169 => 55,  165 => 53,  161 => 51,  155 => 49,  153 => 48,  149 => 47,  145 => 46,  142 => 45,  136 => 44,  134 => 43,  115 => 27,  111 => 25,  106 => 22,  97 => 21,  93 => 20,  90 => 19,  87 => 18,  84 => 17,  79 => 14,  70 => 13,  66 => 12,  63 => 11,  60 => 10,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
    }
}
/* */
/* {% extends 'base.html.twig' %}*/
/* {% block title %}Admin Management{% endblock %}*/
/*      */
/* {% block body %}*/
/* <h2 class="page-header" style="margin-top:10px;">Admin Management</h2>*/
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
/*     <a href="{{ path('addAdmin') }}"><button type="button" class="btn btn-primary pull-right">Add</button></a>*/
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
/*             <td>{{ employee.employeeId }}</td>*/
/*             <td>{% if employee.getUser() %}*/
/*                     {{ employee.getUser().getUsername() }}*/
/*                 {% else %}*/
/*                     -*/
/*                 {% endif %}*/
/* */
/*             </td>*/
/*             <td>{{ employee.employeeFullname }}</td>*/
/*             <td>{{ employee.employeeAddress }}</td>*/
/*             <td>{{ employee.phoneNumber }}</td>*/
/*             <td>{{ employee.email }}</td>*/
/*             <td>*/
/*             */
/*             <img class="img-thumbnail center-block" width="100em" onerror="getDefaultImage(this)" src="{{asset('bundles/images/employee/')}}{{employee.getPicture()}}" />*/
/*             */
/*             </td>*/
/*             <td>*/
/*                 {# if session.logged_in #}*/
/*                 <a href="{{ path('deleteAdmin', {'id': employee.employeeId}) }}" class="center-block"><span class="center-block glyphicon glyphicon-remove" aria-hidden="true"></span></a>*/
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
