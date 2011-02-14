(function($){  
  $.fn.marctv_facebook_like_button = function(options) {
    var obj = $(this);
    var mrstop = false;
    $(window).scroll(function () {
      if(mrstop !== true){
        mrstop = true;
        var canonical = encodeURIComponent($('[rel="canonical"]').attr("href"));
        if(canonical){
          $(obj).append('<iframe src="http://www.facebook.com/plugins/like.php?href=' + canonical + '&amp;layout=standard&amp;show_faces=false&amp;width=620&amp;action=like&amp;font=arial&amp;colorscheme=light&amp;height=45" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:620px; height:45px;" allowTransparency="true"></iframe>');
        }
      }
    });
  };
})(jQuery);