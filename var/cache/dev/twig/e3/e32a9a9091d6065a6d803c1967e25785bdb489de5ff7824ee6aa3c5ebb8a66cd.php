<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_a3553f46fbbd8778cdfd65ce6eb1aca2252895e9731d1536790ddbbf6c3d0429 extends Twig_Template
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
        $__internal_5e7fe7de2e3dd8faf1ccff02ad4d8b92bd8a4a22236e0327a30989fe5a5357d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e7fe7de2e3dd8faf1ccff02ad4d8b92bd8a4a22236e0327a30989fe5a5357d8->enter($__internal_5e7fe7de2e3dd8faf1ccff02ad4d8b92bd8a4a22236e0327a30989fe5a5357d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_65d79417e55c5f717e0930e10b84addb6b1d1d1afd6f22b92f34d1259cfe1320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65d79417e55c5f717e0930e10b84addb6b1d1d1afd6f22b92f34d1259cfe1320->enter($__internal_65d79417e55c5f717e0930e10b84addb6b1d1d1afd6f22b92f34d1259cfe1320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_5e7fe7de2e3dd8faf1ccff02ad4d8b92bd8a4a22236e0327a30989fe5a5357d8->leave($__internal_5e7fe7de2e3dd8faf1ccff02ad4d8b92bd8a4a22236e0327a30989fe5a5357d8_prof);

        
        $__internal_65d79417e55c5f717e0930e10b84addb6b1d1d1afd6f22b92f34d1259cfe1320->leave($__internal_65d79417e55c5f717e0930e10b84addb6b1d1d1afd6f22b92f34d1259cfe1320_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
