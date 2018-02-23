<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_9ec7411a635cd5e77ca5c71dd8140aeae649a4bd484c4e49699738fa52c2c0ce extends Twig_Template
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
        $__internal_8b6410fabd5467d0a287bc661928aa4a942930b3d46b8e8a94a7d9c2138d1dc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b6410fabd5467d0a287bc661928aa4a942930b3d46b8e8a94a7d9c2138d1dc2->enter($__internal_8b6410fabd5467d0a287bc661928aa4a942930b3d46b8e8a94a7d9c2138d1dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_226d31845e173ff0c84c4e5bee38fcf177cc86037851bef86ddbad6030016dfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_226d31845e173ff0c84c4e5bee38fcf177cc86037851bef86ddbad6030016dfe->enter($__internal_226d31845e173ff0c84c4e5bee38fcf177cc86037851bef86ddbad6030016dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8b6410fabd5467d0a287bc661928aa4a942930b3d46b8e8a94a7d9c2138d1dc2->leave($__internal_8b6410fabd5467d0a287bc661928aa4a942930b3d46b8e8a94a7d9c2138d1dc2_prof);

        
        $__internal_226d31845e173ff0c84c4e5bee38fcf177cc86037851bef86ddbad6030016dfe->leave($__internal_226d31845e173ff0c84c4e5bee38fcf177cc86037851bef86ddbad6030016dfe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
