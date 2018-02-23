<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_61c8bb1badaf70942009c083bd6551c21e9185ce0fa67483f107ddeab6f485a1 extends Twig_Template
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
        $__internal_593c2db770e9a02c3f4c7d3f87f9ca6b5ae5ded32120ca536941c7fb6489731f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_593c2db770e9a02c3f4c7d3f87f9ca6b5ae5ded32120ca536941c7fb6489731f->enter($__internal_593c2db770e9a02c3f4c7d3f87f9ca6b5ae5ded32120ca536941c7fb6489731f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_69441941353a6d3b5d746f07749290813b2894b44c13e2c2be17fb7c679fb669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69441941353a6d3b5d746f07749290813b2894b44c13e2c2be17fb7c679fb669->enter($__internal_69441941353a6d3b5d746f07749290813b2894b44c13e2c2be17fb7c679fb669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_593c2db770e9a02c3f4c7d3f87f9ca6b5ae5ded32120ca536941c7fb6489731f->leave($__internal_593c2db770e9a02c3f4c7d3f87f9ca6b5ae5ded32120ca536941c7fb6489731f_prof);

        
        $__internal_69441941353a6d3b5d746f07749290813b2894b44c13e2c2be17fb7c679fb669->leave($__internal_69441941353a6d3b5d746f07749290813b2894b44c13e2c2be17fb7c679fb669_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
