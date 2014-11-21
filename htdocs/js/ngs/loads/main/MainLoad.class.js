ngs.MainLoad = Class.create(ngs.AbstractLoad, {
    initialize: function($super, shortCut, ajaxLoader) {
        $super(shortCut, "main", ajaxLoader);
    },
    getUrl: function() {
        return "main";
    },
    getMethod: function() {
        return "POST";
    },
    getContainer: function() {
        return "content";
    },
    getName: function() {
        return "main";
    },
    afterLoad: function() {
    	ngs.nestLoad(jQuery("#contentLoad").val(), {});
    	this.loginWrapperController();
    },
	loginWrapperController: function(){
		jQuery("#loginBtn").click(function(){
			jQuery("#loginBlock").slideDown();
			if(jQuery(".bg-overlay").length == 0){
				jQuery("<div class='f_bg_overlay bg-overlay'></div>").appendTo("body");
				jQuery(".f_bg_overlay, .f_close_pop_up").click(function(){
					jQuery(".f_bg_overlay").remove();
					jQuery("#loginBlock").slideUp();
				});
			}else {
				return;
			}
		});
	}
});
