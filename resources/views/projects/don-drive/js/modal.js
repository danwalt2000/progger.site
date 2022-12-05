var modal = document.getElementById("middle-modal-2");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
var closeModalWin = document.getElementById('closeModalWin');
var showModalWin = function() {

    modal.style.display = "block";
}



window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

