<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_81a9e5401dc4dca1cf2825130da666f896a7b13f191c9bb327e5234d04c21ebb extends Twig_Template
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
        $__internal_010b01dfe0cab002149a01183bfff1bb856ebc6a186231cd9f371f917b589990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_010b01dfe0cab002149a01183bfff1bb856ebc6a186231cd9f371f917b589990->enter($__internal_010b01dfe0cab002149a01183bfff1bb856ebc6a186231cd9f371f917b589990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_c83591c0ecd7d3b2fccd37ba64ed9c00658df87ce53b79976336b4e3e6f3725f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c83591c0ecd7d3b2fccd37ba64ed9c00658df87ce53b79976336b4e3e6f3725f->enter($__internal_c83591c0ecd7d3b2fccd37ba64ed9c00658df87ce53b79976336b4e3e6f3725f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_010b01dfe0cab002149a01183bfff1bb856ebc6a186231cd9f371f917b589990->leave($__internal_010b01dfe0cab002149a01183bfff1bb856ebc6a186231cd9f371f917b589990_prof);

        
        $__internal_c83591c0ecd7d3b2fccd37ba64ed9c00658df87ce53b79976336b4e3e6f3725f->leave($__internal_c83591c0ecd7d3b2fccd37ba64ed9c00658df87ce53b79976336b4e3e6f3725f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
