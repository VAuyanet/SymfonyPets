<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_105d8736bdbb5b05d81c410e3847f64f623023a053d6690e04514f484610cebb extends Twig_Template
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
        $__internal_a8bbf8c2c439f0864b8739a875e898ba38c9db5aa2b4f0e5f4814a6dbb155115 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8bbf8c2c439f0864b8739a875e898ba38c9db5aa2b4f0e5f4814a6dbb155115->enter($__internal_a8bbf8c2c439f0864b8739a875e898ba38c9db5aa2b4f0e5f4814a6dbb155115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_b654f47838e51078bbc5660f0e7047af410a3112e59915c43dc3ce48857e5030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b654f47838e51078bbc5660f0e7047af410a3112e59915c43dc3ce48857e5030->enter($__internal_b654f47838e51078bbc5660f0e7047af410a3112e59915c43dc3ce48857e5030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_a8bbf8c2c439f0864b8739a875e898ba38c9db5aa2b4f0e5f4814a6dbb155115->leave($__internal_a8bbf8c2c439f0864b8739a875e898ba38c9db5aa2b4f0e5f4814a6dbb155115_prof);

        
        $__internal_b654f47838e51078bbc5660f0e7047af410a3112e59915c43dc3ce48857e5030->leave($__internal_b654f47838e51078bbc5660f0e7047af410a3112e59915c43dc3ce48857e5030_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
