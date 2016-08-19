<?php

/* administration/usergroup/index.html.twig */
class __TwigTemplate_3d670b791ca15f698b936bacea3952b0cc2982aa557f21e8832d80657477d19f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "administration/usergroup/index.html.twig", 2);
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
        $__internal_00fee6286e63423041d3e9b5168f66c86ac21dc1cf3fc7207b6154f022c5a771 = $this->env->getExtension("native_profiler");
        $__internal_00fee6286e63423041d3e9b5168f66c86ac21dc1cf3fc7207b6154f022c5a771->enter($__internal_00fee6286e63423041d3e9b5168f66c86ac21dc1cf3fc7207b6154f022c5a771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "administration/usergroup/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00fee6286e63423041d3e9b5168f66c86ac21dc1cf3fc7207b6154f022c5a771->leave($__internal_00fee6286e63423041d3e9b5168f66c86ac21dc1cf3fc7207b6154f022c5a771_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f27ed75ee7bc0e68fa5185145c82800ddf8b6e92c3e7ca0795c00cb40f4bbb3 = $this->env->getExtension("native_profiler");
        $__internal_4f27ed75ee7bc0e68fa5185145c82800ddf8b6e92c3e7ca0795c00cb40f4bbb3->enter($__internal_4f27ed75ee7bc0e68fa5185145c82800ddf8b6e92c3e7ca0795c00cb40f4bbb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "User Group Management";
        
        $__internal_4f27ed75ee7bc0e68fa5185145c82800ddf8b6e92c3e7ca0795c00cb40f4bbb3->leave($__internal_4f27ed75ee7bc0e68fa5185145c82800ddf8b6e92c3e7ca0795c00cb40f4bbb3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_23a28877d9bc252a0d50b847656cbfcb2188b41f45e0655c06ff5eaf0dacb61d = $this->env->getExtension("native_profiler");
        $__internal_23a28877d9bc252a0d50b847656cbfcb2188b41f45e0655c06ff5eaf0dacb61d->enter($__internal_23a28877d9bc252a0d50b847656cbfcb2188b41f45e0655c06ff5eaf0dacb61d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h2 class=\"page-header\" style=\"margin-top:10px;\">User Group Management</h2>
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
        echo $this->env->getExtension('routing')->getPath("addUsergroup");
        echo "\"><button type=\"button\" class=\"btn btn-primary pull-right\">Add</button></a>
    ";
        // line 29
        echo "    </div>
    <!-- Table -->
    <table class=\"table\">
        <tr>
            <th>No</th>
            <th>User Group ID</th>
            <th>User Group Name</th>
            <th>Description</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        ";
        // line 40
        $context["idx"] = 1;
        // line 41
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usergroups"]) ? $context["usergroups"] : $this->getContext($context, "usergroups")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["usergroup"]) {
            // line 42
            echo "        <tr>
            <td>";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : $this->getContext($context, "idx")), "html", null, true);
            echo "</td>
            <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["usergroup"], "getUserGroupId", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["usergroup"], "getUserGroupName", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["usergroup"], "userGroupDesc", array(), "method"), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 48
            if ($this->getAttribute($context["usergroup"], "getIsActive", array(), "method")) {
                // line 49
                echo "                Active
                ";
            } else {
                // line 51
                echo "                Non-Active
                ";
            }
            // line 52
            echo " </td>
            <td>
                ";
            // line 55
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editUsergroup", array("id" => $this->getAttribute($context["usergroup"], "userGroupId", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\" style=\"margin-right:0.3em\"></span></a>
                <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deleteUsergroup", array("id" => $this->getAttribute($context["usergroup"], "userGroupId", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usergroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "    </table>
</div>
    
";
        
        $__internal_23a28877d9bc252a0d50b847656cbfcb2188b41f45e0655c06ff5eaf0dacb61d->leave($__internal_23a28877d9bc252a0d50b847656cbfcb2188b41f45e0655c06ff5eaf0dacb61d_prof);

    }

    public function getTemplateName()
    {
        return "administration/usergroup/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 64,  194 => 62,  189 => 61,  187 => 60,  183 => 58,  179 => 56,  174 => 55,  170 => 52,  166 => 51,  162 => 49,  160 => 48,  155 => 46,  151 => 45,  147 => 44,  143 => 43,  140 => 42,  134 => 41,  132 => 40,  119 => 29,  114 => 27,  111 => 25,  106 => 22,  97 => 21,  93 => 20,  90 => 19,  87 => 18,  84 => 17,  79 => 14,  70 => 13,  66 => 12,  63 => 11,  60 => 10,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
    }
}
/* */
/* {% extends 'base.html.twig' %}*/
/* {% block title %}User Group Management{% endblock %}*/
/*      */
/* {% block body %}*/
/* <h2 class="page-header" style="margin-top:10px;">User Group Management</h2>*/
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
/*     <a href="{{ path('addUsergroup') }}"><button type="button" class="btn btn-primary pull-right">Add</button></a>*/
/*     {# endif #}*/
/*     </div>*/
/*     <!-- Table -->*/
/*     <table class="table">*/
/*         <tr>*/
/*             <th>No</th>*/
/*             <th>User Group ID</th>*/
/*             <th>User Group Name</th>*/
/*             <th>Description</th>*/
/*             <th>Status</th>*/
/*             <th>Action</th>*/
/*         </tr>*/
/*         {% set idx = 1 %}*/
/*         {% for usergroup in usergroups %}*/
/*         <tr>*/
/*             <td>{{idx}}</td>*/
/*             <td>{{ usergroup.getUserGroupId() }}</td>*/
/*             <td>{{ usergroup.getUserGroupName() }}</td>*/
/*             <td>{{ usergroup.userGroupDesc() }}</td>*/
/*             <td>*/
/*                 {% if usergroup.getIsActive() %}*/
/*                 Active*/
/*                 {% else %}*/
/*                 Non-Active*/
/*                 {% endif %} </td>*/
/*             <td>*/
/*                 {# if session.logged_in #}*/
/*                 <a href="{{ path('editUsergroup', {'id': usergroup.userGroupId}) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="margin-right:0.3em"></span></a>*/
/*                 <a href="{{ path('deleteUsergroup', {'id': usergroup.userGroupId}) }}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>*/
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
