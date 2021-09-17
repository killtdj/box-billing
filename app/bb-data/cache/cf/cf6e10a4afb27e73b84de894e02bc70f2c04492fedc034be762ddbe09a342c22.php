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

/* mod_news_index.phtml */
class __TwigTemplate_9c7918a06694c87f36278f29f9015f3e44e13bcbd3ad5c70cad59bbfeba82209 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_news_index.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Blog");
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"h-block\">
    <div class=\"h-block-header\">
        <div class=\"icon\"><span class=\"big-light-icon i-blog\"></span></div>
        <h2>";
        // line 9
        echo gettext("News & Announcements");
        echo "</h2>
        <p>";
        // line 10
        echo gettext("Track our latest posts");
        echo "</p>
    </div>
    <div class=\"block articles\">
    ";
        // line 13
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "news_get_list", [0 => ["page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 13), "per_page" => 5]], "method", false, false, false, 13);
        // line 14
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "list", [], "any", false, false, false, 14));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["i"] => $context["post"]) {
            // line 15
            echo "        <div class=\"article";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 15)) {
                echo " last";
            }
            echo "\">
            <h2><a href=\"";
            // line 16
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/news");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 16), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 16), "html", null, true);
            echo "</a></h2>
            ";
            // line 17
            if (twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, false, 17)) {
                // line 18
                echo "                ";
                echo twig_bbmd_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, false, 18));
                echo "
            ";
            } else {
                // line 20
                echo "                ";
                echo twig_bbmd_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 20));
                echo "
            ";
            }
            // line 22
            echo "            <p class=\"meta\">";
            echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_bb_date(twig_get_attribute($this->env, $this->source, $context["post"], "updated_at", [], "any", false, false, false, 22)), "html", null, true);
            echo "</p>
            <a class=\"bb-button read_more\" href=\"";
            // line 23
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/news");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 23), "html", null, true);
            echo "\">";
            echo gettext("Read more..");
            echo "</a>
        </div>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 26
            echo "    <p>The list is empty</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </div>
    <div class=\"clear\"></div>
</div>

";
        // line 32
        $this->loadTemplate("partial_pagination.phtml", "mod_news_index.phtml", 32)->display(twig_array_merge($context, ["list" => ($context["posts"] ?? null)]));
        // line 33
        echo "
";
    }

    public function getTemplateName()
    {
        return "mod_news_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 33,  160 => 32,  154 => 28,  147 => 26,  127 => 23,  122 => 22,  116 => 20,  110 => 18,  108 => 17,  100 => 16,  93 => 15,  74 => 14,  72 => 13,  66 => 10,  62 => 9,  57 => 6,  53 => 5,  46 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}

{% block meta_title %}{% trans 'Blog'%}{% endblock %}

{% block content %}
<div class=\"h-block\">
    <div class=\"h-block-header\">
        <div class=\"icon\"><span class=\"big-light-icon i-blog\"></span></div>
        <h2>{% trans 'News & Announcements' %}</h2>
        <p>{% trans 'Track our latest posts' %}</p>
    </div>
    <div class=\"block articles\">
    {% set posts = guest.news_get_list({\"page\":request.page,\"per_page\": 5}) %}
    {% for i, post in posts.list %}
        <div class=\"article{% if loop.last %} last{% endif%}\">
            <h2><a href=\"{{ '/news'|link }}/{{post.slug}}\">{{post.title}}</a></h2>
            {% if post.excerpt %}
                {{post.excerpt|bbmd}}
            {% else %}
                {{ post.content|bbmd }}
            {% endif %}
            <p class=\"meta\">{{post.updated_at|bb_date}}</p>
            <a class=\"bb-button read_more\" href=\"{{ '/news'|link }}/{{post.slug}}\">{% trans 'Read more..' %}</a>
        </div>
    {% else %}
    <p>The list is empty</p>
    {% endfor %}
    </div>
    <div class=\"clear\"></div>
</div>

{% include \"partial_pagination.phtml\" with {'list': posts} %}

{% endblock %}", "mod_news_index.phtml", "C:\\xampp\\htdocs\\BoxBilling2\\app/bb-themes\\boxbilling\\html/mod_news_index.phtml");
    }
}
