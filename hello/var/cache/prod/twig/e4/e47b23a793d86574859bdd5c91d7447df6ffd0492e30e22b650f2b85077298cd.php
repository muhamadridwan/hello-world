<?php

/* user/index.html.twig */
class __TwigTemplate_89f94db3f4dca5e58a3d92580c53aef5cb6b635e2c4b56b80102bd0e882b5cde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 2);
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
        $__internal_91708253009aa50138ebc5ab16435763c765a9824d610d87354733569f6c002c = $this->env->getExtension("native_profiler");
        $__internal_91708253009aa50138ebc5ab16435763c765a9824d610d87354733569f6c002c->enter($__internal_91708253009aa50138ebc5ab16435763c765a9824d610d87354733569f6c002c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91708253009aa50138ebc5ab16435763c765a9824d610d87354733569f6c002c->leave($__internal_91708253009aa50138ebc5ab16435763c765a9824d610d87354733569f6c002c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f1c0ace3eede2bd29a3fb6b15f27616080f7892d533d64193542020d475dbcf = $this->env->getExtension("native_profiler");
        $__internal_4f1c0ace3eede2bd29a3fb6b15f27616080f7892d533d64193542020d475dbcf->enter($__internal_4f1c0ace3eede2bd29a3fb6b15f27616080f7892d533d64193542020d475dbcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "User";
        
        $__internal_4f1c0ace3eede2bd29a3fb6b15f27616080f7892d533d64193542020d475dbcf->leave($__internal_4f1c0ace3eede2bd29a3fb6b15f27616080f7892d533d64193542020d475dbcf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1138644083e964dbc8c2b38eae89588dc99f43106df2b6b8c9f2bf4aa970ef3 = $this->env->getExtension("native_profiler");
        $__internal_a1138644083e964dbc8c2b38eae89588dc99f43106df2b6b8c9f2bf4aa970ef3->enter($__internal_a1138644083e964dbc8c2b38eae89588dc99f43106df2b6b8c9f2bf4aa970ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <th>Username</th>
            <th>User Group</th>
            <th>Email</th>
            ";
        // line 23
        echo "            <th>Action</th>
        </tr>
        ";
        // line 25
        $context["idx"] = 1;
        // line 26
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 27
            echo "        <tr>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : $this->getContext($context, "idx")), "html", null, true);
            echo "</td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "getUserGroup", array(), "method"), "getUserGroupID", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
            <td>
            
            ";
            // line 36
            echo "            </td>
            <td>
                ";
            // line 39
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editUser", array("id" => $this->getAttribute($context["user"], "username", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\" style=\"margin-right:0.3em\"></span></a>
                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deleteUser", array("id" => $this->getAttribute($context["user"], "username", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a>
                ";
            // line 42
            echo "            </td>
        </tr>
        ";
            // line 44
            $context["idx"] = ((isset($context["idx"]) ? $context["idx"] : $this->getContext($context, "idx")) + 1);
            // line 45
            echo "        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 46
            echo "        <em>Unbelievable.  No entries here so far</em>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    </table>
</div>
    
";
        
        $__internal_a1138644083e964dbc8c2b38eae89588dc99f43106df2b6b8c9f2bf4aa970ef3->leave($__internal_a1138644083e964dbc8c2b38eae89588dc99f43106df2b6b8c9f2bf4aa970ef3_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 48,  131 => 46,  126 => 45,  124 => 44,  120 => 42,  116 => 40,  111 => 39,  107 => 36,  101 => 31,  97 => 30,  93 => 29,  89 => 28,  86 => 27,  80 => 26,  78 => 25,  74 => 23,  64 => 13,  59 => 11,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
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
/*             <td>*/
/*             */
/*             {#<img class="img-thumbnail center-block" width="100em" src="{{asset('bundles/images/user/')}}{{user.getPicture()}}" />*/
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
