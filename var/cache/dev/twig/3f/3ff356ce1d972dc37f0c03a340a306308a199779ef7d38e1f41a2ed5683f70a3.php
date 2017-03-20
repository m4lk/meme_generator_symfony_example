<?php

/* base.html.twig */
class __TwigTemplate_9e9d032b72520dc3fffdef26d34d97c783bb32021ed89ee82804b4b2e44e4a03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99970e971ce3e81ab671f990b5d72f6511f0412b14cac15ab5a4699fdb3c822e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99970e971ce3e81ab671f990b5d72f6511f0412b14cac15ab5a4699fdb3c822e->enter($__internal_99970e971ce3e81ab671f990b5d72f6511f0412b14cac15ab5a4699fdb3c822e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_cd127f1cc8053290111cd49cccbf10c5553925e2bf0a441dbc81b1629dc11d14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd127f1cc8053290111cd49cccbf10c5553925e2bf0a441dbc81b1629dc11d14->enter($__internal_cd127f1cc8053290111cd49cccbf10c5553925e2bf0a441dbc81b1629dc11d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "        
        ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "        
    </body>
</html>
";
        
        $__internal_99970e971ce3e81ab671f990b5d72f6511f0412b14cac15ab5a4699fdb3c822e->leave($__internal_99970e971ce3e81ab671f990b5d72f6511f0412b14cac15ab5a4699fdb3c822e_prof);

        
        $__internal_cd127f1cc8053290111cd49cccbf10c5553925e2bf0a441dbc81b1629dc11d14->leave($__internal_cd127f1cc8053290111cd49cccbf10c5553925e2bf0a441dbc81b1629dc11d14_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a23159779c798cbb1b786808fc447c4f993f3b37710550c2f21103490a4612dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a23159779c798cbb1b786808fc447c4f993f3b37710550c2f21103490a4612dd->enter($__internal_a23159779c798cbb1b786808fc447c4f993f3b37710550c2f21103490a4612dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a3f8a04d6480bda4f9282c8ab53060c474583f4d55be07f315f1accd47aafe8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3f8a04d6480bda4f9282c8ab53060c474583f4d55be07f315f1accd47aafe8d->enter($__internal_a3f8a04d6480bda4f9282c8ab53060c474583f4d55be07f315f1accd47aafe8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a3f8a04d6480bda4f9282c8ab53060c474583f4d55be07f315f1accd47aafe8d->leave($__internal_a3f8a04d6480bda4f9282c8ab53060c474583f4d55be07f315f1accd47aafe8d_prof);

        
        $__internal_a23159779c798cbb1b786808fc447c4f993f3b37710550c2f21103490a4612dd->leave($__internal_a23159779c798cbb1b786808fc447c4f993f3b37710550c2f21103490a4612dd_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fabf52e5f381ef3c5955057d0f06a4c974d4a996ec5afa6b3eaf27631185604a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fabf52e5f381ef3c5955057d0f06a4c974d4a996ec5afa6b3eaf27631185604a->enter($__internal_fabf52e5f381ef3c5955057d0f06a4c974d4a996ec5afa6b3eaf27631185604a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_97cbab9f4b2ca84073bd6238bf823147419588c86e48c850b09b30ddd7f19f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97cbab9f4b2ca84073bd6238bf823147419588c86e48c850b09b30ddd7f19f9f->enter($__internal_97cbab9f4b2ca84073bd6238bf823147419588c86e48c850b09b30ddd7f19f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "          ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5db035d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5db035d_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/app__bootstrap_1.css");
            // line 11
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
          ";
            // asset "5db035d_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5db035d_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/app_styles_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
          ";
        } else {
            // asset "5db035d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5db035d") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/app.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
          ";
        }
        unset($context["asset_url"]);
        // line 12
        echo "  
        ";
        
        $__internal_97cbab9f4b2ca84073bd6238bf823147419588c86e48c850b09b30ddd7f19f9f->leave($__internal_97cbab9f4b2ca84073bd6238bf823147419588c86e48c850b09b30ddd7f19f9f_prof);

        
        $__internal_fabf52e5f381ef3c5955057d0f06a4c974d4a996ec5afa6b3eaf27631185604a->leave($__internal_fabf52e5f381ef3c5955057d0f06a4c974d4a996ec5afa6b3eaf27631185604a_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_aea3521c2e5d57134c72e6f0255da3f31649399f747f849ac6e61e0e8b49e0d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aea3521c2e5d57134c72e6f0255da3f31649399f747f849ac6e61e0e8b49e0d8->enter($__internal_aea3521c2e5d57134c72e6f0255da3f31649399f747f849ac6e61e0e8b49e0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c06c09cd25388e969672ea0b982287fd6960391bf5cf366b5147bcc2266ac487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c06c09cd25388e969672ea0b982287fd6960391bf5cf366b5147bcc2266ac487->enter($__internal_c06c09cd25388e969672ea0b982287fd6960391bf5cf366b5147bcc2266ac487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c06c09cd25388e969672ea0b982287fd6960391bf5cf366b5147bcc2266ac487->leave($__internal_c06c09cd25388e969672ea0b982287fd6960391bf5cf366b5147bcc2266ac487_prof);

        
        $__internal_aea3521c2e5d57134c72e6f0255da3f31649399f747f849ac6e61e0e8b49e0d8->leave($__internal_aea3521c2e5d57134c72e6f0255da3f31649399f747f849ac6e61e0e8b49e0d8_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5c0da4b41bf63679455e37020dbaf87a9621ddb2eafd858c1baaae4089ec4799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c0da4b41bf63679455e37020dbaf87a9621ddb2eafd858c1baaae4089ec4799->enter($__internal_5c0da4b41bf63679455e37020dbaf87a9621ddb2eafd858c1baaae4089ec4799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_36a13d2ddd103f4dcfae4f6a949ae368a18be1264a6746a29380002ac7272513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36a13d2ddd103f4dcfae4f6a949ae368a18be1264a6746a29380002ac7272513->enter($__internal_36a13d2ddd103f4dcfae4f6a949ae368a18be1264a6746a29380002ac7272513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b3ee3b1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_b3ee3b1_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/app_jquery_1.js");
            // line 25
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "b3ee3b1_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_b3ee3b1_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/app_bootstrap_2.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "b3ee3b1_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_b3ee3b1_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/app_part_3_scripts_1.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "b3ee3b1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_b3ee3b1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/app.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 27
        echo "        ";
        
        $__internal_36a13d2ddd103f4dcfae4f6a949ae368a18be1264a6746a29380002ac7272513->leave($__internal_36a13d2ddd103f4dcfae4f6a949ae368a18be1264a6746a29380002ac7272513_prof);

        
        $__internal_5c0da4b41bf63679455e37020dbaf87a9621ddb2eafd858c1baaae4089ec4799->leave($__internal_5c0da4b41bf63679455e37020dbaf87a9621ddb2eafd858c1baaae4089ec4799_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 27,  165 => 25,  160 => 21,  151 => 20,  134 => 18,  123 => 12,  103 => 11,  98 => 8,  89 => 7,  71 => 5,  58 => 28,  56 => 20,  53 => 19,  51 => 18,  45 => 15,  42 => 14,  40 => 7,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        
        {% block stylesheets %}
          {% stylesheets  filter='scssphp, ?uglifycss' output='css/app.css'
            'assets/vendor/bootstrap-sass/assets/stylesheets/_bootstrap.scss'
            'assets/scss/styles.scss' %}
            <link rel=\"stylesheet\" href=\"{{ asset_url }}\" />
          {% endstylesheets %}  
        {% endblock %}
        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        
        {% block javascripts %}
            {% javascripts filter='uglifyjs2, ?jsqueeze' output='js/app.js'
              'assets/vendor/jquery/dist/jquery.js'
              'assets/vendor/bootstrap-sass/assets/javascripts/bootstrap.js'
              'assets/js/*' %}
                <script src=\"{{ asset_url }}\"></script>
            {% endjavascripts %}
        {% endblock %}
        
    </body>
</html>
", "base.html.twig", "/home/rodrigo/projects/meme_generator/app/Resources/views/base.html.twig");
    }
}
