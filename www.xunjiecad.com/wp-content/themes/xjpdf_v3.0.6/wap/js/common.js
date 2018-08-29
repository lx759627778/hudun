(function() {
    var ele = document.getElementsByTagName("html")[0],
        max_wid = 750;

    function a() {
        wid = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
        if (wid > 750) {
            ele.style.fontSize = "100px";
        } else {
            ele.style.fontSize = wid / max_wid * 100 + "px";
        }
    }
    a();
    ele.addEventListener("resize", a, false);
})()

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i].trim();
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}