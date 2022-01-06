function dark(){
    document.getElementById("darklink").href=  "./assets/darkstyle.css";
    theme.innerHTML = '<button onclick="light()" type="button" class="btn btn-outline-light">Світла тема</button>';
    document.getElementById("webinterestlink").href=  "webinterestdark.html";
    
}
function light(){
    document.getElementById("darklink").href=  " ";
    theme.innerHTML = ' <button onclick="dark()" type="button" class="btn btn-outline-dark">Темна тема</button>';
    document.getElementById("webinterestlink").href=  "webinterest.html";
}
