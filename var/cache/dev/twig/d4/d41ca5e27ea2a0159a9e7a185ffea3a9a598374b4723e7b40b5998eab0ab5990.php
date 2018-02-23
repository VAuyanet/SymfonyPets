<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_33ee2f3f389df3326ec0fa64f41fd91a956a049f0c2198920b6f67b7636b3441 extends Twig_Template
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
        $__internal_80c7cfee2cd98dd26c0a1a35f277cf7da195861bc1d38891fa72a78182ddc581 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80c7cfee2cd98dd26c0a1a35f277cf7da195861bc1d38891fa72a78182ddc581->enter($__internal_80c7cfee2cd98dd26c0a1a35f277cf7da195861bc1d38891fa72a78182ddc581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_62b707457bc2ea1b086d4850c3619465657b48e5a6b4270c696babe884b4acba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b707457bc2ea1b086d4850c3619465657b48e5a6b4270c696babe884b4acba->enter($__internal_62b707457bc2ea1b086d4850c3619465657b48e5a6b4270c696babe884b4acba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_80c7cfee2cd98dd26c0a1a35f277cf7da195861bc1d38891fa72a78182ddc581->leave($__internal_80c7cfee2cd98dd26c0a1a35f277cf7da195861bc1d38891fa72a78182ddc581_prof);

        
        $__internal_62b707457bc2ea1b086d4850c3619465657b48e5a6b4270c696babe884b4acba->leave($__internal_62b707457bc2ea1b086d4850c3619465657b48e5a6b4270c696babe884b4acba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
