<?php

/* administration/usergroup/usergroup_form.html.twig */
class __TwigTemplate_345031d0df8b6db7aec1d9c87d81e2ade2ed50f9ba2422016391c4e3dc8bca30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "administration/usergroup/usergroup_form.html.twig", 1);
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
        $__internal_46a34931904006d8073013fff56959a22a0b5800795cf265b2b67a7a0f623c60 = $this->env->getExtension("native_profiler");
        $__internal_46a34931904006d8073013fff56959a22a0b5800795cf265b2b67a7a0f623c60->enter($__internal_46a34931904006d8073013fff56959a22a0b5800795cf265b2b67a7a0f623c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "administration/usergroup/usergroup_form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46a34931904006d8073013fff56959a22a0b5800795cf265b2b67a7a0f623c60->leave($__internal_46a34931904006d8073013fff56959a22a0b5800795cf265b2b67a7a0f623c60_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_af5195d26613daf6e18cccdf034b07c037cd5732a977c2275de245a73c1b92de = $this->env->getExtension("native_profiler");
        $__internal_af5195d26613daf6e18cccdf034b07c037cd5732a977c2275de245a73c1b92de->enter($__internal_af5195d26613daf6e18cccdf034b07c037cd5732a977c2275de245a73c1b92de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "User Group Management";
        
        $__internal_af5195d26613daf6e18cccdf034b07c037cd5732a977c2275de245a73c1b92de->leave($__internal_af5195d26613daf6e18cccdf034b07c037cd5732a977c2275de245a73c1b92de_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_47579a9c7adaf5bcf162c1f6a3362679b80318dac53c3642682ae0de2a76785f = $this->env->getExtension("native_profiler");
        $__internal_47579a9c7adaf5bcf162c1f6a3362679b80318dac53c3642682ae0de2a76785f->enter($__internal_47579a9c7adaf5bcf162c1f6a3362679b80318dac53c3642682ae0de2a76785f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h2 class=\"page-header\" style=\"margin-top:10px;\">User Group Management</h2>
";
        // line 6
        if ((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) {
            // line 7
            echo "    <div class=\"error\">
        <ul>
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 10
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        </ul>
    </div>
";
        }
        // line 15
        echo "<form enctype=\"multipart/form-data\" action=\"";
        if (((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")) == "add")) {
            echo $this->env->getExtension('routing')->getPath("addUsergroup");
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editUsergroup", array("id" => $this->getAttribute((isset($context["usergroup"]) ? $context["usergroup"] : $this->getContext($context, "usergroup")), "userGroupId", array()))), "html", null, true);
            echo " ";
        }
        echo "\" method=post class=\"laminarin-form\">
    <dl>
        <dt>User Group ID:</dt>
        <dd>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userGroupId", array()), 'widget');
        echo "</dd>
        <dt>User Group:</dt>
        <dd>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userGroupName", array()), 'widget');
        echo "</dd>
        <dt>Description:</dt>
        <dd>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userGroupDesc", array()), 'widget');
        echo "</dd>
        <dt>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isActive", array()), 'widget');
        echo "</dt>
        <dd>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "

            <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("usergroupIndex");
        echo "\"><button type=\"button\" class=\"btn btn-primary pull-right\">Back</button></a>
        <br/></dd>
    </dl>
</form>

  ";
        
        $__internal_47579a9c7adaf5bcf162c1f6a3362679b80318dac53c3642682ae0de2a76785f->leave($__internal_47579a9c7adaf5bcf162c1f6a3362679b80318dac53c3642682ae0de2a76785f_prof);

    }

    public function getTemplateName()
    {
        return "administration/usergroup/usergroup_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 26,  112 => 24,  108 => 23,  104 => 22,  99 => 20,  94 => 18,  80 => 15,  75 => 12,  66 => 10,  62 => 9,  58 => 7,  56 => 6,  53 => 5,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}User Group Management{% endblock %}*/
/* {% block body %}*/
/* {# if session.logged_in #}*/
/* <h2 class="page-header" style="margin-top:10px;">User Group Management</h2>*/
/* {% if errors %}*/
/*     <div class="error">*/
/*         <ul>*/
/*         {% for error in errors %}*/
/*             <li>{{ error.message }}</li>*/
/*         {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/* {% endif %}*/
/* <form enctype="multipart/form-data" action="{% if act == 'add' %}{{ path('addUsergroup') }} {% else %} {{ path('editUsergroup',{'id': usergroup.userGroupId}) }} {% endif %}" method=post class="laminarin-form">*/
/*     <dl>*/
/*         <dt>User Group ID:</dt>*/
/*         <dd>{{ form_widget(form.userGroupId) }}</dd>*/
/*         <dt>User Group:</dt>*/
/*         <dd>{{ form_widget(form.userGroupName) }}</dd>*/
/*         <dt>Description:</dt>*/
/*         <dd>{{ form_widget(form.userGroupDesc) }}</dd>*/
/*         <dt>{{ form_widget(form.isActive) }}</dt>*/
/*         <dd>{{ form_widget(form.save) }}*/
/* */
/*             <a href="{{ path('usergroupIndex') }}"><button type="button" class="btn btn-primary pull-right">Back</button></a>*/
/*         <br/></dd>*/
/*     </dl>*/
/* </form>*/
/* */
/*   {# endif #}*/
/* {% endblock %}*/
