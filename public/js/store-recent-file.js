var xhttp = new XMLHttpRequest();

function sendFile(filetitle, version, route) {
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
        }
    };

    var fileData = '{"title"' + ' : ' + '"'+ filetitle + '"' + ',' + '"version"' + ' : ' + '"' + version + '"' + '}';

    xhttp.open("POST", route, true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("fileData=" + fileData);
}