<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_185de5ead20ad9976db073e9867c7a4da0b0b46f77d58be07584dd35da94d34b extends Twig_Template
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
        $__internal_96e591437ace056737688327b833d2bf76b93b1f1d1f13ffbd430ebbe9483825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96e591437ace056737688327b833d2bf76b93b1f1d1f13ffbd430ebbe9483825->enter($__internal_96e591437ace056737688327b833d2bf76b93b1f1d1f13ffbd430ebbe9483825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_7f47eebadbbe857a58cd567cf3ec3dba0d16280cebfcb5d915c603d85ea875d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f47eebadbbe857a58cd567cf3ec3dba0d16280cebfcb5d915c603d85ea875d5->enter($__internal_7f47eebadbbe857a58cd567cf3ec3dba0d16280cebfcb5d915c603d85ea875d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_96e591437ace056737688327b833d2bf76b93b1f1d1f13ffbd430ebbe9483825->leave($__internal_96e591437ace056737688327b833d2bf76b93b1f1d1f13ffbd430ebbe9483825_prof);

        
        $__internal_7f47eebadbbe857a58cd567cf3ec3dba0d16280cebfcb5d915c603d85ea875d5->leave($__internal_7f47eebadbbe857a58cd567cf3ec3dba0d16280cebfcb5d915c603d85ea875d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
