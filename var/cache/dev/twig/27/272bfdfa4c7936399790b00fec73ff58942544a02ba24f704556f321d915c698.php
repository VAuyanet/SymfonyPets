<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_9e97f735c8ec4a7cc10a5bb0bc20fd297dd43e8cef9b9c7ff651f0a4c0e37cdf extends Twig_Template
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
        $__internal_beb1f867a48d070d7aed55ca00d2e462df05e4bb33aa70be960c9f6c5aec60d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beb1f867a48d070d7aed55ca00d2e462df05e4bb33aa70be960c9f6c5aec60d4->enter($__internal_beb1f867a48d070d7aed55ca00d2e462df05e4bb33aa70be960c9f6c5aec60d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_032e8a14962b1249a78471698d8c5da2108dab380b8f538493e28fc0c231cefd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_032e8a14962b1249a78471698d8c5da2108dab380b8f538493e28fc0c231cefd->enter($__internal_032e8a14962b1249a78471698d8c5da2108dab380b8f538493e28fc0c231cefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_beb1f867a48d070d7aed55ca00d2e462df05e4bb33aa70be960c9f6c5aec60d4->leave($__internal_beb1f867a48d070d7aed55ca00d2e462df05e4bb33aa70be960c9f6c5aec60d4_prof);

        
        $__internal_032e8a14962b1249a78471698d8c5da2108dab380b8f538493e28fc0c231cefd->leave($__internal_032e8a14962b1249a78471698d8c5da2108dab380b8f538493e28fc0c231cefd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
