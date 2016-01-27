$(document).ready(function() {

    $(".addActiveChar").click(function(e) {

        var id = e.target.id;

        $.ajax({
            url: "ajax/add_active_character.php",
            type: "POST",
            data: {
                id: id
            },
            success: function(data, textStatus, jqXHR) {
                location.reload();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert("Form Did Not Process");
            }
        });
        e.preventDefault();
    });

    $("#resetChar").click(function(e) {

        $.ajax({
            url: "ajax/reset_characters.php",
            type: "POST",
            data: {},
            success: function(data, textStatus, jqXHR) {
                location.reload();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert("Form Did Not Process");
            }
        });
        e.preventDefault();
    });

    $("#startGameBtn").click(function(e) {
        $.ajax({
            url: "ajax/start_game.php",
            type: "POST",
            data: {},
            success: function(data, textStatus, jqXHR) {
                location.reload();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert("Form Did Not Process");
            }
        });
        e.preventDefault();

    });

    $("#newGameBtn").click(function(e) {
        $.ajax({
            url: "ajax/new_game.php",
            type: "POST",
            data: {},
            success: function(data, textStatus, jqXHR) {
                location.reload();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert("Form Did Not Process");
            }
        });
        e.preventDefault();

    });
    
     $(".attrChg").click(function(e) {
         
         var change = $(this).data("chg");
         var charID = $(this).data("id");
         var attr = $(this).data("attr");

        $.ajax({
            url: "ajax/move_attr.php",
            type: "POST",
            data: {change : change, charID : charID, attr : attr},
            success: function(data, textStatus, jqXHR) {
                location.reload();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert("Form Did Not Process");
            }
        });
        e.preventDefault();

    });

});