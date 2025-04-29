//Image Box   
jQuery(document).ready(function($) {
    // Function to handle media frame
    function handleMediaFrame(buttonId, inputId, previewId, itemContainerId, closeButtonId) {
        $(buttonId).on('click', function(e) {
            e.preventDefault();

            var frame = wp.media({
                title: 'Select Image',
                button: {
                    text: 'Use Image'
                },
                multiple: false
            }).on('select', function() {
                var attachment = frame.state().get('selection').first().toJSON();
                $(inputId).val(attachment.url);
                $(previewId).attr('src', attachment.url);
                $(itemContainerId).show(); // Show the image item container
            });
            frame.open();
        });

        // Handle wpucs-close-button-lite click
        $(closeButtonId).on('click', function() {
            $(inputId).val(''); // Clear the input field
            $(previewId).attr('src', ''); // Clear the image preview
            $(itemContainerId).hide(); // Hide the image item container
        });

        // Check if the input has a value on page load and show the item container accordingly
        if ($(inputId).val()) {
            $(itemContainerId).show();
        }
    }

    // Call handleMediaFrame for Image Upload (wpucs_favicon)
    handleMediaFrame('#wpucs_favicon_upload', '#wpucs_favicon', '#wpucs_favicon_preview', '#wpucs_favicon_item', '#wpucs_favicon_close_button');
    handleMediaFrame('#wpucs_seo_img_upload', '#wpucs_seo_img', '#wpucs_seo_img_preview', '#wpucs_seo_img_item', '#wpucs_seo_img_button');
    handleMediaFrame('#wpucs_background_image_upload', '#wpucs_background_image', '#wpucs_background_image_preview', '#wpucs_background_image_item', '#wpucs_background_image_close_button');
    handleMediaFrame('#wpucs_background_image1_upload', '#wpucs_background_image1', '#wpucs_background_image1_preview', '#wpucs_background_image1_item', '#wpucs_background_image1_close_button');
    handleMediaFrame('#wpucs_background_image2_upload', '#wpucs_background_image2', '#wpucs_background_image2_preview', '#wpucs_background_image2_item', '#wpucs_background_image2_close_button');
    handleMediaFrame('#wpucs_shape_overlay_upload', '#wpucs_shape_overlay', '#wpucs_shape_overlay_preview', '#wpucs_shape_overlay_item', '#wpucs_shape_overlay_close_button');
    handleMediaFrame('#wpucs_website_logo_button', '#wpucs_website_logo', '#wpucs_website_logo_preview', '#wpucs_website_logo_item', '#wpucs_website_logo_close_button');

    //End Image Box 
    // Get the current date
    var currentDate = new Date();

    // Function to validate the input date and show/hide error message
    function validateCountdownDate() {
      var inputDate = new Date($("#wpucs_countdown_date").val());
      if (inputDate < currentDate) {
          $("#wpucs-error-message-pro").show(); // Show error message
          // return false; // Prevent form submission
      } else {
          $("#wpucs-error-message-pro").hide(); // Hide error message
          return true; // Allow form submission
      }
    }
    // On form submission, validate the input date and show/hide error message
    $("form").on("submit", function() {
      return validateCountdownDate();
    });

    // Initially hide the error message
    $("#wpucs-error-message-pro").hide();

    // Add an input event listener to the date input field for instant validation
    $("#wpucs_countdown_date").on("input", function() {
      validateCountdownDate();
    });

    function toggleUCSMModeOptions() {
        if ($('#wpucs_enable_mode').is(':checked')) {
            $('#ucsm_mode_radio').removeClass('ucsm-disabled ucsm-readonly');
        } else {
            $('#ucsm_mode_radio').addClass('ucsm-disabled ucsm-readonly');
        }
    }

    // Initial check on page load
    toggleUCSMModeOptions();

    // Event listener for checkbox change
    $('#wpucs_enable_mode').on('change', function() {
        toggleUCSMModeOptions();
    });

});

//wpucs_logo_setup
document.addEventListener("DOMContentLoaded", function () {

    //Logo Setup 
    const logoSetupRadios = document.querySelectorAll('input[name="wpucs_logo_setup"]');
    const textLogoFields = document.getElementById("wpucs_text_logo_fields");
    const graphicLogoFields = document.getElementById("wpucs_logo_container");
    const disabledLogoFields = document.getElementById("wpucs_disabled_logo_fields");

    // Function to show or hide logo fields based on the selected radio button
    function toggleLogoFields() {
        textLogoFields.style.display = document.getElementById("wpucs_text_logo").checked ? "block" : "none";
        graphicLogoFields.style.display = document.getElementById("wpucs_graphic_logo").checked ? "block" : "none";
        disabledLogoFields.style.display = document.getElementById("wpucs_disabled_logo").checked ? "block" : "none";
    }

    // Initialize the visibility of logo fields
    toggleLogoFields();

    // Attach event listeners to the radio buttons
    logoSetupRadios.forEach(function (radio) {
        radio.addEventListener("change", toggleLogoFields);
    });

    //===============UCSM Radio Mode=========
    var enableModeCheckbox = document.getElementById('wpucs_enable_mode');
    
    //==============UCSM PAGE RADIO MODE============
    
    const ucsmPageRadio = document.getElementById('ucsm_page_radio');

    // Function to toggle display based on checkbox state
    function toggleUcsmPageRadio() {
        if (enableModeCheckbox.checked) {
            ucsmPageRadio.style.display = 'block';
        } else {
            ucsmPageRadio.style.display = 'none';
        }
    }

    // Initial check on page load
    toggleUcsmPageRadio();

    // Add event listener to checkbox
    enableModeCheckbox.addEventListener('change', toggleUcsmPageRadio);
});

document.addEventListener('DOMContentLoaded', function () {
        toggleCountdownDate(); // Initial call to set the correct display based on the initial radio button value
    });

    function toggleCountdownDate() {
        var countdownDateWrapper = document.querySelector('.wpucs-countdown-date-wrapper');
        var countdownStatus = '<?php echo $wpucs_countdown_timer_status; ?>';

        var countdownStatusOn = (countdownStatus === 'on') ||
            document.getElementById('wpucs_countdown_timer_status_enable').checked;

        if (countdownStatusOn) {
            countdownDateWrapper.style.display = 'block';
        } else {
            countdownDateWrapper.style.display = 'none';
        }
    }
document.addEventListener('DOMContentLoaded', function() {
    var socialLinksContainer = document.getElementById('social_links_container');
    var orderInput = document.getElementById('social_links_order');

    var sortable = new Sortable(socialLinksContainer, {
        animation: 150,
        handle: '.handle',
        onEnd: function(evt) {
            updateOrderInput();
        }
    });

    function updateOrderInput() {
        var order = [];
        var items = socialLinksContainer.getElementsByClassName('social_link_item');
        for (var i = 0; i < items.length; i++) {
            order.push(items[i].dataset.platform);
        }
        orderInput.value = order.join(',');
    }

    // Call updateOrderInput initially to set the initial order
    updateOrderInput();
});

jQuery(document).ready(function($) {
    function formatState(state) {
        if (!state.id) { return state.text; }
        var $state = $('<span><i class="' + $(state.element).data('icon') + '"></i> ' + state.text + '</span>');
        return $state;
    }

    $(".social-select").select2({
        placeholder: "Select a social media",
        templateResult: formatState,
        templateSelection: formatState
    });

    var placeholderTexts = {
        facebook: "https://www.facebook.com/",
        twitter: "https://www.twitter.com/",
        instagram: "https://www.instagram.com/",
        youtube: "https://www.youtube.com/",
        linkedin: "https://www.linkedin.com/",
        pinterest: "https://www.pinterest.com/",
        snapchat: "https://www.snapchat.com/",
        tiktok: "https://www.tiktok.com/",
        reddit: "https://www.reddit.com/user/",
        tumblr: "https://www.tumblr.com/",
        whatsapp: "https://wa.me/",
        telegram: "https://t.me/",
        wechat: "https://www.wechat.com/",
        flickr: "https://www.flickr.com/",
        behance: "https://www.behance.net/",
        dribbble: "https://www.dribbble.com/",
        vimeo: "https://www.vimeo.com/",
        soundcloud: "https://www.soundcloud.com/",
        xing: "https://www.xing.com/",
        github: "https://www.github.com/",
        spotify: "https://www.spotify.com/",
        wordpress: "https://www.wordpress.com/",
        discord: "https://www.discord.com/",
        twitch: "https://www.twitch.tv/",
        line: "https://line.me/"
    };

    $("#add_social_icon").click(function() {
        var selectedIcon = $(".social-select").val();
        if (selectedIcon) {
            var selectedIconText = $(".social-select option:selected").text();
            var iconClass = $(".social-select option:selected").data('icon');
            var placeholderText = placeholderTexts[selectedIcon.toLowerCase()] || "https://www." + selectedIconText.toLowerCase() + ".com/";

            var html = '<div class="col-lg-12">';
            html += '<div class="social_link_item" data-platform="' + selectedIcon + '">';
            html += '<label><i class="' + iconClass + '"></i>' + selectedIconText + '</label>';
            html += '<div class="handle-save">';
            html += '<span class="handle" style="cursor: move;"><i class="fa-regular fa-clone"></i></span>';
            html += '</div>';
            html += '<input type="url" name="wpucs_social_' + selectedIcon + '" placeholder="' + placeholderText + '">';
            html += '<button type="button" class="remove_social_link">Remove</button>';
            html += '</div>';
            html += '</div>';
            $("#social_links_container").append(html);
            updateOrderInput();
        }
    });

    $(document).on("click", ".remove_social_link", function() {
        $(this).closest(".social_link_item").parent().remove();
        updateOrderInput();
    });

    function updateOrderInput() {
        var order = [];
        var items = $('#social_links_container').find('.social_link_item');
        items.each(function() {
            order.push($(this).data('platform'));
        });
        $('#social_links_order').val(order.join(','));
    }
});
