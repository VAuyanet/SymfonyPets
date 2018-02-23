<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_b9efcfe4ff31370ced7fde70f65349f8c1b6da2d5dff4ea3afb5251994a47e43 extends Twig_Template
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
        $__internal_ecb7adb7ff37fbbba1b3aedc22fc64cbd6e8d675b0554bf87bf2dc3081d5fe7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecb7adb7ff37fbbba1b3aedc22fc64cbd6e8d675b0554bf87bf2dc3081d5fe7a->enter($__internal_ecb7adb7ff37fbbba1b3aedc22fc64cbd6e8d675b0554bf87bf2dc3081d5fe7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_f6f277eb2d7104c3f2a867b3b6714d12dbc64bbc43a616817f576f683c1c32cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6f277eb2d7104c3f2a867b3b6714d12dbc64bbc43a616817f576f683c1c32cd->enter($__internal_f6f277eb2d7104c3f2a867b3b6714d12dbc64bbc43a616817f576f683c1c32cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_ecb7adb7ff37fbbba1b3aedc22fc64cbd6e8d675b0554bf87bf2dc3081d5fe7a->leave($__internal_ecb7adb7ff37fbbba1b3aedc22fc64cbd6e8d675b0554bf87bf2dc3081d5fe7a_prof);

        
        $__internal_f6f277eb2d7104c3f2a867b3b6714d12dbc64bbc43a616817f576f683c1c32cd->leave($__internal_f6f277eb2d7104c3f2a867b3b6714d12dbc64bbc43a616817f576f683c1c32cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
