<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_7c0849cff7667c6473393206d221a3e99f592b27fba76c3665627383d103cbdc extends Twig_Template
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
        $__internal_6405ea76b6f0670dadf8495ab3534d5be635c6c2d44abb0f1108b01855e44dd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6405ea76b6f0670dadf8495ab3534d5be635c6c2d44abb0f1108b01855e44dd0->enter($__internal_6405ea76b6f0670dadf8495ab3534d5be635c6c2d44abb0f1108b01855e44dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_8fdb92322b4d492beb0bceffc6d802788c1a759a92bedf07e2a24b1d59af6ef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fdb92322b4d492beb0bceffc6d802788c1a759a92bedf07e2a24b1d59af6ef1->enter($__internal_8fdb92322b4d492beb0bceffc6d802788c1a759a92bedf07e2a24b1d59af6ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_6405ea76b6f0670dadf8495ab3534d5be635c6c2d44abb0f1108b01855e44dd0->leave($__internal_6405ea76b6f0670dadf8495ab3534d5be635c6c2d44abb0f1108b01855e44dd0_prof);

        
        $__internal_8fdb92322b4d492beb0bceffc6d802788c1a759a92bedf07e2a24b1d59af6ef1->leave($__internal_8fdb92322b4d492beb0bceffc6d802788c1a759a92bedf07e2a24b1d59af6ef1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
