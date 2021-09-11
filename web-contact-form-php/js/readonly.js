$(document).ready(function() {

    $('form').attr('action', '#'); // Set form action to null to be updated later via javascript.
    $('#page-description').text("Please review the entered data and submit."); //Change page-description to match new context.
    $("#page-description").removeClass('text-secondary').addClass('text-warning');

    //Make form inputs readonly and show Edit or submit button.
    $(".form-control").prop("readonly", true); 
    $("#edit-btn").removeClass('d-none');
    $("#next-btn").addClass('d-none');
    $('#submit-btn').removeClass('d-none');
    
    //Add eventlistners to buttons to load approrpiate action file. 
    $("#edit-btn").click(function() {
        $('form').prop('action', 'index.php');
    });
    $("#submit-btn").click(function() {
            //Proceed to submit data
            $('form').prop('action', 'submit.php');
        }
    );
    
});
