$(document).ready(function() {
    
    $(".table").hide();
        
    if (sessionStorage.getItem("betrayalApp_mobile_viewing") === null) {
        
    } else {
        var charToView = sessionStorage.getItem("betrayalApp_mobile_viewing");
        $('#charTable' + charToView).show();
        
        if (charToView === sessionStorage.getItem("currentUser")) {
            
        } else {
            $(".btn-lg").prop("disabled",true);
        }
    }
    
    

    
    $(".viewGameChar").click(function(e) {
        
        var charID = $(this).data("id");
        sessionStorage.setItem("betrayalApp_mobile_viewing", charID);
        location.reload();
        
    });
    
    
    $( ".claimModal" ).submit(function( event ) {
        
        var charID = $(this).find('input[name=charID]').val();
        
        sessionStorage.setItem("betrayalApp_mobile_viewing", charID);
        sessionStorage.setItem("currentUser", charID);
         
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
                if ($.trim(data) === "1") {
                    alert("Characters Cannot Die Until After The Haunt Begins");
                } else {
                    location.reload();
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert("Attribute Move Failed");
            }
        });
        e.preventDefault();

    });
    
    
});