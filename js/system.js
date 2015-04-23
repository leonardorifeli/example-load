$(document).ready(function(){

    $("#select").change(function(){
        var value = $(this).val();

        $("#returned").load('check-system.php', {
            'value': value
        });

        return false;
    });

    $("#input-name").blur(function(){
        var value = $(this).val();

        $("#returned-text").load('check-system.php', {
            'value': value,
            'type': 1
        });

        return false;
    });

});
