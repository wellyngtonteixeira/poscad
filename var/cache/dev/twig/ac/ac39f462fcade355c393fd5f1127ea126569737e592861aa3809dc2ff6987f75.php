<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_a0884b6f078c15924d0a6c228c19cfb7876a60a8da1fe1868aebc9c9300f5a0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c1e5402dafc3c6a127d20996ae2550959daa6ee308dcac69ff39afa27c7280e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c1e5402dafc3c6a127d20996ae2550959daa6ee308dcac69ff39afa27c7280e->enter($__internal_8c1e5402dafc3c6a127d20996ae2550959daa6ee308dcac69ff39afa27c7280e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_825bff67f1b9e43f3a5bd86e2e91f03cfbfeabf31e694c7fad23a9b2ac47990f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_825bff67f1b9e43f3a5bd86e2e91f03cfbfeabf31e694c7fad23a9b2ac47990f->enter($__internal_825bff67f1b9e43f3a5bd86e2e91f03cfbfeabf31e694c7fad23a9b2ac47990f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_8c1e5402dafc3c6a127d20996ae2550959daa6ee308dcac69ff39afa27c7280e->leave($__internal_8c1e5402dafc3c6a127d20996ae2550959daa6ee308dcac69ff39afa27c7280e_prof);

        
        $__internal_825bff67f1b9e43f3a5bd86e2e91f03cfbfeabf31e694c7fad23a9b2ac47990f->leave($__internal_825bff67f1b9e43f3a5bd86e2e91f03cfbfeabf31e694c7fad23a9b2ac47990f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e5924194c653508e553f8a8e29068e0d2c7e820c4c2b6a8895f10df50e1cb445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5924194c653508e553f8a8e29068e0d2c7e820c4c2b6a8895f10df50e1cb445->enter($__internal_e5924194c653508e553f8a8e29068e0d2c7e820c4c2b6a8895f10df50e1cb445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f6954f40f94dbd7bdf8c7fc8be8f55ee59cc055dda39f4a0e4a80b126cda39ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6954f40f94dbd7bdf8c7fc8be8f55ee59cc055dda39f4a0e4a80b126cda39ea->enter($__internal_f6954f40f94dbd7bdf8c7fc8be8f55ee59cc055dda39f4a0e4a80b126cda39ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f6954f40f94dbd7bdf8c7fc8be8f55ee59cc055dda39f4a0e4a80b126cda39ea->leave($__internal_f6954f40f94dbd7bdf8c7fc8be8f55ee59cc055dda39f4a0e4a80b126cda39ea_prof);

        
        $__internal_e5924194c653508e553f8a8e29068e0d2c7e820c4c2b6a8895f10df50e1cb445->leave($__internal_e5924194c653508e553f8a8e29068e0d2c7e820c4c2b6a8895f10df50e1cb445_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3a911e29a0c01cc938635f35ba4751b1d9dbcc82ce895d38e0aaad81ae02e0b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a911e29a0c01cc938635f35ba4751b1d9dbcc82ce895d38e0aaad81ae02e0b0->enter($__internal_3a911e29a0c01cc938635f35ba4751b1d9dbcc82ce895d38e0aaad81ae02e0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_644511e7bf3fdde107c1742e45905fdcc2524873aaafcf8e63f6e17e92cdbdeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_644511e7bf3fdde107c1742e45905fdcc2524873aaafcf8e63f6e17e92cdbdeb->enter($__internal_644511e7bf3fdde107c1742e45905fdcc2524873aaafcf8e63f6e17e92cdbdeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_644511e7bf3fdde107c1742e45905fdcc2524873aaafcf8e63f6e17e92cdbdeb->leave($__internal_644511e7bf3fdde107c1742e45905fdcc2524873aaafcf8e63f6e17e92cdbdeb_prof);

        
        $__internal_3a911e29a0c01cc938635f35ba4751b1d9dbcc82ce895d38e0aaad81ae02e0b0->leave($__internal_3a911e29a0c01cc938635f35ba4751b1d9dbcc82ce895d38e0aaad81ae02e0b0_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_41ada618a70f4e818b7924dbb858638c50d38021ce20cfe531b5796f44989366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41ada618a70f4e818b7924dbb858638c50d38021ce20cfe531b5796f44989366->enter($__internal_41ada618a70f4e818b7924dbb858638c50d38021ce20cfe531b5796f44989366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_089da15f7e500cd4e9599443016ceb15271acb194ceb2b17bffe4afd400a241f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_089da15f7e500cd4e9599443016ceb15271acb194ceb2b17bffe4afd400a241f->enter($__internal_089da15f7e500cd4e9599443016ceb15271acb194ceb2b17bffe4afd400a241f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_089da15f7e500cd4e9599443016ceb15271acb194ceb2b17bffe4afd400a241f->leave($__internal_089da15f7e500cd4e9599443016ceb15271acb194ceb2b17bffe4afd400a241f_prof);

        
        $__internal_41ada618a70f4e818b7924dbb858638c50d38021ce20cfe531b5796f44989366->leave($__internal_41ada618a70f4e818b7924dbb858638c50d38021ce20cfe531b5796f44989366_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\poscad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
