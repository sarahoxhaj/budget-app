<script>
    $(document).ready(function() {
        var registerForm = $("form[name='register-form']").validate({
            rules: {

                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 5,
                    maxlength: 12,
                    passwordFormatCheck: true

                },

            },

            messages: {


                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long",
                    maxlength: "Your password must be less than 12 characters long"
                },
                email: "Please enter a valid email address"
            },
        })

        $.validator.addMethod("passwordFormatCheck", function(value, element) {
            return this.optional(element) || /^(?=.*\d)(?=.*[A-Z])(?=.*\W).*$/i.test(value);
        }, 'Password must contain 1 capital letter,1 numerical and 1 special character')

        //age >18



    });
</script>