$(document).ready( function() {
    let $htmlContent = "Your message has been submitted successfully.<br/>We will get back to you shortly.";
    $('#page-description').html($htmlContent).addClass('text-success').addClass("p-5");
    $('#return-home').click(function() {
        window.location.href ="index.php";
        });
});