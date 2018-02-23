<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b9e1fb8b6c8a86fe9b7dc5172ba8ca6ce85cf71f7f532d613d4aff04dd332ffd extends Twig_Template
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
        $__internal_1df50fb43ad98142a522309deaec7bf746d85dc581baa81f61ec7d36523b699f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1df50fb43ad98142a522309deaec7bf746d85dc581baa81f61ec7d36523b699f->enter($__internal_1df50fb43ad98142a522309deaec7bf746d85dc581baa81f61ec7d36523b699f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_55430b90f396d6c82a6e8aaa7db21fafb6093bfd4618c17c61cf17d165bea471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55430b90f396d6c82a6e8aaa7db21fafb6093bfd4618c17c61cf17d165bea471->enter($__internal_55430b90f396d6c82a6e8aaa7db21fafb6093bfd4618c17c61cf17d165bea471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1df50fb43ad98142a522309deaec7bf746d85dc581baa81f61ec7d36523b699f->leave($__internal_1df50fb43ad98142a522309deaec7bf746d85dc581baa81f61ec7d36523b699f_prof);

        
        $__internal_55430b90f396d6c82a6e8aaa7db21fafb6093bfd4618c17c61cf17d165bea471->leave($__internal_55430b90f396d6c82a6e8aaa7db21fafb6093bfd4618c17c61cf17d165bea471_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/opt/lampp/htdocs/projecteSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
