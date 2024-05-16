console.log("hello world");
x = document.getElementById('yes');
x.textContent = "hello";
var count = 0;
const RMove = () => {
    document.querySelector("#rmove").style.marginLeft = Math.floor(Math.random() * 1600);
    document.querySelector("#rmove").style.marginTop = Math.floor(Math.random() * 800);
    count++;
    document.querySelector("#counter").textContent = count;
}