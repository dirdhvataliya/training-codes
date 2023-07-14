$(document).ready(function() {
    // Validate the form
    $("#feedback").validate({
    rules: {
    name: {
    required: true,
    },
    email: {
    required: true,
    email: true,
    },
    feedback: {
    required: true,
    },
    },
    messages: {
    name: {
    required: "Please enter your name.",
    },
    email: {
    required: "Please enter your email address.",
    email: "Please enter a valid email address.",
    },
    feedback: {
    required: "Please enter your feedback.",
    },
    },
    });
    });
    