<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_9deec5dab0fb528cdad6875a176992f86a301f89ca5fb7c1bfb5c5f2e5333832 extends Twig_Template
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
        $__internal_f2825c68eb0e7d15139c6a1b2d9cb67c12a892d9de071d273bf45ba533024453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2825c68eb0e7d15139c6a1b2d9cb67c12a892d9de071d273bf45ba533024453->enter($__internal_f2825c68eb0e7d15139c6a1b2d9cb67c12a892d9de071d273bf45ba533024453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_81c788c2cce875519938e495d39dd296e50ce7fddd1446d3f670cdb3f9c09f4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c788c2cce875519938e495d39dd296e50ce7fddd1446d3f670cdb3f9c09f4a->enter($__internal_81c788c2cce875519938e495d39dd296e50ce7fddd1446d3f670cdb3f9c09f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_f2825c68eb0e7d15139c6a1b2d9cb67c12a892d9de071d273bf45ba533024453->leave($__internal_f2825c68eb0e7d15139c6a1b2d9cb67c12a892d9de071d273bf45ba533024453_prof);

        
        $__internal_81c788c2cce875519938e495d39dd296e50ce7fddd1446d3f670cdb3f9c09f4a->leave($__internal_81c788c2cce875519938e495d39dd296e50ce7fddd1446d3f670cdb3f9c09f4a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
