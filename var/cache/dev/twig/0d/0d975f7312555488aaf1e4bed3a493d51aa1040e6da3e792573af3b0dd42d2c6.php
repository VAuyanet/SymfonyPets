<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_82f67baeb531d48d8cffb759266e69e0e50b12fe6aada54bd26eccdd256500dc extends Twig_Template
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
        $__internal_1048fd5e933a6420e6bd986264f7f6a042e677fb138560d5f34fc6d233927441 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1048fd5e933a6420e6bd986264f7f6a042e677fb138560d5f34fc6d233927441->enter($__internal_1048fd5e933a6420e6bd986264f7f6a042e677fb138560d5f34fc6d233927441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_9aca31a7782c4e729b9430255c424909f6f6195fd8a036f2c080c9d246f1d576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aca31a7782c4e729b9430255c424909f6f6195fd8a036f2c080c9d246f1d576->enter($__internal_9aca31a7782c4e729b9430255c424909f6f6195fd8a036f2c080c9d246f1d576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_1048fd5e933a6420e6bd986264f7f6a042e677fb138560d5f34fc6d233927441->leave($__internal_1048fd5e933a6420e6bd986264f7f6a042e677fb138560d5f34fc6d233927441_prof);

        
        $__internal_9aca31a7782c4e729b9430255c424909f6f6195fd8a036f2c080c9d246f1d576->leave($__internal_9aca31a7782c4e729b9430255c424909f6f6195fd8a036f2c080c9d246f1d576_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
