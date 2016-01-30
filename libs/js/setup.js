$(document).ready(function() {
    
    if($("#setupPage").length > 0) {
    $('#setupNav').addClass("active");
}
    
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
        
        window.location.href = "game.php";
        location.reload();

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
    
     $(".removeCharGm").click(function(e) {
         
         var charID = $(this).data("id");

        $.ajax({
            url: "ajax/remove_char_gm.php",
            type: "POST",
            data: { charID : charID },
            success: function(data, textStatus, jqXHR) {
                location.reload();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert("Form Did Not Process");
            }
        });
        e.preventDefault();

    });
    
    $("#hauntCheck").change(function(e) {
        
        var hauntStatus; 
        
        if(this.checked) {
            hauntStatus = "Y";
        } else {
            hauntStatus = "N";
        }
        
        
        $.ajax({
            url: "ajax/set_haunt_status.php",
            type: "POST",
            data: { hauntStatus : hauntStatus },
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