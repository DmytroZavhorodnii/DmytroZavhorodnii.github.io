let n =+prompt("enter limit prime num")
let array = [], 
limit = Math.sqrt(n), 
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

    document.write(`Prime nums: ${result}`);
