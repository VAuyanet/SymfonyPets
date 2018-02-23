<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_7d8dd9d68a77e3a7a3e05284d6ab53918d72af4f75716a7da1befbe3aaac45a6 extends Twig_Template
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
        $__internal_1ce2b785d3654ca17da4669e9d183fdb4c1e485cecf03c729282867ed807fec9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ce2b785d3654ca17da4669e9d183fdb4c1e485cecf03c729282867ed807fec9->enter($__internal_1ce2b785d3654ca17da4669e9d183fdb4c1e485cecf03c729282867ed807fec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_c1612588207b9d56981b09df258981daf16b2714d44227a218ba2a82143ba693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1612588207b9d56981b09df258981daf16b2714d44227a218ba2a82143ba693->enter($__internal_c1612588207b9d56981b09df258981daf16b2714d44227a218ba2a82143ba693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_1ce2b785d3654ca17da4669e9d183fdb4c1e485cecf03c729282867ed807fec9->leave($__internal_1ce2b785d3654ca17da4669e9d183fdb4c1e485cecf03c729282867ed807fec9_prof);

        
        $__internal_c1612588207b9d56981b09df258981daf16b2714d44227a218ba2a82143ba693->leave($__internal_c1612588207b9d56981b09df258981daf16b2714d44227a218ba2a82143ba693_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
