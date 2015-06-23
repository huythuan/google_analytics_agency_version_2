(function ($) {
  // Add calendar popup to date textfield
  Drupal.behaviors.setDatePicker = {
    attach: function(context, settings) {
      var options = {
        'dateFormat':'yy-mm-dd',
        'changeYear':true,
        'changeMonth':true
       };
      $(".datepicker").once('datepicker').datepicker(options);
    }
  };

})(jQuery);