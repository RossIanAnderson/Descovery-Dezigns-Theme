!function($){$("#post_type").on("change",function(){$("#cptui_select_post_type").submit()}),$("#taxonomy").on("change",function(){$("#cptui_select_taxonomy").submit()}),$("#cpt_submit_delete").on("click",function(){return confirm(cptui_type_data.confirm)?!0:!1}),$("#support .question").each(function(){var t=$(this),n=!1,c=t.next("div").slideUp();t.click(function(){n=!n,c.slideToggle(n),t.toggleClass("active",n)})})}(jQuery);