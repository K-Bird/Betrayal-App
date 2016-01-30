$(document).ready(function() {
    
    if($("#gamePage").length > 0) {
    $('#gameNav').addClass("active");
    }
    
    $(".table").hide();
    var charToView = sessionStorage.getItem("betrayalApp_mobile_viewing");
    $('.deadLabel').hide();
        
    if (sessionStorage.getItem("betrayalApp_mobile_viewing") === null) {
        
    } else {
       
        $('#charTable' + charToView).show();
        $('#charDead' + charToView).show();
        
        if (charToView === sessionStorage.getItem("currentUser")) {
            
        } else {
            $(".btn-lg").prop("disabled",true);
            $(".btn-primary").prop("disabled", true);
            $(".btn-default").prop("disabled", true);
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
    
     $(".attrBtn").click(function(e) {
         
         var attrNum = $(this).data("attrnum");
         var attr = $(this).data("attr");
         var charID = $(this).data("charid");

        $.ajax({
                url: "ajax/select_attr_btn.php",
                type: "POST",
                data: {charID : charID, attrNum : attrNum, attr : attr},
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
    
    $(".deadBtn").click(function(e) {
        
        var attr = $(this).data('attr');
        var attrNum = $(this).data('attrnum');
        var charID = $(this).data('charid');
        
        $('#deadCharacter' + charID + ' form.deadForm input[name="attr"]').val(attr);
        $('#deadCharacter' + charID + ' form.deadForm input[name="attrNum"]').val(attrNum);
        
        $('#deadCharacter' + charID).modal('show');
        
    });
        
        
    $(".deadForm").submit(function(e) {
        
        var attr = $('.deadform input[name="attr"]').val();
        var attrNum = $('.deadform input[name="attrNum"]').val();
        var charID = $('.deadform input[name="charID"]').val();
        
        $.ajax({
                url: "ajax/select_attr_btn.php",
                type: "POST",
                data: {charID : charID, attrNum : attrNum, attr : attr},
                success: function(data, textStatus, jqXHR) {
                    if ($.trim(data) === "1") {
                        alert("Characters Cannot Die Until After The Haunt Begins");
                        location.reload();
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