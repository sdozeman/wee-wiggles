jQuery(document).ready(function($){$(".flexslider").flexslider({animation:"fade"}),$(window).on("scroll touchmove",function(){$(".site-header").toggleClass("scrolled",$(document).scrollTop()>100)}).scroll(),$(".FlowupLabels").FlowupLabels()}),jQuery(function(){var e=new ScrollMagic.Controller,o=TweenMax.to(".image-1 .p-background",1,{top:0,ease:Linear.easeNone}),a=TweenMax.to(".image-1 .p-foreground",1,{top:0,ease:Linear.easeNone}),n=TweenMax.to(".image-2 .p-background",1,{top:60,ease:Linear.easeNone}),t=TweenMax.to(".image-2 .p-foreground",1,{top:-60,ease:Linear.easeNone}),l=TweenMax.to(".image-3 .p-background",1,{top:80,ease:Linear.easeNone}),r=TweenMax.to(".image-3 .p-foreground",1,{top:-10,ease:Linear.easeNone}),s=new ScrollMagic.Scene({triggerElement:"#target1",duration:900}).setTween(o).addTo(e),s=new ScrollMagic.Scene({triggerElement:"#target1",duration:900}).setTween(a).addTo(e),s=new ScrollMagic.Scene({triggerElement:"#target2",duration:750}).setTween(n).addTo(e),s=new ScrollMagic.Scene({triggerElement:"#target2",duration:750}).setTween(t).addTo(e),s=new ScrollMagic.Scene({triggerElement:"#target3",duration:800}).setTween(l).addTo(e),s=new ScrollMagic.Scene({triggerElement:"#target3",duration:750}).setTween(r).addTo(e)}),function($){$.fn.FlowupLabels=function(e){var o={feature_onLoadInit:!0,class_focused:"focused",class_populated:"populated"},a=$.extend({},o,e);return this.each(function(){var e=$(this);e.on("focus.flowupLabelsEvt",".fl_input",function(){$(this).closest(".fl_wrap").addClass(a.class_focused)}).on("blur.flowupLabelsEvt",".fl_input",function(){var e=$(this);e.val().length?e.closest(".fl_wrap").addClass(a.class_populated).removeClass(a.class_focused):e.closest(".fl_wrap").removeClass(a.class_populated+" "+a.class_focused)}),a.feature_onLoadInit&&e.find(".fl_input").trigger("blur.flowupLabelsEvt")})},$(window).scroll(function(){$("#test").html($(window).scrollTop())}),$(window).resize(function(){}),$(window).trigger("scroll","resize")}(jQuery);