<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_097a3cf4b47118399de08fb8d897c027b7a6035a62e183d2b6d4c1fba6185161 extends Twig_Template
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
        $__internal_1a68ff9208d2d4ee4f5dd665cf7d4779744e6b347fd0f24b5e6949a1ae7606f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a68ff9208d2d4ee4f5dd665cf7d4779744e6b347fd0f24b5e6949a1ae7606f0->enter($__internal_1a68ff9208d2d4ee4f5dd665cf7d4779744e6b347fd0f24b5e6949a1ae7606f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_dc888b575b4fd2728ad59f09df716dff06ef1d589b85fa7d8b339608cd9e5d99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc888b575b4fd2728ad59f09df716dff06ef1d589b85fa7d8b339608cd9e5d99->enter($__internal_dc888b575b4fd2728ad59f09df716dff06ef1d589b85fa7d8b339608cd9e5d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_1a68ff9208d2d4ee4f5dd665cf7d4779744e6b347fd0f24b5e6949a1ae7606f0->leave($__internal_1a68ff9208d2d4ee4f5dd665cf7d4779744e6b347fd0f24b5e6949a1ae7606f0_prof);

        
        $__internal_dc888b575b4fd2728ad59f09df716dff06ef1d589b85fa7d8b339608cd9e5d99->leave($__internal_dc888b575b4fd2728ad59f09df716dff06ef1d589b85fa7d8b339608cd9e5d99_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
