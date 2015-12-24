$(document).ready(function () {

    $(".addActiveChar").click(function (e) {

        $id = e.target.id;

        $.ajax(
                {
                    url: "ajax/add_active_character.php",
                    type: "POST",
                    data: {
                        id: $id
                    },
                    success: function (data, textStatus, jqXHR)
                    {
                        location.reload();
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert("Form Did Not Process");
                    }
                });
        e.preventDefault();
    });

    $("#resetChar").click(function (e) {

        $.ajax(
                {
                    url: "ajax/reset_characters.php",
                    type: "POST",
                    data: {
                    },
                    success: function (data, textStatus, jqXHR)
                    {
                        location.reload();
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert("Form Did Not Process");
                    }
                });
        e.preventDefault();
    });

});