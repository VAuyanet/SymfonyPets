<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_9b39c1c7e98ad2fdb1534fbb5dad20897395a06f88a773880de7b8d1d67ca173 extends Twig_Template
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
        $__internal_be772a23c76660490075d1d40c310f63d3832d6a3a8a7364efc9993082a6564e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be772a23c76660490075d1d40c310f63d3832d6a3a8a7364efc9993082a6564e->enter($__internal_be772a23c76660490075d1d40c310f63d3832d6a3a8a7364efc9993082a6564e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_8caa442fc9264c9b32d3041addbe949292ea75001d1cd768cc20e07b3f6cdfe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8caa442fc9264c9b32d3041addbe949292ea75001d1cd768cc20e07b3f6cdfe6->enter($__internal_8caa442fc9264c9b32d3041addbe949292ea75001d1cd768cc20e07b3f6cdfe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_be772a23c76660490075d1d40c310f63d3832d6a3a8a7364efc9993082a6564e->leave($__internal_be772a23c76660490075d1d40c310f63d3832d6a3a8a7364efc9993082a6564e_prof);

        
        $__internal_8caa442fc9264c9b32d3041addbe949292ea75001d1cd768cc20e07b3f6cdfe6->leave($__internal_8caa442fc9264c9b32d3041addbe949292ea75001d1cd768cc20e07b3f6cdfe6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
