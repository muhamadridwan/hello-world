<?php

/* administration/employee/employee_form.html.twig */
class __TwigTemplate_f7c32ee9c06b197f0b302038f9279887fe1a4cce1591a175b46df243d144b1d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "administration/employee/employee_form.html.twig", 1);
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
        $__internal_86af50f369d73eb9b723e00dfe867c415d3ab1aa2944bcc3a1f84276d19f3afd = $this->env->getExtension("native_profiler");
        $__internal_86af50f369d73eb9b723e00dfe867c415d3ab1aa2944bcc3a1f84276d19f3afd->enter($__internal_86af50f369d73eb9b723e00dfe867c415d3ab1aa2944bcc3a1f84276d19f3afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "administration/employee/employee_form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86af50f369d73eb9b723e00dfe867c415d3ab1aa2944bcc3a1f84276d19f3afd->leave($__internal_86af50f369d73eb9b723e00dfe867c415d3ab1aa2944bcc3a1f84276d19f3afd_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7eb0911bcf66ff3c2623968f66c9fb35aa3648a548bd4ef28448e102fa1dee88 = $this->env->getExtension("native_profiler");
        $__internal_7eb0911bcf66ff3c2623968f66c9fb35aa3648a548bd4ef28448e102fa1dee88->enter($__internal_7eb0911bcf66ff3c2623968f66c9fb35aa3648a548bd4ef28448e102fa1dee88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Employee Management";
        
        $__internal_7eb0911bcf66ff3c2623968f66c9fb35aa3648a548bd4ef28448e102fa1dee88->leave($__internal_7eb0911bcf66ff3c2623968f66c9fb35aa3648a548bd4ef28448e102fa1dee88_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_153588c2ba88fa12037a3319b7fa839a87803e2ec47f4df4119a6181b9b42c16 = $this->env->getExtension("native_profiler");
        $__internal_153588c2ba88fa12037a3319b7fa839a87803e2ec47f4df4119a6181b9b42c16->enter($__internal_153588c2ba88fa12037a3319b7fa839a87803e2ec47f4df4119a6181b9b42c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h2 class=\"page-header\" style=\"margin-top:10px;\">Employee Management</h2>
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
            echo $this->env->getExtension('routing')->getPath("addEmployee");
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editEmployee", array("id" => $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "employeeId", array()))), "html", null, true);
            echo " ";
        }
        echo "\" method=post class=\"laminarin-form\">
    <dl>
        <dt>Identity ID:</dt>
        <dd>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "personalId", array()), 'widget');
        echo "</dd>
        <dt>Name:</dt>
        <dd>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "employeeName", array()), 'widget');
        echo "</dd>
        <dt>Fullname:</dt>
        <dd>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "employeeFullname", array()), 'widget');
        echo "</dd>
        ";
        // line 27
        echo "        <dt>Address:</dt>
        <dd>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "employeeAddress", array()), 'widget');
        echo "</dd>
        <dt>Phone Number:</dt>
        <dd>";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phoneNumber", array()), 'widget');
        echo "</dd>
        <dt>Email:</dt>
        <dd>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "</dd>
        <dt>Picture:</dt>
        <dd>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "picture", array()), 'widget');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictureFile", array()), 'widget');
        echo "</dd>
        <dd><img id=\"cust-pic-preview\" class=\"img-thumbnail\" width=\"200em\" onerror=\"getDefaultImage(this)\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/images/employee/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "getPicture", array(), "method"), "html", null, true);
        echo "\" />
        </dd>
        <dd>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
        <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("employeeIndex");
        echo "\"><button type=\"button\" class=\"btn btn-primary pull-right\">Back</button></a>
        <br/>
        </dd>
    </dl>
</form>

  ";
        
        $__internal_153588c2ba88fa12037a3319b7fa839a87803e2ec47f4df4119a6181b9b42c16->leave($__internal_153588c2ba88fa12037a3319b7fa839a87803e2ec47f4df4119a6181b9b42c16_prof);

    }

    public function getTemplateName()
    {
        return "administration/employee/employee_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 38,  137 => 37,  131 => 35,  126 => 34,  121 => 32,  116 => 30,  111 => 28,  108 => 27,  104 => 22,  99 => 20,  94 => 18,  80 => 15,  75 => 12,  66 => 10,  62 => 9,  58 => 7,  56 => 6,  53 => 5,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}Employee Management{% endblock %}*/
/* {% block body %}*/
/* {# if session.logged_in #}*/
/* <h2 class="page-header" style="margin-top:10px;">Employee Management</h2>*/
/* {% if errors %}*/
/*     <div class="error">*/
/*         <ul>*/
/*         {% for error in errors %}*/
/*             <li>{{ error.message }}</li>*/
/*         {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/* {% endif %}*/
/* <form enctype="multipart/form-data" action="{% if act == 'add' %}{{ path('addEmployee') }} {% else %} {{ path('editEmployee',{'id': employee.employeeId}) }} {% endif %}" method=post class="laminarin-form">*/
/*     <dl>*/
/*         <dt>Identity ID:</dt>*/
/*         <dd>{{ form_widget(form.personalId) }}</dd>*/
/*         <dt>Name:</dt>*/
/*         <dd>{{ form_widget(form.employeeName) }}</dd>*/
/*         <dt>Fullname:</dt>*/
/*         <dd>{{ form_widget(form.employeeFullname) }}</dd>*/
/*         {#*/
/*         <dt>User ID:</dt>*/
/*         <dd>{{ form_widget(form.user) }}</dd>*/
/*         #}*/
/*         <dt>Address:</dt>*/
/*         <dd>{{ form_widget(form.employeeAddress) }}</dd>*/
/*         <dt>Phone Number:</dt>*/
/*         <dd>{{ form_widget(form.phoneNumber) }}</dd>*/
/*         <dt>Email:</dt>*/
/*         <dd>{{ form_widget(form.email) }}</dd>*/
/*         <dt>Picture:</dt>*/
/*         <dd>{{ form_widget(form.picture) }}{{ form_widget(form.pictureFile) }}</dd>*/
/*         <dd><img id="cust-pic-preview" class="img-thumbnail" width="200em" onerror="getDefaultImage(this)" src="{{asset('bundles/images/employee/')}}{{employee.getPicture()}}" />*/
/*         </dd>*/
/*         <dd>{{ form_widget(form.save) }}*/
/*         <a href="{{ path('employeeIndex') }}"><button type="button" class="btn btn-primary pull-right">Back</button></a>*/
/*         <br/>*/
/*         </dd>*/
/*     </dl>*/
/* </form>*/
/* */
/*   {# endif #}*/
/* {% endblock %}*/
