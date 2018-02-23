<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_272e13c85893e077d880aeda02554d4b9340bfcbd54a96cb86b7dbda7c003e25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7ba7ab989a07aaafa2f15be22562b286c528259106ba17a6ba128946166a81e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7ba7ab989a07aaafa2f15be22562b286c528259106ba17a6ba128946166a81e->enter($__internal_d7ba7ab989a07aaafa2f15be22562b286c528259106ba17a6ba128946166a81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_8bd71b1a24f030fb7dc6552ac28091befabc54cabd59d820e9f2e3a29c9322f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bd71b1a24f030fb7dc6552ac28091befabc54cabd59d820e9f2e3a29c9322f2->enter($__internal_8bd71b1a24f030fb7dc6552ac28091befabc54cabd59d820e9f2e3a29c9322f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('button_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('form_label', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('choice_label', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('radio_label', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 88
        echo "
";
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('form_row', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('button_row', $context, $blocks);
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('choice_row', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('date_row', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('time_row', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 124
        echo "
";
        // line 125
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('radio_row', $context, $blocks);
        // line 138
        echo "
";
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_d7ba7ab989a07aaafa2f15be22562b286c528259106ba17a6ba128946166a81e->leave($__internal_d7ba7ab989a07aaafa2f15be22562b286c528259106ba17a6ba128946166a81e_prof);

        
        $__internal_8bd71b1a24f030fb7dc6552ac28091befabc54cabd59d820e9f2e3a29c9322f2->leave($__internal_8bd71b1a24f030fb7dc6552ac28091befabc54cabd59d820e9f2e3a29c9322f2_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_6407f66b8c66bc507ac7f86b8d67c5c97a8597093629dd28c105c0a0b18e6908 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6407f66b8c66bc507ac7f86b8d67c5c97a8597093629dd28c105c0a0b18e6908->enter($__internal_6407f66b8c66bc507ac7f86b8d67c5c97a8597093629dd28c105c0a0b18e6908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_ddc4cb4b93709623ffef1cdae3dd07ceff973bddbfd722775ac4a510fc491b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddc4cb4b93709623ffef1cdae3dd07ceff973bddbfd722775ac4a510fc491b0e->enter($__internal_ddc4cb4b93709623ffef1cdae3dd07ceff973bddbfd722775ac4a510fc491b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_ddc4cb4b93709623ffef1cdae3dd07ceff973bddbfd722775ac4a510fc491b0e->leave($__internal_ddc4cb4b93709623ffef1cdae3dd07ceff973bddbfd722775ac4a510fc491b0e_prof);

        
        $__internal_6407f66b8c66bc507ac7f86b8d67c5c97a8597093629dd28c105c0a0b18e6908->leave($__internal_6407f66b8c66bc507ac7f86b8d67c5c97a8597093629dd28c105c0a0b18e6908_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_bf951ec2e888406c42d33a8bdc4c7c82d95aa5857e10aacac12a108be7af2551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf951ec2e888406c42d33a8bdc4c7c82d95aa5857e10aacac12a108be7af2551->enter($__internal_bf951ec2e888406c42d33a8bdc4c7c82d95aa5857e10aacac12a108be7af2551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_173bbe05858bd66d47d134b90c555b97df24848485ab1ce89ceecf2fe52e75b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_173bbe05858bd66d47d134b90c555b97df24848485ab1ce89ceecf2fe52e75b8->enter($__internal_173bbe05858bd66d47d134b90c555b97df24848485ab1ce89ceecf2fe52e75b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_173bbe05858bd66d47d134b90c555b97df24848485ab1ce89ceecf2fe52e75b8->leave($__internal_173bbe05858bd66d47d134b90c555b97df24848485ab1ce89ceecf2fe52e75b8_prof);

        
        $__internal_bf951ec2e888406c42d33a8bdc4c7c82d95aa5857e10aacac12a108be7af2551->leave($__internal_bf951ec2e888406c42d33a8bdc4c7c82d95aa5857e10aacac12a108be7af2551_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_84fc567f75b375c46f7efde72a8fe379ec9512ce6c0f4c62b208dd94fb0f8116 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84fc567f75b375c46f7efde72a8fe379ec9512ce6c0f4c62b208dd94fb0f8116->enter($__internal_84fc567f75b375c46f7efde72a8fe379ec9512ce6c0f4c62b208dd94fb0f8116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_877d07e6bb1c094699b007a17a79003ddf02eba85e6c3b4eb718f8a58f883b14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_877d07e6bb1c094699b007a17a79003ddf02eba85e6c3b4eb718f8a58f883b14->enter($__internal_877d07e6bb1c094699b007a17a79003ddf02eba85e6c3b4eb718f8a58f883b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 18
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 19
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 22
            echo "<div class=\"checkbox\">";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 24
            echo "</div>";
        }
        
        $__internal_877d07e6bb1c094699b007a17a79003ddf02eba85e6c3b4eb718f8a58f883b14->leave($__internal_877d07e6bb1c094699b007a17a79003ddf02eba85e6c3b4eb718f8a58f883b14_prof);

        
        $__internal_84fc567f75b375c46f7efde72a8fe379ec9512ce6c0f4c62b208dd94fb0f8116->leave($__internal_84fc567f75b375c46f7efde72a8fe379ec9512ce6c0f4c62b208dd94fb0f8116_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_208ca0776d8a0b7ea168ac8cddd9fc603693eab433afab4ad8836724865ef56a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_208ca0776d8a0b7ea168ac8cddd9fc603693eab433afab4ad8836724865ef56a->enter($__internal_208ca0776d8a0b7ea168ac8cddd9fc603693eab433afab4ad8836724865ef56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_2dca36571a7ee5f29e96cd2850551e0b368999e681b020b3cb3ffe03fec83855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dca36571a7ee5f29e96cd2850551e0b368999e681b020b3cb3ffe03fec83855->enter($__internal_2dca36571a7ee5f29e96cd2850551e0b368999e681b020b3cb3ffe03fec83855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 29
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 30
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 33
            echo "<div class=\"radio\">";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 35
            echo "</div>";
        }
        
        $__internal_2dca36571a7ee5f29e96cd2850551e0b368999e681b020b3cb3ffe03fec83855->leave($__internal_2dca36571a7ee5f29e96cd2850551e0b368999e681b020b3cb3ffe03fec83855_prof);

        
        $__internal_208ca0776d8a0b7ea168ac8cddd9fc603693eab433afab4ad8836724865ef56a->leave($__internal_208ca0776d8a0b7ea168ac8cddd9fc603693eab433afab4ad8836724865ef56a_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_58a8157cbaaf34e7bcdddee91af9c8b19f8217f517e85c3a3534b4872a2b1f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58a8157cbaaf34e7bcdddee91af9c8b19f8217f517e85c3a3534b4872a2b1f56->enter($__internal_58a8157cbaaf34e7bcdddee91af9c8b19f8217f517e85c3a3534b4872a2b1f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_68a12e9cf956cd078d512c8834a08895062fe0384bce6c2284f0a35b79d5a410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a12e9cf956cd078d512c8834a08895062fe0384bce6c2284f0a35b79d5a410->enter($__internal_68a12e9cf956cd078d512c8834a08895062fe0384bce6c2284f0a35b79d5a410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_68a12e9cf956cd078d512c8834a08895062fe0384bce6c2284f0a35b79d5a410->leave($__internal_68a12e9cf956cd078d512c8834a08895062fe0384bce6c2284f0a35b79d5a410_prof);

        
        $__internal_58a8157cbaaf34e7bcdddee91af9c8b19f8217f517e85c3a3534b4872a2b1f56->leave($__internal_58a8157cbaaf34e7bcdddee91af9c8b19f8217f517e85c3a3534b4872a2b1f56_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_8787b59c5ee88345bea34f52a5d9146f1b9951159dffe7864a8dd30c05020517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8787b59c5ee88345bea34f52a5d9146f1b9951159dffe7864a8dd30c05020517->enter($__internal_8787b59c5ee88345bea34f52a5d9146f1b9951159dffe7864a8dd30c05020517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_7b2b4d549fad3455427683bd458ad6fcf4bc9222117fcc2a08aa91a28c233402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b2b4d549fad3455427683bd458ad6fcf4bc9222117fcc2a08aa91a28c233402->enter($__internal_7b2b4d549fad3455427683bd458ad6fcf4bc9222117fcc2a08aa91a28c233402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_7b2b4d549fad3455427683bd458ad6fcf4bc9222117fcc2a08aa91a28c233402->leave($__internal_7b2b4d549fad3455427683bd458ad6fcf4bc9222117fcc2a08aa91a28c233402_prof);

        
        $__internal_8787b59c5ee88345bea34f52a5d9146f1b9951159dffe7864a8dd30c05020517->leave($__internal_8787b59c5ee88345bea34f52a5d9146f1b9951159dffe7864a8dd30c05020517_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_2925362b9b94da12565c9edd5b653bcf747ee0e4b1b2094ef28941928831586b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2925362b9b94da12565c9edd5b653bcf747ee0e4b1b2094ef28941928831586b->enter($__internal_2925362b9b94da12565c9edd5b653bcf747ee0e4b1b2094ef28941928831586b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_a80d79b66b31bc4919cb5de562f60390538617e06163392b0a4582084139b701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a80d79b66b31bc4919cb5de562f60390538617e06163392b0a4582084139b701->enter($__internal_a80d79b66b31bc4919cb5de562f60390538617e06163392b0a4582084139b701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_a80d79b66b31bc4919cb5de562f60390538617e06163392b0a4582084139b701->leave($__internal_a80d79b66b31bc4919cb5de562f60390538617e06163392b0a4582084139b701_prof);

        
        $__internal_2925362b9b94da12565c9edd5b653bcf747ee0e4b1b2094ef28941928831586b->leave($__internal_2925362b9b94da12565c9edd5b653bcf747ee0e4b1b2094ef28941928831586b_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_d43481b32541c66b1bd9c8a9ae67dc00d8a21b73d98459c2511001d825bc88eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d43481b32541c66b1bd9c8a9ae67dc00d8a21b73d98459c2511001d825bc88eb->enter($__internal_d43481b32541c66b1bd9c8a9ae67dc00d8a21b73d98459c2511001d825bc88eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_894fd7a54f8dd1da33d0105bf4f34f34be83872822af953e77fb2d5f11680d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_894fd7a54f8dd1da33d0105bf4f34f34be83872822af953e77fb2d5f11680d95->enter($__internal_894fd7a54f8dd1da33d0105bf4f34f34be83872822af953e77fb2d5f11680d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_894fd7a54f8dd1da33d0105bf4f34f34be83872822af953e77fb2d5f11680d95->leave($__internal_894fd7a54f8dd1da33d0105bf4f34f34be83872822af953e77fb2d5f11680d95_prof);

        
        $__internal_d43481b32541c66b1bd9c8a9ae67dc00d8a21b73d98459c2511001d825bc88eb->leave($__internal_d43481b32541c66b1bd9c8a9ae67dc00d8a21b73d98459c2511001d825bc88eb_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_1626329e366b0dab7e4cf7204fdf1386ca9487b305c39a9161701376fff0d497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1626329e366b0dab7e4cf7204fdf1386ca9487b305c39a9161701376fff0d497->enter($__internal_1626329e366b0dab7e4cf7204fdf1386ca9487b305c39a9161701376fff0d497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_9c870ecceee09be0a3ce333807db4bc1cfccd44e3159def3cbe6189c78ecfd71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c870ecceee09be0a3ce333807db4bc1cfccd44e3159def3cbe6189c78ecfd71->enter($__internal_9c870ecceee09be0a3ce333807db4bc1cfccd44e3159def3cbe6189c78ecfd71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 66
        if (array_key_exists("widget", $context)) {
            // line 67
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 68
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 70
            if (array_key_exists("parent_label_class", $context)) {
                // line 71
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            }
            // line 73
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 74
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 75
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 76
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 77
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 80
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 83
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
            // line 84
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 85
            echo "</label>";
        }
        
        $__internal_9c870ecceee09be0a3ce333807db4bc1cfccd44e3159def3cbe6189c78ecfd71->leave($__internal_9c870ecceee09be0a3ce333807db4bc1cfccd44e3159def3cbe6189c78ecfd71_prof);

        
        $__internal_1626329e366b0dab7e4cf7204fdf1386ca9487b305c39a9161701376fff0d497->leave($__internal_1626329e366b0dab7e4cf7204fdf1386ca9487b305c39a9161701376fff0d497_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9358cc27d0f4125280d2831e075798182f195e9aae955949d9c288429a5cdad7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9358cc27d0f4125280d2831e075798182f195e9aae955949d9c288429a5cdad7->enter($__internal_9358cc27d0f4125280d2831e075798182f195e9aae955949d9c288429a5cdad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_0d9ea407e6c86e92b759cf0eae6ba9cda30c35808b2fc6272d04f6db5474a892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d9ea407e6c86e92b759cf0eae6ba9cda30c35808b2fc6272d04f6db5474a892->enter($__internal_0d9ea407e6c86e92b759cf0eae6ba9cda30c35808b2fc6272d04f6db5474a892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 92
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 96
        echo "</div>";
        
        $__internal_0d9ea407e6c86e92b759cf0eae6ba9cda30c35808b2fc6272d04f6db5474a892->leave($__internal_0d9ea407e6c86e92b759cf0eae6ba9cda30c35808b2fc6272d04f6db5474a892_prof);

        
        $__internal_9358cc27d0f4125280d2831e075798182f195e9aae955949d9c288429a5cdad7->leave($__internal_9358cc27d0f4125280d2831e075798182f195e9aae955949d9c288429a5cdad7_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_4b6bdb603d98a3283d3dc1854c702ce1909fa6d7ba56198b3ec264e7feeeae80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b6bdb603d98a3283d3dc1854c702ce1909fa6d7ba56198b3ec264e7feeeae80->enter($__internal_4b6bdb603d98a3283d3dc1854c702ce1909fa6d7ba56198b3ec264e7feeeae80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_fa8a2d6a0641d575857f56d24fc986a1bf09549a2de854a2544359eb67cd8f16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa8a2d6a0641d575857f56d24fc986a1bf09549a2de854a2544359eb67cd8f16->enter($__internal_fa8a2d6a0641d575857f56d24fc986a1bf09549a2de854a2544359eb67cd8f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_fa8a2d6a0641d575857f56d24fc986a1bf09549a2de854a2544359eb67cd8f16->leave($__internal_fa8a2d6a0641d575857f56d24fc986a1bf09549a2de854a2544359eb67cd8f16_prof);

        
        $__internal_4b6bdb603d98a3283d3dc1854c702ce1909fa6d7ba56198b3ec264e7feeeae80->leave($__internal_4b6bdb603d98a3283d3dc1854c702ce1909fa6d7ba56198b3ec264e7feeeae80_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_d3c793a375c572a6a595b5c1aedbe1d76f874bada71b4741de442021eff6526c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3c793a375c572a6a595b5c1aedbe1d76f874bada71b4741de442021eff6526c->enter($__internal_d3c793a375c572a6a595b5c1aedbe1d76f874bada71b4741de442021eff6526c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_f4f3e5a8af09fd74dc63b65ac0b351816e1f099fa918b735aab1d60419c51c21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4f3e5a8af09fd74dc63b65ac0b351816e1f099fa918b735aab1d60419c51c21->enter($__internal_f4f3e5a8af09fd74dc63b65ac0b351816e1f099fa918b735aab1d60419c51c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f4f3e5a8af09fd74dc63b65ac0b351816e1f099fa918b735aab1d60419c51c21->leave($__internal_f4f3e5a8af09fd74dc63b65ac0b351816e1f099fa918b735aab1d60419c51c21_prof);

        
        $__internal_d3c793a375c572a6a595b5c1aedbe1d76f874bada71b4741de442021eff6526c->leave($__internal_d3c793a375c572a6a595b5c1aedbe1d76f874bada71b4741de442021eff6526c_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_02096c381e46b2a31aaa5443889d9e7bfed04ace6f448354efccfac9979a1c1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02096c381e46b2a31aaa5443889d9e7bfed04ace6f448354efccfac9979a1c1c->enter($__internal_02096c381e46b2a31aaa5443889d9e7bfed04ace6f448354efccfac9979a1c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_9f04bb34643102c8d78ccb8b2c9c2bee05b1f0e0a252422645d5d80d96645064 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f04bb34643102c8d78ccb8b2c9c2bee05b1f0e0a252422645d5d80d96645064->enter($__internal_9f04bb34643102c8d78ccb8b2c9c2bee05b1f0e0a252422645d5d80d96645064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9f04bb34643102c8d78ccb8b2c9c2bee05b1f0e0a252422645d5d80d96645064->leave($__internal_9f04bb34643102c8d78ccb8b2c9c2bee05b1f0e0a252422645d5d80d96645064_prof);

        
        $__internal_02096c381e46b2a31aaa5443889d9e7bfed04ace6f448354efccfac9979a1c1c->leave($__internal_02096c381e46b2a31aaa5443889d9e7bfed04ace6f448354efccfac9979a1c1c_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_bd6946edf44a2fdb931853b9683ec65138f660764b93ce954b105498085c109a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd6946edf44a2fdb931853b9683ec65138f660764b93ce954b105498085c109a->enter($__internal_bd6946edf44a2fdb931853b9683ec65138f660764b93ce954b105498085c109a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_6215132684ac66d24a02d6b6329d1116e33d05b5cdb8239838d18ab45060e30a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6215132684ac66d24a02d6b6329d1116e33d05b5cdb8239838d18ab45060e30a->enter($__internal_6215132684ac66d24a02d6b6329d1116e33d05b5cdb8239838d18ab45060e30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6215132684ac66d24a02d6b6329d1116e33d05b5cdb8239838d18ab45060e30a->leave($__internal_6215132684ac66d24a02d6b6329d1116e33d05b5cdb8239838d18ab45060e30a_prof);

        
        $__internal_bd6946edf44a2fdb931853b9683ec65138f660764b93ce954b105498085c109a->leave($__internal_bd6946edf44a2fdb931853b9683ec65138f660764b93ce954b105498085c109a_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_79ba340b982c927729941205e6303fe0ad8b84fb9dcf98bda9677ef3ac290f30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79ba340b982c927729941205e6303fe0ad8b84fb9dcf98bda9677ef3ac290f30->enter($__internal_79ba340b982c927729941205e6303fe0ad8b84fb9dcf98bda9677ef3ac290f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_90a173f72db882e7ff9bc4d4f34ad1760daccc3dd9902e6755900b9b040d584a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90a173f72db882e7ff9bc4d4f34ad1760daccc3dd9902e6755900b9b040d584a->enter($__internal_90a173f72db882e7ff9bc4d4f34ad1760daccc3dd9902e6755900b9b040d584a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_90a173f72db882e7ff9bc4d4f34ad1760daccc3dd9902e6755900b9b040d584a->leave($__internal_90a173f72db882e7ff9bc4d4f34ad1760daccc3dd9902e6755900b9b040d584a_prof);

        
        $__internal_79ba340b982c927729941205e6303fe0ad8b84fb9dcf98bda9677ef3ac290f30->leave($__internal_79ba340b982c927729941205e6303fe0ad8b84fb9dcf98bda9677ef3ac290f30_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_4ecf248bdd2e1f14391e54863ce28e95b529971e7ff3c3a48c7c14bc92606730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ecf248bdd2e1f14391e54863ce28e95b529971e7ff3c3a48c7c14bc92606730->enter($__internal_4ecf248bdd2e1f14391e54863ce28e95b529971e7ff3c3a48c7c14bc92606730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_1e6917a0aacaa817d48b8e86649cc1406a2a477e2cefa1492997a14b21d63391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e6917a0aacaa817d48b8e86649cc1406a2a477e2cefa1492997a14b21d63391->enter($__internal_1e6917a0aacaa817d48b8e86649cc1406a2a477e2cefa1492997a14b21d63391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 126
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 129
        echo "</div>";
        
        $__internal_1e6917a0aacaa817d48b8e86649cc1406a2a477e2cefa1492997a14b21d63391->leave($__internal_1e6917a0aacaa817d48b8e86649cc1406a2a477e2cefa1492997a14b21d63391_prof);

        
        $__internal_4ecf248bdd2e1f14391e54863ce28e95b529971e7ff3c3a48c7c14bc92606730->leave($__internal_4ecf248bdd2e1f14391e54863ce28e95b529971e7ff3c3a48c7c14bc92606730_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_197378ab703f397c2c2e73713facedfe03698512b101a80a5074e0ebc3e29e3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_197378ab703f397c2c2e73713facedfe03698512b101a80a5074e0ebc3e29e3d->enter($__internal_197378ab703f397c2c2e73713facedfe03698512b101a80a5074e0ebc3e29e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_1c3ba02bcc4e47e00b033c1030b2a0f1376f79e99d37fa9790a3c00d5678c718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c3ba02bcc4e47e00b033c1030b2a0f1376f79e99d37fa9790a3c00d5678c718->enter($__internal_1c3ba02bcc4e47e00b033c1030b2a0f1376f79e99d37fa9790a3c00d5678c718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 133
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 136
        echo "</div>";
        
        $__internal_1c3ba02bcc4e47e00b033c1030b2a0f1376f79e99d37fa9790a3c00d5678c718->leave($__internal_1c3ba02bcc4e47e00b033c1030b2a0f1376f79e99d37fa9790a3c00d5678c718_prof);

        
        $__internal_197378ab703f397c2c2e73713facedfe03698512b101a80a5074e0ebc3e29e3d->leave($__internal_197378ab703f397c2c2e73713facedfe03698512b101a80a5074e0ebc3e29e3d_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_693d70517da541c48df0c1b45b519ac2c2e74baaaa5056586544014191d4b3d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_693d70517da541c48df0c1b45b519ac2c2e74baaaa5056586544014191d4b3d1->enter($__internal_693d70517da541c48df0c1b45b519ac2c2e74baaaa5056586544014191d4b3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_945b787893bd464306fc5ee2fa8bae788ed08893257f5b2f9036935412990467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_945b787893bd464306fc5ee2fa8bae788ed08893257f5b2f9036935412990467->enter($__internal_945b787893bd464306fc5ee2fa8bae788ed08893257f5b2f9036935412990467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 142
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 143
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 144
            echo "    <ul class=\"list-unstyled\">";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 146
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "</ul>
    ";
            // line 149
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_945b787893bd464306fc5ee2fa8bae788ed08893257f5b2f9036935412990467->leave($__internal_945b787893bd464306fc5ee2fa8bae788ed08893257f5b2f9036935412990467_prof);

        
        $__internal_693d70517da541c48df0c1b45b519ac2c2e74baaaa5056586544014191d4b3d1->leave($__internal_693d70517da541c48df0c1b45b519ac2c2e74baaaa5056586544014191d4b3d1_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  650 => 149,  647 => 148,  639 => 146,  635 => 145,  633 => 144,  627 => 143,  625 => 142,  616 => 141,  606 => 136,  604 => 135,  602 => 134,  596 => 133,  587 => 132,  577 => 129,  575 => 128,  573 => 127,  567 => 126,  558 => 125,  548 => 122,  546 => 121,  537 => 120,  527 => 117,  525 => 116,  516 => 115,  506 => 112,  504 => 111,  495 => 110,  485 => 107,  483 => 106,  474 => 105,  464 => 102,  462 => 101,  460 => 100,  451 => 99,  441 => 96,  439 => 95,  437 => 94,  435 => 93,  429 => 92,  420 => 91,  409 => 85,  405 => 84,  390 => 83,  386 => 80,  383 => 77,  382 => 76,  381 => 75,  379 => 74,  377 => 73,  374 => 71,  372 => 70,  369 => 68,  367 => 67,  365 => 66,  356 => 64,  346 => 61,  344 => 59,  335 => 58,  325 => 55,  323 => 53,  314 => 52,  304 => 49,  302 => 48,  293 => 46,  283 => 43,  281 => 42,  272 => 41,  261 => 35,  259 => 34,  257 => 33,  254 => 31,  252 => 30,  250 => 29,  241 => 28,  230 => 24,  228 => 23,  226 => 22,  223 => 20,  221 => 19,  219 => 18,  210 => 17,  200 => 14,  198 => 13,  189 => 12,  179 => 9,  176 => 7,  174 => 6,  165 => 5,  155 => 141,  152 => 140,  149 => 138,  147 => 132,  144 => 131,  142 => 125,  139 => 124,  137 => 120,  134 => 119,  132 => 115,  129 => 114,  127 => 110,  124 => 109,  122 => 105,  119 => 104,  117 => 99,  114 => 98,  112 => 91,  109 => 90,  106 => 88,  104 => 64,  101 => 63,  99 => 58,  96 => 57,  94 => 52,  91 => 51,  89 => 46,  86 => 45,  84 => 41,  81 => 40,  78 => 38,  76 => 28,  73 => 27,  71 => 17,  68 => 16,  66 => 12,  63 => 11,  61 => 5,  58 => 4,  55 => 2,  14 => 1,);
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

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {%- if widget is defined -%}
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
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
