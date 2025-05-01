
$(document).ready(function() {
    $(".box-content").each(function(index) {
        $(this).delay(index * 500).queue(function(next) {
            $(this).addClass("animate__animated animate__fadeOut");
            next();
        });
    });
});



