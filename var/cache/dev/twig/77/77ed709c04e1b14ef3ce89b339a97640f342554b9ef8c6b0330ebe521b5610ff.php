<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_8c233cb59d9b701ff049939e3a8f9b9288de8c5c074cbc0c73a9243e49b83121 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb8bbfe26fdf5eaff560b13f9d22c10c7643932314a5c21cc414f5670bcd54ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb8bbfe26fdf5eaff560b13f9d22c10c7643932314a5c21cc414f5670bcd54ea->enter($__internal_cb8bbfe26fdf5eaff560b13f9d22c10c7643932314a5c21cc414f5670bcd54ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_4da9d49e938ba553b8c90760dc03fca45ad9053b705faa528f7b55b4e9878b5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da9d49e938ba553b8c90760dc03fca45ad9053b705faa528f7b55b4e9878b5a->enter($__internal_4da9d49e938ba553b8c90760dc03fca45ad9053b705faa528f7b55b4e9878b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_cb8bbfe26fdf5eaff560b13f9d22c10c7643932314a5c21cc414f5670bcd54ea->leave($__internal_cb8bbfe26fdf5eaff560b13f9d22c10c7643932314a5c21cc414f5670bcd54ea_prof);

        
        $__internal_4da9d49e938ba553b8c90760dc03fca45ad9053b705faa528f7b55b4e9878b5a->leave($__internal_4da9d49e938ba553b8c90760dc03fca45ad9053b705faa528f7b55b4e9878b5a_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_97c5065459c113481437c4d9cf9e56d63dbe5a64edc02da6fda03672f7299645 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97c5065459c113481437c4d9cf9e56d63dbe5a64edc02da6fda03672f7299645->enter($__internal_97c5065459c113481437c4d9cf9e56d63dbe5a64edc02da6fda03672f7299645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_94c64ffad2dab8f451377449e4598d03c1f14102783609ba37874ca2c128d509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94c64ffad2dab8f451377449e4598d03c1f14102783609ba37874ca2c128d509->enter($__internal_94c64ffad2dab8f451377449e4598d03c1f14102783609ba37874ca2c128d509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_94c64ffad2dab8f451377449e4598d03c1f14102783609ba37874ca2c128d509->leave($__internal_94c64ffad2dab8f451377449e4598d03c1f14102783609ba37874ca2c128d509_prof);

        
        $__internal_97c5065459c113481437c4d9cf9e56d63dbe5a64edc02da6fda03672f7299645->leave($__internal_97c5065459c113481437c4d9cf9e56d63dbe5a64edc02da6fda03672f7299645_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d87fc6422f26b0ef473aaa00942cfdac562fa523c559e94f94a404c74bfc5a17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d87fc6422f26b0ef473aaa00942cfdac562fa523c559e94f94a404c74bfc5a17->enter($__internal_d87fc6422f26b0ef473aaa00942cfdac562fa523c559e94f94a404c74bfc5a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_9d8d088062533f030c55efd9fd121e7e35daa0fe4e75e4abf1a2a9b6b6a2c51a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d8d088062533f030c55efd9fd121e7e35daa0fe4e75e4abf1a2a9b6b6a2c51a->enter($__internal_9d8d088062533f030c55efd9fd121e7e35daa0fe4e75e4abf1a2a9b6b6a2c51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_9d8d088062533f030c55efd9fd121e7e35daa0fe4e75e4abf1a2a9b6b6a2c51a->leave($__internal_9d8d088062533f030c55efd9fd121e7e35daa0fe4e75e4abf1a2a9b6b6a2c51a_prof);

        
        $__internal_d87fc6422f26b0ef473aaa00942cfdac562fa523c559e94f94a404c74bfc5a17->leave($__internal_d87fc6422f26b0ef473aaa00942cfdac562fa523c559e94f94a404c74bfc5a17_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_70dc16f11ea75c768af6eaabf3209a4efeb22f28f2615ec86e50e34b17465128 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70dc16f11ea75c768af6eaabf3209a4efeb22f28f2615ec86e50e34b17465128->enter($__internal_70dc16f11ea75c768af6eaabf3209a4efeb22f28f2615ec86e50e34b17465128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_994121dea4896a065c2f65a911b7a3e89b1a437737abbfcf76e982751bec3c22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_994121dea4896a065c2f65a911b7a3e89b1a437737abbfcf76e982751bec3c22->enter($__internal_994121dea4896a065c2f65a911b7a3e89b1a437737abbfcf76e982751bec3c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_994121dea4896a065c2f65a911b7a3e89b1a437737abbfcf76e982751bec3c22->leave($__internal_994121dea4896a065c2f65a911b7a3e89b1a437737abbfcf76e982751bec3c22_prof);

        
        $__internal_70dc16f11ea75c768af6eaabf3209a4efeb22f28f2615ec86e50e34b17465128->leave($__internal_70dc16f11ea75c768af6eaabf3209a4efeb22f28f2615ec86e50e34b17465128_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_d33fb4b4a9a6cc27e8ec5ee02624ba3e735296f310d9272e97c5deb9b3508f23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d33fb4b4a9a6cc27e8ec5ee02624ba3e735296f310d9272e97c5deb9b3508f23->enter($__internal_d33fb4b4a9a6cc27e8ec5ee02624ba3e735296f310d9272e97c5deb9b3508f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_776653c65c73f6c46a1a60743c40b6b736432a7c82f98b051246903700023c93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_776653c65c73f6c46a1a60743c40b6b736432a7c82f98b051246903700023c93->enter($__internal_776653c65c73f6c46a1a60743c40b6b736432a7c82f98b051246903700023c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
        
        $__internal_776653c65c73f6c46a1a60743c40b6b736432a7c82f98b051246903700023c93->leave($__internal_776653c65c73f6c46a1a60743c40b6b736432a7c82f98b051246903700023c93_prof);

        
        $__internal_d33fb4b4a9a6cc27e8ec5ee02624ba3e735296f310d9272e97c5deb9b3508f23->leave($__internal_d33fb4b4a9a6cc27e8ec5ee02624ba3e735296f310d9272e97c5deb9b3508f23_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_1276a734a5f5076425179b63a265a5f91486f2b85e7eaebd3aacad128068a6b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1276a734a5f5076425179b63a265a5f91486f2b85e7eaebd3aacad128068a6b8->enter($__internal_1276a734a5f5076425179b63a265a5f91486f2b85e7eaebd3aacad128068a6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_0a86a507bd77ff1870280b5b949e1cfe40c00a535b26e4c7ed5d9a7a35f052cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a86a507bd77ff1870280b5b949e1cfe40c00a535b26e4c7ed5d9a7a35f052cf->enter($__internal_0a86a507bd77ff1870280b5b949e1cfe40c00a535b26e4c7ed5d9a7a35f052cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
        
        $__internal_0a86a507bd77ff1870280b5b949e1cfe40c00a535b26e4c7ed5d9a7a35f052cf->leave($__internal_0a86a507bd77ff1870280b5b949e1cfe40c00a535b26e4c7ed5d9a7a35f052cf_prof);

        
        $__internal_1276a734a5f5076425179b63a265a5f91486f2b85e7eaebd3aacad128068a6b8->leave($__internal_1276a734a5f5076425179b63a265a5f91486f2b85e7eaebd3aacad128068a6b8_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_59c20b081a5556fe1aa8f092cbcd23b3d084203d3f4cfc1105d994d45f9194ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59c20b081a5556fe1aa8f092cbcd23b3d084203d3f4cfc1105d994d45f9194ec->enter($__internal_59c20b081a5556fe1aa8f092cbcd23b3d084203d3f4cfc1105d994d45f9194ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_7326f9e8739f321fa5c58b9d319e4d1c417bd7d1ac727667d22800a0285edaff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7326f9e8739f321fa5c58b9d319e4d1c417bd7d1ac727667d22800a0285edaff->enter($__internal_7326f9e8739f321fa5c58b9d319e4d1c417bd7d1ac727667d22800a0285edaff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
        
        $__internal_7326f9e8739f321fa5c58b9d319e4d1c417bd7d1ac727667d22800a0285edaff->leave($__internal_7326f9e8739f321fa5c58b9d319e4d1c417bd7d1ac727667d22800a0285edaff_prof);

        
        $__internal_59c20b081a5556fe1aa8f092cbcd23b3d084203d3f4cfc1105d994d45f9194ec->leave($__internal_59c20b081a5556fe1aa8f092cbcd23b3d084203d3f4cfc1105d994d45f9194ec_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_646d348b298a451b498e2324a106027bcc5de4d7038371d6018105d07b8bd760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_646d348b298a451b498e2324a106027bcc5de4d7038371d6018105d07b8bd760->enter($__internal_646d348b298a451b498e2324a106027bcc5de4d7038371d6018105d07b8bd760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_7d2e9efd678a95e8a0e77af3fb063e7191fed1e117ce83cb29bf05fecdd7dfeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d2e9efd678a95e8a0e77af3fb063e7191fed1e117ce83cb29bf05fecdd7dfeb->enter($__internal_7d2e9efd678a95e8a0e77af3fb063e7191fed1e117ce83cb29bf05fecdd7dfeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_7d2e9efd678a95e8a0e77af3fb063e7191fed1e117ce83cb29bf05fecdd7dfeb->leave($__internal_7d2e9efd678a95e8a0e77af3fb063e7191fed1e117ce83cb29bf05fecdd7dfeb_prof);

        
        $__internal_646d348b298a451b498e2324a106027bcc5de4d7038371d6018105d07b8bd760->leave($__internal_646d348b298a451b498e2324a106027bcc5de4d7038371d6018105d07b8bd760_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_81e3d6306e9841c951ac4ddbdab6989d574f8ee19cb71d559166507fdfa16ba0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81e3d6306e9841c951ac4ddbdab6989d574f8ee19cb71d559166507fdfa16ba0->enter($__internal_81e3d6306e9841c951ac4ddbdab6989d574f8ee19cb71d559166507fdfa16ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_38c2f838c7889f3fd2b6f60b43673d4acdc65d2678fcba30aace16d679e5a92b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38c2f838c7889f3fd2b6f60b43673d4acdc65d2678fcba30aace16d679e5a92b->enter($__internal_38c2f838c7889f3fd2b6f60b43673d4acdc65d2678fcba30aace16d679e5a92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 58
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_38c2f838c7889f3fd2b6f60b43673d4acdc65d2678fcba30aace16d679e5a92b->leave($__internal_38c2f838c7889f3fd2b6f60b43673d4acdc65d2678fcba30aace16d679e5a92b_prof);

        
        $__internal_81e3d6306e9841c951ac4ddbdab6989d574f8ee19cb71d559166507fdfa16ba0->leave($__internal_81e3d6306e9841c951ac4ddbdab6989d574f8ee19cb71d559166507fdfa16ba0_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 64,  318 => 63,  316 => 62,  314 => 61,  310 => 60,  306 => 59,  300 => 58,  291 => 57,  281 => 54,  272 => 53,  262 => 50,  260 => 49,  258 => 48,  254 => 47,  250 => 46,  248 => 45,  239 => 44,  229 => 41,  227 => 40,  225 => 39,  221 => 38,  217 => 37,  215 => 36,  206 => 35,  196 => 32,  193 => 31,  191 => 30,  189 => 29,  185 => 28,  183 => 27,  177 => 26,  168 => 25,  158 => 20,  149 => 19,  138 => 15,  136 => 14,  131 => 12,  129 => 11,  120 => 10,  110 => 5,  108 => 4,  99 => 3,  89 => 57,  86 => 56,  84 => 53,  81 => 52,  79 => 44,  76 => 43,  74 => 35,  71 => 34,  69 => 25,  66 => 24,  63 => 22,  61 => 19,  58 => 18,  56 => 10,  53 => 9,  50 => 7,  48 => 3,  45 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block submit_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
