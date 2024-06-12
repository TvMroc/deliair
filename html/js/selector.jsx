const selection = (className, id) => {
    const elements = document.querySelectorAll(`.${className}`);
    for (let i = 0; i < elements.length; i++) {
        elements[i].style.display = "none";
    }
    
    const element2 = document.querySelector(`.${id}`);
    element2.style.display = "unset";
};
