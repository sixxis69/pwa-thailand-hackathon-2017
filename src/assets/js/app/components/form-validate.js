var pwa_form_validate = {
  selector: '[data-pwa-validate]',
  init: function(){
    pwa_form_validate.initValidate();
  },
  initValidate: function(){
    $(pwa_form_validate.selector).each(function(){
      $(this).parsley({})
        .on('field:validated',pwa_form_validate.onValidated);
    });
    pwa_form_validate.setMessage();
    $(pwa_form_validate.formSelector).on('submit',pwa_form_validate.onSubmit);
  },
  onValidated: function(){
    // console.log('on validated');
  },
  validate: function(){
    return $(pwa_form_validate.selector).parsley().validate();
  },
  setMessage: function(){
    Parsley.addMessages('en', {
      defaultMessage: "",
      type: {
        email:        "Bruh, that email address is invalid",
        url:          "Please fill out this field.",
        number:       "This value should be a valid number.",
        integer:      "This value shoudl be an integer",
        digits:       "This value shuld be a valid digit.",
        alphanum:     "This value should be alphanumeric."
      },
      notblank:       "This value should not be blank.",
      required:       "Please fill out this field.",
      pattern:        "This value seems to be invalid.",
      min:            "This value should be greater than or equal to %s.",
      max:            "This value should be lower than or equal to %s.",
      range:          "This value should be between %s and %s.",
      minlength:      "This value is too short. It should have %s characters or more.",
      maxlength:      "This value is too long. It should have %s characters or fewer.",
      length:         "This value should be %s length",
      mincheck:       "You must select at least %s choices.",
      maxcheck:       "You must select %s choices or fewer.",
      check:          "You must select between %s and %s choices.",
      equalto:        "Password is not match"
    });
  },
  onSubmit:function(e){
    if(!pwa_form_validate.validate()){
      e.preventDefault();
    }
  }
};

site.ready.push(pwa_form_validate.init);
