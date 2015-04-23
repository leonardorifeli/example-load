$(document).ready(function(){

    $("#select").change(function(){
        var value = $(this).val();

        $("#returned").load('check-system.php', {
            'value': value
        });

        return false;
    });

});
