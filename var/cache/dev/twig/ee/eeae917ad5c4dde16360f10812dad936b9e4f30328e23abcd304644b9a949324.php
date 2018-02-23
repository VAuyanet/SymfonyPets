<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_d28270199e1d0ddecc62b714c93e95dd4c4bded817e6a05ca904e01f85a62941 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a26f4e3ae8673fe4f7fae345f538b58853d423c588b704329f7e9f389f9e600c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a26f4e3ae8673fe4f7fae345f538b58853d423c588b704329f7e9f389f9e600c->enter($__internal_a26f4e3ae8673fe4f7fae345f538b58853d423c588b704329f7e9f389f9e600c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_8f8809e273392b24a0971ce39604a547e109c06003396c4b54e24a7d29b32ab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f8809e273392b24a0971ce39604a547e109c06003396c4b54e24a7d29b32ab3->enter($__internal_8f8809e273392b24a0971ce39604a547e109c06003396c4b54e24a7d29b32ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a26f4e3ae8673fe4f7fae345f538b58853d423c588b704329f7e9f389f9e600c->leave($__internal_a26f4e3ae8673fe4f7fae345f538b58853d423c588b704329f7e9f389f9e600c_prof);

        
        $__internal_8f8809e273392b24a0971ce39604a547e109c06003396c4b54e24a7d29b32ab3->leave($__internal_8f8809e273392b24a0971ce39604a547e109c06003396c4b54e24a7d29b32ab3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
