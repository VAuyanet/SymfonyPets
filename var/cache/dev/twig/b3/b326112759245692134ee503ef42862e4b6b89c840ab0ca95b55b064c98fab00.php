<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_8942207e1560a7567bd470103ce56d8ee9bbe0960def7c2f5a56c808c06a5be8 extends Twig_Template
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
        $__internal_af5a209fe613d276b80933a3d5b9008b4daa2dec1e3337b622e63b586690e877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af5a209fe613d276b80933a3d5b9008b4daa2dec1e3337b622e63b586690e877->enter($__internal_af5a209fe613d276b80933a3d5b9008b4daa2dec1e3337b622e63b586690e877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_ec7bd6bc4770b5dccdd0a865b4963297dbf392320174112b114085c39c150e99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7bd6bc4770b5dccdd0a865b4963297dbf392320174112b114085c39c150e99->enter($__internal_ec7bd6bc4770b5dccdd0a865b4963297dbf392320174112b114085c39c150e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_af5a209fe613d276b80933a3d5b9008b4daa2dec1e3337b622e63b586690e877->leave($__internal_af5a209fe613d276b80933a3d5b9008b4daa2dec1e3337b622e63b586690e877_prof);

        
        $__internal_ec7bd6bc4770b5dccdd0a865b4963297dbf392320174112b114085c39c150e99->leave($__internal_ec7bd6bc4770b5dccdd0a865b4963297dbf392320174112b114085c39c150e99_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
