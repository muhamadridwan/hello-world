<?php

/* administration/user/index.html.twig */
class __TwigTemplate_eb639b4aaf49b02c84d00496f8de222757f6b6345430ef4a2af3dfda8ef4ef76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "administration/user/index.html.twig", 2);
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
        $__internal_078e85548dc8c408a3453e87b85b868494483347fea302181456e8276421b6e0 = $this->env->getExtension("native_profiler");
        $__internal_078e85548dc8c408a3453e87b85b868494483347fea302181456e8276421b6e0->enter($__internal_078e85548dc8c408a3453e87b85b868494483347fea302181456e8276421b6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "administration/user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_078e85548dc8c408a3453e87b85b868494483347fea302181456e8276421b6e0->leave($__internal_078e85548dc8c408a3453e87b85b868494483347fea302181456e8276421b6e0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_933b53db7ab2744d6e38a6d5d72b8c5a07556e070949357659f0a56bb381d2dc = $this->env->getExtension("native_profiler");
        $__internal_933b53db7ab2744d6e38a6d5d72b8c5a07556e070949357659f0a56bb381d2dc->enter($__internal_933b53db7ab2744d6e38a6d5d72b8c5a07556e070949357659f0a56bb381d2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "User Management";
        
        $__internal_933b53db7ab2744d6e38a6d5d72b8c5a07556e070949357659f0a56bb381d2dc->leave($__internal_933b53db7ab2744d6e38a6d5d72b8c5a07556e070949357659f0a56bb381d2dc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_947b00093fa805402c05570762c6e375076072be794f98b0a1371773ea8aaed1 = $this->env->getExtension("native_profiler");
        $__internal_947b00093fa805402c05570762c6e375076072be794f98b0a1371773ea8aaed1->enter($__internal_947b00093fa805402c05570762c6e375076072be794f98b0a1371773ea8aaed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h2 class=\"page-header\" style=\"margin-top:10px;\">User Management</h2>
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
    ";
        // line 27
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("addUser");
        echo "\"><button type=\"button\" class=\"btn btn-primary pull-right\">Add</button></a>
    ";
        // line 29
        echo "    </div>
    <!-- Table -->
    <table class=\"table\">
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>User Group</th>
            <th>Email</th>
            ";
        // line 39
        echo "            <th>Action</th>
        </tr>
        ";
        // line 41
        $context["idx"] = 1;
        // line 42
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 43
            echo "        <tr>
            <td>";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : $this->getContext($context, "idx")), "html", null, true);
            echo "</td>
            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "getUserGroup", array(), "method"), "getUserGroupID", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
            ";
            // line 53
            echo "            <td>
                ";
            // line 55
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editUser", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\" style=\"margin-right:0.3em\"></span></a>
                <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deleteUser", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a>
                ";
            // line 58
            echo "            </td>
        </tr>
        ";
            // line 60
            $context["idx"] = ((isset($context["idx"]) ? $context["idx"] : $this->getContext($context, "idx")) + 1);
            // line 61
            echo "        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 62
            echo "        <em>Unbelievable.  No entries here so far</em>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "    </table>
</div>
    
";
        
        $__internal_947b00093fa805402c05570762c6e375076072be794f98b0a1371773ea8aaed1->leave($__internal_947b00093fa805402c05570762c6e375076072be794f98b0a1371773ea8aaed1_prof);

    }

    public function getTemplateName()
    {
        return "administration/user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 64,  183 => 62,  178 => 61,  176 => 60,  172 => 58,  168 => 56,  163 => 55,  160 => 53,  156 => 47,  152 => 46,  148 => 45,  144 => 44,  141 => 43,  135 => 42,  133 => 41,  129 => 39,  119 => 29,  114 => 27,  111 => 25,  106 => 22,  97 => 21,  93 => 20,  90 => 19,  87 => 18,  84 => 17,  79 => 14,  70 => 13,  66 => 12,  63 => 11,  60 => 10,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
    }
}
/* */
/* {% extends 'base.html.twig' %}*/
/* {% block title %}User Management{% endblock %}*/
/*      */
/* {% block body %}*/
/* <h2 class="page-header" style="margin-top:10px;">User Management</h2>*/
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
/*     {# if session.logged_in #}*/
/*     <a href="{{ path('addUser') }}"><button type="button" class="btn btn-primary pull-right">Add</button></a>*/
/*     {# endif #}*/
/*     </div>*/
/*     <!-- Table -->*/
/*     <table class="table">*/
/*         <tr>*/
/*             <th>No</th>*/
/*             <th>Username</th>*/
/*             <th>User Group</th>*/
/*             <th>Email</th>*/
/*             {#<th class="align-center">Picture</th>*/
/*             #}*/
/*             <th>Action</th>*/
/*         </tr>*/
/*         {% set idx = 1 %}*/
/*         {% for user in users %}*/
/*         <tr>*/
/*             <td>{{idx}}</td>*/
/*             <td>{{ user.username }}</td>*/
/*             <td>{{ user.getUserGroup().getUserGroupID() }}</td>*/
/*             <td>{{ user.email }}</td>*/
/*             {#<td>*/
/*             */
/*             <img class="img-thumbnail center-block" width="100em" onerror="getDefaultImage(this)" src="{{asset('bundles/images/user/')}}{{user.getPicture()}}" />*/
/*             */
/*             </td>#}*/
/*             <td>*/
/*                 {# if session.logged_in #}*/
/*                 <a href="{{ path('editUser', {'id': user.id}) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="margin-right:0.3em"></span></a>*/
/*                 <a href="{{ path('deleteUser', {'id': user.id}) }}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>*/
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
