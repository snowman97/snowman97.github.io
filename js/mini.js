// if ($('#back-to-top').length) {
//     var scrollTrigger = 100, // px
//         backToTop = function () {
//             var scrollTop = $(window).scrollTop();
//             if (scrollTop > scrollTrigger) {
//                 $('#back-to-top').addClass('show');
//             } else {
//                 $('#back-to-top').removeClass('show');
//             }
//         };
//     backToTop();
//     $(window).on('scroll', function () {
//         backToTop();
//     });
//     $('#back-to-top').on('click', function (e) {
//         e.preventDefault();
//         $('html,body').animate({
//             scrollTop: 0
//         }, 700);
//     });
// }

    // topic toggle

    let checkingTopic = document.getElementById("checking-topic");
    let circle = document.getElementById("circle");
    checkingTopic.onclick = function(event){
        let target = event.target;
        let topicDark = document.getElementsByClassName("dark");
        let topicWhite = document.getElementsByClassName("white");

        if (topicWhite.length == 0) {
            topicDark[0].classList.add("white");
            topicDark[0].classList.remove("dark");  
            circle.style.marginLeft = 19 + "px";
            return;
        }   

        topicWhite[0].classList.add("dark");
        topicWhite[0].classList.remove("white");
        circle.style.marginLeft = 2 + "px";

    }

    // first scroll down

    let firstDown = document.getElementsByClassName("characters")[0];
    let aboutMe = document.getElementById("about-me");

    firstDown.onclick = function handleButtonClick() {
        aboutMe.scrollIntoView({block: "start", behavior: "smooth"});
    }


    // second scroll down

    let secondDown = document.getElementsByClassName("characters")[1];
    let slider = document.getElementsByClassName("slider")[0];

    secondDown.onclick = function handleButtonClick() {
        slider.scrollIntoView({block: "start", behavior: "smooth"});
    }
    // bact to top

    let backToTop = document.getElementById("backToTop");
    // backToTop.style.opacity = "0"; 

    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
        backToTop.style.display = "block";     
        // backToTop.style.opacity = "0.7";
        // backToTop.style.cursor = "pointer";     
      } else {
        // backToTop.style.cursor = "auto";
        // backToTop.style.opacity = "0";   
        backToTop.style.display = "none"
      }
    }