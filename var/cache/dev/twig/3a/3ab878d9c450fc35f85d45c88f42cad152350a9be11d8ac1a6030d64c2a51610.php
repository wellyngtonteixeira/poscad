<?php

/* base.html.twig */
class __TwigTemplate_e3896824a4e50256d5691fe384d28f95c406a11740c322338a283a5eba4389a9 extends Twig_Template
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
        $__internal_2b3a8060ca8c904cde535a85f4543b4dc8a6e86ca699202d058ed63183e97714 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b3a8060ca8c904cde535a85f4543b4dc8a6e86ca699202d058ed63183e97714->enter($__internal_2b3a8060ca8c904cde535a85f4543b4dc8a6e86ca699202d058ed63183e97714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d004d2a9f587616df53b4918e06551779060b60a5a5119a50fd80226ac4afce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d004d2a9f587616df53b4918e06551779060b60a5a5119a50fd80226ac4afce0->enter($__internal_d004d2a9f587616df53b4918e06551779060b60a5a5119a50fd80226ac4afce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_2b3a8060ca8c904cde535a85f4543b4dc8a6e86ca699202d058ed63183e97714->leave($__internal_2b3a8060ca8c904cde535a85f4543b4dc8a6e86ca699202d058ed63183e97714_prof);

        
        $__internal_d004d2a9f587616df53b4918e06551779060b60a5a5119a50fd80226ac4afce0->leave($__internal_d004d2a9f587616df53b4918e06551779060b60a5a5119a50fd80226ac4afce0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_69663934839aabc0361d6cba59fdfbf88e57cb85f0b1e08a2713c66f126954c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69663934839aabc0361d6cba59fdfbf88e57cb85f0b1e08a2713c66f126954c2->enter($__internal_69663934839aabc0361d6cba59fdfbf88e57cb85f0b1e08a2713c66f126954c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b8178ef894ce645131a9880e4c270335d624ac88de8bfaef99ea97f680d2222b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8178ef894ce645131a9880e4c270335d624ac88de8bfaef99ea97f680d2222b->enter($__internal_b8178ef894ce645131a9880e4c270335d624ac88de8bfaef99ea97f680d2222b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b8178ef894ce645131a9880e4c270335d624ac88de8bfaef99ea97f680d2222b->leave($__internal_b8178ef894ce645131a9880e4c270335d624ac88de8bfaef99ea97f680d2222b_prof);

        
        $__internal_69663934839aabc0361d6cba59fdfbf88e57cb85f0b1e08a2713c66f126954c2->leave($__internal_69663934839aabc0361d6cba59fdfbf88e57cb85f0b1e08a2713c66f126954c2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ff423067da9aee96d7e480d2f9bd5f7374b382eaf07320ff92c9118f12ed2ca4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff423067da9aee96d7e480d2f9bd5f7374b382eaf07320ff92c9118f12ed2ca4->enter($__internal_ff423067da9aee96d7e480d2f9bd5f7374b382eaf07320ff92c9118f12ed2ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5c18f39c35911d16d4f7e41a153da04f1f69d74d37db726ffecfee77a5692ef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c18f39c35911d16d4f7e41a153da04f1f69d74d37db726ffecfee77a5692ef2->enter($__internal_5c18f39c35911d16d4f7e41a153da04f1f69d74d37db726ffecfee77a5692ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5c18f39c35911d16d4f7e41a153da04f1f69d74d37db726ffecfee77a5692ef2->leave($__internal_5c18f39c35911d16d4f7e41a153da04f1f69d74d37db726ffecfee77a5692ef2_prof);

        
        $__internal_ff423067da9aee96d7e480d2f9bd5f7374b382eaf07320ff92c9118f12ed2ca4->leave($__internal_ff423067da9aee96d7e480d2f9bd5f7374b382eaf07320ff92c9118f12ed2ca4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d08a81de5df13d968157a7d258b55df6515e90c1b073b14c2ad9d9bd55e9650 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d08a81de5df13d968157a7d258b55df6515e90c1b073b14c2ad9d9bd55e9650->enter($__internal_5d08a81de5df13d968157a7d258b55df6515e90c1b073b14c2ad9d9bd55e9650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9b77cbde13020d36b29180673f2d3edc7c424995b99a35999bdab4097bdb0c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b77cbde13020d36b29180673f2d3edc7c424995b99a35999bdab4097bdb0c16->enter($__internal_9b77cbde13020d36b29180673f2d3edc7c424995b99a35999bdab4097bdb0c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9b77cbde13020d36b29180673f2d3edc7c424995b99a35999bdab4097bdb0c16->leave($__internal_9b77cbde13020d36b29180673f2d3edc7c424995b99a35999bdab4097bdb0c16_prof);

        
        $__internal_5d08a81de5df13d968157a7d258b55df6515e90c1b073b14c2ad9d9bd55e9650->leave($__internal_5d08a81de5df13d968157a7d258b55df6515e90c1b073b14c2ad9d9bd55e9650_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fabf438ad0cc682809f738b8969b3fd79efe4a5370ed584a33775d3f8e0a7e61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fabf438ad0cc682809f738b8969b3fd79efe4a5370ed584a33775d3f8e0a7e61->enter($__internal_fabf438ad0cc682809f738b8969b3fd79efe4a5370ed584a33775d3f8e0a7e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_487bd861a18e95f57749feb62291092148ba50833e26abbf093a3475581214b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_487bd861a18e95f57749feb62291092148ba50833e26abbf093a3475581214b0->enter($__internal_487bd861a18e95f57749feb62291092148ba50833e26abbf093a3475581214b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_487bd861a18e95f57749feb62291092148ba50833e26abbf093a3475581214b0->leave($__internal_487bd861a18e95f57749feb62291092148ba50833e26abbf093a3475581214b0_prof);

        
        $__internal_fabf438ad0cc682809f738b8969b3fd79efe4a5370ed584a33775d3f8e0a7e61->leave($__internal_fabf438ad0cc682809f738b8969b3fd79efe4a5370ed584a33775d3f8e0a7e61_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\poscad\\app\\Resources\\views\\base.html.twig");
    }
}
