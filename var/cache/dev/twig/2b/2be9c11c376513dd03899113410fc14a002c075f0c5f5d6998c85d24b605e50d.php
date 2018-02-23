<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_516c655e8641c102a91ad3a73944cf8ab5ca0d67fbf7fa247f3eca9edbd4a734 extends Twig_Template
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
        $__internal_69cf473da64027d9fdfd1e087293389765f01f31b6e7ec1fe17879bf5762d904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69cf473da64027d9fdfd1e087293389765f01f31b6e7ec1fe17879bf5762d904->enter($__internal_69cf473da64027d9fdfd1e087293389765f01f31b6e7ec1fe17879bf5762d904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_554da264a26da48dbcdb739a6176f8d9dbf9b8ab61dfcfbe168714d71a0509eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_554da264a26da48dbcdb739a6176f8d9dbf9b8ab61dfcfbe168714d71a0509eb->enter($__internal_554da264a26da48dbcdb739a6176f8d9dbf9b8ab61dfcfbe168714d71a0509eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_69cf473da64027d9fdfd1e087293389765f01f31b6e7ec1fe17879bf5762d904->leave($__internal_69cf473da64027d9fdfd1e087293389765f01f31b6e7ec1fe17879bf5762d904_prof);

        
        $__internal_554da264a26da48dbcdb739a6176f8d9dbf9b8ab61dfcfbe168714d71a0509eb->leave($__internal_554da264a26da48dbcdb739a6176f8d9dbf9b8ab61dfcfbe168714d71a0509eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
