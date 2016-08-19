<?php

/* administration/admin/admin_form.html.twig */
class __TwigTemplate_ba8ec703fb61fd4e9fa558f90763ca7c3a3efa50f86bbd0e04c8551b41688fed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "administration/admin/admin_form.html.twig", 1);
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
        $__internal_b023138bc3d1c41b8009db71f6ba56d0fe15d9cbb57793bf09ce67a2942d1920 = $this->env->getExtension("native_profiler");
        $__internal_b023138bc3d1c41b8009db71f6ba56d0fe15d9cbb57793bf09ce67a2942d1920->enter($__internal_b023138bc3d1c41b8009db71f6ba56d0fe15d9cbb57793bf09ce67a2942d1920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "administration/admin/admin_form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b023138bc3d1c41b8009db71f6ba56d0fe15d9cbb57793bf09ce67a2942d1920->leave($__internal_b023138bc3d1c41b8009db71f6ba56d0fe15d9cbb57793bf09ce67a2942d1920_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e42b3e5e67489dc5353e2f04dfc8781aa143e5a3a4d5369ea336e9832416396a = $this->env->getExtension("native_profiler");
        $__internal_e42b3e5e67489dc5353e2f04dfc8781aa143e5a3a4d5369ea336e9832416396a->enter($__internal_e42b3e5e67489dc5353e2f04dfc8781aa143e5a3a4d5369ea336e9832416396a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin Management";
        
        $__internal_e42b3e5e67489dc5353e2f04dfc8781aa143e5a3a4d5369ea336e9832416396a->leave($__internal_e42b3e5e67489dc5353e2f04dfc8781aa143e5a3a4d5369ea336e9832416396a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2481e5b6c7bddd5fb450e7f6988da2a5cda4392da01eae7bc45b12f106e4584c = $this->env->getExtension("native_profiler");
        $__internal_2481e5b6c7bddd5fb450e7f6988da2a5cda4392da01eae7bc45b12f106e4584c->enter($__internal_2481e5b6c7bddd5fb450e7f6988da2a5cda4392da01eae7bc45b12f106e4584c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h2 class=\"page-header\" style=\"margin-top:10px;\">Admin Management</h2>
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
        echo $this->env->getExtension('routing')->getPath("addAdmin");
        echo "\" method=post class=\"laminarin-form\">
    <dl>
        <dt>Employee</dt>
        <dd>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "employee", array()), 'widget');
        echo "</dd>
        <dt>User ID:</dt>
        <dd>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'widget');
        echo "</dd>
        <dd>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "</dd>
        <dd>
        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("adminIndex");
        echo "\"><button type=\"button\" class=\"btn btn-primary pull-right\">Back</button></a>
        <br/>
   \t \t</dd>
    </dl>

    
</form>

  ";
        
        $__internal_2481e5b6c7bddd5fb450e7f6988da2a5cda4392da01eae7bc45b12f106e4584c->leave($__internal_2481e5b6c7bddd5fb450e7f6988da2a5cda4392da01eae7bc45b12f106e4584c_prof);

    }

    public function getTemplateName()
    {
        return "administration/admin/admin_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 23,  96 => 21,  92 => 20,  87 => 18,  80 => 15,  75 => 12,  66 => 10,  62 => 9,  58 => 7,  56 => 6,  53 => 5,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}Admin Management{% endblock %}*/
/* {% block body %}*/
/* {# if session.logged_in #}*/
/* <h2 class="page-header" style="margin-top:10px;">Admin Management</h2>*/
/* {% if errors %}*/
/*     <div class="error">*/
/*         <ul>*/
/*         {% for error in errors %}*/
/*             <li>{{ error.message }}</li>*/
/*         {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/* {% endif %}*/
/* <form enctype="multipart/form-data" action="{{ path('addAdmin') }}" method=post class="laminarin-form">*/
/*     <dl>*/
/*         <dt>Employee</dt>*/
/*         <dd>{{ form_widget(form.employee) }}</dd>*/
/*         <dt>User ID:</dt>*/
/*         <dd>{{ form_widget(form.user) }}</dd>*/
/*         <dd>{{ form_widget(form.save) }}</dd>*/
/*         <dd>*/
/*         <a href="{{ path('adminIndex') }}"><button type="button" class="btn btn-primary pull-right">Back</button></a>*/
/*         <br/>*/
/*    	 	</dd>*/
/*     </dl>*/
/* */
/*     */
/* </form>*/
/* */
/*   {# endif #}*/
/* {% endblock %}*/
