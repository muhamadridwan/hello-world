<?php

/* employee/index.html.twig */
class __TwigTemplate_ef759319a7c08f69932b844d38844024c2f33c7016f40c0ea12b5efb4b61f245 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "employee/index.html.twig", 2);
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
        $__internal_7aa0bde989170b89fbef3244a56d44428debb8be21dc862e387d38f147b8a61a = $this->env->getExtension("native_profiler");
        $__internal_7aa0bde989170b89fbef3244a56d44428debb8be21dc862e387d38f147b8a61a->enter($__internal_7aa0bde989170b89fbef3244a56d44428debb8be21dc862e387d38f147b8a61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employee/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7aa0bde989170b89fbef3244a56d44428debb8be21dc862e387d38f147b8a61a->leave($__internal_7aa0bde989170b89fbef3244a56d44428debb8be21dc862e387d38f147b8a61a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_19174a6ee0f9a8fa6c8141f90c43aee9883400c7916b5fbf30ebffe9652485b7 = $this->env->getExtension("native_profiler");
        $__internal_19174a6ee0f9a8fa6c8141f90c43aee9883400c7916b5fbf30ebffe9652485b7->enter($__internal_19174a6ee0f9a8fa6c8141f90c43aee9883400c7916b5fbf30ebffe9652485b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "User";
        
        $__internal_19174a6ee0f9a8fa6c8141f90c43aee9883400c7916b5fbf30ebffe9652485b7->leave($__internal_19174a6ee0f9a8fa6c8141f90c43aee9883400c7916b5fbf30ebffe9652485b7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_919645750d7204e925e204a5916822a0ffc69a0ceeaa1ca30f6f0fe09ccc6617 = $this->env->getExtension("native_profiler");
        $__internal_919645750d7204e925e204a5916822a0ffc69a0ceeaa1ca30f6f0fe09ccc6617->enter($__internal_919645750d7204e925e204a5916822a0ffc69a0ceeaa1ca30f6f0fe09ccc6617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<!--<ul class=entries>-->
<div class=\"panel panel-default\">
    <div class=\"panel-heading\" style=\"height:3em;padding:0.2em;padding-right:1em;\">
    ";
        // line 11
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("addUser");
        echo "\"><button type=\"button\" class=\"btn btn-primary pull-right\">Add</button></a>
    ";
        // line 13
        echo "    </div>
    <!-- Table -->
    <table class=\"table\">
        <tr>
            <th>No</th>
            <th>name</th>
            <th>Fullname</th>
            <th class=\"align-center\">Picture</th>
            <th>Action</th>
        </tr>
        ";
        // line 23
        $context["idx"] = 1;
        // line 24
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 25
            echo "        <tr>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : $this->getContext($context, "idx")), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "fullname", array()), "html", null, true);
            echo "</td>
            <td>
            ";
            // line 33
            echo "            </td>
            <td>
                ";
            // line 36
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editUser", array("id" => $this->getAttribute($context["user"], "username", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\" style=\"margin-right:0.3em\"></span></a>
                <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deleteUser", array("id" => $this->getAttribute($context["user"], "username", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a>
                ";
            // line 39
            echo "            </td>
        </tr>
        ";
            // line 41
            $context["idx"] = ((isset($context["idx"]) ? $context["idx"] : $this->getContext($context, "idx")) + 1);
            // line 42
            echo "        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 43
            echo "        <em>Unbelievable.  No entries here so far</em>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    </table>
</div>
    
";
        
        $__internal_919645750d7204e925e204a5916822a0ffc69a0ceeaa1ca30f6f0fe09ccc6617->leave($__internal_919645750d7204e925e204a5916822a0ffc69a0ceeaa1ca30f6f0fe09ccc6617_prof);

    }

    public function getTemplateName()
    {
        return "employee/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 45,  124 => 43,  119 => 42,  117 => 41,  113 => 39,  109 => 37,  104 => 36,  100 => 33,  95 => 28,  91 => 27,  87 => 26,  84 => 25,  78 => 24,  76 => 23,  64 => 13,  59 => 11,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
    }
}
/* */
/* {% extends 'base.html.twig' %}*/
/* {% block title %}User{% endblock %}*/
/*      */
/* {% block body %}*/
/* */
/* <!--<ul class=entries>-->*/
/* <div class="panel panel-default">*/
/*     <div class="panel-heading" style="height:3em;padding:0.2em;padding-right:1em;">*/
/*     {# if session.logged_in #}*/
/*     <a href="{{ path('addUser') }}"><button type="button" class="btn btn-primary pull-right">Add</button></a>*/
/*     {# endif #}*/
/*     </div>*/
/*     <!-- Table -->*/
/*     <table class="table">*/
/*         <tr>*/
/*             <th>No</th>*/
/*             <th>name</th>*/
/*             <th>Fullname</th>*/
/*             <th class="align-center">Picture</th>*/
/*             <th>Action</th>*/
/*         </tr>*/
/*         {% set idx = 1 %}*/
/*         {% for user in users %}*/
/*         <tr>*/
/*             <td>{{idx}}</td>*/
/*             <td>{{ user.username }}</td>*/
/*             <td>{{ user.fullname }}</td>*/
/*             <td>*/
/*             {#*/
/*             <img class="img-thumbnail center-block" width="100em" src="{{url_for('static', filename='images/user/')}}{{user.picture}}" />*/
/*             #}*/
/*             </td>*/
/*             <td>*/
/*                 {# if session.logged_in #}*/
/*                 <a href="{{ path('editUser', {'id': user.username}) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="margin-right:0.3em"></span></a>*/
/*                 <a href="{{ path('deleteUser', {'id': user.username}) }}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>*/
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
