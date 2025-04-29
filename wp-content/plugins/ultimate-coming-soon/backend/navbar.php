<?php if ( ! defined( 'ABSPATH' ) ) exit;
//All Dynamic Variables
require_once('essential-variables.php'); 
?>

<div class="ucsm-tab-box-lite">
    <div class="ucsm-tab-nav-wrapper-lite">

        <!-- Settings -->
        <a href="?page=ucsm-general-settings-lite&tab=dashboard-lite"
            class="wpucs-nav-tab <?php echo esc_attr(($active_tab === 'dashboard-lite') ? 'wpucs-nav-tab-active' : ''); ?>"
            data-tab="tab-dashboard-lite">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="30" height="30" viewBox="0 0 256 256" xml:space="preserve">

                    <defs>
                    </defs>
                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                        <path d="M 16.253 90 c -1.72 0 -3.46 -0.275 -5.16 -0.839 c -0.329 -0.109 -0.578 -0.381 -0.658 -0.719 c -0.08 -0.338 0.021 -0.692 0.266 -0.937 l 7.189 -7.189 c 1.096 -1.096 1.7 -2.553 1.7 -4.104 s -0.603 -3.007 -1.699 -4.104 c -2.264 -2.263 -5.946 -2.263 -8.207 0 l -7.189 7.189 c -0.245 0.244 -0.602 0.347 -0.937 0.266 c -0.337 -0.079 -0.609 -0.329 -0.719 -0.658 c -1.945 -5.866 -0.449 -12.215 3.906 -16.57 c 4.463 -4.462 11.051 -5.916 16.948 -3.792 l 36.851 -36.851 c -2.124 -5.9 -0.671 -12.486 3.792 -16.948 c 4.354 -4.355 10.707 -5.852 16.57 -3.906 c 0.329 0.109 0.579 0.381 0.658 0.719 c 0.08 0.337 -0.021 0.692 -0.266 0.937 L 72.11 9.683 c -2.262 2.263 -2.262 5.944 0 8.207 c 1.096 1.096 2.553 1.699 4.104 1.699 c 1.55 0 3.007 -0.603 4.104 -1.7 l 7.189 -7.189 c 0.245 -0.246 0.603 -0.344 0.937 -0.266 c 0.338 0.08 0.609 0.329 0.719 0.658 c 1.946 5.866 0.449 12.215 -3.906 16.57 c -4.463 4.464 -11.048 5.915 -16.948 3.793 L 31.456 68.307 c 2.124 5.899 0.67 12.485 -3.793 16.948 C 24.571 88.348 20.471 90 16.253 90 z M 13.336 87.698 c 4.668 0.974 9.493 -0.436 12.913 -3.857 c 4.051 -4.051 5.274 -10.098 3.115 -15.406 c -0.151 -0.373 -0.065 -0.8 0.219 -1.084 l 37.769 -37.769 c 0.285 -0.285 0.712 -0.371 1.084 -0.219 c 5.307 2.161 11.355 0.936 15.406 -3.115 c 3.42 -3.421 4.829 -8.246 3.857 -12.913 l -5.967 5.967 c -1.473 1.474 -3.433 2.286 -5.517 2.286 c -2.084 0 -4.044 -0.811 -5.517 -2.285 c -3.042 -3.043 -3.042 -7.993 0 -11.035 l 5.967 -5.968 C 71.993 1.33 67.17 2.738 63.749 6.158 c -4.051 4.051 -5.273 10.098 -3.114 15.406 c 0.151 0.372 0.064 0.8 -0.22 1.084 L 22.648 60.416 c -0.285 0.284 -0.712 0.367 -1.084 0.22 c -5.308 -2.162 -11.355 -0.937 -15.406 3.114 c -3.421 3.421 -4.829 8.246 -3.857 12.914 l 5.968 -5.967 c 3.042 -3.042 7.992 -3.042 11.035 0 c 1.474 1.473 2.286 3.433 2.285 5.517 c 0 2.084 -0.812 4.044 -2.286 5.517 L 13.336 87.698 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path d="M 29.621 61.379 c -0.256 0 -0.512 -0.098 -0.707 -0.293 c -0.391 -0.391 -0.391 -1.023 0 -1.414 l 30.758 -30.758 c 0.391 -0.391 1.023 -0.391 1.414 0 c 0.391 0.391 0.391 1.023 0 1.414 L 30.327 61.086 C 30.132 61.281 29.876 61.379 29.621 61.379 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path d="M 79.625 89.833 c -2.654 0 -5.308 -1.01 -7.328 -3.031 L 57.424 71.93 c -0.177 -0.177 -0.28 -0.413 -0.292 -0.662 c -0.155 -3.46 -1.876 -7.076 -4.72 -9.921 c -2.794 -2.793 -6.352 -4.511 -9.76 -4.712 c -0.552 -0.032 -0.972 -0.506 -0.939 -1.056 c 0.032 -0.552 0.505 -0.967 1.056 -0.939 c 3.891 0.228 7.921 2.159 11.057 5.294 c 3.087 3.088 4.996 7.021 5.28 10.851 L 73.71 85.389 c 3.262 3.262 8.57 3.26 11.83 0 c 3.261 -3.262 3.261 -8.568 0 -11.83 L 70.936 58.955 c -3.831 -0.284 -7.764 -2.193 -10.851 -5.28 c -3.135 -3.136 -5.065 -7.166 -5.294 -11.057 c -0.032 -0.551 0.388 -1.024 0.939 -1.056 c 0.539 -0.041 1.024 0.388 1.056 0.939 c 0.201 3.408 1.918 6.966 4.712 9.76 c 2.844 2.844 6.459 4.564 9.921 4.72 c 0.249 0.012 0.485 0.115 0.662 0.292 l 14.873 14.873 c 4.04 4.041 4.04 10.617 0 14.658 C 84.934 88.824 82.279 89.833 79.625 89.833 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path d="M 81.007 81.856 c -0.256 0 -0.512 -0.098 -0.707 -0.293 L 52.382 53.645 c -0.391 -0.391 -0.391 -1.023 0 -1.414 s 1.023 -0.391 1.414 0 l 27.918 27.917 c 0.391 0.391 0.391 1.023 0 1.414 C 81.519 81.758 81.263 81.856 81.007 81.856 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path d="M 39.138 43.512 c -0.256 0 -0.512 -0.098 -0.707 -0.293 l -26.69 -26.69 l -5.818 -1.89 c -0.239 -0.078 -0.44 -0.243 -0.563 -0.462 L 0.138 4.874 c -0.219 -0.391 -0.152 -0.879 0.165 -1.196 l 3.224 -3.223 C 3.843 0.139 4.333 0.071 4.723 0.29 l 9.303 5.221 c 0.219 0.123 0.384 0.324 0.462 0.563 l 1.89 5.818 l 26.69 26.69 c 0.391 0.391 0.391 1.023 0 1.414 c -0.391 0.391 -1.023 0.391 -1.414 0 l -26.859 -26.86 c -0.112 -0.111 -0.195 -0.248 -0.244 -0.398 l -1.843 -5.675 l -8.302 -4.66 L 2.252 4.556 l 4.66 8.302 l 5.675 1.843 c 0.15 0.049 0.287 0.132 0.398 0.244 l 26.86 26.86 c 0.391 0.391 0.391 1.023 0 1.414 C 39.65 43.415 39.394 43.512 39.138 43.512 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    </g>
                    </svg>
            </div>
            <div class="tab-title">
                <?php esc_html_e('Settings ', 'ultimate-coming-soon'); ?>
            </div>
        </a>
        
        <!-- Templates -->
        <a href="?page=ucsm-general-settings-lite&tab=templates-lite"
            class="wpucs-nav-tab <?php echo esc_attr(($active_tab === 'templates-lite') ? 'wpucs-nav-tab-active' : ''); ?>"
            data-tab="tab-templates-lite">
            <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="30" height="30" viewBox="0 0 256 256" xml:space="preserve">
                <defs></defs>
                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                    <path d="M 45 54.733 c -0.868 0 -1.736 -0.208 -2.527 -0.624 L 1.818 32.727 C 0.696 32.137 0 30.983 0 29.717 s 0.697 -2.42 1.818 -3.009 L 42.473 5.325 c 1.582 -0.833 3.47 -0.832 5.054 0 l 40.655 21.383 C 89.304 27.297 90 28.45 90 29.717 s -0.696 2.42 -1.817 3.01 L 47.527 54.109 C 46.736 54.525 45.868 54.733 45 54.733 z M 45 6.701 c -0.548 0 -1.096 0.131 -1.596 0.395 L 2.749 28.478 C 2.28 28.724 2 29.188 2 29.717 c 0 0.53 0.28 0.993 0.749 1.24 L 43.404 52.34 c 1 0.525 2.194 0.525 3.192 0 l 40.655 -21.383 C 87.72 30.71 88 30.247 88 29.717 c 0 -0.529 -0.28 -0.993 -0.748 -1.239 L 46.596 7.095 C 46.097 6.832 45.548 6.701 45 6.701 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    <path d="M 45 70.016 c -0.868 0 -1.736 -0.208 -2.527 -0.624 L 1.818 48.009 C 0.697 47.42 0 46.267 0 45 c 0 -1.267 0.696 -2.42 1.818 -3.01 L 5.8 39.896 c 0.489 -0.257 1.094 -0.069 1.351 0.42 s 0.069 1.093 -0.42 1.351 l -3.982 2.095 C 2.28 44.007 2 44.471 2 45 s 0.28 0.993 0.749 1.239 l 40.655 21.383 c 1 0.525 2.194 0.525 3.192 0 l 40.655 -21.383 C 87.72 45.993 88 45.529 88 45 s -0.28 -0.993 -0.749 -1.239 l -3.982 -2.095 c -0.488 -0.257 -0.677 -0.862 -0.419 -1.351 c 0.257 -0.489 0.862 -0.677 1.351 -0.42 l 3.982 2.095 C 89.304 42.58 90 43.733 90 45 c 0 1.266 -0.696 2.419 -1.818 3.008 L 47.527 69.392 C 46.736 69.808 45.868 70.016 45 70.016 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    <path d="M 45 85.299 c -0.868 0 -1.736 -0.208 -2.527 -0.624 L 1.818 63.292 C 0.697 62.703 0 61.55 0 60.284 c 0 -1.268 0.696 -2.421 1.817 -3.011 L 5.8 55.179 c 0.489 -0.258 1.094 -0.069 1.351 0.419 c 0.257 0.489 0.069 1.094 -0.42 1.351 l -3.982 2.095 C 2.28 59.29 2 59.754 2 60.283 s 0.28 0.992 0.749 1.239 l 40.655 21.383 c 1 0.525 2.194 0.525 3.192 0 l 40.655 -21.383 C 87.72 61.275 88 60.812 88 60.283 s -0.28 -0.993 -0.749 -1.24 l -3.982 -2.095 c -0.488 -0.257 -0.677 -0.861 -0.419 -1.351 c 0.257 -0.489 0.862 -0.676 1.351 -0.419 l 3.982 2.095 C 89.304 57.863 90 59.017 90 60.284 c 0 1.266 -0.697 2.419 -1.818 3.008 L 47.527 84.675 C 46.736 85.091 45.868 85.299 45 85.299 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                </g>
            </svg>
            </div>
            <div class="tab-title">
                <?php esc_html_e('Templates ', 'ultimate-coming-soon'); ?>
            </div>
        </a>

        <!-- Content -->
        <a href="?page=ucsm-general-settings-lite&tab=content-lite"
            class="wpucs-nav-tab <?php echo esc_attr(($active_tab === 'content-lite') ? 'wpucs-nav-tab-active' : ''); ?>"
            data-tab="tab-content-lite">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="30" height="30" viewBox="0 0 256 256" xml:space="preserve">
                    <defs></defs>
                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                        <path d="M 63.409 90 H 8.08 C 3.625 90 0 86.375 0 81.92 V 8.08 C 0 3.625 3.625 0 8.08 0 h 73.84 C 86.375 0 90 3.625 90 8.08 v 57.44 c 0 0.553 -0.447 1 -1 1 s -1 -0.447 -1 -1 V 8.08 C 88 4.728 85.272 2 81.92 2 H 8.08 C 4.728 2 2 4.728 2 8.08 v 73.84 C 2 85.272 4.728 88 8.08 88 h 55.329 c 0.553 0 1 0.447 1 1 S 63.962 90 63.409 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path d="M 79.181 89.997 c -1.626 0 -3.252 -0.619 -4.489 -1.856 L 52.982 66.433 c -1.323 -1.324 -2.312 -2.971 -2.858 -4.76 l -3.479 -11.384 c -0.316 -1.034 -0.038 -2.151 0.728 -2.916 c 0.765 -0.766 1.887 -1.046 2.916 -0.728 l 11.384 3.479 c 1.789 0.547 3.436 1.535 4.76 2.858 l 21.708 21.709 c 2.476 2.476 2.476 6.503 0 8.979 l -4.471 4.471 C 82.433 89.378 80.807 89.997 79.181 89.997 z M 49.425 48.515 c -0.324 0 -0.545 0.18 -0.638 0.272 c -0.117 0.117 -0.375 0.441 -0.229 0.918 l 3.479 11.384 c 0.452 1.478 1.268 2.836 2.36 3.93 l 21.709 21.708 c 1.695 1.695 4.455 1.695 6.15 0 l 4.471 -4.471 c 1.695 -1.695 1.695 -4.455 0 -6.15 L 65.019 54.396 c -1.094 -1.093 -2.452 -1.908 -3.93 -2.36 l 0 0 l -11.384 -3.479 C 49.604 48.527 49.511 48.515 49.425 48.515 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path d="M 70.886 83.922 c -0.256 0 -0.512 -0.098 -0.707 -0.293 c -0.391 -0.391 -0.391 -1.023 0 -1.414 l 12.036 -12.036 c 0.391 -0.391 1.023 -0.391 1.414 0 s 0.391 1.023 0 1.414 L 71.593 83.629 C 71.397 83.824 71.142 83.922 70.886 83.922 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path d="M 72.719 22 H 17.281 c -0.552 0 -1 -0.448 -1 -1 s 0.448 -1 1 -1 h 55.438 c 0.553 0 1 0.448 1 1 S 73.271 22 72.719 22 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path d="M 72.719 38 H 17.281 c -0.552 0 -1 -0.448 -1 -1 s 0.448 -1 1 -1 h 55.438 c 0.553 0 1 0.448 1 1 S 73.271 38 72.719 38 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path d="M 32.719 54 H 17.281 c -0.552 0 -1 -0.447 -1 -1 s 0.448 -1 1 -1 h 15.438 c 0.552 0 1 0.447 1 1 S 33.271 54 32.719 54 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path d="M 42.719 70 H 17.281 c -0.552 0 -1 -0.447 -1 -1 s 0.448 -1 1 -1 h 25.438 c 0.552 0 1 0.447 1 1 S 43.271 70 42.719 70 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    </g>
                </svg>
            </div>
            
            <div class="tab-title">
                <?php esc_html_e('Content ', 'ultimate-coming-soon'); ?>
            </div>
        </a>

        <!-- Appearance  -->
        <a href="?page=ucsm-general-settings-lite&tab=design-lite"
            class="wpucs-nav-tab <?php echo esc_attr(($active_tab === 'design-lite') ? 'wpucs-nav-tab-active' : ''); ?>"
            data-tab="tab-design-lite">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="30" height="30" viewBox="0 0 256 256" xml:space="preserve">
                <defs></defs>
                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                        <path d="M 50.004 2.245 c 19.73 2.292 35.46 18.022 37.751 37.751 H 50.004 V 2.245 M 48.004 0.055 v 41.941 h 41.941 C 88.463 19.509 70.491 1.537 48.004 0.055 L 48.004 0.055 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path d="M 87.755 50.004 c -1.275 10.994 -6.739 21.059 -15.276 28.143 L 54.213 50.004 H 87.755 M 89.945 48.004 H 50.53 l 21.465 33.071 C 82.209 73.419 89.054 61.525 89.945 48.004 L 89.945 48.004 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path d="M 39.996 2.245 v 39.9 L 5.637 62.446 C 3.186 56.943 1.945 51.084 1.945 45 C 1.945 23.118 18.491 4.737 39.996 2.245 M 41.996 0.055 C 18.515 1.603 -0.055 21.127 -0.055 45 c 0 7.298 1.746 14.184 4.826 20.282 l 37.226 -21.996 V 0.055 L 41.996 0.055 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path d="M 43.415 51.749 l 20.669 31.846 C 58.176 86.518 51.622 88.055 45 88.055 c -13.481 0 -26.135 -6.315 -34.268 -16.995 L 43.415 51.749 M 44.049 49.051 L 7.827 70.454 C 15.946 82.289 29.564 90.055 45 90.055 c 7.973 0 15.457 -2.079 21.954 -5.713 L 44.049 49.051 L 44.049 49.051 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    </g>
                </svg>
            </div>           
            <div class="tab-title">
                <?php esc_html_e('Appearance ', 'ultimate-coming-soon'); ?>
            </div>
        </a>
        
        <!-- Social -->
        <a href="?page=ucsm-general-settings-lite&tab=social-lite"
            class="wpucs-nav-tab <?php echo esc_attr(($active_tab === 'social-lite') ? 'wpucs-nav-tab-active' : ''); ?>"
            data-tab="tab-social-lite">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="30" height="30" viewBox="0 0 256 256" xml:space="preserve">
                    <defs></defs>
                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                        <path d="M 80.116 45.805 c -2.318 0 -4.312 1.398 -5.194 3.393 l -14.931 -3.612 c 0.131 -0.777 0.215 -1.57 0.215 -2.384 c 0 -3.462 -1.235 -6.641 -3.287 -9.121 l 18.33 -19.499 c 1.334 0.976 2.973 1.559 4.749 1.559 c 4.45 0 8.071 -3.621 8.071 -8.071 S 84.449 0 79.999 0 s -8.07 3.621 -8.07 8.071 c 0 1.955 0.699 3.749 1.86 5.147 l -18.26 19.424 c -2.549 -2.332 -5.931 -3.768 -9.65 -3.768 c -3.563 0 -6.82 1.316 -9.329 3.477 L 21.709 17.35 c 0.653 -0.925 1.041 -2.05 1.041 -3.266 c 0 -3.131 -2.547 -5.678 -5.678 -5.678 s -5.678 2.547 -5.678 5.678 s 2.547 5.678 5.678 5.678 c 1.194 0 2.302 -0.372 3.217 -1.005 L 35.131 33.76 c -2.22 2.525 -3.579 5.824 -3.579 9.443 c 0 2.553 0.679 4.946 1.854 7.024 L 16.13 61.613 c -1.481 -1.731 -3.677 -2.833 -6.129 -2.833 c -4.45 0 -8.071 3.62 -8.071 8.07 s 3.621 8.071 8.071 8.071 s 8.071 -3.621 8.071 -8.071 c 0 -1.281 -0.308 -2.49 -0.842 -3.567 l 17.283 -11.392 c 2.621 3.42 6.734 5.639 11.366 5.639 c 1.639 0 3.208 -0.29 4.676 -0.799 l 5.693 15.815 c -3.053 1.499 -5.164 4.631 -5.164 8.254 c 0 5.072 4.127 9.199 9.199 9.199 s 9.198 -4.127 9.198 -9.199 s -4.126 -9.199 -9.198 -9.199 c -0.743 0 -1.462 0.098 -2.155 0.265 l -5.731 -15.921 c 3.37 -1.731 5.973 -4.75 7.137 -8.412 l 14.922 3.609 c -0.007 0.113 -0.017 0.226 -0.017 0.341 c 0 3.131 2.547 5.679 5.678 5.679 s 5.679 -2.548 5.679 -5.679 S 83.247 45.805 80.116 45.805 z M 10.001 72.921 c -3.348 0 -6.071 -2.724 -6.071 -6.071 s 2.723 -6.07 6.071 -6.07 s 6.071 2.723 6.071 6.07 S 13.349 72.921 10.001 72.921 z M 67.481 80.801 c 0 3.97 -3.229 7.199 -7.198 7.199 c -3.97 0 -7.199 -3.229 -7.199 -7.199 s 3.229 -7.199 7.199 -7.199 C 64.252 73.602 67.481 76.831 67.481 80.801 z M 79.999 2 c 3.348 0 6.071 2.723 6.071 6.071 s -2.724 6.071 -6.071 6.071 s -6.07 -2.723 -6.07 -6.071 S 76.651 2 79.999 2 z M 13.394 14.084 c 0 -2.028 1.65 -3.678 3.678 -3.678 s 3.678 1.65 3.678 3.678 s -1.65 3.678 -3.678 3.678 S 13.394 16.112 13.394 14.084 z M 45.879 55.53 c -6.797 0 -12.328 -5.53 -12.328 -12.328 s 5.53 -12.328 12.328 -12.328 c 6.798 0 12.328 5.53 12.328 12.328 S 52.677 55.53 45.879 55.53 z M 80.116 55.162 c -2.028 0 -3.678 -1.65 -3.678 -3.679 s 1.649 -3.679 3.678 -3.679 s 3.679 1.65 3.679 3.679 S 82.145 55.162 80.116 55.162 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    </g>
                </svg>
            </div>
            <div class="tab-title">
                <?php esc_html_e('Social ', 'ultimate-coming-soon'); ?>
            </div>
        </a>

        <!-- Contact -->
        <a href="?page=ucsm-general-settings-lite&tab=contact_info-lite"
            class="wpucs-nav-tab <?php echo esc_attr(($active_tab === 'contact_info-lite') ? 'wpucs-nav-tab-active' : ''); ?>"
            data-tab="tab-contact-lite">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="30" height="30"><path fill="#A3ACB9" d="M 13 4 C 8.0414839 4 4 8.0414839 4 13 L 4 37 C 4 41.958516 8.0414839 46 13 46 L 37 46 C 41.958516 46 46 41.958516 46 37 L 46 13 C 46 8.0414839 41.958516 4 37 4 L 13 4 z M 13 6 L 37 6 C 37.355032 6 37.659445 6.150633 38 6.2011719 L 38 43.798828 C 37.659445 43.849367 37.355032 44 37 44 L 13 44 C 9.1225161 44 6 40.877484 6 37 L 6 13 C 6 9.1225161 9.1225161 6 13 6 z M 40 6.7304688 C 42.352068 7.856447 44 10.209434 44 13 L 44 14 L 40 14 L 40 6.7304688 z M 22 12 C 14.832139 12 9 17.832144 9 25 C 9 32.167856 14.832139 38 22 38 C 29.167861 38 35 32.167856 35 25 C 35 17.832144 29.167861 12 22 12 z M 22 14 C 28.086982 14 33 18.913022 33 25 C 33 27.822097 31.934808 30.383342 30.195312 32.328125 C 28.169802 30.27163 25.239791 29 22 29 C 18.758932 29 15.833876 30.276672 13.808594 32.333984 C 12.066333 30.388584 11 27.824608 11 25 C 11 18.913022 15.913018 14 22 14 z M 40 16 L 44 16 L 44 24 L 40 24 L 40 16 z M 22 18 C 20.416667 18 19.101892 18.629756 18.251953 19.585938 C 17.402014 20.542119 17 21.777778 17 23 C 17 24.222222 17.402014 25.457882 18.251953 26.414062 C 19.101892 27.370244 20.416667 28 22 28 C 23.583333 28 24.898108 27.370244 25.748047 26.414062 C 26.597986 25.457881 27 24.222222 27 23 C 27 21.777778 26.597986 20.542118 25.748047 19.585938 C 24.898108 18.629756 23.583333 18 22 18 z M 22 20 C 23.083333 20 23.768559 20.370244 24.251953 20.914062 C 24.735347 21.457881 25 22.222222 25 23 C 25 23.777778 24.735347 24.542118 24.251953 25.085938 C 23.768559 25.629756 23.083333 26 22 26 C 20.916667 26 20.231441 25.629756 19.748047 25.085938 C 19.264653 24.542119 19 23.777778 19 23 C 19 22.222222 19.264653 21.457882 19.748047 20.914062 C 20.231441 20.370244 20.916667 20 22 20 z M 40 26 L 44 26 L 44 34 L 40 34 L 40 26 z M 22 31 C 24.694386 31 27.092805 32.055926 28.730469 33.695312 C 26.87065 35.135558 24.540932 36 22 36 C 19.4616 36 17.134304 35.136865 15.275391 33.699219 C 16.913049 32.060657 19.305741 31 22 31 z M 40 36 L 44 36 L 44 37 C 44 39.790566 42.352068 42.143553 40 43.269531 L 40 36 z"/></svg>
            </div>
            <div class="tab-title">
                <?php esc_html_e('Contact ', 'ultimate-coming-soon'); ?>
            </div>
        </a>

        <!-- Newsletter -->
        <a href="?page=ucsm-general-settings-lite&tab=newsletter-lite"
            class="wpucs-nav-tab <?php echo esc_attr(($active_tab === 'newsletter-lite') ? 'wpucs-nav-tab-active' : ''); ?>"
            data-tab="tab-newsletter-lite">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="30" height="30" viewBox="0 0 256 256" xml:space="preserve">
                    <defs></defs>
                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                        <path d="M 16.39 79.971 c -0.16 0 -0.32 -0.038 -0.467 -0.115 c -0.328 -0.174 -0.533 -0.514 -0.533 -0.885 V 66.229 H 8.308 C 3.727 66.229 0 62.503 0 57.922 V 18.337 c 0 -4.581 3.727 -8.308 8.308 -8.308 h 73.384 c 4.581 0 8.308 3.727 8.308 8.308 v 39.584 c 0 4.581 -3.727 8.308 -8.308 8.308 H 36.816 L 16.954 79.797 C 16.784 79.912 16.587 79.971 16.39 79.971 z M 8.308 12.029 C 4.83 12.029 2 14.859 2 18.337 v 39.584 c 0 3.479 2.83 6.308 6.308 6.308 h 8.082 c 0.552 0 1 0.447 1 1 v 11.847 l 18.553 -12.673 c 0.166 -0.113 0.363 -0.174 0.564 -0.174 h 45.186 c 3.479 0 6.308 -2.829 6.308 -6.308 V 18.337 c 0 -3.479 -2.829 -6.308 -6.308 -6.308 H 8.308 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path d="M 40.61 50.99 H 14.513 c -1.28 0 -2.322 -1.042 -2.322 -2.323 c 0 -1.51 0.659 -2.939 1.808 -3.92 c 0.703 -0.601 1.106 -1.476 1.106 -2.4 v -9.601 c 0 -6.869 5.588 -12.457 12.457 -12.457 s 12.457 5.588 12.457 12.457 v 9.601 c 0 0.925 0.403 1.8 1.106 2.4 c 1.149 0.982 1.808 2.411 1.808 3.921 C 42.933 49.948 41.891 50.99 40.61 50.99 z M 27.562 22.289 c -5.766 0 -10.457 4.691 -10.457 10.457 v 9.601 c 0 1.511 -0.659 2.94 -1.808 3.921 c -0.703 0.601 -1.106 1.475 -1.106 2.399 c 0 0.179 0.145 0.323 0.322 0.323 H 40.61 c 0.178 0 0.323 -0.145 0.323 -0.323 c 0 -0.924 -0.403 -1.799 -1.107 -2.4 c -1.148 -0.98 -1.807 -2.409 -1.807 -3.92 v -9.601 C 38.019 26.979 33.328 22.289 27.562 22.289 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path d="M 27.562 56.082 c -3.341 0 -6.06 -2.719 -6.06 -6.06 c 0 -0.553 0.448 -1.017 1 -1.017 c 0.553 0 1.001 0.432 1.001 0.984 c 0 0.022 -0.001 0.062 -0.003 0.084 c 0.001 2.187 1.823 4.008 4.061 4.008 s 4.059 -1.821 4.059 -4.06 c 0 -0.553 0.447 -1.017 1 -1.017 c 0.552 0 0.999 0.432 0.999 0.984 C 33.621 53.363 30.903 56.082 27.562 56.082 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path d="M 76.809 27.934 H 52.571 c -0.553 0 -1 -0.448 -1 -1 s 0.447 -1 1 -1 h 24.237 c 0.553 0 1 0.448 1 1 S 77.361 27.934 76.809 27.934 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path d="M 76.809 39.225 H 52.571 c -0.553 0 -1 -0.448 -1 -1 s 0.447 -1 1 -1 h 24.237 c 0.553 0 1 0.448 1 1 S 77.361 39.225 76.809 39.225 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path d="M 76.809 50.517 H 52.571 c -0.553 0 -1 -0.447 -1 -1 s 0.447 -1 1 -1 h 24.237 c 0.553 0 1 0.447 1 1 S 77.361 50.517 76.809 50.517 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    </g>
                </svg>
            </div>
            <div class="tab-title">
                <?php esc_html_e('Newsletter ', 'ultimate-coming-soon'); ?>
            </div>
        </a>

        <!-- CountDown -->
        <a href="?page=ucsm-general-settings-lite&tab=countdown_timer-lite"
            class="wpucs-nav-tab <?php echo esc_attr(($active_tab === 'countdown_timer-lite') ? 'wpucs-nav-tab-active' : ''); ?>"
            data-tab="tab-countdown-lite">
            <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="30" height="30" viewBox="0 0 256 256" xml:space="preserve">
                <defs></defs>
                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                    <path d="M 65.591 11.377 H 24.41 c -0.552 0 -1 -0.448 -1 -1 s 0.448 -1 1 -1 h 41.181 c 0.553 0 1 0.448 1 1 S 66.144 11.377 65.591 11.377 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    <path d="M 89 29.068 H 1 c -0.552 0 -1 -0.448 -1 -1 v -9.292 c 0 -5.182 4.216 -9.398 9.398 -9.398 H 16.1 c 0.552 0 1 0.448 1 1 s -0.448 1 -1 1 H 9.398 C 5.319 11.377 2 14.696 2 18.775 v 8.292 h 86 v -8.292 c 0 -4.08 -3.319 -7.398 -7.398 -7.398 h -6.702 c -0.553 0 -1 -0.448 -1 -1 s 0.447 -1 1 -1 h 6.702 c 5.183 0 9.398 4.216 9.398 9.398 v 9.292 C 90 28.62 89.553 29.068 89 29.068 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    <path d="M 48 89.081 H 9.398 C 4.216 89.081 0 84.865 0 79.683 V 28.068 c 0 -0.552 0.448 -1 1 -1 h 88 c 0.553 0 1 0.448 1 1 v 20.17 c 0 0.553 -0.447 1 -1 1 s -1 -0.447 -1 -1 v -19.17 H 2 v 50.615 c 0 4.079 3.319 7.398 7.398 7.398 H 48 c 0.553 0 1 0.447 1 1 S 48.553 89.081 48 89.081 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    <path d="M 22.75 52.791 H 17.76 c -2.06 0 -3.736 -1.676 -3.736 -3.735 v -4.989 c 0 -2.06 1.676 -3.736 3.736 -3.736 h 4.989 c 2.06 0 3.736 1.676 3.736 3.736 v 4.989 C 26.485 51.115 24.81 52.791 22.75 52.791 z M 17.76 42.33 c -0.957 0 -1.736 0.779 -1.736 1.736 v 4.989 c 0 0.957 0.779 1.735 1.736 1.735 h 4.989 c 0.957 0 1.736 -0.778 1.736 -1.735 v -4.989 c 0 -0.958 -0.779 -1.736 -1.736 -1.736 H 17.76 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    <path d="M 47.494 52.791 h -4.989 c -2.06 0 -3.736 -1.676 -3.736 -3.735 v -4.989 c 0 -2.06 1.676 -3.736 3.736 -3.736 h 4.989 c 2.061 0 3.736 1.676 3.736 3.736 v 4.989 C 51.23 51.115 49.555 52.791 47.494 52.791 z M 42.505 42.33 c -0.957 0 -1.736 0.779 -1.736 1.736 v 4.989 c 0 0.957 0.779 1.735 1.736 1.735 h 4.989 c 0.957 0 1.736 -0.778 1.736 -1.735 v -4.989 c 0 -0.958 -0.779 -1.736 -1.736 -1.736 H 42.505 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    <path d="M 22.75 74.309 H 17.76 c -2.06 0 -3.736 -1.676 -3.736 -3.735 v -4.989 c 0 -2.061 1.676 -3.736 3.736 -3.736 h 4.989 c 2.06 0 3.736 1.676 3.736 3.736 v 4.989 C 26.485 72.633 24.81 74.309 22.75 74.309 z M 17.76 63.848 c -0.957 0 -1.736 0.779 -1.736 1.736 v 4.989 c 0 0.957 0.779 1.735 1.736 1.735 h 4.989 c 0.957 0 1.736 -0.778 1.736 -1.735 v -4.989 c 0 -0.957 -0.779 -1.736 -1.736 -1.736 H 17.76 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    <path d="M 21.673 19.835 h -2.837 c -2.06 0 -3.736 -1.676 -3.736 -3.736 V 4.655 c 0 -2.06 1.676 -3.736 3.736 -3.736 h 2.837 c 2.06 0 3.736 1.676 3.736 3.736 v 11.444 C 25.41 18.159 23.733 19.835 21.673 19.835 z M 18.836 2.919 c -0.958 0 -1.736 0.779 -1.736 1.736 v 11.444 c 0 0.958 0.779 1.736 1.736 1.736 h 2.837 c 0.958 0 1.736 -0.779 1.736 -1.736 V 4.655 c 0 -0.957 -0.779 -1.736 -1.736 -1.736 H 18.836 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    <path d="M 71.164 19.835 h -2.838 c -2.06 0 -3.735 -1.676 -3.735 -3.736 V 4.655 c 0 -2.06 1.676 -3.736 3.735 -3.736 h 2.838 c 2.06 0 3.735 1.676 3.735 3.736 v 11.444 C 74.899 18.159 73.224 19.835 71.164 19.835 z M 68.326 2.919 c -0.957 0 -1.735 0.779 -1.735 1.736 v 11.444 c 0 0.958 0.778 1.736 1.735 1.736 h 2.838 c 0.957 0 1.735 -0.779 1.735 -1.736 V 4.655 c 0 -0.957 -0.778 -1.736 -1.735 -1.736 H 68.326 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    <path d="M 70.855 89.081 c -10.557 0 -19.146 -8.588 -19.146 -19.145 s 8.589 -19.146 19.146 -19.146 S 90 59.38 90 69.937 S 81.412 89.081 70.855 89.081 z M 70.855 52.791 c -9.454 0 -17.146 7.691 -17.146 17.146 c 0 9.453 7.691 17.145 17.146 17.145 C 80.309 87.081 88 79.39 88 69.937 C 88 60.482 80.309 52.791 70.855 52.791 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    <path d="M 77.951 77.676 c -0.247 0 -0.495 -0.091 -0.688 -0.275 l -7.096 -6.739 c -0.199 -0.188 -0.312 -0.45 -0.312 -0.725 v -9.865 c 0 -0.553 0.447 -1 1 -1 s 1 0.447 1 1 v 9.436 l 6.784 6.444 c 0.4 0.38 0.417 1.013 0.036 1.413 C 78.479 77.571 78.216 77.676 77.951 77.676 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                </g>
            </svg>
            </div>
            <div class="tab-title">
                <?php esc_html_e('CountDown ', 'ultimate-coming-soon'); ?>
            </div>
        </a>

        <!-- SEO -->
        <a href="?page=ucsm-general-settings-lite&tab=seo-lite"
            class="wpucs-nav-tab <?php echo esc_attr(($active_tab === 'seo-lite') ? 'wpucs-nav-tab-active' : ''); ?>"
            data-tab="tab-seo-lite">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="30" height="30" viewBox="0 0 256 256" xml:space="preserve">
                    <defs></defs>
                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                        <path d="M 80.644 67.765 L 69.069 56.19 c -1.439 -1.438 -3.7 -1.533 -5.266 -0.314 l -4.014 -4.014 c 3.395 -3.74 5.274 -8.526 5.274 -13.612 c 0 -5.422 -2.112 -10.52 -5.946 -14.354 s -8.931 -5.945 -14.353 -5.945 s -10.52 2.111 -14.354 5.945 s -5.945 8.931 -5.945 14.354 c 0 5.422 2.111 10.519 5.945 14.353 s 8.932 5.946 14.354 5.946 c 5.086 0 9.872 -1.879 13.612 -5.274 l 4.013 4.013 c -0.543 0.696 -0.852 1.541 -0.852 2.441 c 0 1.07 0.414 2.074 1.167 2.826 l 11.574 11.575 c 0.779 0.779 1.803 1.169 2.826 1.169 c 1.022 0 2.046 -0.39 2.825 -1.169 l 0.715 -0.715 C 82.202 71.858 82.202 69.323 80.644 67.765 z M 31.823 51.189 c -3.456 -3.456 -5.359 -8.051 -5.359 -12.939 s 1.903 -9.483 5.359 -12.939 c 3.457 -3.456 8.052 -5.359 12.94 -5.359 s 9.483 1.903 12.939 5.359 s 5.36 8.052 5.36 12.939 s -1.904 9.483 -5.36 12.939 s -8.051 5.36 -12.939 5.36 S 35.28 54.646 31.823 51.189 z M 79.229 72.003 l -0.715 0.715 c -0.75 0.751 -2.073 0.749 -2.823 0 L 64.117 61.143 c -0.375 -0.375 -0.581 -0.876 -0.581 -1.412 c 0 -0.535 0.206 -1.036 0.581 -1.411 l 0.715 -0.715 c 0.375 -0.375 0.876 -0.581 1.411 -0.581 c 0.536 0 1.037 0.206 1.412 0.581 l 11.574 11.574 C 80.008 69.957 80.008 71.225 79.229 72.003 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path d="M 31.425 45.3 c -0.303 0 -0.602 -0.137 -0.798 -0.396 c -0.333 -0.44 -0.247 -1.068 0.194 -1.401 l 18.395 -13.92 c 0.226 -0.171 0.516 -0.239 0.79 -0.185 c 0.277 0.053 0.52 0.22 0.667 0.461 l 5.851 9.589 l 2.155 -1.549 c 0.449 -0.324 1.074 -0.22 1.396 0.229 c 0.322 0.448 0.22 1.073 -0.229 1.396 l -3.031 2.178 c -0.227 0.162 -0.512 0.225 -0.782 0.168 c -0.273 -0.055 -0.511 -0.222 -0.655 -0.459 l -5.837 -9.566 L 32.027 45.097 C 31.847 45.234 31.635 45.3 31.425 45.3 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path d="M 85.396 10.052 H 4.604 C 2.065 10.052 0 12.117 0 14.655 v 46.655 c 0 2.538 2.065 4.604 4.604 4.604 h 31.272 v 12.034 H 23.189 c -0.552 0 -1 0.447 -1 1 s 0.448 1 1 1 h 43.621 c 0.553 0 1 -0.447 1 -1 s -0.447 -1 -1 -1 H 54.124 V 65.914 h 4.285 c 0.553 0 1 -0.447 1 -1 s -0.447 -1 -1 -1 H 4.604 C 3.168 63.914 2 62.746 2 61.311 v -8.911 l 10.492 -7.789 l 5.804 9.5 c 0.147 0.241 0.39 0.408 0.667 0.461 c 0.062 0.012 0.124 0.018 0.186 0.018 c 0.216 0 0.428 -0.07 0.604 -0.202 l 4.04 -3.058 c 0.44 -0.334 0.527 -0.961 0.194 -1.401 s -0.96 -0.526 -1.401 -0.194 l -3.159 2.392 l -5.799 -9.491 c -0.146 -0.24 -0.387 -0.407 -0.663 -0.46 c -0.276 -0.056 -0.562 0.011 -0.787 0.179 L 2 49.909 V 14.655 c 0 -1.436 1.168 -2.604 2.604 -2.604 h 80.793 c 1.436 0 2.604 1.168 2.604 2.604 v 2.177 L 67.549 31.525 c -0.448 0.322 -0.551 0.947 -0.229 1.396 c 0.195 0.272 0.502 0.417 0.813 0.417 c 0.202 0 0.406 -0.061 0.582 -0.188 L 88 19.295 v 42.016 c 0 1.436 -1.168 2.604 -2.604 2.604 h -1.747 c -0.553 0 -1 0.447 -1 1 s 0.447 1 1 1 h 1.747 c 2.538 0 4.604 -2.065 4.604 -4.604 V 14.655 C 90 12.117 87.935 10.052 85.396 10.052 z M 52.124 77.948 H 37.876 V 65.914 h 14.248 V 77.948 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    </g>
                </svg>
            </div>
            <div class="tab-title">
                <?php esc_html_e('SEO ', 'ultimate-coming-soon'); ?>
            </div>
        </a>

        <!-- Translation -->
        <a href="?page=ucsm-general-settings-lite&tab=translation-lite"
            class="wpucs-nav-tab <?php echo esc_attr(($active_tab === 'translation-lite') ? 'wpucs-nav-tab-active' : ''); ?>"
            data-tab="tab-translation-lite">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="30" height="30" viewBox="0 0 256 256" xml:space="preserve">
                    <defs></defs>
                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                        <path d="M 25.261 33.117 c 2.858 -3.93 5.295 -8.178 6.717 -11.911 h 9.172 c 0.552 0 1 -0.448 1 -1 s -0.448 -1 -1 -1 H 27.194 v -2.916 c 0 -0.552 -0.448 -1 -1 -1 s -1 0.448 -1 1 v 2.916 H 11.777 c -0.552 0 -1 0.448 -1 1 s 0.448 1 1 1 h 18.059 c -1.334 3.245 -3.465 6.91 -5.926 10.346 c -1.757 -2.169 -3.22 -4.526 -4.328 -7.015 c -0.225 -0.505 -0.815 -0.73 -1.32 -0.507 c -0.504 0.225 -0.731 0.816 -0.507 1.32 c 1.246 2.8 2.92 5.437 4.933 7.849 c -2.417 3.162 -5.061 6.029 -7.545 8.04 c -0.429 0.348 -0.495 0.978 -0.148 1.407 c 0.198 0.244 0.487 0.371 0.778 0.371 c 0.221 0 0.444 -0.073 0.629 -0.223 c 2.546 -2.062 5.204 -4.911 7.644 -8.059 c 1.341 1.431 2.801 2.773 4.386 3.991 c 0.182 0.14 0.396 0.207 0.609 0.207 c 0.3 0 0.597 -0.134 0.793 -0.391 c 0.336 -0.438 0.254 -1.066 -0.184 -1.402 C 28.056 35.917 26.591 34.565 25.261 33.117 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path d="M 63.49 33.603 c -4.796 0 -8.697 3.901 -8.697 8.697 v 17.661 c 0 0.553 0.447 1 1 1 s 1 -0.447 1 -1 V 49.084 h 13.394 v 10.877 c 0 0.553 0.447 1 1 1 s 1 -0.447 1 -1 V 42.3 C 72.187 37.504 68.285 33.603 63.49 33.603 z M 70.187 47.084 H 56.793 V 42.3 c 0 -3.692 3.004 -6.697 6.697 -6.697 c 3.692 0 6.696 3.004 6.696 6.697 V 47.084 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path d="M 80.959 26.7 H 53.02 v -8.92 c 0 -4.985 -4.056 -9.042 -9.041 -9.042 H 9.041 C 4.056 8.738 0 12.794 0 17.779 v 24.372 c 0 4.986 4.056 9.042 9.041 9.042 L 9.058 62.3 c 0 0.404 0.244 0.77 0.617 0.924 c 0.124 0.052 0.254 0.076 0.383 0.076 c 0.26 0 0.516 -0.102 0.707 -0.293 L 22.58 51.192 h 14.4 v 8.921 c 0 4.985 4.056 9.041 9.042 9.041 H 67.42 l 11.815 11.814 c 0.191 0.191 0.447 0.293 0.707 0.293 c 0.129 0 0.259 -0.024 0.383 -0.076 c 0.374 -0.154 0.617 -0.52 0.617 -0.924 V 69.154 h 0.017 c 4.985 0 9.041 -4.056 9.041 -9.041 V 35.741 C 90 30.756 85.944 26.7 80.959 26.7 z M 22.166 49.192 c -0.265 0 -0.52 0.105 -0.707 0.293 l -10.401 10.4 v -9.693 c 0 -0.553 -0.448 -1 -1 -1 H 9.041 C 5.159 49.192 2 46.033 2 42.151 V 17.779 c 0 -3.883 3.159 -7.042 7.041 -7.042 h 34.938 c 3.883 0 7.041 3.159 7.041 7.042 v 8.92 h -4.998 c -4.985 0 -9.042 4.056 -9.042 9.042 v 13.451 H 22.166 z M 88 60.113 c 0 3.883 -3.158 7.041 -7.041 7.041 h -1.017 c -0.553 0 -1 0.447 -1 1 v 9.693 l -10.401 -10.4 c -0.188 -0.188 -0.441 -0.293 -0.707 -0.293 H 46.021 c -3.883 0 -7.042 -3.158 -7.042 -7.041 V 35.741 c 0 -3.883 3.159 -7.042 7.042 -7.042 h 34.938 c 3.883 0 7.041 3.159 7.041 7.042 V 60.113 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #A3ACB9; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    </g>
                </svg>
            </div>
            <div class="tab-title">
                <?php esc_html_e('Translation ', 'ultimate-coming-soon'); ?>
            </div>
        </a>
    </div>

    <!-- Backend Main features tab-1(dashboard) -->
    <div class="wpucs-tab-content-lite" id="tab-dashboard-lite"
        <?php echo ($active_tab === 'dashboard-lite') ? 'style="display: block;"' : ''; ?>>
        <?php require_once esc_attr(UCSM_PLUGIN_DIR_LITE . 'backend/tabs-content/dashboard/dashboard.php'); ?>
    </div>

    <div class="wpucs-tab-content-lite" id="tab-seo-lite"
        <?php echo ($active_tab === 'seo-lite') ? 'style="display: block;"' : ''; ?>>
        <?php require_once esc_attr(UCSM_PLUGIN_DIR_LITE . 'backend/tabs-content/seo/seo.php'); ?>
    </div>

    <div class="wpucs-tab-content-lite" id="tab-content-lite"
        <?php echo ($active_tab === 'content-lite') ? 'style="display: block;"' : ''; ?>>
        <?php require_once esc_attr(UCSM_PLUGIN_DIR_LITE . 'backend/tabs-content/content/content.php'); ?>
    </div>

    <div class="wpucs-tab-content-lite" id="tab-design-lite"
        <?php echo ($active_tab === 'design-lite') ? 'style="display: block;"' : ''; ?>>
        <?php require_once esc_attr(UCSM_PLUGIN_DIR_LITE . 'backend/tabs-content/design/design.php'); ?>
    </div>

    <div class="wpucs-tab-content-lite" id="tab-social-lite"
        <?php echo ($active_tab === 'social-lite') ? 'style="display: block;"' : ''; ?>>
        <?php require_once esc_attr(UCSM_PLUGIN_DIR_LITE . 'backend/tabs-content/social/social.php'); ?>
    </div>

    <div class="wpucs-tab-content-lite" id="tab-contact-lite"
        <?php echo ($active_tab === 'contact_info-lite') ? 'style="display: block;"' : ''; ?>>
        <?php require_once esc_attr(UCSM_PLUGIN_DIR_LITE . 'backend/tabs-content/contact/contact.php'); ?>
    </div>

    <div class="wpucs-tab-content-lite" id="tab-countdown-lite"
        <?php echo ($active_tab === 'countdown_timer-lite') ? 'style="display: block;"' : ''; ?>>
        <?php require_once esc_attr(UCSM_PLUGIN_DIR_LITE . 'backend/tabs-content/countdown/countdown-setting.php'); ?>
    </div>

    <div class="wpucs-tab-content-lite" id="tab-newsletter-lite"
        <?php echo ($active_tab === 'newsletter-lite') ? 'style="display: block;"' : ''; ?>>
        <?php require_once esc_attr(UCSM_PLUGIN_DIR_LITE . 'backend/tabs-content/newsletter/newsletter.php'); ?>
    </div>

    <div class="wpucs-tab-content-lite" id="tab-templates-lite"
        <?php echo ($active_tab === 'templates-lite') ? 'style="display: block;"' : ''; ?>>
        <?php require_once esc_attr(UCSM_PLUGIN_DIR_LITE . 'backend/tabs-content/templates/backend-part/templates-menu.php'); ?>
    </div>

    <div class="wpucs-tab-content-lite" id="tab-translation-lite"
        <?php echo ($active_tab === 'translation-lite') ? 'style="display: block;"' : ''; ?>>
        <?php require_once esc_attr(UCSM_PLUGIN_DIR_LITE . 'backend/tabs-content/translation/translation.php'); ?>
    </div>
</div>
<!-- Add this JavaScript code in your HTML file -->
