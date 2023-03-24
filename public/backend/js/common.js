if( $('.sweetalert-basic').length ) {
    $('.sweetalert-basic').on('click', function(){
        swal({
            title: "Here's the title!",
            text: "Here's the Lorem ipsum text!"
        });
    });
}

// Success
if( $('.sweetalert-success').length ) {
    $('.sweetalert-success').on('click', function(){
        swal({
            title: "Good job!",
            text: "You clicked the button!", 
            icon: "success"
        });
    });
}

// Warning
if( $('.sweetalert-warning').length ) {
    $('.sweetalert-warning').on('click', function(){
        swal({
            title: "Are you sure?",
            text: "You won't be able to revert this!", 
            icon: "warning",
            buttons: {
                confirm: {
                    text: "Yes Delete It",
                    value: true,
                    visible: true,
                    className: "button button-warning",
                    closeModal: true
                },
                cancel: {
                    text: "Cancel",
                    value: true,
                    visible: true,
                    className: "button button-primary",
                    closeModal: true,
                }
            }
        });
    });
}

// Error
if( $('.sweetalert-error').length ) {
    $('.sweetalert-error').on('click', function(){
        swal({
            title: "Something went wrong",
            text: "Please try again later", 
            icon: "error",
            button: {
                text: "Go back",
                value: true,
                visible: true,
                className: "button button-danger",
                closeModal: true,
            }
        });
    });
}

// Info
if( $('.sweetalert-info').length ) {
    $('.sweetalert-info').on('click', function(){
        swal({
            title: "Under Construction",
            text: "Come back later", 
            icon: "info",
            button: {
                className: "button button-info",
            }
        });
    });
}

// Multiple
if( $('.sweetalert-multiple').length ) {
    $('.sweetalert-multiple').on('click', function(){
        swal({
            title: "Are you sure?",
            text: "You won't be able to revert this!", 
            icon: "warning",
            buttons: {
                cancel: {
                    text: "Cancel",
                    value: true,
                    visible: true,
                    className: "button button-primary",
                    closeModal: true,
                },
                confirm: {
                    text: "Yes Delete It",
                    value: true,
                    visible: true,
                    className: "button button-danger",
                    closeModal: true
                }
            },
        }).then((willDelete) => {
            if (willDelete) {
                swal("Poof! Your imaginary file has been deleted!", {
                    icon: "success",
                    button: {
                        className: "button button-primary"
                    }
                });
            } else {
                swal({
                    text: "Your imaginary file is safe!",
                    button: {
                        className: "button button-primary"
                    }
                });
            }
        });
    });
}
