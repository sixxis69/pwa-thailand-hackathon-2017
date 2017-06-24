var pwa_global_container = {
  selector: 'body',
  update: function(){
    jQuery(pwa_global_container.selector).height(jQuery(window).height());
  }
};

site.ready.push(pwa_global_container.update);
site.resize.push(pwa_global_container.update);
