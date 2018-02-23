<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e71a413152038b47de4c0f732045dacd46411bb2022b8d2e839899c2d27572f8 extends Twig_Template
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
        $__internal_3f431b6049444c2d0a759b07bd1969740c2e6f0855175ae20830eeb2a0574efe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f431b6049444c2d0a759b07bd1969740c2e6f0855175ae20830eeb2a0574efe->enter($__internal_3f431b6049444c2d0a759b07bd1969740c2e6f0855175ae20830eeb2a0574efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_be81181b9610af7886289ee931e57f3a9b606e938aa03d6240c7421306197200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be81181b9610af7886289ee931e57f3a9b606e938aa03d6240c7421306197200->enter($__internal_be81181b9610af7886289ee931e57f3a9b606e938aa03d6240c7421306197200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_3f431b6049444c2d0a759b07bd1969740c2e6f0855175ae20830eeb2a0574efe->leave($__internal_3f431b6049444c2d0a759b07bd1969740c2e6f0855175ae20830eeb2a0574efe_prof);

        
        $__internal_be81181b9610af7886289ee931e57f3a9b606e938aa03d6240c7421306197200->leave($__internal_be81181b9610af7886289ee931e57f3a9b606e938aa03d6240c7421306197200_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
