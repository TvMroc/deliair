const selection = (className, id) => {
    const elements = document.querySelectorAll(`.${className}`);
    for (let i = 0; i < elements.length; i++) {
        elements[i].style.display = "none";
    }
    document.querySelector(`.${id}`).style.display = "unset";
};
