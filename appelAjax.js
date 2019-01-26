function ajaxRequest() {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {

        if (this.readyState == 4 && this.status == 200) {

            console.log("ca va");

        }else{
            console.log("Error: returned status code " + xhttp.status + " " + xhttp.statusText);
        }

    };

    xhttp.open("GET", "database.php?pseudo=" + document.getElementById("pseudo").value + "&message=" + document.getElementById("message").value, true);

    xhttp.send();


}

document.getElementById('envoyez').addEventListener('click', ajaxRequest);


function retourAjax() {


    setTimeout( function() {


        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function () {

            if (this.readyState == 4 && this.status == 200) {

                var obj = JSON.parse(this.responseText);
                console.log(obj.pseudo);
                var nDiv = document.createElement('div');
                nDiv.innerHTML = obj.pseudo + " dit : " + obj.message;
                document.body.appendChild(nDiv);

            }

        };

        xhttp.open("GET", "affichageMessages.php", true);

        xhttp.send();

        retourAjax();

    }, 2000)

}

//document.getElementById('recevoir').addEventListener('click', retourAjax);

window.onload = retourAjax();
