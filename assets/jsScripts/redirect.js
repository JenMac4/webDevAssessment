const logoLetters = document.querySelectorAll("#logo path")

for(let i=0; i< logoLetters.length; i++){
    console.log(`Letter ${i} is ${logoLetters[i].getTotalLength()}`);
}

console.log("hello");