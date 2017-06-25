var pwa_loading = {
  selector: '.loading-container',
  active_class: 'is-active',
  show: function(){
    jQuery(pwa_loading.selector).show(0,function(){
      jQuery(pwa_loading.selector).addClass(pwa_loading.active_class);
    });
  },
  hide: function(){
    jQuery(pwa_loading.selector).removeClass(pwa_loading.active_class);
    jQuery(pwa_loading.selector).delay(400).hide(0);
  }
};

site.ready.push(pwa_loading.show);
