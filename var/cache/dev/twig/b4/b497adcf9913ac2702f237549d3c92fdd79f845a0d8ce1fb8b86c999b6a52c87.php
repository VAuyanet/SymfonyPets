<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_1d43af13bd7d7cf665227c04a180764f7851a2bb5f0f093327d156597ebbd820 extends Twig_Template
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
        $__internal_c82071006ba509e58cfb0e1b1f56b37ac17c564327fc0ebd7a9a4f7661bdcb1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c82071006ba509e58cfb0e1b1f56b37ac17c564327fc0ebd7a9a4f7661bdcb1c->enter($__internal_c82071006ba509e58cfb0e1b1f56b37ac17c564327fc0ebd7a9a4f7661bdcb1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_c27d1c1ee428370c40056b0ad7f2ccab27d9a6bcde7fb6dd29d64bba5228ddf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c27d1c1ee428370c40056b0ad7f2ccab27d9a6bcde7fb6dd29d64bba5228ddf9->enter($__internal_c27d1c1ee428370c40056b0ad7f2ccab27d9a6bcde7fb6dd29d64bba5228ddf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_c82071006ba509e58cfb0e1b1f56b37ac17c564327fc0ebd7a9a4f7661bdcb1c->leave($__internal_c82071006ba509e58cfb0e1b1f56b37ac17c564327fc0ebd7a9a4f7661bdcb1c_prof);

        
        $__internal_c27d1c1ee428370c40056b0ad7f2ccab27d9a6bcde7fb6dd29d64bba5228ddf9->leave($__internal_c27d1c1ee428370c40056b0ad7f2ccab27d9a6bcde7fb6dd29d64bba5228ddf9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
