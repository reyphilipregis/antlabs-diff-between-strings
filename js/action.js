$(document).ready(function() {
    $(".tbox").keyup(function() {
        if ($('#string1').val() != '' && $('#string2').val() != '') {
            $("#div-display-info").addClass("d-none");

            $.post("execute.php", {
                string1: $('#string1').val(),
                string2: $('#string2').val()
            },
            function (data, status) {
                $("#div-display").removeClass("d-none");
                $("#output").html(data);
            });
        } else {
            $("#div-display").addClass("d-none");

            $("#div-display-info").removeClass("d-none");
            $("#div-display-info").addClass("alert-info");

            $("#output-info").html('Waiting for both fields to have an input.');
        }
    });
});
