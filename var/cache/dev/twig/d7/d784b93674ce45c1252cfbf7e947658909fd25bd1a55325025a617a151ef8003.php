<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_3074221b836b08f5e016716cc13c6469d96fa8493179ae94b2ff9626bb27c704 extends Twig_Template
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
        $__internal_d520dd4d01fd1f7cce6f249521058ea0a48563aae9de764d95f9345cb480fd36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d520dd4d01fd1f7cce6f249521058ea0a48563aae9de764d95f9345cb480fd36->enter($__internal_d520dd4d01fd1f7cce6f249521058ea0a48563aae9de764d95f9345cb480fd36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_3d960abc804f6b502c76d373714816eaa91e27eeb41d186740e391cd12781223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d960abc804f6b502c76d373714816eaa91e27eeb41d186740e391cd12781223->enter($__internal_3d960abc804f6b502c76d373714816eaa91e27eeb41d186740e391cd12781223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_d520dd4d01fd1f7cce6f249521058ea0a48563aae9de764d95f9345cb480fd36->leave($__internal_d520dd4d01fd1f7cce6f249521058ea0a48563aae9de764d95f9345cb480fd36_prof);

        
        $__internal_3d960abc804f6b502c76d373714816eaa91e27eeb41d186740e391cd12781223->leave($__internal_3d960abc804f6b502c76d373714816eaa91e27eeb41d186740e391cd12781223_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
