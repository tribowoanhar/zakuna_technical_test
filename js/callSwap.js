$("#swapForm").submit(function() {
    $.ajax({
        data: $(this).serialize(), 
        type: $(this).attr("method"),
        url: $(this).attr("action"),
        success: function(response) {
			$("#labelResult").html("Result");
            $("#contentResult").html(response);
        }
    });
    return false;
});