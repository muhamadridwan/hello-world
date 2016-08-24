<?php

/* base.html.twig */
class __TwigTemplate_1744f4a4746a9e886a65889131916248813a6c767b2003efe720d16beeefb9b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c6829631fa2ad276525b0459338ab018a02dbc6f5b4a83e1e091be828e5670d = $this->env->getExtension("native_profiler");
        $__internal_4c6829631fa2ad276525b0459338ab018a02dbc6f5b4a83e1e091be828e5670d->enter($__internal_4c6829631fa2ad276525b0459338ab018a02dbc6f5b4a83e1e091be828e5670d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html ng-app=\"app\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lib/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lib/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lib/angular-1.5.8/angular.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lib/angular-1.5.8/angular-sanitize.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lib/angular-1.5.8/angular-resource.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lib/angular-1.5.8/angular-route.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lib/angular-1.5.8/angular-cookies.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lib/angular-md5.min.js"), "html", null, true);
        echo "\"></script>
        
        <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/app.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/services/EventData.js"), "html", null, true);
        echo "\"></script>
        
        
        <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/controllers/EventListCtrl.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/controllers/EditEventCtrl.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/filters.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/laminarin.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/controllers/HomeCtrl.js"), "html", null, true);
        echo "\"></script>
            
    </head>
    <body ng-cloak>
        <nav class=\"navbar navbar-default bg-dark-brown nav-border\">
        <div class=\"container-fluid\">
            
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand c-white\" href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" ng-controller=\"HomeCtrl\">Laminarin {[{helloMessage}]}</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">

                    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mn"]) {
            // line 52
            echo "                        ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["mn"], "subMenu", array())) == 0)) {
                // line 53
                echo "                            <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($context["mn"], "m", array()), "controller", array()));
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mn"], "m", array()), "menu", array()), "html", null, true);
                echo "</a></li>
                        ";
            } else {
                // line 55
                echo "                            <li class=\"dropdown\">
                                <a href=\"";
                // line 56
                echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($context["mn"], "m", array()), "controller", array()));
                echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mn"], "m", array()), "menu", array()), "html", null, true);
                echo "<span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                ";
                // line 58
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["mn"], "subMenu", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["mnn"]) {
                    // line 59
                    echo "                                    ";
                    if ((twig_length_filter($this->env, $this->getAttribute($context["mnn"], "subMenu", array())) == 0)) {
                        // line 60
                        echo "                                        <li><a href=\"";
                        echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($context["mnn"], "m", array()), "controller", array()));
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mnn"], "m", array()), "menu", array()), "html", null, true);
                        echo "</a></li>
                                    ";
                    } else {
                        // line 62
                        echo "                                        <li class=\"dropdown\">
                                            <a href=\"";
                        // line 63
                        echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($context["mnn"], "m", array()), "controller", array()));
                        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mnn"], "m", array()), "menu", array()), "html", null, true);
                        echo "<span class=\"caret\"></span></a>
                                            <ul class=\"dropdown-menu\">
                                            ";
                        // line 65
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["mnn"], "subMenu", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["mnnn"]) {
                            // line 66
                            echo "                                                <li><a href=\"";
                            echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($context["mnnn"], "m", array()), "controller", array()));
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mnnn"], "m", array()), "menu", array()), "html", null, true);
                            echo "</a></li>
                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mnnn'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 68
                        echo "                                            </ul>
                                        </li>        
                                    ";
                    }
                    // line 71
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mnn'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo "                                </ul>
                            </li>        
                        ";
            }
            // line 75
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mn'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                    <li class=\"dropdown\">
                        <a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("angularEditProfile");
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Angular JS Page<span class=\"caret\"></span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("angularEditProfile");
        echo "\">EditProdile</a></li>
                            <li><a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("angularCacheFactory");
        echo "\">Cache Factory</a></li>
                            <li><a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("angularCompileService");
        echo "\">Compile Service</a></li>
                            <li><a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("angularLocaleService");
        echo "\">Locale Service</a></li>
                            <li><a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("angularTimeoutService");
        echo "\">Timeout Service</a></li>
                            <li><a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("angularFilterServiceSample");
        echo "\">Filter Service</a></li>
                            <li><a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("angularCookieServiceSample");
        echo "\">Cookie Service</a></li>
                            <li><a href=\"#/newEvent\">Route Service</a></li>
                            
                        </ul>
                    </li>
                    
                </ul>
                ";
        // line 100
        echo "                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        ";
        // line 102
        if ( !$this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 103
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\" >login</a>
                        ";
        } else {
            // line 105
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">logout</a>
                        ";
        }
        // line 107
        echo "                   </li>
                   
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class=\"page\">
        ";
        // line 114
        $context["noticeMessages"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method");
        // line 115
        echo "        ";
        if ((isset($context["noticeMessages"]) ? $context["noticeMessages"] : $this->getContext($context, "noticeMessages"))) {
            // line 116
            echo "        <div class=metanav>
            ";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
                // line 118
                echo "            <div class=flash>";
                echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
                echo "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "        </div>
        ";
        }
        // line 122
        echo "        <ng-view></ng-view>
        ";
        // line 123
        $this->displayBlock('body', $context, $blocks);
        // line 124
        echo "    </div>
        
        ";
        // line 126
        $this->displayBlock('javascripts', $context, $blocks);
        // line 127
        echo "    </body>
</html>
";
        
        $__internal_4c6829631fa2ad276525b0459338ab018a02dbc6f5b4a83e1e091be828e5670d->leave($__internal_4c6829631fa2ad276525b0459338ab018a02dbc6f5b4a83e1e091be828e5670d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7bf244317b70f43d6b8a850f09d333f694a1d097daf357a82ae7181970f0ad43 = $this->env->getExtension("native_profiler");
        $__internal_7bf244317b70f43d6b8a850f09d333f694a1d097daf357a82ae7181970f0ad43->enter($__internal_7bf244317b70f43d6b8a850f09d333f694a1d097daf357a82ae7181970f0ad43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "welcome";
        
        $__internal_7bf244317b70f43d6b8a850f09d333f694a1d097daf357a82ae7181970f0ad43->leave($__internal_7bf244317b70f43d6b8a850f09d333f694a1d097daf357a82ae7181970f0ad43_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b95f0271485b1a0c002b6b0aaadf01a6291cd29e7e5192eb735cd451a33efd94 = $this->env->getExtension("native_profiler");
        $__internal_b95f0271485b1a0c002b6b0aaadf01a6291cd29e7e5192eb735cd451a33efd94->enter($__internal_b95f0271485b1a0c002b6b0aaadf01a6291cd29e7e5192eb735cd451a33efd94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        ";
        
        $__internal_b95f0271485b1a0c002b6b0aaadf01a6291cd29e7e5192eb735cd451a33efd94->leave($__internal_b95f0271485b1a0c002b6b0aaadf01a6291cd29e7e5192eb735cd451a33efd94_prof);

    }

    // line 123
    public function block_body($context, array $blocks = array())
    {
        $__internal_1925c9ad6a834de022a877c86056cc1d6db29ea96b617bcfd8ac617d62b386b6 = $this->env->getExtension("native_profiler");
        $__internal_1925c9ad6a834de022a877c86056cc1d6db29ea96b617bcfd8ac617d62b386b6->enter($__internal_1925c9ad6a834de022a877c86056cc1d6db29ea96b617bcfd8ac617d62b386b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1925c9ad6a834de022a877c86056cc1d6db29ea96b617bcfd8ac617d62b386b6->leave($__internal_1925c9ad6a834de022a877c86056cc1d6db29ea96b617bcfd8ac617d62b386b6_prof);

    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4032aa83d8fae2b619a0a3d9d65844ea21bcf14210a6de6d16c4d055c8e3b3be = $this->env->getExtension("native_profiler");
        $__internal_4032aa83d8fae2b619a0a3d9d65844ea21bcf14210a6de6d16c4d055c8e3b3be->enter($__internal_4032aa83d8fae2b619a0a3d9d65844ea21bcf14210a6de6d16c4d055c8e3b3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4032aa83d8fae2b619a0a3d9d65844ea21bcf14210a6de6d16c4d055c8e3b3be->leave($__internal_4032aa83d8fae2b619a0a3d9d65844ea21bcf14210a6de6d16c4d055c8e3b3be_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 126,  369 => 123,  359 => 10,  355 => 9,  351 => 8,  348 => 7,  342 => 6,  330 => 5,  321 => 127,  319 => 126,  315 => 124,  313 => 123,  310 => 122,  306 => 120,  297 => 118,  293 => 117,  290 => 116,  287 => 115,  285 => 114,  276 => 107,  270 => 105,  264 => 103,  262 => 102,  258 => 100,  248 => 86,  244 => 85,  240 => 84,  236 => 83,  232 => 82,  228 => 81,  224 => 80,  218 => 77,  215 => 76,  209 => 75,  204 => 72,  198 => 71,  193 => 68,  182 => 66,  178 => 65,  171 => 63,  168 => 62,  160 => 60,  157 => 59,  153 => 58,  146 => 56,  143 => 55,  135 => 53,  132 => 52,  128 => 51,  118 => 44,  102 => 31,  98 => 30,  94 => 29,  90 => 28,  86 => 27,  80 => 24,  76 => 23,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  55 => 17,  51 => 16,  47 => 15,  43 => 14,  38 => 13,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html ng-app="app">*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}welcome{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <meta name="viewport" content="width=device-width, initial-scale=1.0" />*/
/*             <link href="{{ asset('bundles/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">*/
/*             <link href="{{ asset('bundles/css/bootstrap-theme.min.css') }}" rel="stylesheet" type="text/css">*/
/*             <link href="{{ asset('bundles/css/style.css') }}" rel="stylesheet" type="text/css">*/
/* */
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <script type="text/javascript" src="{{ asset('bundles/lib/jquery-2.2.3.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{asset('bundles/lib/bootstrap.min.js')}}"></script>*/
/*         <script type="text/javascript" src="{{asset('bundles/lib/angular-1.5.8/angular.min.js')}}"></script>*/
/*         <script type="text/javascript" src="{{asset('bundles/lib/angular-1.5.8/angular-sanitize.min.js')}}"></script>*/
/*         <script type="text/javascript" src="{{asset('bundles/lib/angular-1.5.8/angular-resource.min.js')}}"></script>*/
/*         <script type="text/javascript" src="{{asset('bundles/lib/angular-1.5.8/angular-route.min.js')}}"></script>*/
/*         <script type="text/javascript" src="{{asset('bundles/lib/angular-1.5.8/angular-cookies.min.js')}}"></script>*/
/*         <script type="text/javascript" src="{{asset('bundles/lib/angular-md5.min.js')}}"></script>*/
/*         */
/*         <script type="text/javascript" src="{{asset('bundles/js/app.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('bundles/js/services/EventData.js') }}"></script>*/
/*         */
/*         */
/*         <script type="text/javascript" src="{{ asset('bundles/js/controllers/EventListCtrl.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('bundles/js/controllers/EditEventCtrl.js') }}"></script>*/
/*         <script type="text/javascript" src="{{asset('bundles/js/filters.js')}}"></script>*/
/*         <script type="text/javascript" src="{{asset('bundles/js/laminarin.js')}}"></script>*/
/*         <script type="text/javascript" src="{{asset('bundles/js/controllers/HomeCtrl.js')}}"></script>*/
/*             */
/*     </head>*/
/*     <body ng-cloak>*/
/*         <nav class="navbar navbar-default bg-dark-brown nav-border">*/
/*         <div class="container-fluid">*/
/*             */
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand c-white" href="{{path('homepage')}}" ng-controller="HomeCtrl">Laminarin {[{helloMessage}]}</a>*/
/*             </div>*/
/* */
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 <ul class="nav navbar-nav">*/
/* */
/*                     {% for mn in userData.menu %}*/
/*                         {% if mn.subMenu|length == 0 %}*/
/*                             <li><a href="{{path(mn.m.controller)}}">{{mn.m.menu}}</a></li>*/
/*                         {% else %}*/
/*                             <li class="dropdown">*/
/*                                 <a href="{{path(mn.m.controller)}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{mn.m.menu}}<span class="caret"></span></a>*/
/*                                 <ul class="dropdown-menu">*/
/*                                 {% for mnn in mn.subMenu %}*/
/*                                     {% if mnn.subMenu|length == 0 %}*/
/*                                         <li><a href="{{path(mnn.m.controller)}}">{{mnn.m.menu}}</a></li>*/
/*                                     {% else %}*/
/*                                         <li class="dropdown">*/
/*                                             <a href="{{path(mnn.m.controller)}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{mnn.m.menu}}<span class="caret"></span></a>*/
/*                                             <ul class="dropdown-menu">*/
/*                                             {% for mnnn in mnn.subMenu %}*/
/*                                                 <li><a href="{{path(mnnn.m.controller)}}">{{mnnn.m.menu}}</a></li>*/
/*                                             {% endfor %}*/
/*                                             </ul>*/
/*                                         </li>        */
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                                 </ul>*/
/*                             </li>        */
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                     <li class="dropdown">*/
/*                         <a href="{{path('angularEditProfile')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Angular JS Page<span class="caret"></span>*/
/*                         </a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="{{path('angularEditProfile')}}">EditProdile</a></li>*/
/*                             <li><a href="{{path('angularCacheFactory')}}">Cache Factory</a></li>*/
/*                             <li><a href="{{path('angularCompileService')}}">Compile Service</a></li>*/
/*                             <li><a href="{{path('angularLocaleService')}}">Locale Service</a></li>*/
/*                             <li><a href="{{path('angularTimeoutService')}}">Timeout Service</a></li>*/
/*                             <li><a href="{{path('angularFilterServiceSample')}}">Filter Service</a></li>*/
/*                             <li><a href="{{path('angularCookieServiceSample')}}">Cookie Service</a></li>*/
/*                             <li><a href="#/newEvent">Route Service</a></li>*/
/*                             */
/*                         </ul>*/
/*                     </li>*/
/*                     */
/*                 </ul>*/
/*                 {#<form class="navbar-form navbar-left" role="search">*/
/*                     <div class="form-group">*/
/*                         <input type="text" class="form-control" placeholder="Search">*/
/*                     </div>*/
/*                     <button type="submit" class="btn btn-default">Submit</button>*/
/*                 </form>*/
/*                 #}*/
/*                 <ul class="nav navbar-nav navbar-right">*/
/*                     <li>*/
/*                         {% if not is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                         <a href="{{ path('login') }}" >login</a>*/
/*                         {% else %}*/
/*                         <a href="{{ path('logout') }}">logout</a>*/
/*                         {% endif %}*/
/*                    </li>*/
/*                    */
/*                 </ul>*/
/*             </div><!-- /.navbar-collapse -->*/
/*         </div><!-- /.container-fluid -->*/
/*     </nav>*/
/*     <div class="page">*/
/*         {% set noticeMessages = app.session.flashbag.get('notice') %}*/
/*         {% if noticeMessages %}*/
/*         <div class=metanav>*/
/*             {% for flash_message in app.session.flashBag.get('notice') %}*/
/*             <div class=flash>{{ flash_message }}</div>*/
/*             {% endfor %}*/
/*         </div>*/
/*         {% endif %}*/
/*         <ng-view></ng-view>*/
/*         {% block body %}{% endblock %}*/
/*     </div>*/
/*         */
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
