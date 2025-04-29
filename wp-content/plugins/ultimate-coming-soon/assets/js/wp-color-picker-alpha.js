//countdown box color
jQuery(document).ready(function($) {
    // Initialize the color pickers with RGBA format and alpha support
    $('.wp-color-picker-rgba').spectrum({
        showAlpha: true,
        preferredFormat: 'hexa',
        showInput: true,
        allowEmpty: true,
        change: function(color) {
            var rgba = color.toRgbString();
            $(this).nextAll('.wpucs-wp-color-picker-rgba').val(rgba);
        }
    });

    // Trigger the change event on each color picker to populate the initial RGBA and HSLA values
    $('.wp-color-picker-rgba').each(function() {
        $(this).trigger('change');
    });
});

//ALL COLOR BOX
// jQuery document ready function
jQuery(document).ready(function($) {
    // Initialize the color pickers with RGBA format and alpha support
    $('.wp-color-picker').spectrum({
        showAlpha: true,
        preferredFormat: 'hexa',
        showInput: true,
        allowEmpty: true,
        change: function(color) {
            var rgba = color.toRgbString();
            $(this).nextAll('.wpucs-color-picker-rgba').val(rgba);
        }
    });

    // Trigger the change event on each color picker to populate the initial RGBA and HSLA values
    $('.wp-color-picker').each(function() {
        $(this).trigger('change');
    });
});

