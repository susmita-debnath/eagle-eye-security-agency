// let counts=setInterval(updated);
// let upto=0;
// function updated(){
//     var count= document.getElementById("counter");
//     count.innerHTML=++upto;
//     if(upto===7)
//     {
//         clearInterval(counts);
//     }
// }
//
// $(document).ready(function () {
//     $(".number").counterUp({
//         delay: 10,
//         time: 1200
//     });
// });

function show() {

    /* Access image by id and change
    the display property to block*/
    document.getElementById('video')
        .style.display = "block";

    document.getElementById("video").play();

    document.getElementById('btnID')
        .style.display = "none";

    document.getElementById('vdo_img')
        .style.backgroundImage = "none";
}

// var myImage = document.getElementById("cctv_img");
// myImage.onmouseover = mouseOver;
// myImage.onmouseout = mouseOut;
//
// function mouseOver() {
//     myImage.src = "cctv1.png";
// }
// function mouseOut() {
//     myImage.src = "cctv2.png";
// }

function reveal() {
    var reveals = document.querySelectorAll(".reveal");

    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("active2");
        } else {
            reveals[i].classList.remove("active2");
        }
    }
}

function reveal2() {
    var reveals = document.querySelectorAll(".reveal2");

    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("active3");
        } else {
            reveals[i].classList.remove("active3");
        }
    }
}

window.addEventListener("scroll", reveal);
window.addEventListener("load", reveal2);