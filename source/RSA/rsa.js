
function rsa(){
    const p = +prime1.value;
    const q = +prime2.value;
    const n = p*q;
    const f = (p-1)*(q-1);
    
    let edge = f;
    let array = [];
    limit = Math.sqrt(edge);
    result = [];
    
    for (let i = 2; i < edge; i++) {
        array.push(i);
    }
    for (let i = 2; i <= limit; i++) {
        if (array[i]) {
            
            for (let j = i * i; j < edge; j += i) {
                array[j] = false;
                
            }
        }
    }
    for (let i = 2; i < edge; i++) {
        if(array[i]) {
            result.push(i);
        }
    }

    



    console.log(n)      ; 
    console.log(f)      ; 
    console.log(q)      ; 
    console.log(result) ; 

}

