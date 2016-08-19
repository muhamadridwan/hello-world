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
        $__internal_10bd4aba1dbac2e53a9045fb8b2f94b709c7d2becaf2e7eaae051366395afee8 = $this->env->getExtension("native_profiler");
        $__internal_10bd4aba1dbac2e53a9045fb8b2f94b709c7d2becaf2e7eaae051366395afee8->enter($__internal_10bd4aba1dbac2e53a9045fb8b2f94b709c7d2becaf2e7eaae051366395afee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
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
    </head>
    <body>
        <nav class=\"navbar navbar-default bg-dark-brown nav-border\">
        <div class=\"container-fluid\">
            
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand c-white\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Laminarin</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">

                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mn"]) {
            // line 33
            echo "                        ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["mn"], "subMenu", array())) == 0)) {
                // line 34
                echo "                            <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($context["mn"], "m", array()), "controller", array()));
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mn"], "m", array()), "menu", array()), "html", null, true);
                echo "</a></li>
                        ";
            } else {
                // line 36
                echo "                            <li class=\"dropdown\">
                                <a href=\"";
                // line 37
                echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($context["mn"], "m", array()), "controller", array()));
                echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mn"], "m", array()), "menu", array()), "html", null, true);
                echo "<span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["mn"], "subMenu", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["mnn"]) {
                    // line 40
                    echo "                                    ";
                    if ((twig_length_filter($this->env, $this->getAttribute($context["mnn"], "subMenu", array())) == 0)) {
                        // line 41
                        echo "                                        <li><a href=\"";
                        echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($context["mnn"], "m", array()), "controller", array()));
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mnn"], "m", array()), "menu", array()), "html", null, true);
                        echo "</a></li>
                                    ";
                    } else {
                        // line 43
                        echo "                                        <li class=\"dropdown\">
                                            <a href=\"";
                        // line 44
                        echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($context["mnn"], "m", array()), "controller", array()));
                        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mnn"], "m", array()), "menu", array()), "html", null, true);
                        echo "<span class=\"caret\"></span></a>
                                            <ul class=\"dropdown-menu\">
                                            ";
                        // line 46
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["mnn"], "subMenu", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["mnnn"]) {
                            // line 47
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
                        // line 49
                        echo "                                            </ul>
                                        </li>        
                                    ";
                    }
                    // line 52
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mnn'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "                                </ul>
                            </li>        
                        ";
            }
            // line 56
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mn'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                    
                </ul>
                ";
        // line 66
        echo "                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        ";
        // line 68
        if ( !$this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 69
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\" >login</a>
                        ";
        } else {
            // line 71
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">logout</a>
                        ";
        }
        // line 73
        echo "                   </li>
                   
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class=\"page\">
        
        <div class=metanav>
            ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 83
            echo "            <div class=flash>";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "        </div>
        
        ";
        // line 87
        $this->displayBlock('body', $context, $blocks);
        // line 88
        echo "    </div>
        
        ";
        // line 90
        $this->displayBlock('javascripts', $context, $blocks);
        // line 95
        echo "    </body>
</html>
";
        
        $__internal_10bd4aba1dbac2e53a9045fb8b2f94b709c7d2becaf2e7eaae051366395afee8->leave($__internal_10bd4aba1dbac2e53a9045fb8b2f94b709c7d2becaf2e7eaae051366395afee8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_015c852fa4f37d6dc8bc6928f8974a3ede896d22095819b1f99615368f80d6fd = $this->env->getExtension("native_profiler");
        $__internal_015c852fa4f37d6dc8bc6928f8974a3ede896d22095819b1f99615368f80d6fd->enter($__internal_015c852fa4f37d6dc8bc6928f8974a3ede896d22095819b1f99615368f80d6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "welcome";
        
        $__internal_015c852fa4f37d6dc8bc6928f8974a3ede896d22095819b1f99615368f80d6fd->leave($__internal_015c852fa4f37d6dc8bc6928f8974a3ede896d22095819b1f99615368f80d6fd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_044b1c87cf4435c4587556f9b53faa65e2c9350f7aed150dd0cea699e34fdaab = $this->env->getExtension("native_profiler");
        $__internal_044b1c87cf4435c4587556f9b53faa65e2c9350f7aed150dd0cea699e34fdaab->enter($__internal_044b1c87cf4435c4587556f9b53faa65e2c9350f7aed150dd0cea699e34fdaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_044b1c87cf4435c4587556f9b53faa65e2c9350f7aed150dd0cea699e34fdaab->leave($__internal_044b1c87cf4435c4587556f9b53faa65e2c9350f7aed150dd0cea699e34fdaab_prof);

    }

    // line 87
    public function block_body($context, array $blocks = array())
    {
        $__internal_b58c95e09c510bd0f7139e5a8a07db5eb0acf3450e9ede8584aea3ea47b2b573 = $this->env->getExtension("native_profiler");
        $__internal_b58c95e09c510bd0f7139e5a8a07db5eb0acf3450e9ede8584aea3ea47b2b573->enter($__internal_b58c95e09c510bd0f7139e5a8a07db5eb0acf3450e9ede8584aea3ea47b2b573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b58c95e09c510bd0f7139e5a8a07db5eb0acf3450e9ede8584aea3ea47b2b573->leave($__internal_b58c95e09c510bd0f7139e5a8a07db5eb0acf3450e9ede8584aea3ea47b2b573_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9eff4e40061e3c822efcde04f39f458fc716b5cb6ce622018f64a1b3788e4340 = $this->env->getExtension("native_profiler");
        $__internal_9eff4e40061e3c822efcde04f39f458fc716b5cb6ce622018f64a1b3788e4340->enter($__internal_9eff4e40061e3c822efcde04f39f458fc716b5cb6ce622018f64a1b3788e4340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/laminarin.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_9eff4e40061e3c822efcde04f39f458fc716b5cb6ce622018f64a1b3788e4340->leave($__internal_9eff4e40061e3c822efcde04f39f458fc716b5cb6ce622018f64a1b3788e4340_prof);

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
        return array (  283 => 93,  279 => 92,  274 => 91,  268 => 90,  257 => 87,  247 => 10,  243 => 9,  239 => 8,  236 => 7,  230 => 6,  218 => 5,  209 => 95,  207 => 90,  203 => 88,  201 => 87,  197 => 85,  188 => 83,  184 => 82,  173 => 73,  167 => 71,  161 => 69,  159 => 68,  155 => 66,  151 => 57,  145 => 56,  140 => 53,  134 => 52,  129 => 49,  118 => 47,  114 => 46,  107 => 44,  104 => 43,  96 => 41,  93 => 40,  89 => 39,  82 => 37,  79 => 36,  71 => 34,  68 => 33,  64 => 32,  54 => 25,  38 => 13,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
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
/*     </head>*/
/*     <body>*/
/*         <nav class="navbar navbar-default bg-dark-brown nav-border">*/
/*         <div class="container-fluid">*/
/*             */
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand c-white" href="{{path('homepage')}}">Laminarin</a>*/
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
/*         */
/*         <div class=metanav>*/
/*             {% for flash_message in app.session.flashBag.get('notice') %}*/
/*             <div class=flash>{{ flash_message }}</div>*/
/*             {% endfor %}*/
/*         </div>*/
/*         */
/*         {% block body %}{% endblock %}*/
/*     </div>*/
/*         */
/*         {% block javascripts %}*/
/*             <script type="text/javascript" src="{{ asset('bundles/js/jquery-2.2.3.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{asset('bundles/js/bootstrap.min.js')}}"></script>*/
/*             <script type="text/javascript" src="{{asset('bundles/js/laminarin.js')}}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
