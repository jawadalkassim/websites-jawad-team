<!--
<div id="cookie-consent" class="sticky bottom-0 p-4 bg-gray-900 text-gray-300 flex flex-col md:flex-row items-center hidden">
    <div class="grow-0 font-light text-sm sm:text-md leading-5 sm:leading-6">
        We use pixels and other tracking technologies to collect your information and actions to enhance site navigation, personalize content, analyze site usage, and assist in marketing efforts. We share this information with social media, advertising, and analytics partners. If you do not make a selection, you agree to our use of these technologies. <a class="iframe text-blue-200 font-semibold" href="/footer/privacy-policy.php">Privacy Policy</a>
    </div>
    <div class="flex-none md:pl-12 pt-4 md:pt-0 flex flex-row mt-2 md:mt-0 w-full md:w-fit">
        <button type="button" id="decline-cookies" class="bg-gray-300 text-gray-700 text-sm md:left-lg font-semibold px-2 md:px-6 py-2 md:py-3 grow">Decline All Options</button>
        <button type="button" id="accept-cookies" class="bg-blue-500 text-white font-semibold px-2 md:px-6 py-2 md:py-3 ml-4 grow">Accept Cookies</button>
    </div>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const cookieBanner = document.getElementById("cookie-consent");
    const acceptButton = document.getElementById("accept-cookies");
    const declineButton = document.getElementById("decline-cookies");

    // Check if the user has already accepted cookies
    if (localStorage.getItem("cookieAccepted") === "true") {
        cookieBanner.classList.add("hidden");
    } else {
        cookieBanner.classList.remove("hidden");
    }

    acceptButton.addEventListener("click", function () {
        localStorage.setItem("cookieAccepted", "true");
        cookieBanner.style.display = "none";
    });

    declineButton.addEventListener("click", function () {
        alert("Optional cookies declined. You can customize your preferences in the settings.");
        localStorage.setItem("cookieAccepted", "true"); // Mark as accepted for demonstration purposes
        cookieBanner.classList.add("hidden");
    });
});
</script>
-->