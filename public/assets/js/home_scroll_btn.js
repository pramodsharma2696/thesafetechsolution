
// show on scroll
window.onscroll = function() {
    scrollFunction()
};
function scrollFunction() {
    if (document.body.scrollTop > 70 || document.documentElement.scrollTop > 70) {
        document.getElementById("sticky_btn").style.top = "0";
    } else {
        document.getElementById("sticky_btn").style.top = "-100%";
    }
}
