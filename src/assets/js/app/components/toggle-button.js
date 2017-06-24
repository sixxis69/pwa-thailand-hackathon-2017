var pwa_toggle_button = {
  selector: '[data-toggle-button]',
  active_class: 'is-active',
  text_normal: 'start',
  text_active: 'stop',
  init: function(){
    jQuery(pwa_toggle_button.selector).on('click', function(){
      var $this = jQuery(this);

      if($this.hasClass(pwa_toggle_button.active_class)){
        pwa_toggle_button.setNormal($this);
      }else{
        pwa_toggle_button.setActive($this);
      }
    });
  },
  setActive: function($target){
    $('body').addClass('start');
    $target.addClass(pwa_toggle_button.active_class);
    $target.find('span').html(pwa_toggle_button.text_active);
  },
  setNormal: function($target){
    $('body').removeClass('start');
    $target.removeClass(pwa_toggle_button.active_class);
    $target.find('span').html(pwa_toggle_button.text_normal);
  }
};

site.ready.push(pwa_toggle_button.init);
