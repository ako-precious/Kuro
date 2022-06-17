window.addEventListener("scroll", function () {
    let header = document.getElementById("header-menu");
    // let menuLink = document.getElementById("menulist");
    // let allLink = document.getQuerySelectorAll("black-link");

    header.classList.toggle("bg-white", window.scrollY > 102);
    header.classList.toggle("shadow", window.scrollY > 102);
    // menuLink.classList.toggle("text-black", window.scrollY > 102);
    // allLink.classList.toggle("text-black", window.scrollY > 102);
});


// for more question

let elements = document.querySelectorAll("[data-menu]");

for (let i = 0; i < elements.length; i++) {
    let main = elements[i];
    main.addEventListener("click", function () {
        let element = main.parentElement.parentElement;
        let andicators = main.querySelectorAll("img");
        let child = element.querySelector("ul");
        let fontColor = element.querySelector("h2");
        child.classList.toggle("hidden");
        if (child.classList[0] !== "hidden") {
            andicators[0].style.display = "block";
            andicators[1].style.display = "none";
            fontColor.style.color = "#3730A3";
        } else {
            andicators[0].style.display = "none";
            andicators[1].style.display = "block"
            fontColor.style.color = "#1F2937";
        }
    });
}
