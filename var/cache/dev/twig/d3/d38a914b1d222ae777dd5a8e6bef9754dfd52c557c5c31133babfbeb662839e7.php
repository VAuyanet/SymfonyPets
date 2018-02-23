<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_ad08a8c28b84dfe0f7c4727338e061a96686233281ad3a628088403b650b7ee6 extends Twig_Template
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
        $__internal_b9d5187c902cf5ac4cd79b79304a5815fca18a8b2a159a0f39002b7a611daadd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9d5187c902cf5ac4cd79b79304a5815fca18a8b2a159a0f39002b7a611daadd->enter($__internal_b9d5187c902cf5ac4cd79b79304a5815fca18a8b2a159a0f39002b7a611daadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_7414b877b63107c1f4c858d716348b73a90f536761f05b594a723134b2f6c472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7414b877b63107c1f4c858d716348b73a90f536761f05b594a723134b2f6c472->enter($__internal_7414b877b63107c1f4c858d716348b73a90f536761f05b594a723134b2f6c472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_b9d5187c902cf5ac4cd79b79304a5815fca18a8b2a159a0f39002b7a611daadd->leave($__internal_b9d5187c902cf5ac4cd79b79304a5815fca18a8b2a159a0f39002b7a611daadd_prof);

        
        $__internal_7414b877b63107c1f4c858d716348b73a90f536761f05b594a723134b2f6c472->leave($__internal_7414b877b63107c1f4c858d716348b73a90f536761f05b594a723134b2f6c472_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
