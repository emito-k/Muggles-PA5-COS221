// this will send the request
let data = null;

function sendRequest(method, url) {
    let xhr = new XMLHttpRequest();
    
    xhr.responseType = "json";
    
    xhr.onload = function () {
        data = xhr.response;
    };
    
    xhr.open(method, url);
    xhr.send(data);
}

// this will handle the request
function ajax() {

}

