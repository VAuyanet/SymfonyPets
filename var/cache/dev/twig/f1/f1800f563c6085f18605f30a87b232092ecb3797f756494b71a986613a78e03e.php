<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_951b05ec52f99e45e61bd38eaaf6a4aabd2937734d575e777c1c15a0fe643da7 extends Twig_Template
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
        $__internal_71dc09217f4bf0603d30ff2dc872ff7a64a833cebb11dc5a83851de78ee5ed6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71dc09217f4bf0603d30ff2dc872ff7a64a833cebb11dc5a83851de78ee5ed6d->enter($__internal_71dc09217f4bf0603d30ff2dc872ff7a64a833cebb11dc5a83851de78ee5ed6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_4b5bbcc9fb4107bf8a9383dc38bdc56a02d467ea139a4592e3921e7c87aeaf34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b5bbcc9fb4107bf8a9383dc38bdc56a02d467ea139a4592e3921e7c87aeaf34->enter($__internal_4b5bbcc9fb4107bf8a9383dc38bdc56a02d467ea139a4592e3921e7c87aeaf34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_71dc09217f4bf0603d30ff2dc872ff7a64a833cebb11dc5a83851de78ee5ed6d->leave($__internal_71dc09217f4bf0603d30ff2dc872ff7a64a833cebb11dc5a83851de78ee5ed6d_prof);

        
        $__internal_4b5bbcc9fb4107bf8a9383dc38bdc56a02d467ea139a4592e3921e7c87aeaf34->leave($__internal_4b5bbcc9fb4107bf8a9383dc38bdc56a02d467ea139a4592e3921e7c87aeaf34_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
