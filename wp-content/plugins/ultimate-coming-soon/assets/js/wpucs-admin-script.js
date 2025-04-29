//Navbar
document.addEventListener('DOMContentLoaded', function() {
    // Function to switch tabs
    function switchTab(tabId) {
        // Hide all tab content
        var tabContents = document.querySelectorAll('.wpucs-tab-content-lite');
        tabContents.forEach(function(content) {
            content.style.display = 'none';
        });

        // Deactivate all tab links
        var tabLinks = document.querySelectorAll('.wpucs-nav-tab');
        tabLinks.forEach(function(link) {
            link.classList.remove('wpucs-nav-tab-active');
        });

        // Show the selected tab content
        var selectedTabContent = document.getElementById(tabId);
        if (selectedTabContent) {
            selectedTabContent.style.display = 'block';
        }

        // Activate the selected tab link
        var selectedTabLink = document.querySelector('[data-tab="' + tabId + '"]');
        if (selectedTabLink) {
            selectedTabLink.classList.add('wpucs-nav-tab-active');
        }

        // Update the URL without page reload
        history.pushState(null, null, selectedTabLink.href);
    }

    // Add click event listeners to tab links
    var tabLinks = document.querySelectorAll('.wpucs-nav-tab');
    tabLinks.forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            var tabId = link.getAttribute('data-tab');
            switchTab(tabId);
        });
    });


    // Handle back/forward browser navigation
    window.addEventListener('popstate', function() {
        var currentTabId = location.hash.replace('#', '');
        switchTab(currentTabId);
    });
});

//NavBar Content
jQuery(document).ready(function($) {
    $('.wpucsnotice-lite .wpucsnotice-dismiss').on('click', function() {
        $(this).closest('.wpucsnotice-lite').fadeOut();
    });
});

//Dashboard
//wpucs_enable_mode 
document.addEventListener("DOMContentLoaded", function() {
    const checkbox = document.getElementById("wpucs_enable_mode");
    const toggleText = document.getElementById("toggleText");

    checkbox.addEventListener("change", function() {
        if (this.checked) {
            toggleText.textContent = "Enable";
        } else {
            toggleText.textContent = "Disable";
        }
    });
});



