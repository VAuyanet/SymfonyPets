<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_c1e7e20f3f519a57113fdf5287ccc014fbab15fe5dd0165485b8b8b6fe6bdc40 extends Twig_Template
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
        $__internal_ea02f53c297695f432df1f38a632fc01f6c8dc38b430aa971349b1b8be2a317c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea02f53c297695f432df1f38a632fc01f6c8dc38b430aa971349b1b8be2a317c->enter($__internal_ea02f53c297695f432df1f38a632fc01f6c8dc38b430aa971349b1b8be2a317c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_b5c79ec50db8fef30640f5afdd44d6b27636114117c1ec243a883fc8ebe00f7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5c79ec50db8fef30640f5afdd44d6b27636114117c1ec243a883fc8ebe00f7a->enter($__internal_b5c79ec50db8fef30640f5afdd44d6b27636114117c1ec243a883fc8ebe00f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ea02f53c297695f432df1f38a632fc01f6c8dc38b430aa971349b1b8be2a317c->leave($__internal_ea02f53c297695f432df1f38a632fc01f6c8dc38b430aa971349b1b8be2a317c_prof);

        
        $__internal_b5c79ec50db8fef30640f5afdd44d6b27636114117c1ec243a883fc8ebe00f7a->leave($__internal_b5c79ec50db8fef30640f5afdd44d6b27636114117c1ec243a883fc8ebe00f7a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
