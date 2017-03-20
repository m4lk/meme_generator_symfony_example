<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_636dea0711a22813019d87fa33d892aabc82aee126bcd6d14137109ab0f82e3c extends Twig_Template
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
        $__internal_94fb33f4f3c8a487dc8d2458c137c550a7bd6094c24c750b69c531e45cd549fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94fb33f4f3c8a487dc8d2458c137c550a7bd6094c24c750b69c531e45cd549fb->enter($__internal_94fb33f4f3c8a487dc8d2458c137c550a7bd6094c24c750b69c531e45cd549fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_0b59507d534f1b9392075da57e805969e0e8d4862642ef223e5d8037a3210756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b59507d534f1b9392075da57e805969e0e8d4862642ef223e5d8037a3210756->enter($__internal_0b59507d534f1b9392075da57e805969e0e8d4862642ef223e5d8037a3210756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_94fb33f4f3c8a487dc8d2458c137c550a7bd6094c24c750b69c531e45cd549fb->leave($__internal_94fb33f4f3c8a487dc8d2458c137c550a7bd6094c24c750b69c531e45cd549fb_prof);

        
        $__internal_0b59507d534f1b9392075da57e805969e0e8d4862642ef223e5d8037a3210756->leave($__internal_0b59507d534f1b9392075da57e805969e0e8d4862642ef223e5d8037a3210756_prof);

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
", "@Framework/Form/search_widget.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
