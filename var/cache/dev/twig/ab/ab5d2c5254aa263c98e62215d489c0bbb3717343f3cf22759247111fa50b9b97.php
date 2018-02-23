<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_b9b19aeb4ef0e3a740a73f1e67fa3c3829c675d24d405bf2dda1bcf761ddb6c6 extends Twig_Template
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
        $__internal_015a0a6d6d4b250e3933a7bc7d18e975783c7507724d37c6d41b99ae3891ff71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_015a0a6d6d4b250e3933a7bc7d18e975783c7507724d37c6d41b99ae3891ff71->enter($__internal_015a0a6d6d4b250e3933a7bc7d18e975783c7507724d37c6d41b99ae3891ff71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_8c980047a14aafad9e537ae0ee0e010e561df6d45868cb09407daaf0cc41b1ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c980047a14aafad9e537ae0ee0e010e561df6d45868cb09407daaf0cc41b1ea->enter($__internal_8c980047a14aafad9e537ae0ee0e010e561df6d45868cb09407daaf0cc41b1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_015a0a6d6d4b250e3933a7bc7d18e975783c7507724d37c6d41b99ae3891ff71->leave($__internal_015a0a6d6d4b250e3933a7bc7d18e975783c7507724d37c6d41b99ae3891ff71_prof);

        
        $__internal_8c980047a14aafad9e537ae0ee0e010e561df6d45868cb09407daaf0cc41b1ea->leave($__internal_8c980047a14aafad9e537ae0ee0e010e561df6d45868cb09407daaf0cc41b1ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
