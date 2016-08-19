<?php

/* administration/privilege/index.html.twig */
class __TwigTemplate_aae98cd8f265e90e6e39fe4ddc14827cdc1752c5e4e7252bcdecfacfc6dc9f57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "administration/privilege/index.html.twig", 2);
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
        $__internal_ea615c94971c1b6639f0ad049262fef62bf67829023cec5c4c9c13748b6144e8 = $this->env->getExtension("native_profiler");
        $__internal_ea615c94971c1b6639f0ad049262fef62bf67829023cec5c4c9c13748b6144e8->enter($__internal_ea615c94971c1b6639f0ad049262fef62bf67829023cec5c4c9c13748b6144e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "administration/privilege/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea615c94971c1b6639f0ad049262fef62bf67829023cec5c4c9c13748b6144e8->leave($__internal_ea615c94971c1b6639f0ad049262fef62bf67829023cec5c4c9c13748b6144e8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d02ea6b4fa5ff58c11cbf9dc1a0c0f8c919ad6a9a6f23f1471b6c93e3e3e352 = $this->env->getExtension("native_profiler");
        $__internal_3d02ea6b4fa5ff58c11cbf9dc1a0c0f8c919ad6a9a6f23f1471b6c93e3e3e352->enter($__internal_3d02ea6b4fa5ff58c11cbf9dc1a0c0f8c919ad6a9a6f23f1471b6c93e3e3e352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "User Privilege Management";
        
        $__internal_3d02ea6b4fa5ff58c11cbf9dc1a0c0f8c919ad6a9a6f23f1471b6c93e3e3e352->leave($__internal_3d02ea6b4fa5ff58c11cbf9dc1a0c0f8c919ad6a9a6f23f1471b6c93e3e3e352_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc1f8d53e1df9cd8d08b28679abe3de7e2fdde6d7bed8a62c2d89d86df97fed7 = $this->env->getExtension("native_profiler");
        $__internal_dc1f8d53e1df9cd8d08b28679abe3de7e2fdde6d7bed8a62c2d89d86df97fed7->enter($__internal_dc1f8d53e1df9cd8d08b28679abe3de7e2fdde6d7bed8a62c2d89d86df97fed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h2 class=\"page-header\" style=\"margin-top:10px;\">User Privilege Management</h2>
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
        // line 29
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "usergroup", array()), 'widget');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
        ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
    ";
        // line 33
        if (array_key_exists("userPrivilegeMenu", $context)) {
            // line 34
            echo "    <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("saveUserPrivilege", array("userGroupId" => (isset($context["userGroupId"]) ? $context["userGroupId"] : $this->getContext($context, "userGroupId")))), "html", null, true);
            echo "\" method=\"post\" style=\"padding-bottom:5px; margin-bottom:10px;\">
\t<div class=\"panel\">
    <table  class=\"table\">
\t\t<thead>
\t\t\t<tr><th rowspan=\"2\" width=\"32\">No</th>
\t\t\t\t<th rowspan=\"2\" width=\"200\">Menu</th>
\t\t\t\t<th colspan=\"5\">Privilege</th>
\t\t\t</tr>
\t\t\t<tr><th width=\"50\">Access</th>
\t\t\t\t<th width=\"50\">Retrieve</th>
\t\t\t\t<th width=\"50\">Create</th>
\t\t\t\t<th width=\"50\">Update</th>
\t\t\t\t<th width=\"50\">Delete</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t
        ";
            // line 51
            $context["idx"] = 1;
            // line 52
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["privilegeForm"]) ? $context["privilegeForm"] : $this->getContext($context, "privilegeForm")), "privileges", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 53
                echo "\t\t\t<tr>
\t\t\t<td class=\"center\">";
                // line 54
                echo twig_escape_filter($this->env, (isset($context["idx"]) ? $context["idx"] : $this->getContext($context, "idx")), "html", null, true);
                echo "</td>
\t\t\t<td>";
                // line 55
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "menu_pid", array()), "vars", array()), "value", array()) != "P")) {
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "menu", array()), "vars", array()), "value", array()), "html", null, true);
                echo "
\t\t\t";
                // line 56
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["p"], "menu_id", array()), 'widget');
                echo "
\t\t\t";
                // line 57
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["p"], "user_group_id", array()), 'widget');
                echo "
\t\t\t
\t\t\t</td>
\t\t\t\t";
                // line 60
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "menu_pid", array()), "vars", array()), "value", array()) != "P")) {
                    // line 61
                    echo "\t\t\t\t
\t\t\t\t<td>";
                    // line 62
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["p"], "p_access", array()), 'widget');
                    echo " </td>
\t\t\t\t<td>";
                    // line 63
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["p"], "p_retrieve", array()), 'widget');
                    echo " </td>
\t\t\t\t<td>";
                    // line 64
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["p"], "p_create", array()), 'widget');
                    echo " </td>
\t\t\t\t<td>";
                    // line 65
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["p"], "p_update", array()), 'widget');
                    echo " </td>
\t\t\t\t<td>";
                    // line 66
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["p"], "p_delete", array()), 'widget');
                    echo " </td>
\t\t\t\t
\t\t\t\t";
                } else {
                    // line 69
                    echo "\t\t\t\t<td>
\t\t\t\t";
                    // line 70
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["p"], "p_access", array()), 'widget');
                    echo "
\t\t\t\t</td> ";
                    // line 72
                    echo "\t\t\t\t<td colspan=\"4\">&nbsp;</td>
\t\t\t\t";
                }
                // line 74
                echo "\t\t\t</tr>
\t\t\t";
                // line 75
                $context["idx"] = ((isset($context["idx"]) ? $context["idx"] : $this->getContext($context, "idx")) + 1);
                // line 76
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "        
\t\t</tbody>
\t</table>
\t";
            // line 80
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["privilegeForm"]) ? $context["privilegeForm"] : $this->getContext($context, "privilegeForm")), "savePrivilege", array()), 'widget', array("attr" => array("class" => "pull-right", "style" => "margin-right:10px;")));
            echo "
\t</div>
    
    
    </form>
    ";
        }
        // line 86
        echo "</div>
    
";
        
        $__internal_dc1f8d53e1df9cd8d08b28679abe3de7e2fdde6d7bed8a62c2d89d86df97fed7->leave($__internal_dc1f8d53e1df9cd8d08b28679abe3de7e2fdde6d7bed8a62c2d89d86df97fed7_prof);

    }

    public function getTemplateName()
    {
        return "administration/privilege/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 86,  238 => 80,  233 => 77,  227 => 76,  225 => 75,  222 => 74,  218 => 72,  214 => 70,  211 => 69,  205 => 66,  201 => 65,  197 => 64,  193 => 63,  189 => 62,  186 => 61,  184 => 60,  178 => 57,  174 => 56,  167 => 55,  163 => 54,  160 => 53,  155 => 52,  153 => 51,  132 => 34,  130 => 33,  125 => 31,  119 => 30,  114 => 29,  111 => 25,  106 => 22,  97 => 21,  93 => 20,  90 => 19,  87 => 18,  84 => 17,  79 => 14,  70 => 13,  66 => 12,  63 => 11,  60 => 10,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
    }
}
/* */
/* {% extends 'base.html.twig' %}*/
/* {% block title %}User Privilege Management{% endblock %}*/
/*      */
/* {% block body %}*/
/* <h2 class="page-header" style="margin-top:10px;">User Privilege Management</h2>*/
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
/*         {#<form enctype="multipart/form-data" action="{{ path('loadUserPrivilege') }}" method="post" >*/
/*             */
/*         </form>#}*/
/*         {{ form_start(form) }}*/
/*             {{ form_widget(form.usergroup) }} {{ form_widget(form.save) }}*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/*     {% if userPrivilegeMenu is defined %}*/
/*     <form action="{{ path('saveUserPrivilege',{'userGroupId': userGroupId}) }}" method="post" style="padding-bottom:5px; margin-bottom:10px;">*/
/* 	<div class="panel">*/
/*     <table  class="table">*/
/* 		<thead>*/
/* 			<tr><th rowspan="2" width="32">No</th>*/
/* 				<th rowspan="2" width="200">Menu</th>*/
/* 				<th colspan="5">Privilege</th>*/
/* 			</tr>*/
/* 			<tr><th width="50">Access</th>*/
/* 				<th width="50">Retrieve</th>*/
/* 				<th width="50">Create</th>*/
/* 				<th width="50">Update</th>*/
/* 				<th width="50">Delete</th>*/
/* 			</tr>*/
/* 		</thead>*/
/* 		<tbody>*/
/* 		*/
/*         {% set idx = 1 %}*/
/* 		{% for p in privilegeForm.privileges %}*/
/* 			<tr>*/
/* 			<td class="center">{{idx}}</td>*/
/* 			<td>{% if p.menu_pid.vars.value != 'P' %}&nbsp;&nbsp;&nbsp;&nbsp;{% endif %}{{p.menu.vars.value}}*/
/* 			{{ form_widget(p.menu_id)}}*/
/* 			{{ form_widget(p.user_group_id)}}*/
/* 			*/
/* 			</td>*/
/* 				{% if p.menu_pid.vars.value != 'P' %}*/
/* 				*/
/* 				<td>{{ form_widget(p.p_access)}} </td>*/
/* 				<td>{{ form_widget(p.p_retrieve)}} </td>*/
/* 				<td>{{ form_widget(p.p_create)}} </td>*/
/* 				<td>{{ form_widget(p.p_update)}} </td>*/
/* 				<td>{{ form_widget(p.p_delete)}} </td>*/
/* 				*/
/* 				{% else %}*/
/* 				<td>*/
/* 				{{ form_widget(p.p_access)}}*/
/* 				</td> {# onchange="check_submenu(this,{$td.menu_id}) #}*/
/* 				<td colspan="4">&nbsp;</td>*/
/* 				{% endif %}*/
/* 			</tr>*/
/* 			{% set idx = idx +1 %}*/
/* 		{% endfor %}*/
/*         */
/* 		</tbody>*/
/* 	</table>*/
/* 	{{ form_widget(privilegeForm.savePrivilege, {'attr': {'class': 'pull-right','style': 'margin-right:10px;'}}) }}*/
/* 	</div>*/
/*     */
/*     */
/*     </form>*/
/*     {% endif %}*/
/* </div>*/
/*     */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
