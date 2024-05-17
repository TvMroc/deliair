console.log("hello world");
x = document.getElementById('yes');
x.textContent = "hello";
var randomcount = 0;
const RMove = () => {
    document.querySelector("#rmove").style.marginLeft = Math.floor(Math.random() * 100)+"dvw";
    document.querySelector("#rmove").style.marginTop = Math.floor(Math.random() * 100)+"dvh";
    randomcount++;
    document.querySelector("#counter").textContent = randomcount;
    
    setTimeout(function () {
        const element1 = document.querySelector("#rmove"); 
        const element2 = document.querySelector(".square"); 
        
        const rect1 = element1.getBoundingClientRect(); 
        const rect2 = element2.getBoundingClientRect(); 
        
        if (rect1.x < rect2.x + rect2.width && rect1.x + rect1.width > rect2.x && rect1.y < rect2.y + rect2.height && rect1.y + rect1.height > rect2.y) { 
            alert("You won");
        }
    }, 210);
}