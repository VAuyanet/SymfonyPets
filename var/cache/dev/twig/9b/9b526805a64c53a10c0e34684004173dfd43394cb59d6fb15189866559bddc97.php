<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_51b5ce7653fcce3b78aac30d2b250cc886a4ea8c1aa44624a9f3b88b2fd080aa extends Twig_Template
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
        $__internal_6a5ab0346ba1fb77d5fd41ab63cea4c349e9df79e7b4ea77eea0a660cc0c54c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a5ab0346ba1fb77d5fd41ab63cea4c349e9df79e7b4ea77eea0a660cc0c54c0->enter($__internal_6a5ab0346ba1fb77d5fd41ab63cea4c349e9df79e7b4ea77eea0a660cc0c54c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_29de8316de0d9a0da35a636a95e7e6afc8d2b0554b9c25c7431c67ec42cc38da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29de8316de0d9a0da35a636a95e7e6afc8d2b0554b9c25c7431c67ec42cc38da->enter($__internal_29de8316de0d9a0da35a636a95e7e6afc8d2b0554b9c25c7431c67ec42cc38da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_6a5ab0346ba1fb77d5fd41ab63cea4c349e9df79e7b4ea77eea0a660cc0c54c0->leave($__internal_6a5ab0346ba1fb77d5fd41ab63cea4c349e9df79e7b4ea77eea0a660cc0c54c0_prof);

        
        $__internal_29de8316de0d9a0da35a636a95e7e6afc8d2b0554b9c25c7431c67ec42cc38da->leave($__internal_29de8316de0d9a0da35a636a95e7e6afc8d2b0554b9c25c7431c67ec42cc38da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
