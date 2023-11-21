$(document).ready(function() {
    $('#chat-form').submit(function(event) {
        event.preventDefault();

        var message = $('input[name="message"]').val();

        $('input[name="message"]').val('');

        var newMessage = '<div class="message sent"><p>' + message + '</p></div>';
        $('.chat-messages').append(newMessage);

        $.ajax({
            type: "POST",
            url: "chat.inc.php",
            data: {message: message},
            success: function(response) {
                console.log(response);
            }
        });
    });
});
