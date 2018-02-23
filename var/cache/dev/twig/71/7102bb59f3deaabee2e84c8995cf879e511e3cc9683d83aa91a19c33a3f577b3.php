<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_1d6f285278dd4ce61e124db53abeb6f13b88787e7556b720f58ab2c0fb70f46e extends Twig_Template
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
        $__internal_f52c7e64345836925962ff1ba9aa66279ef7b24296b6e92cfc91d5af7c9dd77c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f52c7e64345836925962ff1ba9aa66279ef7b24296b6e92cfc91d5af7c9dd77c->enter($__internal_f52c7e64345836925962ff1ba9aa66279ef7b24296b6e92cfc91d5af7c9dd77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_e9d31e0cb83d21e0cd28f059396e9f568177ac01aed9162bd2b65059dc9d5318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d31e0cb83d21e0cd28f059396e9f568177ac01aed9162bd2b65059dc9d5318->enter($__internal_e9d31e0cb83d21e0cd28f059396e9f568177ac01aed9162bd2b65059dc9d5318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_f52c7e64345836925962ff1ba9aa66279ef7b24296b6e92cfc91d5af7c9dd77c->leave($__internal_f52c7e64345836925962ff1ba9aa66279ef7b24296b6e92cfc91d5af7c9dd77c_prof);

        
        $__internal_e9d31e0cb83d21e0cd28f059396e9f568177ac01aed9162bd2b65059dc9d5318->leave($__internal_e9d31e0cb83d21e0cd28f059396e9f568177ac01aed9162bd2b65059dc9d5318_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
