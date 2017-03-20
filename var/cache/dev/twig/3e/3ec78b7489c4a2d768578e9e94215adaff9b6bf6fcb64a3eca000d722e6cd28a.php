<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_5133f7a789b7654ed2ee9eff911768604cd95d37167dc8ebe5b21b1eca823d51 extends Twig_Template
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
        $__internal_d1a17e9420841be4da584a0a5f8cc2e236d1d032164a49d5574a55ff7b82f3e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1a17e9420841be4da584a0a5f8cc2e236d1d032164a49d5574a55ff7b82f3e1->enter($__internal_d1a17e9420841be4da584a0a5f8cc2e236d1d032164a49d5574a55ff7b82f3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_39ac76a3f3ffac33c6479dc246aa7ca5e6ce76041f7401d4be9cc6df055a4f2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39ac76a3f3ffac33c6479dc246aa7ca5e6ce76041f7401d4be9cc6df055a4f2e->enter($__internal_39ac76a3f3ffac33c6479dc246aa7ca5e6ce76041f7401d4be9cc6df055a4f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_d1a17e9420841be4da584a0a5f8cc2e236d1d032164a49d5574a55ff7b82f3e1->leave($__internal_d1a17e9420841be4da584a0a5f8cc2e236d1d032164a49d5574a55ff7b82f3e1_prof);

        
        $__internal_39ac76a3f3ffac33c6479dc246aa7ca5e6ce76041f7401d4be9cc6df055a4f2e->leave($__internal_39ac76a3f3ffac33c6479dc246aa7ca5e6ce76041f7401d4be9cc6df055a4f2e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
