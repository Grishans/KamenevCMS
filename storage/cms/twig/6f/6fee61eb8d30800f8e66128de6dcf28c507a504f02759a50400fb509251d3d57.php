<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* D:\Kamenev_at_cms/themes/kamenev/layouts/default.htm */
class __TwigTemplate_ff8a8b144d4c8d6ac4508cb790eb5d28e850f9564ab1e55b26af7179e5c01ef1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("styles" => 12, "page" => 17, "framework" => 27, "scripts" => 28);
        $filters = array("escape" => 7, "theme" => 8);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['styles', 'page', 'framework', 'scripts'],
                ['escape', 'theme'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "title", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</title>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/libs/fullpage.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/libs/slick.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/libs/slick-theme.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/style/style.css");
        echo "\">
    ";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 13
        echo "</head>

<body>

    ";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 18
        echo "

    <script src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/libs/fullpage.min.js");
        echo "\"></script>
    <script src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/libs/jquery-min.js");
        echo "\"></script>
    <script src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/libs/slick.min.js");
        echo "\"  ></script>
    <script src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/script.js");
        echo "\" ></script>
    <script>
        window.onload = getInfoFromApi;
    </script>
    ";
        // line 27
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 28
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 29
        echo "

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "D:\\Kamenev_at_cms/themes/kamenev/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 29,  135 => 28,  124 => 27,  117 => 23,  113 => 22,  109 => 21,  105 => 20,  101 => 18,  99 => 17,  93 => 13,  90 => 12,  86 => 11,  82 => 10,  78 => 9,  74 => 8,  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{{ this.page.title }}</title>
    <link rel=\"stylesheet\" href=\"{{ 'assets/libs/fullpage.min.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/libs/slick.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/libs/slick-theme.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/style/style.css'|theme }}\">
    {% styles %}
</head>

<body>

    {% page %}


    <script src=\"{{ 'assets/libs/fullpage.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/libs/jquery-min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/libs/slick.min.js'|theme }}\"  ></script>
    <script src=\"{{ 'assets/js/script.js'|theme }}\" ></script>
    <script>
        window.onload = getInfoFromApi;
    </script>
    {% framework extras %}
    {% scripts %}


</body>

</html>", "D:\\Kamenev_at_cms/themes/kamenev/layouts/default.htm", "");
    }
}
