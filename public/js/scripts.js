///constantes
const _elements = {
    loading: document.querySelector(".loading"),
    switch: document.querySelector(".switch_track"),
};

document
    .querySelector(".menu-btn")
    .addEventListener("click", () =>
        document.querySelector(".main-menu").classList.toggle("show")
    );

//função para alternar entre modo dark e light
_elements.switch.addEventListener("click", () => {
    const isDark = _elements.switch.classList.toggle("switch_track--dark");
    if (isDark) document.documentElement.setAttribute("data-theme", "dark");
    else document.documentElement.setAttribute("data-theme", "light");
});
