// scroll
const start = () => window.scrollTo(0, 0)
	setTimeout(start, 100)

//Link_alert
link_alert.onclick = function() {
    alert("Вы собираетесь перейти на сторонний сайт!")
}

//logo
logo.onclick = function() {
    window.scrollTo(0, 0)
}

function closePUP() {
    document.querySelector(".form").style.display="none"
}

function openPUP() {
    document.querySelector(".form").style.display="block"
}