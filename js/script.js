
$(document).ready(function () {
    $('a.lv-item').click(function(e) {

        $('.lv-item').removeClass('active');

        if (!$(this).hasClass('active')) {
            $(this).addClass('active');
        }
        e.preventDefault();
    });
});


$(document).ready(function(){
    $("#filter").keyup(function(){
 
        // Retrieve the input field text and reset the count to zero
        var filter = $(this).val(), count = 0;
 
        // Loop through the comment list
        $("#tab-content-chan .lv-title").each(function(){
 
            // If the list item does not contain the text phrase fade it out
            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).closest(".lv-item").fadeOut();
 
            // Show the list item if the phrase matches and increase the count by 1
            } else {
                $(this).closest(".lv-item").show();
                count++;
            }
        });
 
    });
});

