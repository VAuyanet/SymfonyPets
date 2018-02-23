<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_ab405d075226a12bd25337e39532cee7652324a2fbb7b48236dd0aa5e50a3bbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'choice_label' => array($this, 'block_choice_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'form_row' => array($this, 'block_form_row'),
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1b46184d558243d66008763daace9e525e3163d06320bc625c46999c7f1ecb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1b46184d558243d66008763daace9e525e3163d06320bc625c46999c7f1ecb0->enter($__internal_b1b46184d558243d66008763daace9e525e3163d06320bc625c46999c7f1ecb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_c31d2f79b0d39c2c5d671c7981973c401af7a09859e7070cffc044e2f1b3b2fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c31d2f79b0d39c2c5d671c7981973c401af7a09859e7070cffc044e2f1b3b2fe->enter($__internal_c31d2f79b0d39c2c5d671c7981973c401af7a09859e7070cffc044e2f1b3b2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1b46184d558243d66008763daace9e525e3163d06320bc625c46999c7f1ecb0->leave($__internal_b1b46184d558243d66008763daace9e525e3163d06320bc625c46999c7f1ecb0_prof);

        
        $__internal_c31d2f79b0d39c2c5d671c7981973c401af7a09859e7070cffc044e2f1b3b2fe->leave($__internal_c31d2f79b0d39c2c5d671c7981973c401af7a09859e7070cffc044e2f1b3b2fe_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_5bf60103ad9459579095b970fab072ae4f354878f0df959903a19effa7f3e275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bf60103ad9459579095b970fab072ae4f354878f0df959903a19effa7f3e275->enter($__internal_5bf60103ad9459579095b970fab072ae4f354878f0df959903a19effa7f3e275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_b93b71b4d87f2ff00c4b1cf04fc94e46bd73ac866cff25b96943888aa1304a5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b93b71b4d87f2ff00c4b1cf04fc94e46bd73ac866cff25b96943888aa1304a5c->enter($__internal_b93b71b4d87f2ff00c4b1cf04fc94e46bd73ac866cff25b96943888aa1304a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_b93b71b4d87f2ff00c4b1cf04fc94e46bd73ac866cff25b96943888aa1304a5c->leave($__internal_b93b71b4d87f2ff00c4b1cf04fc94e46bd73ac866cff25b96943888aa1304a5c_prof);

        
        $__internal_5bf60103ad9459579095b970fab072ae4f354878f0df959903a19effa7f3e275->leave($__internal_5bf60103ad9459579095b970fab072ae4f354878f0df959903a19effa7f3e275_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_a3b724bb28109490bd4a490629842b978578ed4790d1730acf7342756ff997b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3b724bb28109490bd4a490629842b978578ed4790d1730acf7342756ff997b1->enter($__internal_a3b724bb28109490bd4a490629842b978578ed4790d1730acf7342756ff997b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_2c609d15d13e13a714779efd718835dc0ac794b6b7173f602bca06b9d3bb066d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c609d15d13e13a714779efd718835dc0ac794b6b7173f602bca06b9d3bb066d->enter($__internal_2c609d15d13e13a714779efd718835dc0ac794b6b7173f602bca06b9d3bb066d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_2c609d15d13e13a714779efd718835dc0ac794b6b7173f602bca06b9d3bb066d->leave($__internal_2c609d15d13e13a714779efd718835dc0ac794b6b7173f602bca06b9d3bb066d_prof);

        
        $__internal_a3b724bb28109490bd4a490629842b978578ed4790d1730acf7342756ff997b1->leave($__internal_a3b724bb28109490bd4a490629842b978578ed4790d1730acf7342756ff997b1_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_e02ee6a0e1ed76f9827ca6bdfb36d0057da3b9aa74d3740ac30b8e13c793b04a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e02ee6a0e1ed76f9827ca6bdfb36d0057da3b9aa74d3740ac30b8e13c793b04a->enter($__internal_e02ee6a0e1ed76f9827ca6bdfb36d0057da3b9aa74d3740ac30b8e13c793b04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_b85ea8059c564b0411b673b5b6d9f7bc7357a27bb2e2fb9e387134150b010c21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b85ea8059c564b0411b673b5b6d9f7bc7357a27bb2e2fb9e387134150b010c21->enter($__internal_b85ea8059c564b0411b673b5b6d9f7bc7357a27bb2e2fb9e387134150b010c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_b85ea8059c564b0411b673b5b6d9f7bc7357a27bb2e2fb9e387134150b010c21->leave($__internal_b85ea8059c564b0411b673b5b6d9f7bc7357a27bb2e2fb9e387134150b010c21_prof);

        
        $__internal_e02ee6a0e1ed76f9827ca6bdfb36d0057da3b9aa74d3740ac30b8e13c793b04a->leave($__internal_e02ee6a0e1ed76f9827ca6bdfb36d0057da3b9aa74d3740ac30b8e13c793b04a_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_5873da1cf4c48bf2a68d546e06e62ff6a146836b25a59a924ccc49a2aec3a2a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5873da1cf4c48bf2a68d546e06e62ff6a146836b25a59a924ccc49a2aec3a2a8->enter($__internal_5873da1cf4c48bf2a68d546e06e62ff6a146836b25a59a924ccc49a2aec3a2a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_21b613e761ed17feed5179407cbe4cb4b0338cde1319694bf29e1a639e91b1bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21b613e761ed17feed5179407cbe4cb4b0338cde1319694bf29e1a639e91b1bc->enter($__internal_21b613e761ed17feed5179407cbe4cb4b0338cde1319694bf29e1a639e91b1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_21b613e761ed17feed5179407cbe4cb4b0338cde1319694bf29e1a639e91b1bc->leave($__internal_21b613e761ed17feed5179407cbe4cb4b0338cde1319694bf29e1a639e91b1bc_prof);

        
        $__internal_5873da1cf4c48bf2a68d546e06e62ff6a146836b25a59a924ccc49a2aec3a2a8->leave($__internal_5873da1cf4c48bf2a68d546e06e62ff6a146836b25a59a924ccc49a2aec3a2a8_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_e9766618179b4050b43b4d66bb65fd9e53287b83903cc902262c9084efcf0274 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9766618179b4050b43b4d66bb65fd9e53287b83903cc902262c9084efcf0274->enter($__internal_e9766618179b4050b43b4d66bb65fd9e53287b83903cc902262c9084efcf0274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_bca5b564a9b24966c179256a3f2d6e3776f9f45293c4844c2e24185312ad0b1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bca5b564a9b24966c179256a3f2d6e3776f9f45293c4844c2e24185312ad0b1b->enter($__internal_bca5b564a9b24966c179256a3f2d6e3776f9f45293c4844c2e24185312ad0b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_bca5b564a9b24966c179256a3f2d6e3776f9f45293c4844c2e24185312ad0b1b->leave($__internal_bca5b564a9b24966c179256a3f2d6e3776f9f45293c4844c2e24185312ad0b1b_prof);

        
        $__internal_e9766618179b4050b43b4d66bb65fd9e53287b83903cc902262c9084efcf0274->leave($__internal_e9766618179b4050b43b4d66bb65fd9e53287b83903cc902262c9084efcf0274_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_4d27857dca8db509b94bac34ea567fbd8cac0d36113aa128276bf6bec3e1deca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d27857dca8db509b94bac34ea567fbd8cac0d36113aa128276bf6bec3e1deca->enter($__internal_4d27857dca8db509b94bac34ea567fbd8cac0d36113aa128276bf6bec3e1deca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_25d307f9dd2f168506f37d5333fb4a31cbd96b1f534edcb6822a2d13ab477239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25d307f9dd2f168506f37d5333fb4a31cbd96b1f534edcb6822a2d13ab477239->enter($__internal_25d307f9dd2f168506f37d5333fb4a31cbd96b1f534edcb6822a2d13ab477239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_25d307f9dd2f168506f37d5333fb4a31cbd96b1f534edcb6822a2d13ab477239->leave($__internal_25d307f9dd2f168506f37d5333fb4a31cbd96b1f534edcb6822a2d13ab477239_prof);

        
        $__internal_4d27857dca8db509b94bac34ea567fbd8cac0d36113aa128276bf6bec3e1deca->leave($__internal_4d27857dca8db509b94bac34ea567fbd8cac0d36113aa128276bf6bec3e1deca_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_15c0ec42ed4a0ccdf12b35734fa8725ace3576cfd54f30f34a858035af843094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15c0ec42ed4a0ccdf12b35734fa8725ace3576cfd54f30f34a858035af843094->enter($__internal_15c0ec42ed4a0ccdf12b35734fa8725ace3576cfd54f30f34a858035af843094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_c7d0833240af153e209df175792a3372477a83c353887e1e328e19e0f845206d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7d0833240af153e209df175792a3372477a83c353887e1e328e19e0f845206d->enter($__internal_c7d0833240af153e209df175792a3372477a83c353887e1e328e19e0f845206d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_c7d0833240af153e209df175792a3372477a83c353887e1e328e19e0f845206d->leave($__internal_c7d0833240af153e209df175792a3372477a83c353887e1e328e19e0f845206d_prof);

        
        $__internal_15c0ec42ed4a0ccdf12b35734fa8725ace3576cfd54f30f34a858035af843094->leave($__internal_15c0ec42ed4a0ccdf12b35734fa8725ace3576cfd54f30f34a858035af843094_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_287cae6f9e9e2fe93d6f95be6886641a02fd5544b3743286afccf404e5ebd386 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_287cae6f9e9e2fe93d6f95be6886641a02fd5544b3743286afccf404e5ebd386->enter($__internal_287cae6f9e9e2fe93d6f95be6886641a02fd5544b3743286afccf404e5ebd386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_027ac42386b86f8db616f9bfcc5d648e103500d171a5538aec11b3dd707b08e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_027ac42386b86f8db616f9bfcc5d648e103500d171a5538aec11b3dd707b08e1->enter($__internal_027ac42386b86f8db616f9bfcc5d648e103500d171a5538aec11b3dd707b08e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_027ac42386b86f8db616f9bfcc5d648e103500d171a5538aec11b3dd707b08e1->leave($__internal_027ac42386b86f8db616f9bfcc5d648e103500d171a5538aec11b3dd707b08e1_prof);

        
        $__internal_287cae6f9e9e2fe93d6f95be6886641a02fd5544b3743286afccf404e5ebd386->leave($__internal_287cae6f9e9e2fe93d6f95be6886641a02fd5544b3743286afccf404e5ebd386_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_337e160a9ff7a353f0bf865081d81ce8dff3fcfb5f4b83458689e03ce426e8cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_337e160a9ff7a353f0bf865081d81ce8dff3fcfb5f4b83458689e03ce426e8cf->enter($__internal_337e160a9ff7a353f0bf865081d81ce8dff3fcfb5f4b83458689e03ce426e8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_5a49812a550f02e861d0afabf0ceb0837fb224aa592209905c7c7a3905453734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a49812a550f02e861d0afabf0ceb0837fb224aa592209905c7c7a3905453734->enter($__internal_5a49812a550f02e861d0afabf0ceb0837fb224aa592209905c7c7a3905453734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_5a49812a550f02e861d0afabf0ceb0837fb224aa592209905c7c7a3905453734->leave($__internal_5a49812a550f02e861d0afabf0ceb0837fb224aa592209905c7c7a3905453734_prof);

        
        $__internal_337e160a9ff7a353f0bf865081d81ce8dff3fcfb5f4b83458689e03ce426e8cf->leave($__internal_337e160a9ff7a353f0bf865081d81ce8dff3fcfb5f4b83458689e03ce426e8cf_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_b910b0876ff2d4f5974dcf096c87154ace7bedb6304e21218d05998ab5152d53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b910b0876ff2d4f5974dcf096c87154ace7bedb6304e21218d05998ab5152d53->enter($__internal_b910b0876ff2d4f5974dcf096c87154ace7bedb6304e21218d05998ab5152d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_090f67ce4fb987cabeb051b52e742ed3ee578f8aab454a3035dc2e3554d64e65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_090f67ce4fb987cabeb051b52e742ed3ee578f8aab454a3035dc2e3554d64e65->enter($__internal_090f67ce4fb987cabeb051b52e742ed3ee578f8aab454a3035dc2e3554d64e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_090f67ce4fb987cabeb051b52e742ed3ee578f8aab454a3035dc2e3554d64e65->leave($__internal_090f67ce4fb987cabeb051b52e742ed3ee578f8aab454a3035dc2e3554d64e65_prof);

        
        $__internal_b910b0876ff2d4f5974dcf096c87154ace7bedb6304e21218d05998ab5152d53->leave($__internal_b910b0876ff2d4f5974dcf096c87154ace7bedb6304e21218d05998ab5152d53_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_ef7b0b786bff9cce969a09b490d161d74c396930b5429da6ca0dc7f88189e6b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef7b0b786bff9cce969a09b490d161d74c396930b5429da6ca0dc7f88189e6b8->enter($__internal_ef7b0b786bff9cce969a09b490d161d74c396930b5429da6ca0dc7f88189e6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_bcc1654a00af51eacb9871f0cbc34b8b28b9d4d88c4672f90bfe6f3246c6d312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc1654a00af51eacb9871f0cbc34b8b28b9d4d88c4672f90bfe6f3246c6d312->enter($__internal_bcc1654a00af51eacb9871f0cbc34b8b28b9d4d88c4672f90bfe6f3246c6d312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_bcc1654a00af51eacb9871f0cbc34b8b28b9d4d88c4672f90bfe6f3246c6d312->leave($__internal_bcc1654a00af51eacb9871f0cbc34b8b28b9d4d88c4672f90bfe6f3246c6d312_prof);

        
        $__internal_ef7b0b786bff9cce969a09b490d161d74c396930b5429da6ca0dc7f88189e6b8->leave($__internal_ef7b0b786bff9cce969a09b490d161d74c396930b5429da6ca0dc7f88189e6b8_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_bbcff9f9e037144fa847d881a688ffc73d839c9db7b430a8743f96b01cf9a888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbcff9f9e037144fa847d881a688ffc73d839c9db7b430a8743f96b01cf9a888->enter($__internal_bbcff9f9e037144fa847d881a688ffc73d839c9db7b430a8743f96b01cf9a888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_f4ad420fb1a8828a2d1c6acb530da9575516ab202caf1a77fc8de6ef9eb17ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4ad420fb1a8828a2d1c6acb530da9575516ab202caf1a77fc8de6ef9eb17ead->enter($__internal_f4ad420fb1a8828a2d1c6acb530da9575516ab202caf1a77fc8de6ef9eb17ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_f4ad420fb1a8828a2d1c6acb530da9575516ab202caf1a77fc8de6ef9eb17ead->leave($__internal_f4ad420fb1a8828a2d1c6acb530da9575516ab202caf1a77fc8de6ef9eb17ead_prof);

        
        $__internal_bbcff9f9e037144fa847d881a688ffc73d839c9db7b430a8743f96b01cf9a888->leave($__internal_bbcff9f9e037144fa847d881a688ffc73d839c9db7b430a8743f96b01cf9a888_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_593c3825f708e2bf181eee226ac47c7fab33a343ddeb338766fc813baa13f3a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_593c3825f708e2bf181eee226ac47c7fab33a343ddeb338766fc813baa13f3a4->enter($__internal_593c3825f708e2bf181eee226ac47c7fab33a343ddeb338766fc813baa13f3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_1aeb3ffe2331220d09ce4a22d5b8a1b2a7f20e39f7e0697144214f5c2c54a756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aeb3ffe2331220d09ce4a22d5b8a1b2a7f20e39f7e0697144214f5c2c54a756->enter($__internal_1aeb3ffe2331220d09ce4a22d5b8a1b2a7f20e39f7e0697144214f5c2c54a756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_1aeb3ffe2331220d09ce4a22d5b8a1b2a7f20e39f7e0697144214f5c2c54a756->leave($__internal_1aeb3ffe2331220d09ce4a22d5b8a1b2a7f20e39f7e0697144214f5c2c54a756_prof);

        
        $__internal_593c3825f708e2bf181eee226ac47c7fab33a343ddeb338766fc813baa13f3a4->leave($__internal_593c3825f708e2bf181eee226ac47c7fab33a343ddeb338766fc813baa13f3a4_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_cc9010944ff2af81e060686c274e1555f53063eb72ff1b9977d0bb16d7d431e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc9010944ff2af81e060686c274e1555f53063eb72ff1b9977d0bb16d7d431e9->enter($__internal_cc9010944ff2af81e060686c274e1555f53063eb72ff1b9977d0bb16d7d431e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_401597261c6bfad749a02d020ab9962fb9f7aacd3edadb8c8edfa61c18f4a37f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_401597261c6bfad749a02d020ab9962fb9f7aacd3edadb8c8edfa61c18f4a37f->enter($__internal_401597261c6bfad749a02d020ab9962fb9f7aacd3edadb8c8edfa61c18f4a37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_401597261c6bfad749a02d020ab9962fb9f7aacd3edadb8c8edfa61c18f4a37f->leave($__internal_401597261c6bfad749a02d020ab9962fb9f7aacd3edadb8c8edfa61c18f4a37f_prof);

        
        $__internal_cc9010944ff2af81e060686c274e1555f53063eb72ff1b9977d0bb16d7d431e9->leave($__internal_cc9010944ff2af81e060686c274e1555f53063eb72ff1b9977d0bb16d7d431e9_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_3b9d770521b0447e944d3bc8b1c23498caacfe8fbce167a90a377bad9fdc4a3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b9d770521b0447e944d3bc8b1c23498caacfe8fbce167a90a377bad9fdc4a3d->enter($__internal_3b9d770521b0447e944d3bc8b1c23498caacfe8fbce167a90a377bad9fdc4a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_3ba5c6ff3852a656f3d7bbc27c230cb1b2d49e7a0c93a5884dd64c6b70a469da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba5c6ff3852a656f3d7bbc27c230cb1b2d49e7a0c93a5884dd64c6b70a469da->enter($__internal_3ba5c6ff3852a656f3d7bbc27c230cb1b2d49e7a0c93a5884dd64c6b70a469da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_3ba5c6ff3852a656f3d7bbc27c230cb1b2d49e7a0c93a5884dd64c6b70a469da->leave($__internal_3ba5c6ff3852a656f3d7bbc27c230cb1b2d49e7a0c93a5884dd64c6b70a469da_prof);

        
        $__internal_3b9d770521b0447e944d3bc8b1c23498caacfe8fbce167a90a377bad9fdc4a3d->leave($__internal_3b9d770521b0447e944d3bc8b1c23498caacfe8fbce167a90a377bad9fdc4a3d_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_67fba206a53a2c86c45fa44ddafbcde0284cf31ddc7e35224ce1ea3c720cdd15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67fba206a53a2c86c45fa44ddafbcde0284cf31ddc7e35224ce1ea3c720cdd15->enter($__internal_67fba206a53a2c86c45fa44ddafbcde0284cf31ddc7e35224ce1ea3c720cdd15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_50658d75fc8b9240cec1d876f4aba1c73f98735ddc71d19e684259a46544958e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50658d75fc8b9240cec1d876f4aba1c73f98735ddc71d19e684259a46544958e->enter($__internal_50658d75fc8b9240cec1d876f4aba1c73f98735ddc71d19e684259a46544958e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_50658d75fc8b9240cec1d876f4aba1c73f98735ddc71d19e684259a46544958e->leave($__internal_50658d75fc8b9240cec1d876f4aba1c73f98735ddc71d19e684259a46544958e_prof);

        
        $__internal_67fba206a53a2c86c45fa44ddafbcde0284cf31ddc7e35224ce1ea3c720cdd15->leave($__internal_67fba206a53a2c86c45fa44ddafbcde0284cf31ddc7e35224ce1ea3c720cdd15_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_da2b9fd2cc7408a4680363e6fde77ec576efbe6b4a6a34cf5504077b6c60666e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da2b9fd2cc7408a4680363e6fde77ec576efbe6b4a6a34cf5504077b6c60666e->enter($__internal_da2b9fd2cc7408a4680363e6fde77ec576efbe6b4a6a34cf5504077b6c60666e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_0b5fc3da229e5587c09fc846ca8d795270aebdd3d132627d9fdd390cc8c7af30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b5fc3da229e5587c09fc846ca8d795270aebdd3d132627d9fdd390cc8c7af30->enter($__internal_0b5fc3da229e5587c09fc846ca8d795270aebdd3d132627d9fdd390cc8c7af30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 255
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
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
        echo ">
        ";
        // line 262
        echo ($context["widget"] ?? $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_0b5fc3da229e5587c09fc846ca8d795270aebdd3d132627d9fdd390cc8c7af30->leave($__internal_0b5fc3da229e5587c09fc846ca8d795270aebdd3d132627d9fdd390cc8c7af30_prof);

        
        $__internal_da2b9fd2cc7408a4680363e6fde77ec576efbe6b4a6a34cf5504077b6c60666e->leave($__internal_da2b9fd2cc7408a4680363e6fde77ec576efbe6b4a6a34cf5504077b6c60666e_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ff9b00b75fe3ebfb2aa8e3ea6f8f7f6cf4853f19418fad9e0a3b3d715bdbdcb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff9b00b75fe3ebfb2aa8e3ea6f8f7f6cf4853f19418fad9e0a3b3d715bdbdcb9->enter($__internal_ff9b00b75fe3ebfb2aa8e3ea6f8f7f6cf4853f19418fad9e0a3b3d715bdbdcb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_378c94ec8eca9306bcc78006300afff4ad018f499dd4e71eb5501f92f518fca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_378c94ec8eca9306bcc78006300afff4ad018f499dd4e71eb5501f92f518fca7->enter($__internal_378c94ec8eca9306bcc78006300afff4ad018f499dd4e71eb5501f92f518fca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_378c94ec8eca9306bcc78006300afff4ad018f499dd4e71eb5501f92f518fca7->leave($__internal_378c94ec8eca9306bcc78006300afff4ad018f499dd4e71eb5501f92f518fca7_prof);

        
        $__internal_ff9b00b75fe3ebfb2aa8e3ea6f8f7f6cf4853f19418fad9e0a3b3d715bdbdcb9->leave($__internal_ff9b00b75fe3ebfb2aa8e3ea6f8f7f6cf4853f19418fad9e0a3b3d715bdbdcb9_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_c948c3fd22f198f14366ff04baba989b4bd8a9bae9a411114383ca0cb7d05846 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c948c3fd22f198f14366ff04baba989b4bd8a9bae9a411114383ca0cb7d05846->enter($__internal_c948c3fd22f198f14366ff04baba989b4bd8a9bae9a411114383ca0cb7d05846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_e6768dcc716a370bb784094373b2abd36ffc3de69f1e41c0895df11c36189a26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6768dcc716a370bb784094373b2abd36ffc3de69f1e41c0895df11c36189a26->enter($__internal_e6768dcc716a370bb784094373b2abd36ffc3de69f1e41c0895df11c36189a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e6768dcc716a370bb784094373b2abd36ffc3de69f1e41c0895df11c36189a26->leave($__internal_e6768dcc716a370bb784094373b2abd36ffc3de69f1e41c0895df11c36189a26_prof);

        
        $__internal_c948c3fd22f198f14366ff04baba989b4bd8a9bae9a411114383ca0cb7d05846->leave($__internal_c948c3fd22f198f14366ff04baba989b4bd8a9bae9a411114383ca0cb7d05846_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_4e85a0352351aeb31658faf1df0fc80b9e9c5ded8a420cf3ff94de11b9b364b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e85a0352351aeb31658faf1df0fc80b9e9c5ded8a420cf3ff94de11b9b364b1->enter($__internal_4e85a0352351aeb31658faf1df0fc80b9e9c5ded8a420cf3ff94de11b9b364b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_1eef2b7f4e98d2b7f5bfcc4cf61fe293f71b4c404aa3b27cadcb9021c2135466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eef2b7f4e98d2b7f5bfcc4cf61fe293f71b4c404aa3b27cadcb9021c2135466->enter($__internal_1eef2b7f4e98d2b7f5bfcc4cf61fe293f71b4c404aa3b27cadcb9021c2135466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1eef2b7f4e98d2b7f5bfcc4cf61fe293f71b4c404aa3b27cadcb9021c2135466->leave($__internal_1eef2b7f4e98d2b7f5bfcc4cf61fe293f71b4c404aa3b27cadcb9021c2135466_prof);

        
        $__internal_4e85a0352351aeb31658faf1df0fc80b9e9c5ded8a420cf3ff94de11b9b364b1->leave($__internal_4e85a0352351aeb31658faf1df0fc80b9e9c5ded8a420cf3ff94de11b9b364b1_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_0b6e50a63d0c51558b3222ca0242760bef1f97c3bd0e9e255a58688b190716c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b6e50a63d0c51558b3222ca0242760bef1f97c3bd0e9e255a58688b190716c4->enter($__internal_0b6e50a63d0c51558b3222ca0242760bef1f97c3bd0e9e255a58688b190716c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_6fb61def2abfbbd87dd212f231d80e44b3026ef1c25c25af1adac5c727aeb57d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb61def2abfbbd87dd212f231d80e44b3026ef1c25c25af1adac5c727aeb57d->enter($__internal_6fb61def2abfbbd87dd212f231d80e44b3026ef1c25c25af1adac5c727aeb57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6fb61def2abfbbd87dd212f231d80e44b3026ef1c25c25af1adac5c727aeb57d->leave($__internal_6fb61def2abfbbd87dd212f231d80e44b3026ef1c25c25af1adac5c727aeb57d_prof);

        
        $__internal_0b6e50a63d0c51558b3222ca0242760bef1f97c3bd0e9e255a58688b190716c4->leave($__internal_0b6e50a63d0c51558b3222ca0242760bef1f97c3bd0e9e255a58688b190716c4_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_4d02b6628ad6583463f04dc370cf71be885cbc23871f96b02277a176d9432670 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d02b6628ad6583463f04dc370cf71be885cbc23871f96b02277a176d9432670->enter($__internal_4d02b6628ad6583463f04dc370cf71be885cbc23871f96b02277a176d9432670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_b2b987f6faf6247a243471463f1e7962cd74f0b886289a6d28e2605c3294fa30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2b987f6faf6247a243471463f1e7962cd74f0b886289a6d28e2605c3294fa30->enter($__internal_b2b987f6faf6247a243471463f1e7962cd74f0b886289a6d28e2605c3294fa30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b2b987f6faf6247a243471463f1e7962cd74f0b886289a6d28e2605c3294fa30->leave($__internal_b2b987f6faf6247a243471463f1e7962cd74f0b886289a6d28e2605c3294fa30_prof);

        
        $__internal_4d02b6628ad6583463f04dc370cf71be885cbc23871f96b02277a176d9432670->leave($__internal_4d02b6628ad6583463f04dc370cf71be885cbc23871f96b02277a176d9432670_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_26e058a9989f36d45903ffb8c49db7faee0807100366e15f52ee9335b0505a13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26e058a9989f36d45903ffb8c49db7faee0807100366e15f52ee9335b0505a13->enter($__internal_26e058a9989f36d45903ffb8c49db7faee0807100366e15f52ee9335b0505a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_a9b8c94eaef8bb898f8a300c13f8552856d612a1324eb2d57bcbaf08c39dcf84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b8c94eaef8bb898f8a300c13f8552856d612a1324eb2d57bcbaf08c39dcf84->enter($__internal_a9b8c94eaef8bb898f8a300c13f8552856d612a1324eb2d57bcbaf08c39dcf84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_a9b8c94eaef8bb898f8a300c13f8552856d612a1324eb2d57bcbaf08c39dcf84->leave($__internal_a9b8c94eaef8bb898f8a300c13f8552856d612a1324eb2d57bcbaf08c39dcf84_prof);

        
        $__internal_26e058a9989f36d45903ffb8c49db7faee0807100366e15f52ee9335b0505a13->leave($__internal_26e058a9989f36d45903ffb8c49db7faee0807100366e15f52ee9335b0505a13_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_c66d74b1f058368a686a6b540f11e8bbbf81181ae654fbcaad70e11ba01132ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c66d74b1f058368a686a6b540f11e8bbbf81181ae654fbcaad70e11ba01132ae->enter($__internal_c66d74b1f058368a686a6b540f11e8bbbf81181ae654fbcaad70e11ba01132ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_e00da42181801642b4774740fa4c7f6badbfac4a76360df320b8beb82f1b5953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e00da42181801642b4774740fa4c7f6badbfac4a76360df320b8beb82f1b5953->enter($__internal_e00da42181801642b4774740fa4c7f6badbfac4a76360df320b8beb82f1b5953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_e00da42181801642b4774740fa4c7f6badbfac4a76360df320b8beb82f1b5953->leave($__internal_e00da42181801642b4774740fa4c7f6badbfac4a76360df320b8beb82f1b5953_prof);

        
        $__internal_c66d74b1f058368a686a6b540f11e8bbbf81181ae654fbcaad70e11ba01132ae->leave($__internal_c66d74b1f058368a686a6b540f11e8bbbf81181ae654fbcaad70e11ba01132ae_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_c78c243aeb03eaece6839b0a032a2e3e9d4c21b251584080194fa9de09e671db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c78c243aeb03eaece6839b0a032a2e3e9d4c21b251584080194fa9de09e671db->enter($__internal_c78c243aeb03eaece6839b0a032a2e3e9d4c21b251584080194fa9de09e671db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_4b861e9a29e58ddbecae5b33ffbba7bc4863bc32b57b0101a915a5b8e2b1e6b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b861e9a29e58ddbecae5b33ffbba7bc4863bc32b57b0101a915a5b8e2b1e6b7->enter($__internal_4b861e9a29e58ddbecae5b33ffbba7bc4863bc32b57b0101a915a5b8e2b1e6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_4b861e9a29e58ddbecae5b33ffbba7bc4863bc32b57b0101a915a5b8e2b1e6b7->leave($__internal_4b861e9a29e58ddbecae5b33ffbba7bc4863bc32b57b0101a915a5b8e2b1e6b7_prof);

        
        $__internal_c78c243aeb03eaece6839b0a032a2e3e9d4c21b251584080194fa9de09e671db->leave($__internal_c78c243aeb03eaece6839b0a032a2e3e9d4c21b251584080194fa9de09e671db_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock button_widget %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock choice_label %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {% endif %}
    <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form is not rootform %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form is not rootform %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/foundation_5_layout.html.twig");
    }
}
