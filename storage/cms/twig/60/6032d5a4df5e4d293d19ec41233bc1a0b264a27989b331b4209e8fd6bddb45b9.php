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

/* D:\Kamenev_at_cms/themes/kamenev/partials/site/header.htm */
class __TwigTemplate_ea37055fca051240e89bf49ec68edd8d688e1861049d9a95540b1887879f9ba4 extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 43);
        $filters = array("escape" => 9, "raw" => 15, "replace" => 15);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape', 'raw', 'replace'],
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
        $context["mainInfo"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["mainInfoList"] ?? null), "records", [], "any", false, false, true, 1)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null);
        // line 2
        $context["socials"] = twig_get_attribute($this->env, $this->source, ($context["socialList"] ?? null), "records", [], "any", false, false, true, 2);
        // line 3
        echo "<header class=\"header section\">
    <div class=\"leading\">
        <div class=\"container\">
            <div class=\"leading__box\">
                <div class=\"leading__info\">
                    <div class=\"leading__info-block\">
                        <p class=\"profession\">";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "name_activity", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "</p>
                        <div class=\"header__mobil\">
                            <h1>Ivan Kamenev</h1>
                            <img class=\"mobilManuBTN\" src=\"../../assets/img/nav_mobil.svg\" alt=\"\">
                        </div>
                        <h1>Ivan Kamenev</h1>
                        <p class=\"description\">";
        // line 15
        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "desc", [], "any", false, false, true, 15), 15, $this->source), ["<p>" => "", "</p>" => ""]);
        echo "</b></p>
                        <a class=\"message\" href=\"#\">
                            <svg width=\"40\" height=\"42\" viewBox=\"0 0 40 42\" fill=\"none\"
                                xmlns=\"http://www.w3.org/2000/svg\">
                                <path
                                    d=\"M0 4.42105C0 1.97927 1.98985 0 4.44444 0H22.2222C24.6768 0 26.6667 1.97927 26.6667 4.42105V17.6842C26.6667 20.126 24.6768 22.1053 22.2222 22.1053H15.5556L4.44444 30.9474L6.66667 22.1053H4.44444C1.98985 22.1053 0 20.126 0 17.6842V4.42105Z\"
                                    fill=\"white\" />
                                <path
                                    d=\"M13.3333 28.7368V26.5263H22.2222C26.6667 26.5263 31.1111 24.3158 31.1111 19.8947V11.0526H35.5556C38.0102 11.0526 40 13.0319 40 15.4737V28.7368C40 31.1786 38.0102 33.1579 35.5556 33.1579H33.3333L35.5556 42L24.4444 33.1579H17.7778C15.3232 33.1579 13.3333 31.1786 13.3333 28.7368Z\"
                                    fill=\"white\" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class=\"leading__img\"></div>
            </div>
        </div>
    </div>
    <div class=\"mobilNavBlock\">
      <div class=\"mobilNavBlock__list\">
          <img class=\"mobilCross\" src=\"../../assets/img/mobilCross.svg\" alt=\"\">
          <span>Услуги</span>
          <span>Партнеры</span>
          <span>О себе</span>
          <span>Социальные сети</span>
          <span>Обратная связь</span>
        </div>
        <div class=\"mobilNavBlock__sn\">
          ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["socials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "\" class=\"social__link\">
                  <img src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, true, 45), "path", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "\">
                </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "D:\\Kamenev_at_cms/themes/kamenev/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 48,  123 => 45,  118 => 44,  114 => 43,  83 => 15,  74 => 9,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set mainInfo = mainInfoList.records[0]  %}
{% set socials = socialList.records %}
<header class=\"header section\">
    <div class=\"leading\">
        <div class=\"container\">
            <div class=\"leading__box\">
                <div class=\"leading__info\">
                    <div class=\"leading__info-block\">
                        <p class=\"profession\">{{ mainInfo.name_activity }}</p>
                        <div class=\"header__mobil\">
                            <h1>Ivan Kamenev</h1>
                            <img class=\"mobilManuBTN\" src=\"../../assets/img/nav_mobil.svg\" alt=\"\">
                        </div>
                        <h1>Ivan Kamenev</h1>
                        <p class=\"description\">{{ mainInfo.desc|replace({'<p>':'', '</p>':''})|raw }}</b></p>
                        <a class=\"message\" href=\"#\">
                            <svg width=\"40\" height=\"42\" viewBox=\"0 0 40 42\" fill=\"none\"
                                xmlns=\"http://www.w3.org/2000/svg\">
                                <path
                                    d=\"M0 4.42105C0 1.97927 1.98985 0 4.44444 0H22.2222C24.6768 0 26.6667 1.97927 26.6667 4.42105V17.6842C26.6667 20.126 24.6768 22.1053 22.2222 22.1053H15.5556L4.44444 30.9474L6.66667 22.1053H4.44444C1.98985 22.1053 0 20.126 0 17.6842V4.42105Z\"
                                    fill=\"white\" />
                                <path
                                    d=\"M13.3333 28.7368V26.5263H22.2222C26.6667 26.5263 31.1111 24.3158 31.1111 19.8947V11.0526H35.5556C38.0102 11.0526 40 13.0319 40 15.4737V28.7368C40 31.1786 38.0102 33.1579 35.5556 33.1579H33.3333L35.5556 42L24.4444 33.1579H17.7778C15.3232 33.1579 13.3333 31.1786 13.3333 28.7368Z\"
                                    fill=\"white\" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class=\"leading__img\"></div>
            </div>
        </div>
    </div>
    <div class=\"mobilNavBlock\">
      <div class=\"mobilNavBlock__list\">
          <img class=\"mobilCross\" src=\"../../assets/img/mobilCross.svg\" alt=\"\">
          <span>Услуги</span>
          <span>Партнеры</span>
          <span>О себе</span>
          <span>Социальные сети</span>
          <span>Обратная связь</span>
        </div>
        <div class=\"mobilNavBlock__sn\">
          {% for item in socials %}
                <a href=\"{{ item.url }}\" class=\"social__link\">
                  <img src=\"{{ item.image.path }}\">
                </a>
        {% endfor %}
        </div>
    </div>
</header>", "D:\\Kamenev_at_cms/themes/kamenev/partials/site/header.htm", "");
    }
}
