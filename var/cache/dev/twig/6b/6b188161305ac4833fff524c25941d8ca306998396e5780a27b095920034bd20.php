<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_a7ab5dc8dfc8540df6892d023fecd0de772aaefb5f7a17dcd6d98a2cea1b728c extends Twig_Template
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
        $__internal_504433f839119debe154b3e81a4825144b416b519692a00d8224f12744b38fd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_504433f839119debe154b3e81a4825144b416b519692a00d8224f12744b38fd0->enter($__internal_504433f839119debe154b3e81a4825144b416b519692a00d8224f12744b38fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_8a92566eb572e9c0fa619f942bf9702327bf5230a81650195a4ba65814659e7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a92566eb572e9c0fa619f942bf9702327bf5230a81650195a4ba65814659e7d->enter($__internal_8a92566eb572e9c0fa619f942bf9702327bf5230a81650195a4ba65814659e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_504433f839119debe154b3e81a4825144b416b519692a00d8224f12744b38fd0->leave($__internal_504433f839119debe154b3e81a4825144b416b519692a00d8224f12744b38fd0_prof);

        
        $__internal_8a92566eb572e9c0fa619f942bf9702327bf5230a81650195a4ba65814659e7d->leave($__internal_8a92566eb572e9c0fa619f942bf9702327bf5230a81650195a4ba65814659e7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
