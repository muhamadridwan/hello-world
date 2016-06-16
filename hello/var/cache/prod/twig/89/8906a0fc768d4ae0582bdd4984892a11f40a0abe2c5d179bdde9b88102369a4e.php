<?php

/* user/user_form.html.twig */
class __TwigTemplate_0d85a57d09170ed843131bfc251bad2088555310480e8204865d4b70a16b1d99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/user_form.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36f4b988e571965ab3d558da54af99e4bec1b4b36e229c9f8715905c20140e5f = $this->env->getExtension("native_profiler");
        $__internal_36f4b988e571965ab3d558da54af99e4bec1b4b36e229c9f8715905c20140e5f->enter($__internal_36f4b988e571965ab3d558da54af99e4bec1b4b36e229c9f8715905c20140e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/user_form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36f4b988e571965ab3d558da54af99e4bec1b4b36e229c9f8715905c20140e5f->leave($__internal_36f4b988e571965ab3d558da54af99e4bec1b4b36e229c9f8715905c20140e5f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f9d1fc2658ffd8bd905180647f3d711979dd34d06c5f0a44662a65653ed6dfc = $this->env->getExtension("native_profiler");
        $__internal_7f9d1fc2658ffd8bd905180647f3d711979dd34d06c5f0a44662a65653ed6dfc->enter($__internal_7f9d1fc2658ffd8bd905180647f3d711979dd34d06c5f0a44662a65653ed6dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<form enctype=\"multipart/form-data\" action=\"";
        if (((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")) == "add")) {
            echo $this->env->getExtension('routing')->getPath("addUser");
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editUser", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()))), "html", null, true);
            echo " ";
        }
        echo "\" method=post class=\"laminarin-form\">
    <dl>
        <dt>Username:</dt>
        <dd><input type=text size=30 name=\"username\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getUsername", array(), "method"), "html", null, true);
        echo "\"></dd>
        <dt>Fullname:</dt>
        <dd><input type=text size=30 name=\"fullname\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getFullname", array(), "method"), "html", null, true);
        echo "\"></dd>
        <dt>Phone Number:</dt>
        <dd><input type=text size=30 name=\"phoneNumber\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getPhoneNumber", array(), "method"), "html", null, true);
        echo "\"></dd>
        <dt>Profile Picture:</dt>
        <dd><input type=\"file\" elm-view=\"#profilepic\" name=\"picture\" class=\"uploadfile\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/images/user/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getPicture", array(), "method"), "html", null, true);
        echo "\"/>
                   <img alt=\"\" id=\"profilepic\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/images/user/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getPicture", array(), "method"), "html", null, true);
        echo "\" /></dd>
        <dd><input type=submit value=Save></dd>
    </dl>
</form>
  ";
        
        $__internal_7f9d1fc2658ffd8bd905180647f3d711979dd34d06c5f0a44662a65653ed6dfc->leave($__internal_7f9d1fc2658ffd8bd905180647f3d711979dd34d06c5f0a44662a65653ed6dfc_prof);

    }

    public function getTemplateName()
    {
        return "user/user_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 14,  69 => 13,  64 => 11,  59 => 9,  54 => 7,  40 => 4,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* {# if session.logged_in #}*/
/* <form enctype="multipart/form-data" action="{% if act == 'add' %}{{ path('addUser') }} {% else %} {{ path('editUser',{'id': user.username}) }} {% endif %}" method=post class="laminarin-form">*/
/*     <dl>*/
/*         <dt>Username:</dt>*/
/*         <dd><input type=text size=30 name="username" value="{{user.getUsername()}}"></dd>*/
/*         <dt>Fullname:</dt>*/
/*         <dd><input type=text size=30 name="fullname" value="{{user.getFullname()}}"></dd>*/
/*         <dt>Phone Number:</dt>*/
/*         <dd><input type=text size=30 name="phoneNumber" value="{{user.getPhoneNumber()}}"></dd>*/
/*         <dt>Profile Picture:</dt>*/
/*         <dd><input type="file" elm-view="#profilepic" name="picture" class="uploadfile" value="{{asset('/bundles/images/user/')}}{{user.getPicture()}}"/>*/
/*                    <img alt="" id="profilepic" src="{{asset('/bundles/images/user/')}}{{user.getPicture()}}" /></dd>*/
/*         <dd><input type=submit value=Save></dd>*/
/*     </dl>*/
/* </form>*/
/*   {# endif #}*/
/* {% endblock %}*/
