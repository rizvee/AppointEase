$(document).ready(function() {
    // Form Validation
    $('#example-form').validate({
        rules: {
            fname: 'required',
            lname: 'required',
            pnumber: {
                required: true,
                digits: true
            },
            email: {
                required: true,
                email: true
            },
            // Add more validation rules as needed
        },
        messages: {
            fname: 'Please enter your first name',
            lname: 'Please enter your last name',
            pnumber: {
                required: 'Please enter your phone number',
                digits: 'Please enter a valid phone number'
            },
            email: {
                required: 'Please enter your email address',
                email: 'Please enter a valid email address'
            },
            // Add more custom messages as needed
        },
        // Add any additional settings or callbacks here
    });

    // Datepicker Initialization
    $('.datepicker-here').datepicker({
        language: 'en', // Set desired language
        dateFormat: 'dd M yyyy', // Set date format
        // Add more options as needed
    });

    // Select2 Initialization
    $('#category, #service, #consultant').select2({
        // Add any desired options or callbacks
    });

    // Toggle Payment Options
    $('input[name="pay"]').change(function() {
        var paymentMethod = $(this).val();
        $('.box').hide();
        $('#' + paymentMethod).show();
    });

    // Custom Checkbox Styling
    $('.custom-control-input').change(function() {
        var isChecked = $(this).prop('checked');
        if (isChecked) {
            $(this).closest('.custom-control').addClass('checked');
        } else {
            $(this).closest('.custom-control').removeClass('checked');
        }
    });
});
