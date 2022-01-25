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

/* index/index.html.twig */
class __TwigTemplate_265e225c3600cfef494e9c2a1e3da3e15fc1e76aba0016204581a7b01ff1a5db extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Links index ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div id=\"app\" class=\"h-screen bg-gray-200\">
        <div class=\"p-10\">
            <h1 class=\"text-2xl mb-5\">URL Shorterify</h1>
            <div v-if=\"error\" class=\"p-3 py-1 rounded inline-flex items-center
                text-sm bg-red-600 text-white mb-3\">
                    \${ error }
                    <button type=\"button\" @click=\"error = ''\"
                        class=\"bg-gray-100 text-gray-700 text-xs rounded-md p-1 px-3 ml-10\">CLOSE</button>
            </div>
            
            <a href=\"/most-accessed\" target=\"_blank\" 
                class=\"bg-indigo-600 text-white text-xs inline-block rounded-md p-1 px-3 ml-10 mb-4\">SEE MORE ACESSEDS</a>
            
            <form @submit.prevent=\"add\">
                <label for=\"link\">Link </label>
                <input id=\"link\" v-model=\"link.url\" type=\"url\" placeholder=\"http://google.com\"
                    class=\"border p-3 py-2 hover:border-green-300\" />
                <button type=\"submit\" class=\"bg-green-400 rounded-md p-3 py-2\">Add </button>
            </form>

        <div class=\"table border p-5 rounded shadow bg-white mt-5\">
        
            <div class=\"grid grid-cols-8 justify-between gap-5 font-bold\">
                <div>ID</div>
                <div class=\"col-span-3\">Url</div>
                <div>Short Link</div>
                <div>Visits</div>
                <div>Created At</div>
                <div>Actions</div>
            </div>
        
            <div class=\"grid grid-cols-8 justify-between gap-5 mt-3\"
                v-if=\"links.length\" v-for=\"link in links\">
                    <div>\${ link.id }</div>
                    <div class=\"col-span-3\">\${ String(link.url).slice(0, 34) }</div>
                    <div>\${ link.shortlink }</div>
                    <div>\${ link.visits }</div>
                    <div>\${ link.createdAt }</div>
                    <div>
                        <a target=\"_blank\" :href=\"`/access/\${link.shortlink}`\">Visit</a>
                    </div>
            </div>
            
            <div v-else>
                <td colspan=\"6\">no records found</td>
            </div>
        
    </div>

        </div>
    </div>

<script src=\"https://cdn.tailwindcss.com\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js\"></script>

<script>
    window.onload = function () {
        
        new Vue({
            el: '#app',
            delimiters: ['\${', '}'],
            data () {
                return {
                    links: [],
                    error: '',
                    link: { url: '' },
                    message: 'Hello Vue!',
                    options: { method: 'GET' }
                }
            }, 
            async mounted () {

                const response = await fetch ('/short',  this.options);
                
                if (response.ok) {
                    this.links = await response.json()
                    return
                }

                this.error = 'Falha ao carregar links =/.'
                
            }, 
            methods: {
                async add () {
                    
                    const response = await fetch ('/short', 
                        { 
                            method: 'POST', 
                            body: JSON.stringify(this.link),
                            headers: {'Content-Type': 'application/json'}
                        }
                    );

                    if (response.ok) {
                        this.link = await response.json()
                        this.links.push(link)
                    }
                    
                    this.error = 'Falha ao criar links =/.'
                }
            }
        })
    
    }

</script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Links index {% endblock %}

{% block body %}

    <div id=\"app\" class=\"h-screen bg-gray-200\">
        <div class=\"p-10\">
            <h1 class=\"text-2xl mb-5\">URL Shorterify</h1>
            <div v-if=\"error\" class=\"p-3 py-1 rounded inline-flex items-center
                text-sm bg-red-600 text-white mb-3\">
                    \${ error }
                    <button type=\"button\" @click=\"error = ''\"
                        class=\"bg-gray-100 text-gray-700 text-xs rounded-md p-1 px-3 ml-10\">CLOSE</button>
            </div>
            
            <a href=\"/most-accessed\" target=\"_blank\" 
                class=\"bg-indigo-600 text-white text-xs inline-block rounded-md p-1 px-3 ml-10 mb-4\">SEE MORE ACESSEDS</a>
            
            <form @submit.prevent=\"add\">
                <label for=\"link\">Link </label>
                <input id=\"link\" v-model=\"link.url\" type=\"url\" placeholder=\"http://google.com\"
                    class=\"border p-3 py-2 hover:border-green-300\" />
                <button type=\"submit\" class=\"bg-green-400 rounded-md p-3 py-2\">Add </button>
            </form>

        <div class=\"table border p-5 rounded shadow bg-white mt-5\">
        
            <div class=\"grid grid-cols-8 justify-between gap-5 font-bold\">
                <div>ID</div>
                <div class=\"col-span-3\">Url</div>
                <div>Short Link</div>
                <div>Visits</div>
                <div>Created At</div>
                <div>Actions</div>
            </div>
        
            <div class=\"grid grid-cols-8 justify-between gap-5 mt-3\"
                v-if=\"links.length\" v-for=\"link in links\">
                    <div>\${ link.id }</div>
                    <div class=\"col-span-3\">\${ String(link.url).slice(0, 34) }</div>
                    <div>\${ link.shortlink }</div>
                    <div>\${ link.visits }</div>
                    <div>\${ link.createdAt }</div>
                    <div>
                        <a target=\"_blank\" :href=\"`/access/\${link.shortlink}`\">Visit</a>
                    </div>
            </div>
            
            <div v-else>
                <td colspan=\"6\">no records found</td>
            </div>
        
    </div>

        </div>
    </div>

<script src=\"https://cdn.tailwindcss.com\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js\"></script>

<script>
    window.onload = function () {
        
        new Vue({
            el: '#app',
            delimiters: ['\${', '}'],
            data () {
                return {
                    links: [],
                    error: '',
                    link: { url: '' },
                    message: 'Hello Vue!',
                    options: { method: 'GET' }
                }
            }, 
            async mounted () {

                const response = await fetch ('/short',  this.options);
                
                if (response.ok) {
                    this.links = await response.json()
                    return
                }

                this.error = 'Falha ao carregar links =/.'
                
            }, 
            methods: {
                async add () {
                    
                    const response = await fetch ('/short', 
                        { 
                            method: 'POST', 
                            body: JSON.stringify(this.link),
                            headers: {'Content-Type': 'application/json'}
                        }
                    );

                    if (response.ok) {
                        this.link = await response.json()
                        this.links.push(link)
                    }
                    
                    this.error = 'Falha ao criar links =/.'
                }
            }
        })
    
    }

</script>


{% endblock %}
", "index/index.html.twig", "/app/templates/index/index.html.twig");
    }
}
