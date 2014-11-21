ngs.HomeLoad = Class.create(ngs.AbstractLoad, {
    initialize: function($super, shortCut, ajaxLoader) {
        $super(shortCut, "home", ajaxLoader);
    },
    getUrl: function() {
        return "home";
    },
    getMethod: function() {
        return "POST";
    },
    getContainer: function() {
        return "content";
    },
    getName: function() {
        return "home";
    },
    afterLoad: function() {
      this.initBlockAnimation();
      this.doBlocksAnimation();
    },
    doBlocksAnimation: function() {
		if (jQuery("body").scrollTop() >= parseInt(jQuery("#staInfoImg").offset().top) - parseInt(jQuery("#staInfoImg").height())) {
			jQuery("#staInfoImg").addClass("animated");
		}
		if(jQuery("body").scrollTop() >= parseInt(jQuery("#staBottomInfoImg").offset().top) - parseInt(jQuery("#staBottomInfoImg").height())){
			jQuery("#staBottomInfoImg").addClass("animated");
		}
		jQuery(window).scroll(function(){
			if (jQuery("body, html").scrollTop() >= parseInt(jQuery("#staInfoImg").offset().top) - parseInt(jQuery("#staInfoImg").height())) {
				jQuery("#staInfoImg").addClass("animated");
			}
		});
		jQuery(window).scroll(function(){
			if(jQuery("body, html").scrollTop() >= parseInt(jQuery("#staBottomInfoImg").offset().top) - parseInt(jQuery("#staBottomInfoImg").height())){
				console.log(1);
				jQuery("#staBottomInfoImg").addClass("animated");
			}
		});
	},
	initBlockAnimation: function() {
		jQuery(".f_init_blocks").addClass("animated");
	}


});
