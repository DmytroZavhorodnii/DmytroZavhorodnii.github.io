
let secret = Math.floor(Math.random()*100) + 1;
console.log(secret);
var i = 1;


  
function baton(){
  let variant = +ans.value;
      if(i>=10){
        outplace.innerHTML = '<div class="alert alert-danger" role="alert">Нажаль ти вичерпав свої спроби... Загадане число: <span id="right"></span></div>'
        right.innerHTML = secret;
      }
      else if((variant==secret)){
      outplace.innerHTML = '<div class="alert alert-success" role="alert">Вітаю! Ти переміг! Я загадав: <span id="right"> </span></div>'
      right.innerHTML = secret;
    }else if ( variant > secret){
      outplace.innerHTML = '<div class="alert alert-danger" role="alert"><span id="right"> </span> - задуже. Залишилось <span id="sprob"> </span> спроб </div>'
      right.innerHTML = variant;
      sprob.innerHTML = 10-i;

    }else{
      outplace.innerHTML = '<div class="alert alert-warning" role="alert"><span id="right"> </span> - замало. Залишилось <span id="sprob"> </span> спроб  </div>'
      right.innerHTML = variant;
      sprob.innerHTML = 10-i;
    }
    i++;
    console.log(i)
    return i;
}






