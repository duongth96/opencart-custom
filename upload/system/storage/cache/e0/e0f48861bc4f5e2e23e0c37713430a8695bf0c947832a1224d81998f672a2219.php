<?php

/* article/category_list.twig */
class __TwigTemplate_689c719962edd62ee4ac1acef98d2d30d3e77374f7aee360f3040b09a67d6a0f extends Twig_Template
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
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\"><a href=\"";
        // line 5
        echo (isset($context["add"]) ? $context["add"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a> <a href=\"";
        echo (isset($context["repair"]) ? $context["repair"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_rebuild"]) ? $context["button_rebuild"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-refresh\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-category').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <form action=\"";
        // line 17
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-category\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">
                    <a href=\"#\" class=\"\">Name</a>
                  <td class=\"text-left\">
                    <a href=\"#\" class=\"\">Description</a>
                  <td class=\"text-right\">Action</td>
                </tr>
              </thead>
              <tbody>";
        // line 31
        if ((isset($context["contents"]) ? $context["contents"] : null)) {
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["contents"]) ? $context["contents"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 33
                echo "                <tr>
                  <td class=\"text-center\">";
                // line 34
                if (twig_in_filter($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "category_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 35
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "category_id", array());
                    echo "\" checked=\"checked\" />";
                } else {
                    // line 37
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "category_id", array());
                    echo "\" />";
                }
                // line 38
                echo "</td>
                  <td class=\"text-left\">";
                // line 39
                echo $this->getAttribute($context["item"], "name", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 40
                echo $this->getAttribute($context["item"], "description", array());
                echo "</td>
                  <td class=\"text-right\">
                    <a href=\"";
                // line 42
                echo $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\">
                      <i class=\"fa fa-pencil\"></i>
                    </a>
                  </td>
                </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 49
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"4\">";
            // line 50
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                </tr>";
        }
        // line 53
        echo "              </tbody>
            </table>
          </div>
        </form>
  </div>
</div>";
        // line 59
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "article/category_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 59,  139 => 53,  134 => 50,  131 => 49,  117 => 42,  112 => 40,  108 => 39,  105 => 38,  100 => 37,  95 => 35,  93 => 34,  90 => 33,  86 => 32,  84 => 31,  68 => 17,  62 => 13,  52 => 11,  48 => 10,  44 => 8,  37 => 6,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right"><a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a> <a href="{{ repair }}" data-toggle="tooltip" title="{{ button_rebuild }}" class="btn btn-default"><i class="fa fa-refresh"></i></a>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-category').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/*       </div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-category">*/
/*           <div class="table-responsive">*/
/*             <table class="table table-bordered table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                   <td class="text-left">*/
/*                     <a href="#" class="">Name</a>*/
/*                   <td class="text-left">*/
/*                     <a href="#" class="">Description</a>*/
/*                   <td class="text-right">Action</td>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 {% if contents %}*/
/*                 {% for item in contents %}*/
/*                 <tr>*/
/*                   <td class="text-center">{% if category.category_id in selected %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ category.category_id }}" checked="checked" />*/
/*                     {% else %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ category.category_id }}" />*/
/*                     {% endif %}</td>*/
/*                   <td class="text-left">{{ item.name }}</td>*/
/*                   <td class="text-left">{{ item.description }}</td>*/
/*                   <td class="text-right">*/
/*                     <a href="{{ category.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary">*/
/*                       <i class="fa fa-pencil"></i>*/
/*                     </a>*/
/*                   </td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                 {% else %}*/
/*                 <tr>*/
/*                   <td class="text-center" colspan="4">{{ text_no_results }}</td>*/
/*                 </tr>*/
/*                 {% endif %}*/
/*               </tbody>*/
/*             </table>*/
/*           </div>*/
/*         </form>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
