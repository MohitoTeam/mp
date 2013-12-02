<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig */
class __TwigTemplate_69e876af5dcc83b396f85835087224d0ed145c92e9c65b12131d976365e43281 extends Twig_Template
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
        // line 11
        echo "

";
        // line 18
        echo "
";
        // line 20
        echo "
<!-- edit one association -->

<script type=\"text/javascript\">

    // handle the add link
    var field_add_";
        // line 26
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = function(event) {

        event.preventDefault();
        event.stopPropagation();

        var form = jQuery(this).closest('form');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: '";
        // line 35
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_append_form_element", (array("code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "code"), "elementId" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "subject")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "uniqid")) + $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")));
        // line 40
        echo "',
            type: \"POST\",
            dataType: 'html',
            data: { _xml_http_request: true },
            success: function(html) {
                if (!html.length) {
                    return;
                }

                jQuery('#field_container_";
        // line 49
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').replaceWith(html); // replace the html
                Admin.setup_select2(jQuery('#field_container_";
        // line 50
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "'));

                if(jQuery('input[type=\"file\"]', form).length > 0) {
                    jQuery(form).attr('enctype', 'multipart/form-data');
                    jQuery(form).attr('encoding', 'multipart/form-data');
                }
                jQuery('#sonata-ba-field-container-";
        // line 56
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').trigger('sonata.add_element');
                jQuery('#field_container_";
        // line 57
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').trigger('sonata.add_element');
            }
        });

        return false;
    };

    var field_widget_";
        // line 64
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = false;

    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_retrieve_";
        // line 68
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "(link) {

        link.onclick = null;

        // initialize component
        field_widget_";
        // line 73
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = jQuery(\"#field_widget_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "\");

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_add_";
        // line 77
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ")
            .trigger('click')
        ;

        return false;
    }
</script>

<!-- / edit one association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 57,  181 => 79,  175 => 76,  161 => 70,  137 => 58,  110 => 77,  194 => 87,  186 => 82,  165 => 71,  160 => 69,  150 => 64,  134 => 58,  129 => 56,  65 => 29,  124 => 31,  399 => 158,  396 => 157,  394 => 156,  383 => 150,  377 => 147,  371 => 144,  366 => 142,  359 => 140,  357 => 139,  352 => 138,  348 => 136,  345 => 135,  342 => 133,  335 => 129,  329 => 126,  325 => 125,  321 => 124,  308 => 118,  289 => 109,  276 => 102,  270 => 100,  267 => 98,  260 => 94,  249 => 89,  245 => 88,  239 => 86,  237 => 85,  234 => 84,  232 => 83,  218 => 77,  202 => 73,  191 => 69,  188 => 68,  185 => 65,  170 => 73,  167 => 60,  155 => 55,  148 => 63,  127 => 55,  90 => 34,  84 => 38,  77 => 27,  34 => 26,  100 => 27,  81 => 25,  58 => 23,  20 => 11,  23 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 152,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 141,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 111,  285 => 89,  283 => 106,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 75,  177 => 63,  169 => 73,  140 => 55,  132 => 57,  128 => 49,  107 => 36,  61 => 13,  273 => 101,  269 => 94,  254 => 91,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 80,  224 => 71,  221 => 78,  219 => 76,  217 => 75,  208 => 74,  204 => 72,  179 => 69,  159 => 69,  143 => 56,  135 => 35,  119 => 28,  102 => 39,  71 => 17,  67 => 27,  63 => 50,  59 => 49,  28 => 14,  201 => 92,  196 => 71,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 67,  151 => 63,  142 => 60,  138 => 36,  136 => 48,  121 => 52,  117 => 50,  105 => 46,  91 => 27,  62 => 28,  49 => 20,  38 => 17,  94 => 28,  89 => 39,  85 => 30,  75 => 28,  68 => 30,  56 => 9,  87 => 25,  31 => 15,  25 => 12,  21 => 11,  24 => 13,  26 => 20,  93 => 68,  88 => 6,  78 => 35,  46 => 35,  44 => 19,  27 => 13,  19 => 11,  79 => 18,  72 => 56,  69 => 24,  47 => 19,  40 => 18,  37 => 17,  22 => 12,  246 => 90,  157 => 56,  145 => 46,  139 => 59,  131 => 52,  123 => 53,  120 => 40,  115 => 49,  111 => 37,  108 => 47,  101 => 73,  98 => 43,  96 => 31,  83 => 25,  74 => 33,  66 => 25,  55 => 22,  52 => 21,  50 => 20,  43 => 18,  41 => 18,  35 => 16,  32 => 16,  29 => 15,  209 => 82,  203 => 78,  199 => 67,  193 => 70,  189 => 71,  187 => 84,  182 => 79,  176 => 76,  173 => 62,  168 => 72,  164 => 71,  162 => 70,  154 => 66,  149 => 51,  147 => 58,  144 => 61,  141 => 48,  133 => 55,  130 => 56,  125 => 44,  122 => 43,  116 => 41,  112 => 48,  109 => 34,  106 => 40,  103 => 45,  99 => 26,  95 => 42,  92 => 21,  86 => 64,  82 => 22,  80 => 19,  73 => 29,  64 => 23,  60 => 22,  57 => 22,  54 => 18,  51 => 21,  48 => 40,  45 => 19,  42 => 18,  39 => 17,  36 => 17,  33 => 5,  30 => 15,);
    }
}
