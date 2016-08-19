<?php

/* form_div_layout.html.twig */
class __TwigTemplate_bb3dbe65a93354d0f1d764b927d801f8ce39192ba77b63198bb81efec5539aa1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e34858c0cc19213aae6a84326a6e09a4b2f68c1f408233da14be1c385572f2a = $this->env->getExtension("native_profiler");
        $__internal_5e34858c0cc19213aae6a84326a6e09a4b2f68c1f408233da14be1c385572f2a->enter($__internal_5e34858c0cc19213aae6a84326a6e09a4b2f68c1f408233da14be1c385572f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 88
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 92
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 96
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 109
        $this->displayBlock('date_widget', $context, $blocks);
        // line 123
        $this->displayBlock('time_widget', $context, $blocks);
        // line 134
        $this->displayBlock('number_widget', $context, $blocks);
        // line 140
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 145
        $this->displayBlock('money_widget', $context, $blocks);
        // line 149
        $this->displayBlock('url_widget', $context, $blocks);
        // line 154
        $this->displayBlock('search_widget', $context, $blocks);
        // line 159
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 164
        $this->displayBlock('password_widget', $context, $blocks);
        // line 169
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 174
        $this->displayBlock('email_widget', $context, $blocks);
        // line 179
        $this->displayBlock('range_widget', $context, $blocks);
        // line 184
        $this->displayBlock('button_widget', $context, $blocks);
        // line 198
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 203
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 210
        $this->displayBlock('form_label', $context, $blocks);
        // line 232
        $this->displayBlock('button_label', $context, $blocks);
        // line 236
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 244
        $this->displayBlock('form_row', $context, $blocks);
        // line 252
        $this->displayBlock('button_row', $context, $blocks);
        // line 258
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 264
        $this->displayBlock('form', $context, $blocks);
        // line 270
        $this->displayBlock('form_start', $context, $blocks);
        // line 283
        $this->displayBlock('form_end', $context, $blocks);
        // line 290
        $this->displayBlock('form_errors', $context, $blocks);
        // line 300
        $this->displayBlock('form_rest', $context, $blocks);
        // line 307
        echo "
";
        // line 310
        $this->displayBlock('form_rows', $context, $blocks);
        // line 316
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 332
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 346
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 360
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_5e34858c0cc19213aae6a84326a6e09a4b2f68c1f408233da14be1c385572f2a->leave($__internal_5e34858c0cc19213aae6a84326a6e09a4b2f68c1f408233da14be1c385572f2a_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_a9997ea84025b61dc462018e02ae7c3e161e930477471d7d5d692ca9060e4d52 = $this->env->getExtension("native_profiler");
        $__internal_a9997ea84025b61dc462018e02ae7c3e161e930477471d7d5d692ca9060e4d52->enter($__internal_a9997ea84025b61dc462018e02ae7c3e161e930477471d7d5d692ca9060e4d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_a9997ea84025b61dc462018e02ae7c3e161e930477471d7d5d692ca9060e4d52->leave($__internal_a9997ea84025b61dc462018e02ae7c3e161e930477471d7d5d692ca9060e4d52_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_708d9ac5c434c9264b842f3256d218c6d7d94eecfc49ff962cebef872ebbf08a = $this->env->getExtension("native_profiler");
        $__internal_708d9ac5c434c9264b842f3256d218c6d7d94eecfc49ff962cebef872ebbf08a->enter($__internal_708d9ac5c434c9264b842f3256d218c6d7d94eecfc49ff962cebef872ebbf08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_708d9ac5c434c9264b842f3256d218c6d7d94eecfc49ff962cebef872ebbf08a->leave($__internal_708d9ac5c434c9264b842f3256d218c6d7d94eecfc49ff962cebef872ebbf08a_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_dad9d5f42a3aec3f83bccdb9678c2645e76dac1a2cf9eabf270c9bb5e529a4b7 = $this->env->getExtension("native_profiler");
        $__internal_dad9d5f42a3aec3f83bccdb9678c2645e76dac1a2cf9eabf270c9bb5e529a4b7->enter($__internal_dad9d5f42a3aec3f83bccdb9678c2645e76dac1a2cf9eabf270c9bb5e529a4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()))) {
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_dad9d5f42a3aec3f83bccdb9678c2645e76dac1a2cf9eabf270c9bb5e529a4b7->leave($__internal_dad9d5f42a3aec3f83bccdb9678c2645e76dac1a2cf9eabf270c9bb5e529a4b7_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_a6ae4a307303f8c69884d1428b49a49c166a1e64f38cc0aa250e74653f6b9364 = $this->env->getExtension("native_profiler");
        $__internal_a6ae4a307303f8c69884d1428b49a49c166a1e64f38cc0aa250e74653f6b9364->enter($__internal_a6ae4a307303f8c69884d1428b49a49c166a1e64f38cc0aa250e74653f6b9364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_a6ae4a307303f8c69884d1428b49a49c166a1e64f38cc0aa250e74653f6b9364->leave($__internal_a6ae4a307303f8c69884d1428b49a49c166a1e64f38cc0aa250e74653f6b9364_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_1a607c4dbf351af6a94566447e54a782f7c286bf83964318da78f70910036d89 = $this->env->getExtension("native_profiler");
        $__internal_1a607c4dbf351af6a94566447e54a782f7c286bf83964318da78f70910036d89->enter($__internal_1a607c4dbf351af6a94566447e54a782f7c286bf83964318da78f70910036d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_1a607c4dbf351af6a94566447e54a782f7c286bf83964318da78f70910036d89->leave($__internal_1a607c4dbf351af6a94566447e54a782f7c286bf83964318da78f70910036d89_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_80ff143c246a38142f4312a34a2d1ca15301b226e0b69a2d4312588252612999 = $this->env->getExtension("native_profiler");
        $__internal_80ff143c246a38142f4312a34a2d1ca15301b226e0b69a2d4312588252612999->enter($__internal_80ff143c246a38142f4312a34a2d1ca15301b226e0b69a2d4312588252612999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_80ff143c246a38142f4312a34a2d1ca15301b226e0b69a2d4312588252612999->leave($__internal_80ff143c246a38142f4312a34a2d1ca15301b226e0b69a2d4312588252612999_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_d3512db76c4efe6fc3fd00196067f97349ba84a52e1815606bda38eb6cad4818 = $this->env->getExtension("native_profiler");
        $__internal_d3512db76c4efe6fc3fd00196067f97349ba84a52e1815606bda38eb6cad4818->enter($__internal_d3512db76c4efe6fc3fd00196067f97349ba84a52e1815606bda38eb6cad4818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_d3512db76c4efe6fc3fd00196067f97349ba84a52e1815606bda38eb6cad4818->leave($__internal_d3512db76c4efe6fc3fd00196067f97349ba84a52e1815606bda38eb6cad4818_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_fc102551637898431674c4000faeed8576d3f077607b672f8da96e5725ed2f16 = $this->env->getExtension("native_profiler");
        $__internal_fc102551637898431674c4000faeed8576d3f077607b672f8da96e5725ed2f16->enter($__internal_fc102551637898431674c4000faeed8576d3f077607b672f8da96e5725ed2f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if ((((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : $this->getContext($context, "placeholder_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) && ( !$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "size", array(), "any", true, true) || ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")) != "")) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))) : ($this->env->getExtension('translator')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_fc102551637898431674c4000faeed8576d3f077607b672f8da96e5725ed2f16->leave($__internal_fc102551637898431674c4000faeed8576d3f077607b672f8da96e5725ed2f16_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_22149c1a81970b7bd9ea5b76a6e77231d8f32daf88a12eb9f400e9983e52765d = $this->env->getExtension("native_profiler");
        $__internal_22149c1a81970b7bd9ea5b76a6e77231d8f32daf88a12eb9f400e9983e52765d->enter($__internal_22149c1a81970b7bd9ea5b76a6e77231d8f32daf88a12eb9f400e9983e52765d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($this->env->getExtension('translator')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                $context["attr"] = $this->getAttribute($context["choice"], "attr", array());
                // line 83
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\" ";
                $this->displayBlock("attributes", $context, $blocks);
                if ($this->env->getExtension('form')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('translator')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_22149c1a81970b7bd9ea5b76a6e77231d8f32daf88a12eb9f400e9983e52765d->leave($__internal_22149c1a81970b7bd9ea5b76a6e77231d8f32daf88a12eb9f400e9983e52765d_prof);

    }

    // line 88
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_cb9fe88bdf133e592aa197673cc57d0f3d5c4496da061ed61ce0a6605e4f8c8f = $this->env->getExtension("native_profiler");
        $__internal_cb9fe88bdf133e592aa197673cc57d0f3d5c4496da061ed61ce0a6605e4f8c8f->enter($__internal_cb9fe88bdf133e592aa197673cc57d0f3d5c4496da061ed61ce0a6605e4f8c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 89
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_cb9fe88bdf133e592aa197673cc57d0f3d5c4496da061ed61ce0a6605e4f8c8f->leave($__internal_cb9fe88bdf133e592aa197673cc57d0f3d5c4496da061ed61ce0a6605e4f8c8f_prof);

    }

    // line 92
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_30c47a62db90217ae14e8113701887082dcd0d21c9e4268363e0fc5143c608b1 = $this->env->getExtension("native_profiler");
        $__internal_30c47a62db90217ae14e8113701887082dcd0d21c9e4268363e0fc5143c608b1->enter($__internal_30c47a62db90217ae14e8113701887082dcd0d21c9e4268363e0fc5143c608b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 93
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_30c47a62db90217ae14e8113701887082dcd0d21c9e4268363e0fc5143c608b1->leave($__internal_30c47a62db90217ae14e8113701887082dcd0d21c9e4268363e0fc5143c608b1_prof);

    }

    // line 96
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_dfcb714e232fcd26295af0799f905584df6dd0385c6c4052598fe4de8d2a695b = $this->env->getExtension("native_profiler");
        $__internal_dfcb714e232fcd26295af0799f905584df6dd0385c6c4052598fe4de8d2a695b->enter($__internal_dfcb714e232fcd26295af0799f905584df6dd0385c6c4052598fe4de8d2a695b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 97
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 98
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 100
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 102
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 103
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
            // line 104
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
            // line 105
            echo "</div>";
        }
        
        $__internal_dfcb714e232fcd26295af0799f905584df6dd0385c6c4052598fe4de8d2a695b->leave($__internal_dfcb714e232fcd26295af0799f905584df6dd0385c6c4052598fe4de8d2a695b_prof);

    }

    // line 109
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_c0c30c7f6b8aaed4b5c330820b042e79b0af05f6403bc38a7ad78e7351a7f117 = $this->env->getExtension("native_profiler");
        $__internal_c0c30c7f6b8aaed4b5c330820b042e79b0af05f6403bc38a7ad78e7351a7f117->enter($__internal_c0c30c7f6b8aaed4b5c330820b042e79b0af05f6403bc38a7ad78e7351a7f117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 110
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 111
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 113
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 114
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 115
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 116
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 117
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 119
            echo "</div>";
        }
        
        $__internal_c0c30c7f6b8aaed4b5c330820b042e79b0af05f6403bc38a7ad78e7351a7f117->leave($__internal_c0c30c7f6b8aaed4b5c330820b042e79b0af05f6403bc38a7ad78e7351a7f117_prof);

    }

    // line 123
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_b90fc7adcd5517c3b48ea65e7f02b940d288d8ce77d75d7fdabe27191c17b5eb = $this->env->getExtension("native_profiler");
        $__internal_b90fc7adcd5517c3b48ea65e7f02b940d288d8ce77d75d7fdabe27191c17b5eb->enter($__internal_b90fc7adcd5517c3b48ea65e7f02b940d288d8ce77d75d7fdabe27191c17b5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 124
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 125
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 127
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 128
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 129
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            // line 130
            echo "        </div>";
        }
        
        $__internal_b90fc7adcd5517c3b48ea65e7f02b940d288d8ce77d75d7fdabe27191c17b5eb->leave($__internal_b90fc7adcd5517c3b48ea65e7f02b940d288d8ce77d75d7fdabe27191c17b5eb_prof);

    }

    // line 134
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_45cdccd32fced54d85c75cfc236d843467d35bcd09184c3755e4de69781b6f30 = $this->env->getExtension("native_profiler");
        $__internal_45cdccd32fced54d85c75cfc236d843467d35bcd09184c3755e4de69781b6f30->enter($__internal_45cdccd32fced54d85c75cfc236d843467d35bcd09184c3755e4de69781b6f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 136
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 137
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_45cdccd32fced54d85c75cfc236d843467d35bcd09184c3755e4de69781b6f30->leave($__internal_45cdccd32fced54d85c75cfc236d843467d35bcd09184c3755e4de69781b6f30_prof);

    }

    // line 140
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_f532e497f4721edd9817f650443538bc23d38683b2e04a6a75a983483950cb3b = $this->env->getExtension("native_profiler");
        $__internal_f532e497f4721edd9817f650443538bc23d38683b2e04a6a75a983483950cb3b->enter($__internal_f532e497f4721edd9817f650443538bc23d38683b2e04a6a75a983483950cb3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 141
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "number")) : ("number"));
        // line 142
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_f532e497f4721edd9817f650443538bc23d38683b2e04a6a75a983483950cb3b->leave($__internal_f532e497f4721edd9817f650443538bc23d38683b2e04a6a75a983483950cb3b_prof);

    }

    // line 145
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_c6610184428c4fd25f3a3d4e025e5c4eb6e476070f2e9068085be4109a7d1d43 = $this->env->getExtension("native_profiler");
        $__internal_c6610184428c4fd25f3a3d4e025e5c4eb6e476070f2e9068085be4109a7d1d43->enter($__internal_c6610184428c4fd25f3a3d4e025e5c4eb6e476070f2e9068085be4109a7d1d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 146
        echo twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_c6610184428c4fd25f3a3d4e025e5c4eb6e476070f2e9068085be4109a7d1d43->leave($__internal_c6610184428c4fd25f3a3d4e025e5c4eb6e476070f2e9068085be4109a7d1d43_prof);

    }

    // line 149
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_4560b3ef4fccc75094c7b3d2f9f2a89e9a1b6528d97dfe6d6b9cdb2b5bdae78f = $this->env->getExtension("native_profiler");
        $__internal_4560b3ef4fccc75094c7b3d2f9f2a89e9a1b6528d97dfe6d6b9cdb2b5bdae78f->enter($__internal_4560b3ef4fccc75094c7b3d2f9f2a89e9a1b6528d97dfe6d6b9cdb2b5bdae78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 150
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "url")) : ("url"));
        // line 151
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_4560b3ef4fccc75094c7b3d2f9f2a89e9a1b6528d97dfe6d6b9cdb2b5bdae78f->leave($__internal_4560b3ef4fccc75094c7b3d2f9f2a89e9a1b6528d97dfe6d6b9cdb2b5bdae78f_prof);

    }

    // line 154
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_0534d31b2c62510377d75c0fd263108f567f890eea23574add4a3876b5ad4ddf = $this->env->getExtension("native_profiler");
        $__internal_0534d31b2c62510377d75c0fd263108f567f890eea23574add4a3876b5ad4ddf->enter($__internal_0534d31b2c62510377d75c0fd263108f567f890eea23574add4a3876b5ad4ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 155
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "search")) : ("search"));
        // line 156
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_0534d31b2c62510377d75c0fd263108f567f890eea23574add4a3876b5ad4ddf->leave($__internal_0534d31b2c62510377d75c0fd263108f567f890eea23574add4a3876b5ad4ddf_prof);

    }

    // line 159
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_5473d5d812d9d1f4c736a127cfce2583939b83aa40d27befa78b0fcfbd8bef8d = $this->env->getExtension("native_profiler");
        $__internal_5473d5d812d9d1f4c736a127cfce2583939b83aa40d27befa78b0fcfbd8bef8d->enter($__internal_5473d5d812d9d1f4c736a127cfce2583939b83aa40d27befa78b0fcfbd8bef8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 160
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 161
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_5473d5d812d9d1f4c736a127cfce2583939b83aa40d27befa78b0fcfbd8bef8d->leave($__internal_5473d5d812d9d1f4c736a127cfce2583939b83aa40d27befa78b0fcfbd8bef8d_prof);

    }

    // line 164
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_130c61c632fff31c68212cdd6eb6075e7472136519da438d32f9e40857c0a35a = $this->env->getExtension("native_profiler");
        $__internal_130c61c632fff31c68212cdd6eb6075e7472136519da438d32f9e40857c0a35a->enter($__internal_130c61c632fff31c68212cdd6eb6075e7472136519da438d32f9e40857c0a35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 165
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "password")) : ("password"));
        // line 166
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_130c61c632fff31c68212cdd6eb6075e7472136519da438d32f9e40857c0a35a->leave($__internal_130c61c632fff31c68212cdd6eb6075e7472136519da438d32f9e40857c0a35a_prof);

    }

    // line 169
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_71c7712a1a631dff973939feb2003d0930dc5889f5a44c58692f7b1d4d615538 = $this->env->getExtension("native_profiler");
        $__internal_71c7712a1a631dff973939feb2003d0930dc5889f5a44c58692f7b1d4d615538->enter($__internal_71c7712a1a631dff973939feb2003d0930dc5889f5a44c58692f7b1d4d615538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_71c7712a1a631dff973939feb2003d0930dc5889f5a44c58692f7b1d4d615538->leave($__internal_71c7712a1a631dff973939feb2003d0930dc5889f5a44c58692f7b1d4d615538_prof);

    }

    // line 174
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_e21bf3e95dd00fd20dcf059cbe1c0b1ce8323a4e71f0be30e1d798dfb1081cdd = $this->env->getExtension("native_profiler");
        $__internal_e21bf3e95dd00fd20dcf059cbe1c0b1ce8323a4e71f0be30e1d798dfb1081cdd->enter($__internal_e21bf3e95dd00fd20dcf059cbe1c0b1ce8323a4e71f0be30e1d798dfb1081cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "email")) : ("email"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e21bf3e95dd00fd20dcf059cbe1c0b1ce8323a4e71f0be30e1d798dfb1081cdd->leave($__internal_e21bf3e95dd00fd20dcf059cbe1c0b1ce8323a4e71f0be30e1d798dfb1081cdd_prof);

    }

    // line 179
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_5abf278fd8f1ed5e293785fb1ca8386bf69354a899a8d207436d21c382defccf = $this->env->getExtension("native_profiler");
        $__internal_5abf278fd8f1ed5e293785fb1ca8386bf69354a899a8d207436d21c382defccf->enter($__internal_5abf278fd8f1ed5e293785fb1ca8386bf69354a899a8d207436d21c382defccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 180
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "range")) : ("range"));
        // line 181
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_5abf278fd8f1ed5e293785fb1ca8386bf69354a899a8d207436d21c382defccf->leave($__internal_5abf278fd8f1ed5e293785fb1ca8386bf69354a899a8d207436d21c382defccf_prof);

    }

    // line 184
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_93ba361c7eb560cfba6582a615726d70730185d58919867391224357bda6c663 = $this->env->getExtension("native_profiler");
        $__internal_93ba361c7eb560cfba6582a615726d70730185d58919867391224357bda6c663->enter($__internal_93ba361c7eb560cfba6582a615726d70730185d58919867391224357bda6c663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 185
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 186
            if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                // line 187
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 188
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 189
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 192
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 195
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "</button>";
        
        $__internal_93ba361c7eb560cfba6582a615726d70730185d58919867391224357bda6c663->leave($__internal_93ba361c7eb560cfba6582a615726d70730185d58919867391224357bda6c663_prof);

    }

    // line 198
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_7195d44f4f722a56110bff10addbe307e6b9cfd572a38f755c8bb6fd1dcc63d1 = $this->env->getExtension("native_profiler");
        $__internal_7195d44f4f722a56110bff10addbe307e6b9cfd572a38f755c8bb6fd1dcc63d1->enter($__internal_7195d44f4f722a56110bff10addbe307e6b9cfd572a38f755c8bb6fd1dcc63d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 200
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_7195d44f4f722a56110bff10addbe307e6b9cfd572a38f755c8bb6fd1dcc63d1->leave($__internal_7195d44f4f722a56110bff10addbe307e6b9cfd572a38f755c8bb6fd1dcc63d1_prof);

    }

    // line 203
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_61c837f646d44182950e1c27ba1f406bff2dcffb08aa327f5611d5e23781329d = $this->env->getExtension("native_profiler");
        $__internal_61c837f646d44182950e1c27ba1f406bff2dcffb08aa327f5611d5e23781329d->enter($__internal_61c837f646d44182950e1c27ba1f406bff2dcffb08aa327f5611d5e23781329d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 205
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_61c837f646d44182950e1c27ba1f406bff2dcffb08aa327f5611d5e23781329d->leave($__internal_61c837f646d44182950e1c27ba1f406bff2dcffb08aa327f5611d5e23781329d_prof);

    }

    // line 210
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_5df906d1ceb85addc20c910d5563ce403e1c7281d0c977d9ff0cbdf38fbc26f1 = $this->env->getExtension("native_profiler");
        $__internal_5df906d1ceb85addc20c910d5563ce403e1c7281d0c977d9ff0cbdf38fbc26f1->enter($__internal_5df906d1ceb85addc20c910d5563ce403e1c7281d0c977d9ff0cbdf38fbc26f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 211
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 212
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 213
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            }
            // line 215
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 216
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 218
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 219
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 220
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 221
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 222
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 225
                    $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 228
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_5df906d1ceb85addc20c910d5563ce403e1c7281d0c977d9ff0cbdf38fbc26f1->leave($__internal_5df906d1ceb85addc20c910d5563ce403e1c7281d0c977d9ff0cbdf38fbc26f1_prof);

    }

    // line 232
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_6eb15ba81533557474fc5895567e22415f2d4ad811ce3cee72c0c97152c40fe9 = $this->env->getExtension("native_profiler");
        $__internal_6eb15ba81533557474fc5895567e22415f2d4ad811ce3cee72c0c97152c40fe9->enter($__internal_6eb15ba81533557474fc5895567e22415f2d4ad811ce3cee72c0c97152c40fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_6eb15ba81533557474fc5895567e22415f2d4ad811ce3cee72c0c97152c40fe9->leave($__internal_6eb15ba81533557474fc5895567e22415f2d4ad811ce3cee72c0c97152c40fe9_prof);

    }

    // line 236
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_63b07bc0655d34ac41e462301493ef73ccad88a9fa4e69af307f15295229eb78 = $this->env->getExtension("native_profiler");
        $__internal_63b07bc0655d34ac41e462301493ef73ccad88a9fa4e69af307f15295229eb78->enter($__internal_63b07bc0655d34ac41e462301493ef73ccad88a9fa4e69af307f15295229eb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 241
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_63b07bc0655d34ac41e462301493ef73ccad88a9fa4e69af307f15295229eb78->leave($__internal_63b07bc0655d34ac41e462301493ef73ccad88a9fa4e69af307f15295229eb78_prof);

    }

    // line 244
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9f990a06cf6ea1f5476a7ccdba4fd6c3a93bd8614bd72a36a091097c28538f57 = $this->env->getExtension("native_profiler");
        $__internal_9f990a06cf6ea1f5476a7ccdba4fd6c3a93bd8614bd72a36a091097c28538f57->enter($__internal_9f990a06cf6ea1f5476a7ccdba4fd6c3a93bd8614bd72a36a091097c28538f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 245
        echo "<div>";
        // line 246
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 247
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 248
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 249
        echo "</div>";
        
        $__internal_9f990a06cf6ea1f5476a7ccdba4fd6c3a93bd8614bd72a36a091097c28538f57->leave($__internal_9f990a06cf6ea1f5476a7ccdba4fd6c3a93bd8614bd72a36a091097c28538f57_prof);

    }

    // line 252
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_0dc739972b8061429cc3f89ae32bf378da9117cc5ddc61ea438c628362c329fb = $this->env->getExtension("native_profiler");
        $__internal_0dc739972b8061429cc3f89ae32bf378da9117cc5ddc61ea438c628362c329fb->enter($__internal_0dc739972b8061429cc3f89ae32bf378da9117cc5ddc61ea438c628362c329fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 253
        echo "<div>";
        // line 254
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 255
        echo "</div>";
        
        $__internal_0dc739972b8061429cc3f89ae32bf378da9117cc5ddc61ea438c628362c329fb->leave($__internal_0dc739972b8061429cc3f89ae32bf378da9117cc5ddc61ea438c628362c329fb_prof);

    }

    // line 258
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_9a62ff3e14c55f6a1fd392c38be7ae39f122de3e08375dbb6c0fa64b470fe31f = $this->env->getExtension("native_profiler");
        $__internal_9a62ff3e14c55f6a1fd392c38be7ae39f122de3e08375dbb6c0fa64b470fe31f->enter($__internal_9a62ff3e14c55f6a1fd392c38be7ae39f122de3e08375dbb6c0fa64b470fe31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 259
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        
        $__internal_9a62ff3e14c55f6a1fd392c38be7ae39f122de3e08375dbb6c0fa64b470fe31f->leave($__internal_9a62ff3e14c55f6a1fd392c38be7ae39f122de3e08375dbb6c0fa64b470fe31f_prof);

    }

    // line 264
    public function block_form($context, array $blocks = array())
    {
        $__internal_ccb6fc3aaaf9dde255c0b9338a4826ea38a8f2c9df6685d3ad1bb170623efab0 = $this->env->getExtension("native_profiler");
        $__internal_ccb6fc3aaaf9dde255c0b9338a4826ea38a8f2c9df6685d3ad1bb170623efab0->enter($__internal_ccb6fc3aaaf9dde255c0b9338a4826ea38a8f2c9df6685d3ad1bb170623efab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 265
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        // line 266
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 267
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_ccb6fc3aaaf9dde255c0b9338a4826ea38a8f2c9df6685d3ad1bb170623efab0->leave($__internal_ccb6fc3aaaf9dde255c0b9338a4826ea38a8f2c9df6685d3ad1bb170623efab0_prof);

    }

    // line 270
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_984dd46611bb86869fea21e9655f6564183126cb69e526211b396a5207f2e660 = $this->env->getExtension("native_profiler");
        $__internal_984dd46611bb86869fea21e9655f6564183126cb69e526211b396a5207f2e660->enter($__internal_984dd46611bb86869fea21e9655f6564183126cb69e526211b396a5207f2e660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 271
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
        // line 272
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 273
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
        } else {
            // line 275
            $context["form_method"] = "POST";
        }
        // line 277
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method"))), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 278
        if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
            // line 279
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
            echo "\" />";
        }
        
        $__internal_984dd46611bb86869fea21e9655f6564183126cb69e526211b396a5207f2e660->leave($__internal_984dd46611bb86869fea21e9655f6564183126cb69e526211b396a5207f2e660_prof);

    }

    // line 283
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_7a601a502b2624260a0cc0e9d29d9cf599424d18a50d4e2fba4dd689086e676d = $this->env->getExtension("native_profiler");
        $__internal_7a601a502b2624260a0cc0e9d29d9cf599424d18a50d4e2fba4dd689086e676d->enter($__internal_7a601a502b2624260a0cc0e9d29d9cf599424d18a50d4e2fba4dd689086e676d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 284
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) ? $context["render_rest"] : $this->getContext($context, "render_rest")))) {
            // line 285
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        }
        // line 287
        echo "</form>";
        
        $__internal_7a601a502b2624260a0cc0e9d29d9cf599424d18a50d4e2fba4dd689086e676d->leave($__internal_7a601a502b2624260a0cc0e9d29d9cf599424d18a50d4e2fba4dd689086e676d_prof);

    }

    // line 290
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_af23dc5f5e502ab3a2a396fc662530324b62ff64f29c24208c01ad9b1dcb0154 = $this->env->getExtension("native_profiler");
        $__internal_af23dc5f5e502ab3a2a396fc662530324b62ff64f29c24208c01ad9b1dcb0154->enter($__internal_af23dc5f5e502ab3a2a396fc662530324b62ff64f29c24208c01ad9b1dcb0154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 291
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 292
            echo "<ul>";
            // line 293
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 294
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 296
            echo "</ul>";
        }
        
        $__internal_af23dc5f5e502ab3a2a396fc662530324b62ff64f29c24208c01ad9b1dcb0154->leave($__internal_af23dc5f5e502ab3a2a396fc662530324b62ff64f29c24208c01ad9b1dcb0154_prof);

    }

    // line 300
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_6c89eb4775a7f0fc85de3518855e1eb5533500f595cb2457d01f01628a09f8a5 = $this->env->getExtension("native_profiler");
        $__internal_6c89eb4775a7f0fc85de3518855e1eb5533500f595cb2457d01f01628a09f8a5->enter($__internal_6c89eb4775a7f0fc85de3518855e1eb5533500f595cb2457d01f01628a09f8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 301
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 302
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 303
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6c89eb4775a7f0fc85de3518855e1eb5533500f595cb2457d01f01628a09f8a5->leave($__internal_6c89eb4775a7f0fc85de3518855e1eb5533500f595cb2457d01f01628a09f8a5_prof);

    }

    // line 310
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_81582031de5369cc348f214235a19ef254ef867d5e723a3101fa9a27eea10edb = $this->env->getExtension("native_profiler");
        $__internal_81582031de5369cc348f214235a19ef254ef867d5e723a3101fa9a27eea10edb->enter($__internal_81582031de5369cc348f214235a19ef254ef867d5e723a3101fa9a27eea10edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 311
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 312
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_81582031de5369cc348f214235a19ef254ef867d5e723a3101fa9a27eea10edb->leave($__internal_81582031de5369cc348f214235a19ef254ef867d5e723a3101fa9a27eea10edb_prof);

    }

    // line 316
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_da343eaa822c793768e80eb63278149c2f4398a89ea400d3b08d5500391a3deb = $this->env->getExtension("native_profiler");
        $__internal_da343eaa822c793768e80eb63278149c2f4398a89ea400d3b08d5500391a3deb->enter($__internal_da343eaa822c793768e80eb63278149c2f4398a89ea400d3b08d5500391a3deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 317
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 318
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 319
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 320
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 321
            echo " ";
            // line 322
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 323
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 324
$context["attrvalue"] === true)) {
                // line 325
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 326
$context["attrvalue"] === false)) {
                // line 327
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_da343eaa822c793768e80eb63278149c2f4398a89ea400d3b08d5500391a3deb->leave($__internal_da343eaa822c793768e80eb63278149c2f4398a89ea400d3b08d5500391a3deb_prof);

    }

    // line 332
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_4efaa1a0c5e821c6e2f2c1a595f828b410d6c464a485c6b5a017b0ac1ea97246 = $this->env->getExtension("native_profiler");
        $__internal_4efaa1a0c5e821c6e2f2c1a595f828b410d6c464a485c6b5a017b0ac1ea97246->enter($__internal_4efaa1a0c5e821c6e2f2c1a595f828b410d6c464a485c6b5a017b0ac1ea97246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 333
        if ( !twig_test_empty((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 334
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 335
            echo " ";
            // line 336
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 337
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 338
$context["attrvalue"] === true)) {
                // line 339
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 340
$context["attrvalue"] === false)) {
                // line 341
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_4efaa1a0c5e821c6e2f2c1a595f828b410d6c464a485c6b5a017b0ac1ea97246->leave($__internal_4efaa1a0c5e821c6e2f2c1a595f828b410d6c464a485c6b5a017b0ac1ea97246_prof);

    }

    // line 346
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_f4f108c9d489537701cdade72e564788d461f8c5e7da36ac54879b14d51292d4 = $this->env->getExtension("native_profiler");
        $__internal_f4f108c9d489537701cdade72e564788d461f8c5e7da36ac54879b14d51292d4->enter($__internal_f4f108c9d489537701cdade72e564788d461f8c5e7da36ac54879b14d51292d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 347
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 348
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 349
            echo " ";
            // line 350
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 351
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 352
$context["attrvalue"] === true)) {
                // line 353
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 354
$context["attrvalue"] === false)) {
                // line 355
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f4f108c9d489537701cdade72e564788d461f8c5e7da36ac54879b14d51292d4->leave($__internal_f4f108c9d489537701cdade72e564788d461f8c5e7da36ac54879b14d51292d4_prof);

    }

    // line 360
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_4cc8df7a6185b75c027489fffbe585762104dfbfb2cb8a4fe7415c67d9b2ba13 = $this->env->getExtension("native_profiler");
        $__internal_4cc8df7a6185b75c027489fffbe585762104dfbfb2cb8a4fe7415c67d9b2ba13->enter($__internal_4cc8df7a6185b75c027489fffbe585762104dfbfb2cb8a4fe7415c67d9b2ba13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 361
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 362
            echo " ";
            // line 363
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 364
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 365
$context["attrvalue"] === true)) {
                // line 366
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 367
$context["attrvalue"] === false)) {
                // line 368
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_4cc8df7a6185b75c027489fffbe585762104dfbfb2cb8a4fe7415c67d9b2ba13->leave($__internal_4cc8df7a6185b75c027489fffbe585762104dfbfb2cb8a4fe7415c67d9b2ba13_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1266 => 368,  1264 => 367,  1259 => 366,  1257 => 365,  1252 => 364,  1250 => 363,  1248 => 362,  1244 => 361,  1238 => 360,  1223 => 355,  1221 => 354,  1216 => 353,  1214 => 352,  1209 => 351,  1207 => 350,  1205 => 349,  1201 => 348,  1192 => 347,  1186 => 346,  1171 => 341,  1169 => 340,  1164 => 339,  1162 => 338,  1157 => 337,  1155 => 336,  1153 => 335,  1149 => 334,  1143 => 333,  1137 => 332,  1122 => 327,  1120 => 326,  1115 => 325,  1113 => 324,  1108 => 323,  1106 => 322,  1104 => 321,  1100 => 320,  1096 => 319,  1092 => 318,  1086 => 317,  1080 => 316,  1069 => 312,  1065 => 311,  1059 => 310,  1047 => 303,  1045 => 302,  1041 => 301,  1035 => 300,  1027 => 296,  1019 => 294,  1015 => 293,  1013 => 292,  1011 => 291,  1005 => 290,  998 => 287,  995 => 285,  993 => 284,  987 => 283,  977 => 279,  975 => 278,  948 => 277,  945 => 275,  942 => 273,  940 => 272,  938 => 271,  932 => 270,  925 => 267,  923 => 266,  921 => 265,  915 => 264,  908 => 259,  902 => 258,  895 => 255,  893 => 254,  891 => 253,  885 => 252,  878 => 249,  876 => 248,  874 => 247,  872 => 246,  870 => 245,  864 => 244,  857 => 241,  851 => 236,  840 => 232,  817 => 228,  813 => 225,  810 => 222,  809 => 221,  808 => 220,  806 => 219,  804 => 218,  801 => 216,  799 => 215,  796 => 213,  794 => 212,  792 => 211,  786 => 210,  779 => 205,  777 => 204,  771 => 203,  764 => 200,  762 => 199,  756 => 198,  743 => 195,  739 => 192,  736 => 189,  735 => 188,  734 => 187,  732 => 186,  730 => 185,  724 => 184,  717 => 181,  715 => 180,  709 => 179,  702 => 176,  700 => 175,  694 => 174,  687 => 171,  685 => 170,  679 => 169,  672 => 166,  670 => 165,  664 => 164,  656 => 161,  654 => 160,  648 => 159,  641 => 156,  639 => 155,  633 => 154,  626 => 151,  624 => 150,  618 => 149,  611 => 146,  605 => 145,  598 => 142,  596 => 141,  590 => 140,  583 => 137,  581 => 136,  575 => 134,  567 => 130,  557 => 129,  552 => 128,  550 => 127,  547 => 125,  545 => 124,  539 => 123,  531 => 119,  529 => 117,  528 => 116,  527 => 115,  526 => 114,  522 => 113,  519 => 111,  517 => 110,  511 => 109,  503 => 105,  501 => 104,  499 => 103,  497 => 102,  495 => 101,  491 => 100,  488 => 98,  486 => 97,  480 => 96,  463 => 93,  457 => 92,  440 => 89,  434 => 88,  405 => 83,  403 => 82,  400 => 80,  398 => 79,  396 => 78,  391 => 77,  389 => 76,  372 => 75,  366 => 74,  359 => 71,  357 => 70,  355 => 69,  349 => 66,  347 => 65,  345 => 64,  343 => 63,  341 => 62,  332 => 60,  330 => 59,  323 => 58,  320 => 56,  318 => 55,  312 => 54,  305 => 51,  299 => 49,  297 => 48,  293 => 47,  289 => 46,  283 => 45,  275 => 41,  272 => 39,  270 => 38,  264 => 37,  253 => 34,  247 => 33,  240 => 30,  237 => 28,  235 => 27,  229 => 26,  222 => 23,  220 => 22,  218 => 21,  215 => 19,  213 => 18,  209 => 17,  203 => 16,  186 => 13,  184 => 12,  178 => 11,  170 => 7,  167 => 5,  165 => 4,  159 => 3,  152 => 360,  150 => 346,  148 => 332,  146 => 316,  144 => 310,  141 => 307,  139 => 300,  137 => 290,  135 => 283,  133 => 270,  131 => 264,  129 => 258,  127 => 252,  125 => 244,  123 => 236,  121 => 232,  119 => 210,  117 => 203,  115 => 198,  113 => 184,  111 => 179,  109 => 174,  107 => 169,  105 => 164,  103 => 159,  101 => 154,  99 => 149,  97 => 145,  95 => 140,  93 => 134,  91 => 123,  89 => 109,  87 => 96,  85 => 92,  83 => 88,  81 => 74,  79 => 54,  77 => 45,  75 => 37,  73 => 33,  71 => 26,  69 => 16,  67 => 11,  65 => 3,);
    }
}
/* {# Widgets #}*/
/* */
/* {%- block form_widget -%}*/
/*     {% if compound %}*/
/*         {{- block('form_widget_compound') -}}*/
/*     {% else %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% endif %}*/
/* {%- endblock form_widget -%}*/
/* */
/* {%- block form_widget_simple -%}*/
/*     {%- set type = type|default('text') -%}*/
/*     <input type="{{ type }}" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}/>*/
/* {%- endblock form_widget_simple -%}*/
/* */
/* {%- block form_widget_compound -%}*/
/*     <div {{ block('widget_container_attributes') }}>*/
/*         {%- if form.parent is empty -%}*/
/*             {{ form_errors(form) }}*/
/*         {%- endif -%}*/
/*         {{- block('form_rows') -}}*/
/*         {{- form_rest(form) -}}*/
/*     </div>*/
/* {%- endblock form_widget_compound -%}*/
/* */
/* {%- block collection_widget -%}*/
/*     {% if prototype is defined %}*/
/*         {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}*/
/*     {% endif %}*/
/*     {{- block('form_widget') -}}*/
/* {%- endblock collection_widget -%}*/
/* */
/* {%- block textarea_widget -%}*/
/*     <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>*/
/* {%- endblock textarea_widget -%}*/
/* */
/* {%- block choice_widget -%}*/
/*     {% if expanded %}*/
/*         {{- block('choice_widget_expanded') -}}*/
/*     {% else %}*/
/*         {{- block('choice_widget_collapsed') -}}*/
/*     {% endif %}*/
/* {%- endblock choice_widget -%}*/
/* */
/* {%- block choice_widget_expanded -%}*/
/*     <div {{ block('widget_container_attributes') }}>*/
/*     {%- for child in form %}*/
/*         {{- form_widget(child) -}}*/
/*         {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}*/
/*     {% endfor -%}*/
/*     </div>*/
/* {%- endblock choice_widget_expanded -%}*/
/* */
/* {%- block choice_widget_collapsed -%}*/
/*     {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}*/
/*         {% set required = false %}*/
/*     {%- endif -%}*/
/*     <select {{ block('widget_attributes') }}{% if multiple %} multiple="multiple"{% endif %}>*/
/*         {%- if placeholder is not none -%}*/
/*             <option value=""{% if required and value is empty %} selected="selected"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>*/
/*         {%- endif -%}*/
/*         {%- if preferred_choices|length > 0 -%}*/
/*             {% set options = preferred_choices %}*/
/*             {{- block('choice_widget_options') -}}*/
/*             {%- if choices|length > 0 and separator is not none -%}*/
/*                 <option disabled="disabled">{{ separator }}</option>*/
/*             {%- endif -%}*/
/*         {%- endif -%}*/
/*         {%- set options = choices -%}*/
/*         {{- block('choice_widget_options') -}}*/
/*     </select>*/
/* {%- endblock choice_widget_collapsed -%}*/
/* */
/* {%- block choice_widget_options -%}*/
/*     {% for group_label, choice in options %}*/
/*         {%- if choice is iterable -%}*/
/*             <optgroup label="{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}">*/
/*                 {% set options = choice %}*/
/*                 {{- block('choice_widget_options') -}}*/
/*             </optgroup>*/
/*         {%- else -%}*/
/*             {% set attr = choice.attr %}*/
/*             <option value="{{ choice.value }}" {{ block('attributes') }}{% if choice is selectedchoice(value) %} selected="selected"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>*/
/*         {%- endif -%}*/
/*     {% endfor %}*/
/* {%- endblock choice_widget_options -%}*/
/* */
/* {%- block checkbox_widget -%}*/
/*     <input type="checkbox" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %} />*/
/* {%- endblock checkbox_widget -%}*/
/* */
/* {%- block radio_widget -%}*/
/*     <input type="radio" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %} />*/
/* {%- endblock radio_widget -%}*/
/* */
/* {%- block datetime_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {%- else -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{- form_errors(form.date) -}}*/
/*             {{- form_errors(form.time) -}}*/
/*             {{- form_widget(form.date) -}}*/
/*             {{- form_widget(form.time) -}}*/
/*         </div>*/
/*     {%- endif -%}*/
/* {%- endblock datetime_widget -%}*/
/* */
/* {%- block date_widget -%}*/
/*     {%- if widget == 'single_text' -%}*/
/*         {{ block('form_widget_simple') }}*/
/*     {%- else -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{- date_pattern|replace({*/
/*                 '{{ year }}':  form_widget(form.year),*/
/*                 '{{ month }}': form_widget(form.month),*/
/*                 '{{ day }}':   form_widget(form.day),*/
/*             })|raw -}}*/
/*         </div>*/
/*     {%- endif -%}*/
/* {%- endblock date_widget -%}*/
/* */
/* {%- block time_widget -%}*/
/*     {%- if widget == 'single_text' -%}*/
/*         {{ block('form_widget_simple') }}*/
/*     {%- else -%}*/
/*         {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}*/
/*         </div>*/
/*     {%- endif -%}*/
/* {%- endblock time_widget -%}*/
/* */
/* {%- block number_widget -%}*/
/*     {# type="number" doesn't work with floats #}*/
/*     {%- set type = type|default('text') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock number_widget -%}*/
/* */
/* {%- block integer_widget -%}*/
/*     {%- set type = type|default('number') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock integer_widget -%}*/
/* */
/* {%- block money_widget -%}*/
/*     {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}*/
/* {%- endblock money_widget -%}*/
/* */
/* {%- block url_widget -%}*/
/*     {%- set type = type|default('url') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock url_widget -%}*/
/* */
/* {%- block search_widget -%}*/
/*     {%- set type = type|default('search') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock search_widget -%}*/
/* */
/* {%- block percent_widget -%}*/
/*     {%- set type = type|default('text') -%}*/
/*     {{ block('form_widget_simple') }} %*/
/* {%- endblock percent_widget -%}*/
/* */
/* {%- block password_widget -%}*/
/*     {%- set type = type|default('password') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock password_widget -%}*/
/* */
/* {%- block hidden_widget -%}*/
/*     {%- set type = type|default('hidden') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock hidden_widget -%}*/
/* */
/* {%- block email_widget -%}*/
/*     {%- set type = type|default('email') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock email_widget -%}*/
/* */
/* {%- block range_widget -%}*/
/*     {% set type = type|default('range') %}*/
/*     {{- block('form_widget_simple') -}}*/
/* {%- endblock range_widget %}*/
/* */
/* {%- block button_widget -%}*/
/*     {%- if label is empty -%}*/
/*         {%- if label_format is not empty -%}*/
/*             {% set label = label_format|replace({*/
/*                 '%name%': name,*/
/*                 '%id%': id,*/
/*             }) %}*/
/*         {%- else -%}*/
/*             {% set label = name|humanize %}*/
/*         {%- endif -%}*/
/*     {%- endif -%}*/
/*     <button type="{{ type|default('button') }}" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>*/
/* {%- endblock button_widget -%}*/
/* */
/* {%- block submit_widget -%}*/
/*     {%- set type = type|default('submit') -%}*/
/*     {{ block('button_widget') }}*/
/* {%- endblock submit_widget -%}*/
/* */
/* {%- block reset_widget -%}*/
/*     {%- set type = type|default('reset') -%}*/
/*     {{ block('button_widget') }}*/
/* {%- endblock reset_widget -%}*/
/* */
/* {# Labels #}*/
/* */
/* {%- block form_label -%}*/
/*     {% if label is not same as(false) -%}*/
/*         {% if not compound -%}*/
/*             {% set label_attr = label_attr|merge({'for': id}) %}*/
/*         {%- endif -%}*/
/*         {% if required -%}*/
/*             {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*         {%- endif -%}*/
/*         {% if label is empty -%}*/
/*             {%- if label_format is not empty -%}*/
/*                 {% set label = label_format|replace({*/
/*                     '%name%': name,*/
/*                     '%id%': id,*/
/*                 }) %}*/
/*             {%- else -%}*/
/*                 {% set label = name|humanize %}*/
/*             {%- endif -%}*/
/*         {%- endif -%}*/
/*         <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>*/
/*     {%- endif -%}*/
/* {%- endblock form_label -%}*/
/* */
/* {%- block button_label -%}{%- endblock -%}*/
/* */
/* {# Rows #}*/
/* */
/* {%- block repeated_row -%}*/
/*     {#*/
/*     No need to render the errors here, as all errors are mapped*/
/*     to the first child (see RepeatedTypeValidatorExtension).*/
/*     #}*/
/*     {{- block('form_rows') -}}*/
/* {%- endblock repeated_row -%}*/
/* */
/* {%- block form_row -%}*/
/*     <div>*/
/*         {{- form_label(form) -}}*/
/*         {{- form_errors(form) -}}*/
/*         {{- form_widget(form) -}}*/
/*     </div>*/
/* {%- endblock form_row -%}*/
/* */
/* {%- block button_row -%}*/
/*     <div>*/
/*         {{- form_widget(form) -}}*/
/*     </div>*/
/* {%- endblock button_row -%}*/
/* */
/* {%- block hidden_row -%}*/
/*     {{ form_widget(form) }}*/
/* {%- endblock hidden_row -%}*/
/* */
/* {# Misc #}*/
/* */
/* {%- block form -%}*/
/*     {{ form_start(form) }}*/
/*         {{- form_widget(form) -}}*/
/*     {{ form_end(form) }}*/
/* {%- endblock form -%}*/
/* */
/* {%- block form_start -%}*/
/*     {% set method = method|upper %}*/
/*     {%- if method in ["GET", "POST"] -%}*/
/*         {% set form_method = method %}*/
/*     {%- else -%}*/
/*         {% set form_method = "POST" %}*/
/*     {%- endif -%}*/
/*     <form name="{{ name }}" method="{{ form_method|lower }}"{% if action != '' %} action="{{ action }}"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}{% if multipart %} enctype="multipart/form-data"{% endif %}>*/
/*     {%- if form_method != method -%}*/
/*         <input type="hidden" name="_method" value="{{ method }}" />*/
/*     {%- endif -%}*/
/* {%- endblock form_start -%}*/
/* */
/* {%- block form_end -%}*/
/*     {%- if not render_rest is defined or render_rest -%}*/
/*         {{ form_rest(form) }}*/
/*     {%- endif -%}*/
/*     </form>*/
/* {%- endblock form_end -%}*/
/* */
/* {%- block form_errors -%}*/
/*     {%- if errors|length > 0 -%}*/
/*     <ul>*/
/*         {%- for error in errors -%}*/
/*             <li>{{ error.message }}</li>*/
/*         {%- endfor -%}*/
/*     </ul>*/
/*     {%- endif -%}*/
/* {%- endblock form_errors -%}*/
/* */
/* {%- block form_rest -%}*/
/*     {% for child in form -%}*/
/*         {% if not child.rendered %}*/
/*             {{- form_row(child) -}}*/
/*         {% endif %}*/
/*     {%- endfor %}*/
/* {% endblock form_rest %}*/
/* */
/* {# Support #}*/
/* */
/* {%- block form_rows -%}*/
/*     {% for child in form %}*/
/*         {{- form_row(child) -}}*/
/*     {% endfor %}*/
/* {%- endblock form_rows -%}*/
/* */
/* {%- block widget_attributes -%}*/
/*     id="{{ id }}" name="{{ full_name }}"*/
/*     {%- if disabled %} disabled="disabled"{% endif -%}*/
/*     {%- if required %} required="required"{% endif -%}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock widget_attributes -%}*/
/* */
/* {%- block widget_container_attributes -%}*/
/*     {%- if id is not empty %}id="{{ id }}"{% endif -%}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock widget_container_attributes -%}*/
/* */
/* {%- block button_attributes -%}*/
/*     id="{{ id }}" name="{{ full_name }}"{% if disabled %} disabled="disabled"{% endif -%}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock button_attributes -%}*/
/* */
/* {% block attributes -%}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock attributes -%}*/
/* */
