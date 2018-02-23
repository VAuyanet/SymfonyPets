<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_e430b77aba1bd6b68b9d06c09bc219d12f2f2766c0d072e69fd3cd5f5b4313de extends Twig_Template
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
        $__internal_d04f8d6c156cb00b9b9961e7356e308798a37116753046c7ac09eb05011385b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d04f8d6c156cb00b9b9961e7356e308798a37116753046c7ac09eb05011385b3->enter($__internal_d04f8d6c156cb00b9b9961e7356e308798a37116753046c7ac09eb05011385b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_83702ceaf770f7ce48940d222f2e942b97f8de2dc22bec4509f6c3cc026239ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83702ceaf770f7ce48940d222f2e942b97f8de2dc22bec4509f6c3cc026239ba->enter($__internal_83702ceaf770f7ce48940d222f2e942b97f8de2dc22bec4509f6c3cc026239ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_d04f8d6c156cb00b9b9961e7356e308798a37116753046c7ac09eb05011385b3->leave($__internal_d04f8d6c156cb00b9b9961e7356e308798a37116753046c7ac09eb05011385b3_prof);

        
        $__internal_83702ceaf770f7ce48940d222f2e942b97f8de2dc22bec4509f6c3cc026239ba->leave($__internal_83702ceaf770f7ce48940d222f2e942b97f8de2dc22bec4509f6c3cc026239ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
