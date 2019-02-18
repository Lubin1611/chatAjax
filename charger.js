function charger(){

    setTimeout( function(){

        var premierID = $('#tchat p:first').attr('id'); // on récupère l'id le plus récent

        $.ajax({
            url : "RecupMessages.php?id=" + premierID, // on passe l'id le plus récent au fichier de chargement
            type : "GET",
            success : function(html){
                $('#tchat').prepend(html);
            }
        });

        charger();

    }, 2000);

}

charger();