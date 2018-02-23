<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_8c0daf5ea819e95f88daba415f1ea297f384fcfa8abbe2130a4338d1fd3cb5ee extends Twig_Template
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
        $__internal_f00936f21a421e87f856e18d42fa82146c51b2d58dcef2105b3f6845244a2a53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f00936f21a421e87f856e18d42fa82146c51b2d58dcef2105b3f6845244a2a53->enter($__internal_f00936f21a421e87f856e18d42fa82146c51b2d58dcef2105b3f6845244a2a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_e9a66ec257c76517a5da3c376031782593b5edb83c63eb536e7ca0b6c3e7d625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9a66ec257c76517a5da3c376031782593b5edb83c63eb536e7ca0b6c3e7d625->enter($__internal_e9a66ec257c76517a5da3c376031782593b5edb83c63eb536e7ca0b6c3e7d625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_f00936f21a421e87f856e18d42fa82146c51b2d58dcef2105b3f6845244a2a53->leave($__internal_f00936f21a421e87f856e18d42fa82146c51b2d58dcef2105b3f6845244a2a53_prof);

        
        $__internal_e9a66ec257c76517a5da3c376031782593b5edb83c63eb536e7ca0b6c3e7d625->leave($__internal_e9a66ec257c76517a5da3c376031782593b5edb83c63eb536e7ca0b6c3e7d625_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
