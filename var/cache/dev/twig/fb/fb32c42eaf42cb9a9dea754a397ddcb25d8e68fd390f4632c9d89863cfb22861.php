<?php

/* @OverblogGraphiQL/GraphiQL/index.html.twig */
class __TwigTemplate_8f9debc0ee0bf6407b90a8ada6beccbbca21245ef21174be518df4118bdeb236 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'style' => array($this, 'block_style'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'body_loading' => array($this, 'block_body_loading'),
            'body_script' => array($this, 'block_body_script'),
            'fetcher_function_body' => array($this, 'block_fetcher_function_body'),
            'graphql_fetcher_headers' => array($this, 'block_graphql_fetcher_headers'),
            'post_fetch' => array($this, 'block_post_fetch'),
            'graphiql_params' => array($this, 'block_graphiql_params'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OverblogGraphiQL/GraphiQL/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 22
        echo "</head>
<body>
";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 70
        echo "</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "  ";
        $this->displayBlock('style', $context, $blocks);
        // line 16
        echo "    <script src=\"https://unpkg.com/whatwg-fetch@";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new Twig_Error_Runtime('Variable "versions" does not exist.', 16, $this->source); })()), "fetch", array()), "html", null, true);
        echo "/fetch.js\"></script>
    <script src=\"https://unpkg.com/react@";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new Twig_Error_Runtime('Variable "versions" does not exist.', 17, $this->source); })()), "react", array()), "html", null, true);
        echo "/dist/react.min.js\"></script>
    <script src=\"https://unpkg.com/react-dom@";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new Twig_Error_Runtime('Variable "versions" does not exist.', 18, $this->source); })()), "react", array()), "html", null, true);
        echo "/dist/react-dom.min.js\"></script>
    <script src=\"https://unpkg.com/graphiql@";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new Twig_Error_Runtime('Variable "versions" does not exist.', 19, $this->source); })()), "graphiql", array()), "html", null, true);
        echo "/graphiql.min.js\"></script>
    <title>";
        // line 20
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_style($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 6
        echo "    <style>
      html, body {
        width: 100%;
        height: 100%;
        margin: 0;
        overflow: hidden;
      }
    </style>
  <link href=\"https://unpkg.com/graphiql@";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new Twig_Error_Runtime('Variable "versions" does not exist.', 14, $this->source); })()), "graphiql", array()), "html", null, true);
        echo "/graphiql.css\" rel=\"stylesheet\">
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "GraphiQL";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "  ";
        $this->displayBlock('body_loading', $context, $blocks);
        // line 26
        echo "  ";
        $this->displayBlock('body_script', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_body_loading($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_loading"));

        echo "Loading...";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 26
    public function block_body_script($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_script"));

        // line 27
        echo "    <script>
      var endpoint = ";
        // line 28
        echo json_encode((isset($context["endpoint"]) || array_key_exists("endpoint", $context) ? $context["endpoint"] : (function () { throw new Twig_Error_Runtime('Variable "endpoint" does not exist.', 28, $this->source); })()));
        echo "

        function graphQLFetcher(params) {
          ";
        // line 31
        $this->displayBlock('fetcher_function_body', $context, $blocks);
        // line 57
        echo "        }

      ReactDOM.render(
        React.createElement(GraphiQL, {
          ";
        // line 61
        $this->displayBlock('graphiql_params', $context, $blocks);
        // line 64
        echo "        }),
        document.body
      )
    </script>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 31
    public function block_fetcher_function_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fetcher_function_body"));

        // line 32
        echo "          var headers

          ";
        // line 34
        $this->displayBlock('graphql_fetcher_headers', $context, $blocks);
        // line 40
        echo "
          return fetch(endpoint, {
              method: \"post\",
              headers: headers,
              body: JSON.stringify(params),
              credentials: 'include',
            }).then((res) => {
              ";
        // line 47
        $this->displayBlock('post_fetch', $context, $blocks);
        // line 48
        echo "              return res.text()
            }).then((body) => {
            try {
              return JSON.parse(body)
            } catch (err) {
              return body
            }
          })
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_graphql_fetcher_headers($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "graphql_fetcher_headers"));

        // line 35
        echo "          headers = {
            \"Accept\": \"application/json\",
            \"Content-Type\": \"application/json\",
          }
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 47
    public function block_post_fetch($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_fetch"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 61
    public function block_graphiql_params($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "graphiql_params"));

        // line 62
        echo "          fetcher: graphQLFetcher
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@OverblogGraphiQL/GraphiQL/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  267 => 62,  261 => 61,  250 => 47,  239 => 35,  233 => 34,  218 => 48,  216 => 47,  207 => 40,  205 => 34,  201 => 32,  195 => 31,  184 => 64,  182 => 61,  176 => 57,  174 => 31,  168 => 28,  165 => 27,  159 => 26,  147 => 25,  139 => 26,  136 => 25,  130 => 24,  118 => 20,  109 => 14,  99 => 6,  93 => 5,  84 => 20,  80 => 19,  76 => 18,  72 => 17,  67 => 16,  64 => 5,  58 => 4,  49 => 70,  47 => 24,  43 => 22,  41 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
  {% block head %}
  {% block style %}
    <style>
      html, body {
        width: 100%;
        height: 100%;
        margin: 0;
        overflow: hidden;
      }
    </style>
  <link href=\"https://unpkg.com/graphiql@{{ versions.graphiql }}/graphiql.css\" rel=\"stylesheet\">
  {% endblock style %}
    <script src=\"https://unpkg.com/whatwg-fetch@{{ versions.fetch }}/fetch.js\"></script>
    <script src=\"https://unpkg.com/react@{{ versions.react }}/dist/react.min.js\"></script>
    <script src=\"https://unpkg.com/react-dom@{{ versions.react }}/dist/react-dom.min.js\"></script>
    <script src=\"https://unpkg.com/graphiql@{{ versions.graphiql }}/graphiql.min.js\"></script>
    <title>{% block title %}GraphiQL{% endblock title %}</title>
  {% endblock head %}
</head>
<body>
{% block body %}
  {% block body_loading %}Loading...{% endblock body_loading %}
  {% block body_script %}
    <script>
      var endpoint = {{ endpoint | json_encode | raw }}

        function graphQLFetcher(params) {
          {% block fetcher_function_body %}
          var headers

          {% block graphql_fetcher_headers %}
          headers = {
            \"Accept\": \"application/json\",
            \"Content-Type\": \"application/json\",
          }
          {% endblock graphql_fetcher_headers %}

          return fetch(endpoint, {
              method: \"post\",
              headers: headers,
              body: JSON.stringify(params),
              credentials: 'include',
            }).then((res) => {
              {% block post_fetch %}{% endblock post_fetch %}
              return res.text()
            }).then((body) => {
            try {
              return JSON.parse(body)
            } catch (err) {
              return body
            }
          })
          {% endblock fetcher_function_body %}
        }

      ReactDOM.render(
        React.createElement(GraphiQL, {
          {% block graphiql_params %}
          fetcher: graphQLFetcher
          {% endblock graphiql_params %}
        }),
        document.body
      )
    </script>
  {% endblock body_script %}
{% endblock body %}
</body>
</html>
", "@OverblogGraphiQL/GraphiQL/index.html.twig", "/home/fabio/Pulpit/hackathon/tournament-scoreboard/vendor/overblog/graphiql-bundle/Resources/views/GraphiQL/index.html.twig");
    }
}
