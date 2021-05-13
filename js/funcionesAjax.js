
function ajax() {
    var req = new XMLHttpRequest();

    req.onreadystatechange = function () {
        
        if (req.readyState == 4 && req.status == 200) {
            console.log(req);
            document.getElementById('chat').innerHTML = req.responseText;
            console.log(req);
        }
    }
    req.open('GET', 'chat.php', true);
    req.send();
}
//Linea que se refrezca automaticamente cada 1seg
setInterval(function () { ajax(); }, 1000);

document.addEventListener("DOMContentLoaded", function (event) {
    ajax();
})

