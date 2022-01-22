function resheto(){
    let n =+edge.value;
    let array = [];
    limit = Math.sqrt(n);
    result = [];

    for (let i = 2; i < n; i++) {
        array.push(i);
    }
    for (let i = 2; i <= limit; i++) {
        if (array[i]) {
            
            for (let j = i * i; j < n; j += i) {
                array[j] = false;
                
            }
        }
    }
    for (let i = 2; i < n; i++) {
        if(array[i]) {
            result.push(i);
        }
    }
    let str = ' ';
    for(let k = 0; k < result.length; k++) {
        if (result[k]!==undefined){
            str +=+result[k]+'<br>';
        } 

        outplace.innerHTML = 'Prime nums:' + '<br>'+ `${str}`;
    }

    
}
