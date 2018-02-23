<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_d3cf0dac3c7f0214c7137141212a4e8a10be4b8e484d3220ceae6f66dc3dd91b extends Twig_Template
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
        $__internal_ad7a5d7ee3d02f18365380adf5238d5520a4102130d74ef46b299ef2fa5f6744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad7a5d7ee3d02f18365380adf5238d5520a4102130d74ef46b299ef2fa5f6744->enter($__internal_ad7a5d7ee3d02f18365380adf5238d5520a4102130d74ef46b299ef2fa5f6744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_0628ba076fe3c8a8e427d53b29c8ebf387ea95906e5e71a4c708231c94c869e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0628ba076fe3c8a8e427d53b29c8ebf387ea95906e5e71a4c708231c94c869e0->enter($__internal_0628ba076fe3c8a8e427d53b29c8ebf387ea95906e5e71a4c708231c94c869e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_ad7a5d7ee3d02f18365380adf5238d5520a4102130d74ef46b299ef2fa5f6744->leave($__internal_ad7a5d7ee3d02f18365380adf5238d5520a4102130d74ef46b299ef2fa5f6744_prof);

        
        $__internal_0628ba076fe3c8a8e427d53b29c8ebf387ea95906e5e71a4c708231c94c869e0->leave($__internal_0628ba076fe3c8a8e427d53b29c8ebf387ea95906e5e71a4c708231c94c869e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
