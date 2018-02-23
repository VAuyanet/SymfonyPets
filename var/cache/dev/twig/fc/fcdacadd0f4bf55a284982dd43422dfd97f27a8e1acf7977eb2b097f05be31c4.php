<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_4283c9523b8a8364f38c8b4c29b237880bbe8e4c11eb1ac9df3026fe0518156d extends Twig_Template
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
        $__internal_ca106b32a4d3a2d5dc6a59bc4e2a11a4c0e8732fe2177390905ce2f16825c912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca106b32a4d3a2d5dc6a59bc4e2a11a4c0e8732fe2177390905ce2f16825c912->enter($__internal_ca106b32a4d3a2d5dc6a59bc4e2a11a4c0e8732fe2177390905ce2f16825c912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_87e496aceebb4fc6b5e3c2e7ee770c8cf905595f70641ba82c0e4fe744990da6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87e496aceebb4fc6b5e3c2e7ee770c8cf905595f70641ba82c0e4fe744990da6->enter($__internal_87e496aceebb4fc6b5e3c2e7ee770c8cf905595f70641ba82c0e4fe744990da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ca106b32a4d3a2d5dc6a59bc4e2a11a4c0e8732fe2177390905ce2f16825c912->leave($__internal_ca106b32a4d3a2d5dc6a59bc4e2a11a4c0e8732fe2177390905ce2f16825c912_prof);

        
        $__internal_87e496aceebb4fc6b5e3c2e7ee770c8cf905595f70641ba82c0e4fe744990da6->leave($__internal_87e496aceebb4fc6b5e3c2e7ee770c8cf905595f70641ba82c0e4fe744990da6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
