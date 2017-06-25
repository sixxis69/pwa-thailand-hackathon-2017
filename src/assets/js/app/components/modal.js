var pwa_modal = {
    activeClass: 'modal-is-active',
    modalSelector: '[data-pwa-modal]',
    closeSelector: '[data-pwa-modal-close]',
    triggerData: 'modal-trigger',
    overlaySelector: '.modal-overlay',
    init: function() {
        // modal
        $(pwa_modal.modalSelector).each(function() {
            var modal = $(this);
            $(this).hide();
            $(this).on('click', function(e) {
                // normal
                if (e.target == $(this)[0]) {
                    pwa_modal.closeModal('#' + $(this).attr('id'));
                }
            });
        });

        // trigger
        $('[data-' + pwa_modal.triggerData + ']').each(function() {
            $(this).on('click', function(e) {
                e.preventDefault();
                var id = $(this).data(pwa_modal.triggerData);
                pwa_modal.showModal(id);
            });
        });

        // close
        $(pwa_modal.closeSelector).each(function() {
            $(this).on('click', function(e) {
                e.preventDefault();
                var modalId = $(this).parents(pwa_modal.modalSelector).attr('id');
                pwa_modal.closeModal('#' + modalId);
            });
        });

        $(pwa_modal.overlaySelector).each(function() {
            $(this).on('click', function(e) {
                e.preventDefault();
                var modalId = $(this).parents(pwa_modal.modalSelector).attr('id');
                pwa_modal.closeModal('#' + modalId);
            });
        });
    },
    showModal: function(id) {
      // close previous
      pwa_modal.closeAllModal();

      if ($(id).length) {
        if(jQuery('.mobile').length){
          $('body').css('position','fixed');
          ttm_nav.closeNav();
        }

        // clear animation
        $(id).removeClass(pwa_modal.activeClass);

        $(id).show(0,function(){
          $(this).addClass(pwa_modal.activeClass);

          $(this).find('.slick-slider').each(function(){
            var slick = $(this).slick('getSlick');
            slick.refresh();
          });
        });

      }
    },
    closeModal: function(id,duration) {
      if($(id).length){
        var animateDuration = (duration) ? duration : 400;

        $(id).removeClass(pwa_modal.activeClass);
        $(id).delay(animateDuration).hide(0);

        $('body').attr('style','');
      }
    },
    closeAllModal: function() {

      jQuery(pwa_modal.modalSelector + ':visible').each(function(){
        pwa_modal.closeModal('#' + jQuery(this).attr('id'), 0);
      });
    }
};

site.ready.push(pwa_modal.init);
