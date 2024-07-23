window.onload = function() {
    const params = new URLSearchParams(window.location.search);
    const error = params.get('error');
    const registro = params.get('registro');
    if (error) {
        document.getElementById('message').innerText = error;
        document.getElementById('message').style.color = "red";
    }
    if(registro){
        document.getElementById('message').innerText = registro;
        document.getElementById('message').style.color = "greenyellow";
    }
}