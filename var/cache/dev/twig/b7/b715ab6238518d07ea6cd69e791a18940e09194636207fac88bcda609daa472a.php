<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_14bdbcd01a10f9aa5356acb376469b44bfaed6a57ffab4bdcaa34d0eef282d81 extends Twig_Template
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
        $__internal_04fccb94d10ad4051d0dd6094c5368b2160334d376794cac5e14df0b0fc2e171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04fccb94d10ad4051d0dd6094c5368b2160334d376794cac5e14df0b0fc2e171->enter($__internal_04fccb94d10ad4051d0dd6094c5368b2160334d376794cac5e14df0b0fc2e171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_14b6f28e4e5352182fc185da94e35d6642eb545e24aa9da8dff70596658a3b42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14b6f28e4e5352182fc185da94e35d6642eb545e24aa9da8dff70596658a3b42->enter($__internal_14b6f28e4e5352182fc185da94e35d6642eb545e24aa9da8dff70596658a3b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_04fccb94d10ad4051d0dd6094c5368b2160334d376794cac5e14df0b0fc2e171->leave($__internal_04fccb94d10ad4051d0dd6094c5368b2160334d376794cac5e14df0b0fc2e171_prof);

        
        $__internal_14b6f28e4e5352182fc185da94e35d6642eb545e24aa9da8dff70596658a3b42->leave($__internal_14b6f28e4e5352182fc185da94e35d6642eb545e24aa9da8dff70596658a3b42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
