var pwa_email_select = {
  selector: '[data-email-select]',
  init: function(){
    if(!$(pwa_email_select.selector).length) return;

    var REGEX_EMAIL = '([a-z0-9!#$%&\'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&\'*+/=?^_`{|}~-]+)*@' +
    '(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?)';

    $(pwa_email_select.selector).selectize({
      plugins: ['remove_button'],
      persist: false,
      maxItems: null,
      valueField: 'email',
      labelField: 'name',
      searchField: ['name', 'email'],
      options: [
      ],
      render: {
        item: function(item, escape) {
          return '<div>' +
          (item.name ? '<span class="name">' + escape(item.name) + '</span>' : '') +
          (item.email ? '<span class="email">' + escape(item.email) + '</span>' : '') +
          '</div>';
        },
        option: function(item, escape) {
          var label = item.name || item.email;
          var caption = item.name ? item.email : null;
          return '<div>' +
          '<span class="label">' + escape(label) + '</span>' +
          (caption ? '<span class="caption">' + escape(caption) + '</span>' : '') +
          '</div>';
        }
      },
      createFilter: function(input) {
        var match, regex;

        // email@address.com
        regex = new RegExp('^' + REGEX_EMAIL + '$', 'i');
        match = input.match(regex);
        if (match) return !this.options.hasOwnProperty(match[0]);

        // name <email@address.com>
        regex = new RegExp('^([^<]*)\<' + REGEX_EMAIL + '\>$', 'i');
        match = input.match(regex);
        if (match) return !this.options.hasOwnProperty(match[2]);

        return false;
      },
      create: function(input) {
        if ((new RegExp('^' + REGEX_EMAIL + '$', 'i')).test(input)) {
          return {email: input};
        }
        var match = input.match(new RegExp('^([^<]*)\<' + REGEX_EMAIL + '\>$', 'i'));
        if (match) {
          return {
            email : match[2],
            name  : $.trim(match[1])
          };
        }
        alert('Invalid email address.');
        return false;
      }
    });
  },
  addOption: function(email,name){
    var $selectize = $(pwa_email_select.selector)[0].selectize;
    $selectize.addOption({email: email, name: name});
  }
};

site.ready.push(pwa_email_select.init);
