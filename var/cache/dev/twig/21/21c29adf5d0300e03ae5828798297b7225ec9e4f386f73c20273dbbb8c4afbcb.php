<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_1c462975a063a672e51ff5b48177b998b87142fda90f3a0d7af99131471bb11b extends Twig_Template
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
        $__internal_86040f12efd65983b80db2ee781f449bd80ffee7022b6ece24ae3695832626fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86040f12efd65983b80db2ee781f449bd80ffee7022b6ece24ae3695832626fa->enter($__internal_86040f12efd65983b80db2ee781f449bd80ffee7022b6ece24ae3695832626fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_1de422ddd3232943405cdc65a430d2c10bdf0cf5f9340db80ac5de469709c180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1de422ddd3232943405cdc65a430d2c10bdf0cf5f9340db80ac5de469709c180->enter($__internal_1de422ddd3232943405cdc65a430d2c10bdf0cf5f9340db80ac5de469709c180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_86040f12efd65983b80db2ee781f449bd80ffee7022b6ece24ae3695832626fa->leave($__internal_86040f12efd65983b80db2ee781f449bd80ffee7022b6ece24ae3695832626fa_prof);

        
        $__internal_1de422ddd3232943405cdc65a430d2c10bdf0cf5f9340db80ac5de469709c180->leave($__internal_1de422ddd3232943405cdc65a430d2c10bdf0cf5f9340db80ac5de469709c180_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
