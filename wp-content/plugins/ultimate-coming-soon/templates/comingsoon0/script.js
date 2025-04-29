(function ($) {
        "use strict";

        $(window).on("load", function () {
            updateCountdown();
            setInterval(updateCountdown, 1000);
        });

        function updateCountdown() {
            // Get the countdown date from the HTML element
            var countdownDateElement = document.getElementById("countdown_date");
            var countdownDate = countdownDateElement ? countdownDateElement.textContent.trim() : "";

            // Check if countdownDate is empty or invalid
            if (!countdownDate) {
                return;
            }

            // Set the countdown target time
            var targetDate = new Date(countdownDate).getTime();
            var now = new Date().getTime();
            var timeDifference = targetDate - now;

            // Get the countdown section element
            var countdownSection = document.getElementById("countdown-section");

            // Check if timeDifference is less than 0
            if (timeDifference < 0) {
                // If timeDifference is less than 0, hide the countdown section
                countdownSection.style.display = "none";
            }

            const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

            document.getElementById("days").textContent = days < 10 ? `0${days}` : days;
            document.getElementById("hours").textContent = hours < 10 ? `0${hours}` : hours;
            document.getElementById("minutes").textContent = minutes < 10 ? `0${minutes}` : minutes;
            document.getElementById("seconds").textContent = seconds < 10 ? `0${seconds}` : seconds;
        }

    })(jQuery);

