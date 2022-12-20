const start = () => window.scrollTo(300, 0)
	setTimeout(start, 100)

// scroll
function scrollFAQ() {
    const start = () => window.scrollTo(0, 0)
	    setTimeout(start, 100)
}
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

function closeOpacity() {
    document.querySelector(".form").classList.add("formAnimateClose")
    document.querySelector(".form").classList.remove("formAnimateOpen")
}

function openOpacity() {
    document.querySelector(".form").classList.remove("formAnimateClose")
    document.querySelector(".form").classList.add("formAnimateOpen")

}