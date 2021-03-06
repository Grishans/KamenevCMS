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

/* D:\Kamenev_at_cms/themes/kamenev/pages/home.htm */
class __TwigTemplate_90238ded8f1aff73f6bd4ffddce59c57be759ffbf06d2cfe29b5ba3f44cba2cd extends \Twig\Template
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
        $tags = array("set" => 1, "partial" => 6, "component" => 40, "for" => 109);
        $filters = array("escape" => 46);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'partial', 'component', 'for'],
                ['escape'],
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
        $context["documents"] = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["documentList"] ?? null), "records", [], "any", false, false, true, 2)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null);
        // line 3
        $context["socials"] = twig_get_attribute($this->env, $this->source, ($context["socialList"] ?? null), "records", [], "any", false, false, true, 3);
        // line 4
        echo "<div id=\"fullpage\">

    ";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "
    ";
        // line 8
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("wedding"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "   

    <section class=\"socials section\">
        <div class=\"container\">
            <div class=\"socials__block\">
                <div class=\"socials__item\">
                    <a class=\"sub-title\" href=\"https://instagram.com\" target=\"_blank\">Instagram</a>
                    <div class=\"socials__inst socials__slider slide-arrows\" id=\"socials_inst_id\">
                        
                    </div>
                </div>
                <div class=\"socials__item\">
                    <a class=\"sub-title\" href=\"https://vk.com\" target=\"_blank\">VK</a>
                    <div class=\"socials__vk socials__slider slide-arrows\" id=\"social_vk_id\">

                    </div>
                </div>
            </div>
        </div>
    </section>

    ";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("partners"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "
    ";
        // line 32
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("biography"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "
    <section class=\"feedback section\">
        <div class=\"container-gutter\">
            <div class=\"feedback__block\">
                <div class=\"feedback__item\">
                    <h2 class=\"feedback__title\">?????????? ???? ????????</h2>
                    <div class=\"feedback__form\">
                        ";
        // line 40
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("feedbackform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 41
        echo "                    </div>
                </div>
                <div class=\"feedback__item\">
                    <h2 class=\"feedback__title\">????????????????</h2>
                    <div class=\"feedback__contact\">
                        <p><b>??????????????:</b>";
        // line 46
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "phone", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
        echo "</p>
                        <p><b>Email:</b> ";
        // line 47
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mainInfo"] ?? null), "email", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"feedback__item\">
                    <h2 class=\"feedback__title\">????????????????????????</h2>
                    <div class=\"feedback__documentation\">
                        <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["documents"] ?? null), "document_1", [], "any", false, false, true, 53), "path", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["documents"] ?? null), "name_1", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
        echo "
                            <svg width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" fill=\"none\"
                                xmlns=\"http://www.w3.org/2000/svg\">
                                <g clip-path=\"url(#clip0)\">
                                    <path
                                        d=\"M27.8571 19.2856C27.2653 19.2856 26.7856 19.7653 26.7856 20.3571V26.7857C26.7856 27.3774 26.306 27.8571 25.7142 27.8571H4.28573C3.69397 27.8571 3.21428 27.3774 3.21428 26.7857V20.3571C3.21428 19.7653 2.73458 19.2856 2.14283 19.2856C1.55107 19.2856 1.07138 19.7653 1.07138 20.3571V26.7857C1.07138 28.5609 2.51046 29.9999 4.28566 29.9999H25.7143C27.4895 29.9999 28.9285 28.5609 28.9285 26.7857V20.3571C28.9285 19.7653 28.4489 19.2856 27.8571 19.2856Z\"
                                        fill=\"#A5A58D\" />
                                    <path
                                        d=\"M21.0904 18.5282C20.6752 18.1272 20.017 18.1272 19.6018 18.5282L16.0714 22.0564V1.07145C16.0714 0.479694 15.5917 0 15 0C14.4082 0 13.9285 0.479694 13.9285 1.07145V22.0564L10.4003 18.5282C9.97465 18.1171 9.29638 18.1289 8.88531 18.5545C8.48428 18.9697 8.48428 19.628 8.88531 20.0432L14.2424 25.4003C14.6603 25.8192 15.3387 25.8201 15.7577 25.4023C15.7583 25.4016 15.7589 25.401 15.7596 25.4003L21.1167 20.0432C21.5279 19.6175 21.5161 18.9393 21.0904 18.5282Z\"
                                        fill=\"#A5A58D\" />
                                </g>
                                <defs>
                                    <clipPath id=\"clip0\">
                                        <rect width=\"30\" height=\"30\" fill=\"white\" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["documents"] ?? null), "document_2", [], "any", false, false, true, 71), "path", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["documents"] ?? null), "name_2", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
        echo "
                            <svg width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" fill=\"none\"
                                xmlns=\"http://www.w3.org/2000/svg\">
                                <g clip-path=\"url(#clip0)\">
                                    <path
                                        d=\"M27.8571 19.2856C27.2653 19.2856 26.7856 19.7653 26.7856 20.3571V26.7857C26.7856 27.3774 26.306 27.8571 25.7142 27.8571H4.28573C3.69397 27.8571 3.21428 27.3774 3.21428 26.7857V20.3571C3.21428 19.7653 2.73458 19.2856 2.14283 19.2856C1.55107 19.2856 1.07138 19.7653 1.07138 20.3571V26.7857C1.07138 28.5609 2.51046 29.9999 4.28566 29.9999H25.7143C27.4895 29.9999 28.9285 28.5609 28.9285 26.7857V20.3571C28.9285 19.7653 28.4489 19.2856 27.8571 19.2856Z\"
                                        fill=\"#A5A58D\" />
                                    <path
                                        d=\"M21.0904 18.5282C20.6752 18.1272 20.017 18.1272 19.6018 18.5282L16.0714 22.0564V1.07145C16.0714 0.479694 15.5917 0 15 0C14.4082 0 13.9285 0.479694 13.9285 1.07145V22.0564L10.4003 18.5282C9.97465 18.1171 9.29638 18.1289 8.88531 18.5545C8.48428 18.9697 8.48428 19.628 8.88531 20.0432L14.2424 25.4003C14.6603 25.8192 15.3387 25.8201 15.7577 25.4023C15.7583 25.4016 15.7589 25.401 15.7596 25.4003L21.1167 20.0432C21.5279 19.6175 21.5161 18.9393 21.0904 18.5282Z\"
                                        fill=\"#A5A58D\" />
                                </g>
                                <defs>
                                    <clipPath id=\"clip0\">
                                        <rect width=\"30\" height=\"30\" fill=\"white\" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class=\"top-menu\">
    <nav class=\"nav\">
        <ul class=\"nav__menu\">
            <li class=\"nav__list\"><a href=\"#\" class=\"nav__link\">Instagram</a></li>
            <li class=\"nav__list\"><a href=\"#\" class=\"nav__link\">?? ????????</a></li>
            <li class=\"nav__list\"><a href=\"#\" class=\"nav__link\">????????????</a></li>
            <li class=\"nav__list\"><a href=\"#\" class=\"nav__link\">???????????????? ??????????</a></li>
            <li class=\"nav__list\"><a href=\"#\" class=\"nav__link\">????????????????</a></li>
        </ul>
    </nav>
</div>
<div class=\"right-menu\">
    <ul class=\"social\">
        ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["socials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 110
            echo "            <li class=\"social__item\">
                <a href=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
            echo "\" class=\"social__link\"><img src=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, true, 111), "path", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
            echo "\"></a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "        <!-- <li class=\"social__item\">
            <a href=\"#\" class=\"social__link\">
                <svg width=\"32\" height=\"19\" viewBox=\"0 0 32 19\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path
                        d=\"M26.5427 10.6997C26.0256 10.0466 26.1735 9.7561 26.5427 9.17233C26.5494 9.16567 30.8183 3.26669 31.2582 1.26616L31.2608 1.26483C31.4794 0.535786 31.2608 0 30.2039 0H26.7066C25.8163 0 25.4058 0.459816 25.1859 0.974277C25.1859 0.974277 23.4053 5.23657 20.8863 7.99947C20.0733 8.79781 19.6975 9.05371 19.2536 9.05371C19.0351 9.05371 18.6952 8.79781 18.6952 8.06877V1.26483C18.6952 0.39051 18.446 0 17.7089 0H12.2098C11.6513 0 11.3195 0.407837 11.3195 0.787685C11.3195 1.61669 12.579 1.80728 12.7096 4.13968V9.20032C12.7096 10.3092 12.5083 10.5131 12.0618 10.5131C10.873 10.5131 7.98747 6.23351 6.27749 1.33547C5.93229 0.385179 5.5951 0.0013327 4.69812 0.0013327H1.19952C0.201253 0.0013327 0 0.461149 0 0.97561C0 1.88458 1.18886 6.40411 5.52845 12.3751C8.42063 16.4508 12.4937 18.6592 16.1989 18.6592C18.426 18.6592 18.6979 18.1687 18.6979 17.3251C18.6979 13.4306 18.4966 13.0628 19.6122 13.0628C20.1293 13.0628 21.0196 13.3187 23.0988 15.2846C25.4751 17.6156 25.8657 18.6592 27.1958 18.6592H30.6931C31.69 18.6592 32.1951 18.1687 31.9046 17.2011C31.2395 15.1659 26.7453 10.9796 26.5427 10.6997Z\"
                        fill=\"black\" />
                </svg>
            </a>
        </li>
        <li class=\"social__item\">
            <a href=\"#\" class=\"social__link\">
                <svg width=\"27\" height=\"19\" viewBox=\"0 0 27 19\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                        d=\"M23.3344 1.19254C24.4263 1.49217 25.2862 2.37501 25.578 3.49615C26.1083 5.52807 26.1083 9.7677 26.1083 9.7677C26.1083 9.7677 26.1083 14.0072 25.578 16.0392C25.2862 17.1604 24.4263 18.0432 23.3344 18.343C21.3556 18.8874 13.4201 18.8874 13.4201 18.8874C13.4201 18.8874 5.48457 18.8874 3.50564 18.343C2.41373 18.0432 1.55381 17.1604 1.26198 16.0392C0.731812 14.0072 0.731812 9.7677 0.731812 9.7677C0.731812 9.7677 0.731812 5.52807 1.26198 3.49615C1.55381 2.37501 2.41373 1.49217 3.50564 1.19254C5.48457 0.64801 13.4201 0.64801 13.4201 0.64801C13.4201 0.64801 21.3556 0.64801 23.3344 1.19254ZM11.041 6.19904V14.1292L17.3852 10.1643L11.041 6.19904Z\"
                        fill=\"black\" />
                </svg>
            </a>
        </li>
        <li class=\"social__item\">
            <a href=\"#\" class=\"social__link\">
                <svg width=\"20\" height=\"35\" viewBox=\"0 0 20 35\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path
                        d=\"M18.4873 0.303201L14.0118 0.296021C8.9837 0.296021 5.73434 3.62975 5.73434 8.78958V12.7057H1.23443C0.845583 12.7057 0.530701 13.0209 0.530701 13.4098V19.0838C0.530701 19.4726 0.845942 19.7875 1.23443 19.7875H5.73434V34.1048C5.73434 34.4936 6.04922 34.8085 6.43807 34.8085H12.3092C12.698 34.8085 13.0129 34.4932 13.0129 34.1048V19.7875H18.2743C18.6632 19.7875 18.9781 19.4726 18.9781 19.0838L18.9802 13.4098C18.9802 13.2231 18.9059 13.0443 18.7741 12.9121C18.6424 12.78 18.4628 12.7057 18.2761 12.7057H13.0129V9.38596C13.0129 7.79036 13.3931 6.98036 15.4716 6.98036L18.4865 6.97928C18.875 6.97928 19.1899 6.66404 19.1899 6.27555V1.00693C19.1899 0.618802 18.8754 0.303919 18.4873 0.303201Z\"
                        fill=\"black\" />
                </svg>
            </a>
        </li>
        <li class=\"social__item\">
            <a href=\"#\" class=\"social__link\">
                <svg width=\"27\" height=\"27\" viewBox=\"0 0 27 27\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                        d=\"M13.4213 0.871399C9.9753 0.871399 9.54284 0.886466 8.18941 0.948058C6.83863 1.00991 5.91661 1.22377 5.10984 1.53754C4.27531 1.86162 3.5674 2.29514 2.86214 3.00067C2.15635 3.70593 1.72283 4.41384 1.39769 5.2481C1.08312 6.05513 0.869005 6.97742 0.808206 8.32768C0.747672 9.68111 0.731812 10.1138 0.731812 13.5598C0.731812 17.0057 0.747143 17.4369 0.808471 18.7903C0.870591 20.1411 1.08444 21.0631 1.39795 21.8699C1.7223 22.7044 2.15582 23.4123 2.86135 24.1176C3.56635 24.8234 4.27425 25.258 5.10825 25.582C5.91555 25.8958 6.83784 26.1097 8.18836 26.1715C9.54178 26.2331 9.97398 26.2482 13.4197 26.2482C16.8659 26.2482 17.297 26.2331 18.6505 26.1715C20.0012 26.1097 20.9243 25.8958 21.7316 25.582C22.5659 25.258 23.2727 24.8234 23.9777 24.1176C24.6835 23.4123 25.117 22.7044 25.4422 21.8702C25.7541 21.0631 25.9682 20.1408 26.0317 18.7906C26.0925 17.4371 26.1083 17.0057 26.1083 13.5598C26.1083 10.1138 26.0925 9.68137 26.0317 8.32794C25.9682 6.97716 25.7541 6.05513 25.4422 5.24836C25.117 4.41384 24.6835 3.70593 23.9777 3.00067C23.2719 2.29488 22.5662 1.86136 21.7308 1.53754C20.922 1.22377 19.9994 1.00991 18.6486 0.948058C17.2952 0.886466 16.8643 0.871399 13.4173 0.871399H13.4213ZM12.283 3.15792C12.6208 3.15739 12.9977 3.15792 13.4212 3.15792C16.809 3.15792 17.2105 3.17008 18.5484 3.23088C19.7855 3.28744 20.4569 3.49416 20.9042 3.66783C21.4963 3.89781 21.9185 4.17272 22.3623 4.61682C22.8064 5.06091 23.0813 5.48386 23.3118 6.07598C23.4855 6.52272 23.6925 7.19415 23.7488 8.43126C23.8096 9.76883 23.8228 10.1706 23.8228 13.5568C23.8228 16.9431 23.8096 17.3449 23.7488 18.6824C23.6922 19.9195 23.4855 20.591 23.3118 21.0377C23.0818 21.6298 22.8064 22.0515 22.3623 22.4953C21.9182 22.9394 21.4966 23.2143 20.9042 23.4443C20.4574 23.6187 19.7855 23.8249 18.5484 23.8815C17.2108 23.9423 16.809 23.9555 13.4212 23.9555C10.0331 23.9555 9.63161 23.9423 8.29404 23.8815C7.05692 23.8244 6.38549 23.6177 5.93796 23.444C5.34584 23.214 4.92289 22.9391 4.4788 22.495C4.0347 22.0509 3.75979 21.629 3.52928 21.0367C3.35561 20.5899 3.14863 19.9185 3.09233 18.6814C3.03153 17.3438 3.01937 16.942 3.01937 13.5537C3.01937 10.1653 3.03153 9.76566 3.09233 8.42809C3.1489 7.19097 3.35561 6.51955 3.52928 6.07228C3.75926 5.48016 4.0347 5.05721 4.4788 4.61312C4.92289 4.16902 5.34584 3.89411 5.93796 3.6636C6.38523 3.48914 7.05692 3.28295 8.29404 3.22612C9.46454 3.17325 9.91815 3.15739 12.283 3.15474V3.15792ZM20.1942 5.26472C19.3536 5.26472 18.6716 5.94593 18.6716 6.7868C18.6716 7.62741 19.3536 8.30941 20.1942 8.30941C21.0348 8.30941 21.7168 7.62741 21.7168 6.7868C21.7168 5.9462 21.0348 5.26472 20.1942 5.26472ZM13.4213 7.04374C9.8228 7.04374 6.90526 9.96127 6.90526 13.5598C6.90526 17.1582 9.8228 20.0744 13.4213 20.0744C17.0198 20.0744 19.9362 17.1582 19.9362 13.5598C19.9362 9.96127 17.0198 7.04374 13.4213 7.04374ZM13.4212 9.33029C15.757 9.33029 17.6507 11.2238 17.6507 13.5598C17.6507 15.8955 15.757 17.7892 13.4212 17.7892C11.0852 17.7892 9.19177 15.8955 9.19177 13.5598C9.19177 11.2238 11.0852 9.33029 13.4212 9.33029Z\"
                        fill=\"black\" />
                </svg>
            </a>
        </li>
        <li class=\"social__item\">
            <a href=\"#\" class=\"social__link\">
                <svg width=\"24\" height=\"20\" viewBox=\"0 0 24 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path
                        d=\"M9.81672 13.3734L9.43091 18.8001C9.98291 18.8001 10.222 18.563 10.5087 18.2782L13.0967 15.8049L18.4592 19.7321C19.4427 20.2802 20.1357 19.9916 20.401 18.8273L23.9209 2.33334L23.9219 2.33236C24.2339 0.878501 23.3962 0.309978 22.4379 0.666641L1.74759 8.58806C0.335516 9.13617 0.356896 9.92336 1.50755 10.28L6.79724 11.9253L19.0841 4.23716C19.6624 3.85426 20.1881 4.06611 19.7557 4.44902L9.81672 13.3734Z\"
                        fill=\"black\" />
                </svg>
            </a>
        </li> -->
    </ul>
    
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\Kamenev_at_cms/themes/kamenev/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 114,  223 => 111,  220 => 110,  216 => 109,  173 => 71,  150 => 53,  141 => 47,  137 => 46,  130 => 41,  126 => 40,  117 => 33,  113 => 32,  110 => 31,  106 => 30,  83 => 9,  79 => 8,  76 => 7,  72 => 6,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set mainInfo = mainInfoList.records[0] %}
{% set documents = documentList.records[0] %}
{% set socials = socialList.records %}
<div id=\"fullpage\">

    {% partial 'site/header' %}

    {% partial 'wedding' %}
   

    <section class=\"socials section\">
        <div class=\"container\">
            <div class=\"socials__block\">
                <div class=\"socials__item\">
                    <a class=\"sub-title\" href=\"https://instagram.com\" target=\"_blank\">Instagram</a>
                    <div class=\"socials__inst socials__slider slide-arrows\" id=\"socials_inst_id\">
                        
                    </div>
                </div>
                <div class=\"socials__item\">
                    <a class=\"sub-title\" href=\"https://vk.com\" target=\"_blank\">VK</a>
                    <div class=\"socials__vk socials__slider slide-arrows\" id=\"social_vk_id\">

                    </div>
                </div>
            </div>
        </div>
    </section>

    {% partial 'partners' %}

    {% partial 'biography' %}

    <section class=\"feedback section\">
        <div class=\"container-gutter\">
            <div class=\"feedback__block\">
                <div class=\"feedback__item\">
                    <h2 class=\"feedback__title\">?????????? ???? ????????</h2>
                    <div class=\"feedback__form\">
                        {% component 'feedbackform' %}
                    </div>
                </div>
                <div class=\"feedback__item\">
                    <h2 class=\"feedback__title\">????????????????</h2>
                    <div class=\"feedback__contact\">
                        <p><b>??????????????:</b>{{ mainInfo.phone }}</p>
                        <p><b>Email:</b> {{ mainInfo.email }}</p>
                    </div>
                </div>
                <div class=\"feedback__item\">
                    <h2 class=\"feedback__title\">????????????????????????</h2>
                    <div class=\"feedback__documentation\">
                        <a href=\"{{ documents.document_1.path }}\">{{ documents.name_1 }}
                            <svg width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" fill=\"none\"
                                xmlns=\"http://www.w3.org/2000/svg\">
                                <g clip-path=\"url(#clip0)\">
                                    <path
                                        d=\"M27.8571 19.2856C27.2653 19.2856 26.7856 19.7653 26.7856 20.3571V26.7857C26.7856 27.3774 26.306 27.8571 25.7142 27.8571H4.28573C3.69397 27.8571 3.21428 27.3774 3.21428 26.7857V20.3571C3.21428 19.7653 2.73458 19.2856 2.14283 19.2856C1.55107 19.2856 1.07138 19.7653 1.07138 20.3571V26.7857C1.07138 28.5609 2.51046 29.9999 4.28566 29.9999H25.7143C27.4895 29.9999 28.9285 28.5609 28.9285 26.7857V20.3571C28.9285 19.7653 28.4489 19.2856 27.8571 19.2856Z\"
                                        fill=\"#A5A58D\" />
                                    <path
                                        d=\"M21.0904 18.5282C20.6752 18.1272 20.017 18.1272 19.6018 18.5282L16.0714 22.0564V1.07145C16.0714 0.479694 15.5917 0 15 0C14.4082 0 13.9285 0.479694 13.9285 1.07145V22.0564L10.4003 18.5282C9.97465 18.1171 9.29638 18.1289 8.88531 18.5545C8.48428 18.9697 8.48428 19.628 8.88531 20.0432L14.2424 25.4003C14.6603 25.8192 15.3387 25.8201 15.7577 25.4023C15.7583 25.4016 15.7589 25.401 15.7596 25.4003L21.1167 20.0432C21.5279 19.6175 21.5161 18.9393 21.0904 18.5282Z\"
                                        fill=\"#A5A58D\" />
                                </g>
                                <defs>
                                    <clipPath id=\"clip0\">
                                        <rect width=\"30\" height=\"30\" fill=\"white\" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <a href=\"{{ documents.document_2.path }}\">{{ documents.name_2 }}
                            <svg width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" fill=\"none\"
                                xmlns=\"http://www.w3.org/2000/svg\">
                                <g clip-path=\"url(#clip0)\">
                                    <path
                                        d=\"M27.8571 19.2856C27.2653 19.2856 26.7856 19.7653 26.7856 20.3571V26.7857C26.7856 27.3774 26.306 27.8571 25.7142 27.8571H4.28573C3.69397 27.8571 3.21428 27.3774 3.21428 26.7857V20.3571C3.21428 19.7653 2.73458 19.2856 2.14283 19.2856C1.55107 19.2856 1.07138 19.7653 1.07138 20.3571V26.7857C1.07138 28.5609 2.51046 29.9999 4.28566 29.9999H25.7143C27.4895 29.9999 28.9285 28.5609 28.9285 26.7857V20.3571C28.9285 19.7653 28.4489 19.2856 27.8571 19.2856Z\"
                                        fill=\"#A5A58D\" />
                                    <path
                                        d=\"M21.0904 18.5282C20.6752 18.1272 20.017 18.1272 19.6018 18.5282L16.0714 22.0564V1.07145C16.0714 0.479694 15.5917 0 15 0C14.4082 0 13.9285 0.479694 13.9285 1.07145V22.0564L10.4003 18.5282C9.97465 18.1171 9.29638 18.1289 8.88531 18.5545C8.48428 18.9697 8.48428 19.628 8.88531 20.0432L14.2424 25.4003C14.6603 25.8192 15.3387 25.8201 15.7577 25.4023C15.7583 25.4016 15.7589 25.401 15.7596 25.4003L21.1167 20.0432C21.5279 19.6175 21.5161 18.9393 21.0904 18.5282Z\"
                                        fill=\"#A5A58D\" />
                                </g>
                                <defs>
                                    <clipPath id=\"clip0\">
                                        <rect width=\"30\" height=\"30\" fill=\"white\" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class=\"top-menu\">
    <nav class=\"nav\">
        <ul class=\"nav__menu\">
            <li class=\"nav__list\"><a href=\"#\" class=\"nav__link\">Instagram</a></li>
            <li class=\"nav__list\"><a href=\"#\" class=\"nav__link\">?? ????????</a></li>
            <li class=\"nav__list\"><a href=\"#\" class=\"nav__link\">????????????</a></li>
            <li class=\"nav__list\"><a href=\"#\" class=\"nav__link\">???????????????? ??????????</a></li>
            <li class=\"nav__list\"><a href=\"#\" class=\"nav__link\">????????????????</a></li>
        </ul>
    </nav>
</div>
<div class=\"right-menu\">
    <ul class=\"social\">
        {% for item in socials %}
            <li class=\"social__item\">
                <a href=\"{{ item.url }}\" class=\"social__link\"><img src=\"{{ item.image.path }}\"></a>
            </li>
        {% endfor %}
        <!-- <li class=\"social__item\">
            <a href=\"#\" class=\"social__link\">
                <svg width=\"32\" height=\"19\" viewBox=\"0 0 32 19\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path
                        d=\"M26.5427 10.6997C26.0256 10.0466 26.1735 9.7561 26.5427 9.17233C26.5494 9.16567 30.8183 3.26669 31.2582 1.26616L31.2608 1.26483C31.4794 0.535786 31.2608 0 30.2039 0H26.7066C25.8163 0 25.4058 0.459816 25.1859 0.974277C25.1859 0.974277 23.4053 5.23657 20.8863 7.99947C20.0733 8.79781 19.6975 9.05371 19.2536 9.05371C19.0351 9.05371 18.6952 8.79781 18.6952 8.06877V1.26483C18.6952 0.39051 18.446 0 17.7089 0H12.2098C11.6513 0 11.3195 0.407837 11.3195 0.787685C11.3195 1.61669 12.579 1.80728 12.7096 4.13968V9.20032C12.7096 10.3092 12.5083 10.5131 12.0618 10.5131C10.873 10.5131 7.98747 6.23351 6.27749 1.33547C5.93229 0.385179 5.5951 0.0013327 4.69812 0.0013327H1.19952C0.201253 0.0013327 0 0.461149 0 0.97561C0 1.88458 1.18886 6.40411 5.52845 12.3751C8.42063 16.4508 12.4937 18.6592 16.1989 18.6592C18.426 18.6592 18.6979 18.1687 18.6979 17.3251C18.6979 13.4306 18.4966 13.0628 19.6122 13.0628C20.1293 13.0628 21.0196 13.3187 23.0988 15.2846C25.4751 17.6156 25.8657 18.6592 27.1958 18.6592H30.6931C31.69 18.6592 32.1951 18.1687 31.9046 17.2011C31.2395 15.1659 26.7453 10.9796 26.5427 10.6997Z\"
                        fill=\"black\" />
                </svg>
            </a>
        </li>
        <li class=\"social__item\">
            <a href=\"#\" class=\"social__link\">
                <svg width=\"27\" height=\"19\" viewBox=\"0 0 27 19\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                        d=\"M23.3344 1.19254C24.4263 1.49217 25.2862 2.37501 25.578 3.49615C26.1083 5.52807 26.1083 9.7677 26.1083 9.7677C26.1083 9.7677 26.1083 14.0072 25.578 16.0392C25.2862 17.1604 24.4263 18.0432 23.3344 18.343C21.3556 18.8874 13.4201 18.8874 13.4201 18.8874C13.4201 18.8874 5.48457 18.8874 3.50564 18.343C2.41373 18.0432 1.55381 17.1604 1.26198 16.0392C0.731812 14.0072 0.731812 9.7677 0.731812 9.7677C0.731812 9.7677 0.731812 5.52807 1.26198 3.49615C1.55381 2.37501 2.41373 1.49217 3.50564 1.19254C5.48457 0.64801 13.4201 0.64801 13.4201 0.64801C13.4201 0.64801 21.3556 0.64801 23.3344 1.19254ZM11.041 6.19904V14.1292L17.3852 10.1643L11.041 6.19904Z\"
                        fill=\"black\" />
                </svg>
            </a>
        </li>
        <li class=\"social__item\">
            <a href=\"#\" class=\"social__link\">
                <svg width=\"20\" height=\"35\" viewBox=\"0 0 20 35\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path
                        d=\"M18.4873 0.303201L14.0118 0.296021C8.9837 0.296021 5.73434 3.62975 5.73434 8.78958V12.7057H1.23443C0.845583 12.7057 0.530701 13.0209 0.530701 13.4098V19.0838C0.530701 19.4726 0.845942 19.7875 1.23443 19.7875H5.73434V34.1048C5.73434 34.4936 6.04922 34.8085 6.43807 34.8085H12.3092C12.698 34.8085 13.0129 34.4932 13.0129 34.1048V19.7875H18.2743C18.6632 19.7875 18.9781 19.4726 18.9781 19.0838L18.9802 13.4098C18.9802 13.2231 18.9059 13.0443 18.7741 12.9121C18.6424 12.78 18.4628 12.7057 18.2761 12.7057H13.0129V9.38596C13.0129 7.79036 13.3931 6.98036 15.4716 6.98036L18.4865 6.97928C18.875 6.97928 19.1899 6.66404 19.1899 6.27555V1.00693C19.1899 0.618802 18.8754 0.303919 18.4873 0.303201Z\"
                        fill=\"black\" />
                </svg>
            </a>
        </li>
        <li class=\"social__item\">
            <a href=\"#\" class=\"social__link\">
                <svg width=\"27\" height=\"27\" viewBox=\"0 0 27 27\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                        d=\"M13.4213 0.871399C9.9753 0.871399 9.54284 0.886466 8.18941 0.948058C6.83863 1.00991 5.91661 1.22377 5.10984 1.53754C4.27531 1.86162 3.5674 2.29514 2.86214 3.00067C2.15635 3.70593 1.72283 4.41384 1.39769 5.2481C1.08312 6.05513 0.869005 6.97742 0.808206 8.32768C0.747672 9.68111 0.731812 10.1138 0.731812 13.5598C0.731812 17.0057 0.747143 17.4369 0.808471 18.7903C0.870591 20.1411 1.08444 21.0631 1.39795 21.8699C1.7223 22.7044 2.15582 23.4123 2.86135 24.1176C3.56635 24.8234 4.27425 25.258 5.10825 25.582C5.91555 25.8958 6.83784 26.1097 8.18836 26.1715C9.54178 26.2331 9.97398 26.2482 13.4197 26.2482C16.8659 26.2482 17.297 26.2331 18.6505 26.1715C20.0012 26.1097 20.9243 25.8958 21.7316 25.582C22.5659 25.258 23.2727 24.8234 23.9777 24.1176C24.6835 23.4123 25.117 22.7044 25.4422 21.8702C25.7541 21.0631 25.9682 20.1408 26.0317 18.7906C26.0925 17.4371 26.1083 17.0057 26.1083 13.5598C26.1083 10.1138 26.0925 9.68137 26.0317 8.32794C25.9682 6.97716 25.7541 6.05513 25.4422 5.24836C25.117 4.41384 24.6835 3.70593 23.9777 3.00067C23.2719 2.29488 22.5662 1.86136 21.7308 1.53754C20.922 1.22377 19.9994 1.00991 18.6486 0.948058C17.2952 0.886466 16.8643 0.871399 13.4173 0.871399H13.4213ZM12.283 3.15792C12.6208 3.15739 12.9977 3.15792 13.4212 3.15792C16.809 3.15792 17.2105 3.17008 18.5484 3.23088C19.7855 3.28744 20.4569 3.49416 20.9042 3.66783C21.4963 3.89781 21.9185 4.17272 22.3623 4.61682C22.8064 5.06091 23.0813 5.48386 23.3118 6.07598C23.4855 6.52272 23.6925 7.19415 23.7488 8.43126C23.8096 9.76883 23.8228 10.1706 23.8228 13.5568C23.8228 16.9431 23.8096 17.3449 23.7488 18.6824C23.6922 19.9195 23.4855 20.591 23.3118 21.0377C23.0818 21.6298 22.8064 22.0515 22.3623 22.4953C21.9182 22.9394 21.4966 23.2143 20.9042 23.4443C20.4574 23.6187 19.7855 23.8249 18.5484 23.8815C17.2108 23.9423 16.809 23.9555 13.4212 23.9555C10.0331 23.9555 9.63161 23.9423 8.29404 23.8815C7.05692 23.8244 6.38549 23.6177 5.93796 23.444C5.34584 23.214 4.92289 22.9391 4.4788 22.495C4.0347 22.0509 3.75979 21.629 3.52928 21.0367C3.35561 20.5899 3.14863 19.9185 3.09233 18.6814C3.03153 17.3438 3.01937 16.942 3.01937 13.5537C3.01937 10.1653 3.03153 9.76566 3.09233 8.42809C3.1489 7.19097 3.35561 6.51955 3.52928 6.07228C3.75926 5.48016 4.0347 5.05721 4.4788 4.61312C4.92289 4.16902 5.34584 3.89411 5.93796 3.6636C6.38523 3.48914 7.05692 3.28295 8.29404 3.22612C9.46454 3.17325 9.91815 3.15739 12.283 3.15474V3.15792ZM20.1942 5.26472C19.3536 5.26472 18.6716 5.94593 18.6716 6.7868C18.6716 7.62741 19.3536 8.30941 20.1942 8.30941C21.0348 8.30941 21.7168 7.62741 21.7168 6.7868C21.7168 5.9462 21.0348 5.26472 20.1942 5.26472ZM13.4213 7.04374C9.8228 7.04374 6.90526 9.96127 6.90526 13.5598C6.90526 17.1582 9.8228 20.0744 13.4213 20.0744C17.0198 20.0744 19.9362 17.1582 19.9362 13.5598C19.9362 9.96127 17.0198 7.04374 13.4213 7.04374ZM13.4212 9.33029C15.757 9.33029 17.6507 11.2238 17.6507 13.5598C17.6507 15.8955 15.757 17.7892 13.4212 17.7892C11.0852 17.7892 9.19177 15.8955 9.19177 13.5598C9.19177 11.2238 11.0852 9.33029 13.4212 9.33029Z\"
                        fill=\"black\" />
                </svg>
            </a>
        </li>
        <li class=\"social__item\">
            <a href=\"#\" class=\"social__link\">
                <svg width=\"24\" height=\"20\" viewBox=\"0 0 24 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path
                        d=\"M9.81672 13.3734L9.43091 18.8001C9.98291 18.8001 10.222 18.563 10.5087 18.2782L13.0967 15.8049L18.4592 19.7321C19.4427 20.2802 20.1357 19.9916 20.401 18.8273L23.9209 2.33334L23.9219 2.33236C24.2339 0.878501 23.3962 0.309978 22.4379 0.666641L1.74759 8.58806C0.335516 9.13617 0.356896 9.92336 1.50755 10.28L6.79724 11.9253L19.0841 4.23716C19.6624 3.85426 20.1881 4.06611 19.7557 4.44902L9.81672 13.3734Z\"
                        fill=\"black\" />
                </svg>
            </a>
        </li> -->
    </ul>
    
</div>", "D:\\Kamenev_at_cms/themes/kamenev/pages/home.htm", "");
    }
}
