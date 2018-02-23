<?php

/* bootstrap_4_layout.html.twig */
class __TwigTemplate_c083c2d5c713c16268ea640464cec7a3109b843de9a945c8d2030d5aec735dd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_4_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'money_widget' => array($this, 'block_money_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'widget_attributes' => array($this, 'block_widget_attributes'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'form_label' => array($this, 'block_form_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8aaf2615400d6feefaad8ea8a12190e333591d771a49218958c60fb8b9862284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aaf2615400d6feefaad8ea8a12190e333591d771a49218958c60fb8b9862284->enter($__internal_8aaf2615400d6feefaad8ea8a12190e333591d771a49218958c60fb8b9862284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        $__internal_843a10c8fe17efdcdba35546bef80eb59c7da435f96262f513ea19eff852338c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_843a10c8fe17efdcdba35546bef80eb59c7da435f96262f513ea19eff852338c->enter($__internal_843a10c8fe17efdcdba35546bef80eb59c7da435f96262f513ea19eff852338c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('money_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('date_widget', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('time_widget', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 60
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 67
        $this->displayBlock('button_widget', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 87
        echo "
";
        // line 88
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 99
        echo "
";
        // line 100
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 124
        echo "
";
        // line 126
        echo "
";
        // line 127
        $this->displayBlock('form_label', $context, $blocks);
        // line 136
        echo "
";
        // line 137
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 162
        echo "
";
        // line 164
        echo "
";
        // line 165
        $this->displayBlock('form_row', $context, $blocks);
        // line 175
        echo "
";
        // line 177
        echo "
";
        // line 178
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_8aaf2615400d6feefaad8ea8a12190e333591d771a49218958c60fb8b9862284->leave($__internal_8aaf2615400d6feefaad8ea8a12190e333591d771a49218958c60fb8b9862284_prof);

        
        $__internal_843a10c8fe17efdcdba35546bef80eb59c7da435f96262f513ea19eff852338c->leave($__internal_843a10c8fe17efdcdba35546bef80eb59c7da435f96262f513ea19eff852338c_prof);

    }

    // line 5
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_129081de5c11cdcc193f4cc4eb3680b6f9eb65f407f0989b86a6c8d96169366a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_129081de5c11cdcc193f4cc4eb3680b6f9eb65f407f0989b86a6c8d96169366a->enter($__internal_129081de5c11cdcc193f4cc4eb3680b6f9eb65f407f0989b86a6c8d96169366a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_6399b93baac331636f1b1f11b45f71300e24adfadc850611af03b9d86aeca0b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6399b93baac331636f1b1f11b45f71300e24adfadc850611af03b9d86aeca0b0->enter($__internal_6399b93baac331636f1b1f11b45f71300e24adfadc850611af03b9d86aeca0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 6
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            // line 7
            echo "        ";
            $context["group_class"] = " form-control is-invalid";
            // line 8
            echo "        ";
            $context["valid"] = true;
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("money_widget", $context, $blocks);
        
        $__internal_6399b93baac331636f1b1f11b45f71300e24adfadc850611af03b9d86aeca0b0->leave($__internal_6399b93baac331636f1b1f11b45f71300e24adfadc850611af03b9d86aeca0b0_prof);

        
        $__internal_129081de5c11cdcc193f4cc4eb3680b6f9eb65f407f0989b86a6c8d96169366a->leave($__internal_129081de5c11cdcc193f4cc4eb3680b6f9eb65f407f0989b86a6c8d96169366a_prof);

    }

    // line 13
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_41bf71a3f031547e80cee395afebf5c4e228f57933a756419863a266f0ae33e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41bf71a3f031547e80cee395afebf5c4e228f57933a756419863a266f0ae33e0->enter($__internal_41bf71a3f031547e80cee395afebf5c4e228f57933a756419863a266f0ae33e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_5a86bf7435ec45573ac568af934d8a4e6bf2f6b7d9ca3d000d3757fc38834129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a86bf7435ec45573ac568af934d8a4e6bf2f6b7d9ca3d000d3757fc38834129->enter($__internal_5a86bf7435ec45573ac568af934d8a4e6bf2f6b7d9ca3d000d3757fc38834129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 14
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 16
            $context["valid"] = true;
        }
        // line 18
        $this->displayParentBlock("datetime_widget", $context, $blocks);
        
        $__internal_5a86bf7435ec45573ac568af934d8a4e6bf2f6b7d9ca3d000d3757fc38834129->leave($__internal_5a86bf7435ec45573ac568af934d8a4e6bf2f6b7d9ca3d000d3757fc38834129_prof);

        
        $__internal_41bf71a3f031547e80cee395afebf5c4e228f57933a756419863a266f0ae33e0->leave($__internal_41bf71a3f031547e80cee395afebf5c4e228f57933a756419863a266f0ae33e0_prof);

    }

    // line 21
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_d5228b24ae35659f352e91ea9ced267d2e6e32b5865fa105dd6136b1d829cc98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5228b24ae35659f352e91ea9ced267d2e6e32b5865fa105dd6136b1d829cc98->enter($__internal_d5228b24ae35659f352e91ea9ced267d2e6e32b5865fa105dd6136b1d829cc98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_f0d1ba2854dafda87d4b6eca87b1b41062ceb047015caff1e2cbf1428ff0bfa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d1ba2854dafda87d4b6eca87b1b41062ceb047015caff1e2cbf1428ff0bfa1->enter($__internal_f0d1ba2854dafda87d4b6eca87b1b41062ceb047015caff1e2cbf1428ff0bfa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 22
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 23
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 24
            $context["valid"] = true;
        }
        // line 26
        $this->displayParentBlock("date_widget", $context, $blocks);
        
        $__internal_f0d1ba2854dafda87d4b6eca87b1b41062ceb047015caff1e2cbf1428ff0bfa1->leave($__internal_f0d1ba2854dafda87d4b6eca87b1b41062ceb047015caff1e2cbf1428ff0bfa1_prof);

        
        $__internal_d5228b24ae35659f352e91ea9ced267d2e6e32b5865fa105dd6136b1d829cc98->leave($__internal_d5228b24ae35659f352e91ea9ced267d2e6e32b5865fa105dd6136b1d829cc98_prof);

    }

    // line 29
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_3e0d0e345301b65d2526d2c1963a370c032c5992fe6e834881dc160cc00fd5bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e0d0e345301b65d2526d2c1963a370c032c5992fe6e834881dc160cc00fd5bd->enter($__internal_3e0d0e345301b65d2526d2c1963a370c032c5992fe6e834881dc160cc00fd5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_608aafaf173fa0cfe201e81f5563b5571ff06ad32990cd361c4039292c0852f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_608aafaf173fa0cfe201e81f5563b5571ff06ad32990cd361c4039292c0852f0->enter($__internal_608aafaf173fa0cfe201e81f5563b5571ff06ad32990cd361c4039292c0852f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 30
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 31
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 32
            $context["valid"] = true;
        }
        // line 34
        $this->displayParentBlock("time_widget", $context, $blocks);
        
        $__internal_608aafaf173fa0cfe201e81f5563b5571ff06ad32990cd361c4039292c0852f0->leave($__internal_608aafaf173fa0cfe201e81f5563b5571ff06ad32990cd361c4039292c0852f0_prof);

        
        $__internal_3e0d0e345301b65d2526d2c1963a370c032c5992fe6e834881dc160cc00fd5bd->leave($__internal_3e0d0e345301b65d2526d2c1963a370c032c5992fe6e834881dc160cc00fd5bd_prof);

    }

    // line 37
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_2630398dee6e48dae3b1d6a773c18047d1690c6dd9180ace5588cc9f9df28005 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2630398dee6e48dae3b1d6a773c18047d1690c6dd9180ace5588cc9f9df28005->enter($__internal_2630398dee6e48dae3b1d6a773c18047d1690c6dd9180ace5588cc9f9df28005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_0b8554bc630b1479eed2cf29c2b100c77d8a7993e2e0685400b2cdeaa5262d92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b8554bc630b1479eed2cf29c2b100c77d8a7993e2e0685400b2cdeaa5262d92->enter($__internal_0b8554bc630b1479eed2cf29c2b100c77d8a7993e2e0685400b2cdeaa5262d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 38
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 39
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 40
            $context["valid"] = true;
        }
        // line 42
        $this->displayParentBlock("dateinterval_widget", $context, $blocks);
        
        $__internal_0b8554bc630b1479eed2cf29c2b100c77d8a7993e2e0685400b2cdeaa5262d92->leave($__internal_0b8554bc630b1479eed2cf29c2b100c77d8a7993e2e0685400b2cdeaa5262d92_prof);

        
        $__internal_2630398dee6e48dae3b1d6a773c18047d1690c6dd9180ace5588cc9f9df28005->leave($__internal_2630398dee6e48dae3b1d6a773c18047d1690c6dd9180ace5588cc9f9df28005_prof);

    }

    // line 45
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_bc91ea3d833f94512bf6aac488b5b01b1c1405d726c26b6fa62a7cf555af5d84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc91ea3d833f94512bf6aac488b5b01b1c1405d726c26b6fa62a7cf555af5d84->enter($__internal_bc91ea3d833f94512bf6aac488b5b01b1c1405d726c26b6fa62a7cf555af5d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_582589d34e377e3b55e79d3f16ec91ef88669692466f10747eee267167b4d9bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_582589d34e377e3b55e79d3f16ec91ef88669692466f10747eee267167b4d9bb->enter($__internal_582589d34e377e3b55e79d3f16ec91ef88669692466f10747eee267167b4d9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 46
        echo "<div class=\"input-group";
        echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
        echo "\">
        ";
        // line 47
        $context["valid"] = true;
        // line 48
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 49
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_582589d34e377e3b55e79d3f16ec91ef88669692466f10747eee267167b4d9bb->leave($__internal_582589d34e377e3b55e79d3f16ec91ef88669692466f10747eee267167b4d9bb_prof);

        
        $__internal_bc91ea3d833f94512bf6aac488b5b01b1c1405d726c26b6fa62a7cf555af5d84->leave($__internal_bc91ea3d833f94512bf6aac488b5b01b1c1405d726c26b6fa62a7cf555af5d84_prof);

    }

    // line 53
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_6808fe0964236b39e0b8b83045bb0b6b957c029ef11340f4050d6aa84b293c9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6808fe0964236b39e0b8b83045bb0b6b957c029ef11340f4050d6aa84b293c9f->enter($__internal_6808fe0964236b39e0b8b83045bb0b6b957c029ef11340f4050d6aa84b293c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_d8ef57febdc50ce317ba605913c5e4fa2033bf23c39635dbe079ac9955678f2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8ef57febdc50ce317ba605913c5e4fa2033bf23c39635dbe079ac9955678f2e->enter($__internal_d8ef57febdc50ce317ba605913c5e4fa2033bf23c39635dbe079ac9955678f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 54
        if (( !array_key_exists("type", $context) || (($context["type"] ?? $this->getContext($context, "type")) != "hidden"))) {
            // line 55
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control") . (((((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "")) : ("")) == "file")) ? ("-file") : (""))))));
        }
        // line 57
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_d8ef57febdc50ce317ba605913c5e4fa2033bf23c39635dbe079ac9955678f2e->leave($__internal_d8ef57febdc50ce317ba605913c5e4fa2033bf23c39635dbe079ac9955678f2e_prof);

        
        $__internal_6808fe0964236b39e0b8b83045bb0b6b957c029ef11340f4050d6aa84b293c9f->leave($__internal_6808fe0964236b39e0b8b83045bb0b6b957c029ef11340f4050d6aa84b293c9f_prof);

    }

    // line 60
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_f49d3f45d4609becca47d41a12661f227ebb6f166dff3aeee4fc019448285f02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f49d3f45d4609becca47d41a12661f227ebb6f166dff3aeee4fc019448285f02->enter($__internal_f49d3f45d4609becca47d41a12661f227ebb6f166dff3aeee4fc019448285f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_9e1ed7fef346d9aef6b2064cf63b7fd660c8155016ca3caecfadc9ef345ed291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e1ed7fef346d9aef6b2064cf63b7fd660c8155016ca3caecfadc9ef345ed291->enter($__internal_9e1ed7fef346d9aef6b2064cf63b7fd660c8155016ca3caecfadc9ef345ed291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 61
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            // line 62
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 63
            echo "    ";
        }
        // line 64
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        
        $__internal_9e1ed7fef346d9aef6b2064cf63b7fd660c8155016ca3caecfadc9ef345ed291->leave($__internal_9e1ed7fef346d9aef6b2064cf63b7fd660c8155016ca3caecfadc9ef345ed291_prof);

        
        $__internal_f49d3f45d4609becca47d41a12661f227ebb6f166dff3aeee4fc019448285f02->leave($__internal_f49d3f45d4609becca47d41a12661f227ebb6f166dff3aeee4fc019448285f02_prof);

    }

    // line 67
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_e16aa56689ff51b75015b990d8a4f0b66f1030750ea370b0fa2b687e086ddf4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e16aa56689ff51b75015b990d8a4f0b66f1030750ea370b0fa2b687e086ddf4a->enter($__internal_e16aa56689ff51b75015b990d8a4f0b66f1030750ea370b0fa2b687e086ddf4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_f13f9c80f346aa294ac6956fd457c51a0a3ba6be0fc693bcb9767de817d53cca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f13f9c80f346aa294ac6956fd457c51a0a3ba6be0fc693bcb9767de817d53cca->enter($__internal_f13f9c80f346aa294ac6956fd457c51a0a3ba6be0fc693bcb9767de817d53cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 68
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-secondary")) : ("btn-secondary")) . " btn"))));
        // line 69
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_f13f9c80f346aa294ac6956fd457c51a0a3ba6be0fc693bcb9767de817d53cca->leave($__internal_f13f9c80f346aa294ac6956fd457c51a0a3ba6be0fc693bcb9767de817d53cca_prof);

        
        $__internal_e16aa56689ff51b75015b990d8a4f0b66f1030750ea370b0fa2b687e086ddf4a->leave($__internal_e16aa56689ff51b75015b990d8a4f0b66f1030750ea370b0fa2b687e086ddf4a_prof);

    }

    // line 72
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_c05600f81499fbbe3070ed5e718386b234f64a86ee22d4c5d3fd4c54948d158e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c05600f81499fbbe3070ed5e718386b234f64a86ee22d4c5d3fd4c54948d158e->enter($__internal_c05600f81499fbbe3070ed5e718386b234f64a86ee22d4c5d3fd4c54948d158e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_e278f2d550178c386933377ba591874890e728ed97ad9949e8b05a5e0569f6a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e278f2d550178c386933377ba591874890e728ed97ad9949e8b05a5e0569f6a3->enter($__internal_e278f2d550178c386933377ba591874890e728ed97ad9949e8b05a5e0569f6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 73
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 74
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 75
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } elseif (twig_in_filter("form-check-inline",         // line 77
($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 78
            echo "        <div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo " form-check-inline\">";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 80
            echo "</div>
    ";
        } else {
            // line 82
            echo "<div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 84
            echo "</div>";
        }
        
        $__internal_e278f2d550178c386933377ba591874890e728ed97ad9949e8b05a5e0569f6a3->leave($__internal_e278f2d550178c386933377ba591874890e728ed97ad9949e8b05a5e0569f6a3_prof);

        
        $__internal_c05600f81499fbbe3070ed5e718386b234f64a86ee22d4c5d3fd4c54948d158e->leave($__internal_c05600f81499fbbe3070ed5e718386b234f64a86ee22d4c5d3fd4c54948d158e_prof);

    }

    // line 88
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_ccbbb312d758ce5307944abaea371f3231cadb346b60be4d7b1b58f2d8ce5a3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccbbb312d758ce5307944abaea371f3231cadb346b60be4d7b1b58f2d8ce5a3c->enter($__internal_ccbbb312d758ce5307944abaea371f3231cadb346b60be4d7b1b58f2d8ce5a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_985050b34432a7885805a7556e7eaf280d82f239452f478b3a1c9f017b941fa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_985050b34432a7885805a7556e7eaf280d82f239452f478b3a1c9f017b941fa3->enter($__internal_985050b34432a7885805a7556e7eaf280d82f239452f478b3a1c9f017b941fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 89
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 90
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 91
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 92
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 94
            echo "<div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 95
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 96
            echo "</div>";
        }
        
        $__internal_985050b34432a7885805a7556e7eaf280d82f239452f478b3a1c9f017b941fa3->leave($__internal_985050b34432a7885805a7556e7eaf280d82f239452f478b3a1c9f017b941fa3_prof);

        
        $__internal_ccbbb312d758ce5307944abaea371f3231cadb346b60be4d7b1b58f2d8ce5a3c->leave($__internal_ccbbb312d758ce5307944abaea371f3231cadb346b60be4d7b1b58f2d8ce5a3c_prof);

    }

    // line 100
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_96d46068beb96367494157f7745282c1cfc12c8f93010e94c6c96628779dce88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96d46068beb96367494157f7745282c1cfc12c8f93010e94c6c96628779dce88->enter($__internal_96d46068beb96367494157f7745282c1cfc12c8f93010e94c6c96628779dce88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_5134541f14e9ef4b4fa71a8dc5be30eda3c1b4eab1b129d1ed7a553bcd939ffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5134541f14e9ef4b4fa71a8dc5be30eda3c1b4eab1b129d1ed7a553bcd939ffc->enter($__internal_5134541f14e9ef4b4fa71a8dc5be30eda3c1b4eab1b129d1ed7a553bcd939ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 101
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 103
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 104
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 105
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")), "valid" =>                 // line 106
($context["valid"] ?? $this->getContext($context, "valid"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 110
            if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
                // line 111
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            }
            // line 113
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 115
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 116
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 117
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")), "valid" => true));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "</div>";
        }
        
        $__internal_5134541f14e9ef4b4fa71a8dc5be30eda3c1b4eab1b129d1ed7a553bcd939ffc->leave($__internal_5134541f14e9ef4b4fa71a8dc5be30eda3c1b4eab1b129d1ed7a553bcd939ffc_prof);

        
        $__internal_96d46068beb96367494157f7745282c1cfc12c8f93010e94c6c96628779dce88->leave($__internal_96d46068beb96367494157f7745282c1cfc12c8f93010e94c6c96628779dce88_prof);

    }

    // line 127
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_80f0ace5025a8b316a6b148aba69c7489fc0b388c3fd5d5a784bd823f4da630d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80f0ace5025a8b316a6b148aba69c7489fc0b388c3fd5d5a784bd823f4da630d->enter($__internal_80f0ace5025a8b316a6b148aba69c7489fc0b388c3fd5d5a784bd823f4da630d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_1d3d01ad13212cc84d93b0d08640b7a8ea939dd6dc038186853aa27610984784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d3d01ad13212cc84d93b0d08640b7a8ea939dd6dc038186853aa27610984784->enter($__internal_1d3d01ad13212cc84d93b0d08640b7a8ea939dd6dc038186853aa27610984784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 128
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? $this->getContext($context, "compound")))) {
            // line 129
            $context["element"] = "legend";
            // line 130
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-legend"))));
        } else {
            // line 132
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-control-label"))));
        }
        // line 134
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_1d3d01ad13212cc84d93b0d08640b7a8ea939dd6dc038186853aa27610984784->leave($__internal_1d3d01ad13212cc84d93b0d08640b7a8ea939dd6dc038186853aa27610984784_prof);

        
        $__internal_80f0ace5025a8b316a6b148aba69c7489fc0b388c3fd5d5a784bd823f4da630d->leave($__internal_80f0ace5025a8b316a6b148aba69c7489fc0b388c3fd5d5a784bd823f4da630d_prof);

    }

    // line 137
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_81471a235a00107f6a98922bca4151affd6713f1d81f8ffa8076a7d07a6f96a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81471a235a00107f6a98922bca4151affd6713f1d81f8ffa8076a7d07a6f96a0->enter($__internal_81471a235a00107f6a98922bca4151affd6713f1d81f8ffa8076a7d07a6f96a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_a607d699adec7d102baaa84d3eab2e6e66c09da90d1c33c147ece316ab71bfe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a607d699adec7d102baaa84d3eab2e6e66c09da90d1c33c147ece316ab71bfe7->enter($__internal_a607d699adec7d102baaa84d3eab2e6e66c09da90d1c33c147ece316ab71bfe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 139
        if (array_key_exists("widget", $context)) {
            // line 140
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-check-label"))));
            // line 141
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 142
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 144
            if (array_key_exists("parent_label_class", $context)) {
                // line 145
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            }
            // line 147
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 148
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 149
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 150
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 151
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 154
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 157
            echo "<label";
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
            echo ">";
            // line 158
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 159
            echo "</label>";
        }
        
        $__internal_a607d699adec7d102baaa84d3eab2e6e66c09da90d1c33c147ece316ab71bfe7->leave($__internal_a607d699adec7d102baaa84d3eab2e6e66c09da90d1c33c147ece316ab71bfe7_prof);

        
        $__internal_81471a235a00107f6a98922bca4151affd6713f1d81f8ffa8076a7d07a6f96a0->leave($__internal_81471a235a00107f6a98922bca4151affd6713f1d81f8ffa8076a7d07a6f96a0_prof);

    }

    // line 165
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_4f60ef7c8c0f5de5577a565352688585264fcb965c30c564352259428e5ef10d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f60ef7c8c0f5de5577a565352688585264fcb965c30c564352259428e5ef10d->enter($__internal_4f60ef7c8c0f5de5577a565352688585264fcb965c30c564352259428e5ef10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_d29d324638ef0776864f93e67f90f950b1ba575237178d56c8c43cf4edf4f215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d29d324638ef0776864f93e67f90f950b1ba575237178d56c8c43cf4edf4f215->enter($__internal_d29d324638ef0776864f93e67f90f950b1ba575237178d56c8c43cf4edf4f215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 166
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? $this->getContext($context, "compound")))) {
            // line 167
            $context["element"] = "fieldset";
        }
        // line 169
        echo "<";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo " class=\"form-group\">";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 173
        echo "</";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo ">";
        
        $__internal_d29d324638ef0776864f93e67f90f950b1ba575237178d56c8c43cf4edf4f215->leave($__internal_d29d324638ef0776864f93e67f90f950b1ba575237178d56c8c43cf4edf4f215_prof);

        
        $__internal_4f60ef7c8c0f5de5577a565352688585264fcb965c30c564352259428e5ef10d->leave($__internal_4f60ef7c8c0f5de5577a565352688585264fcb965c30c564352259428e5ef10d_prof);

    }

    // line 178
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_522bddc044a6a502e20441637cd44d76d364949bf9e5334489e34dd3b9bcb137 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_522bddc044a6a502e20441637cd44d76d364949bf9e5334489e34dd3b9bcb137->enter($__internal_522bddc044a6a502e20441637cd44d76d364949bf9e5334489e34dd3b9bcb137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_bf91b963db352bad3bc7fae9fe5e35d8b1f2587c28ad9479b89803b7159001ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf91b963db352bad3bc7fae9fe5e35d8b1f2587c28ad9479b89803b7159001ef->enter($__internal_bf91b963db352bad3bc7fae9fe5e35d8b1f2587c28ad9479b89803b7159001ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 179
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 180
            echo "<div class=\"";
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "invalid-feedback";
            } else {
                echo "alert alert-danger";
            }
            echo "\">
        <ul class=\"list-unstyled mb-0\">";
            // line 182
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 183
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "</ul>
    </div>";
        }
        
        $__internal_bf91b963db352bad3bc7fae9fe5e35d8b1f2587c28ad9479b89803b7159001ef->leave($__internal_bf91b963db352bad3bc7fae9fe5e35d8b1f2587c28ad9479b89803b7159001ef_prof);

        
        $__internal_522bddc044a6a502e20441637cd44d76d364949bf9e5334489e34dd3b9bcb137->leave($__internal_522bddc044a6a502e20441637cd44d76d364949bf9e5334489e34dd3b9bcb137_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  683 => 185,  675 => 183,  671 => 182,  662 => 180,  660 => 179,  651 => 178,  639 => 173,  637 => 172,  635 => 171,  633 => 170,  629 => 169,  626 => 167,  624 => 166,  615 => 165,  604 => 159,  600 => 158,  585 => 157,  581 => 154,  578 => 151,  577 => 150,  576 => 149,  574 => 148,  572 => 147,  569 => 145,  567 => 144,  564 => 142,  562 => 141,  560 => 140,  558 => 139,  549 => 137,  539 => 134,  536 => 132,  533 => 130,  531 => 129,  529 => 128,  520 => 127,  509 => 121,  503 => 117,  502 => 116,  501 => 115,  497 => 114,  493 => 113,  490 => 111,  488 => 110,  481 => 106,  480 => 105,  479 => 104,  478 => 103,  474 => 102,  472 => 101,  463 => 100,  452 => 96,  450 => 95,  446 => 94,  443 => 92,  441 => 91,  439 => 90,  437 => 89,  428 => 88,  417 => 84,  415 => 83,  411 => 82,  407 => 80,  405 => 79,  401 => 78,  399 => 77,  397 => 76,  395 => 75,  393 => 74,  391 => 73,  382 => 72,  372 => 69,  370 => 68,  361 => 67,  351 => 64,  348 => 63,  345 => 62,  343 => 61,  334 => 60,  324 => 57,  321 => 55,  319 => 54,  310 => 53,  299 => 49,  297 => 48,  295 => 47,  290 => 46,  281 => 45,  271 => 42,  268 => 40,  266 => 39,  264 => 38,  255 => 37,  245 => 34,  242 => 32,  240 => 31,  238 => 30,  229 => 29,  219 => 26,  216 => 24,  214 => 23,  212 => 22,  203 => 21,  193 => 18,  190 => 16,  188 => 15,  186 => 14,  177 => 13,  167 => 10,  164 => 9,  161 => 8,  158 => 7,  156 => 6,  147 => 5,  137 => 178,  134 => 177,  131 => 175,  129 => 165,  126 => 164,  123 => 162,  121 => 137,  118 => 136,  116 => 127,  113 => 126,  110 => 124,  108 => 100,  105 => 99,  103 => 88,  100 => 87,  98 => 72,  95 => 71,  93 => 67,  91 => 60,  89 => 53,  86 => 52,  84 => 45,  81 => 44,  79 => 37,  76 => 36,  74 => 29,  71 => 28,  69 => 21,  66 => 20,  64 => 13,  61 => 12,  59 => 5,  56 => 4,  53 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block money_widget -%}
    {% if not valid %}
        {% set group_class = ' form-control is-invalid' %}
        {% set valid = true %}
    {% endif %}
    {{- parent() -}}
{%- endblock money_widget %}

{% block datetime_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock date_widget %}

{% block time_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock time_widget %}

{% block dateinterval_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock dateinterval_widget %}

{% block percent_widget -%}
    <div class=\"input-group{{ not valid ? ' form-control is-invalid' }}\">
        {% set valid = true %}
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type != 'hidden' %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control' ~ (type|default('') == 'file' ? '-file' : ''))|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{%- block widget_attributes -%}
    {%- if not valid %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
    {% endif -%}
    {{ parent() }}
{%- endblock widget_attributes -%}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-secondary') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% elseif 'form-check-inline' in parent_label_class %}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }} form-check-inline\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {% else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
                valid: valid,
            }) -}}
        {% endfor -%}
    {%- else -%}
        {%- if not valid -%}
            {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
        {%- endif -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                    valid: true,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{# Labels #}

{% block form_label -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'legend' -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-legend')|trim}) -%}
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-control-label')|trim}) -%}
    {%- endif -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block checkbox_radio_label -%}
    {#- Do not display the label if widget is not defined in order to prevent double label rendering -#}
    {%- if widget is defined -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-check-label')|trim}) -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {%- set label = name|humanize -%}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'fieldset' -%}
    {%- endif -%}
    <{{ element|default('div') }} class=\"form-group\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </{{ element|default('div') }}>
{%- endblock form_row %}

{# Errors #}

{% block form_errors -%}
    {%- if errors|length > 0 -%}
    <div class=\"{% if form is not rootform %}invalid-feedback{% else %}alert alert-danger{% endif %}\">
        <ul class=\"list-unstyled mb-0\">
            {%- for error in errors -%}
                <li>{{ error.message }}</li>
            {%- endfor -%}
        </ul>
    </div>
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_4_layout.html.twig", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_4_layout.html.twig");
    }
}
