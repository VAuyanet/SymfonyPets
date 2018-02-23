<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_04de49f606eb76c9e8c2d20ae4aab7d4a71e8bafa6d895af7672846deeac1499 extends Twig_Template
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
        $__internal_57084cc53399d3cccac7cfb50c8ba69eed6f005f94db615ccb43f59f53e90919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57084cc53399d3cccac7cfb50c8ba69eed6f005f94db615ccb43f59f53e90919->enter($__internal_57084cc53399d3cccac7cfb50c8ba69eed6f005f94db615ccb43f59f53e90919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_0304d083179736652eab882e5d6c22c80cd0f2e43dbbbe189a1b6417916a2baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0304d083179736652eab882e5d6c22c80cd0f2e43dbbbe189a1b6417916a2baf->enter($__internal_0304d083179736652eab882e5d6c22c80cd0f2e43dbbbe189a1b6417916a2baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_57084cc53399d3cccac7cfb50c8ba69eed6f005f94db615ccb43f59f53e90919->leave($__internal_57084cc53399d3cccac7cfb50c8ba69eed6f005f94db615ccb43f59f53e90919_prof);

        
        $__internal_0304d083179736652eab882e5d6c22c80cd0f2e43dbbbe189a1b6417916a2baf->leave($__internal_0304d083179736652eab882e5d6c22c80cd0f2e43dbbbe189a1b6417916a2baf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
