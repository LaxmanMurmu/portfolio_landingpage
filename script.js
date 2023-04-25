
// <!-- ==========================================================Bubble Script==================================================== -->
gsap.from("#image1", {
    duration: 10,
    delay: 3,
    opacity: 0,
    y: 680,
    repeat: -1
});
gsap.from("#image2", {
    duration: 8,
    delay: 6,
    opacity: 0,
    y: 680,
    repeat: -1
});
gsap.from("#image3", {
    duration: 8,
    delay: 2,
    opacity: 0,
    y: 680,
    repeat: -1
});
gsap.from("#image4", {
    duration: 15,
    delay: 5,
    opacity: 0,
    y: 680,
    repeat: -1
});
gsap.from("#image5", {
    duration: 8,
    delay: 0.5,
    opacity: 0,
    y: 680,
    repeat: -1
});
gsap.from("#image6", {
    duration: 20,
    delay: 1,
    opacity: 0,
    y: 680,
    repeat: -1
});
gsap.from("#image7", {
    duration: 8,
    delay: 6,
    opacity: 0,
    y: 680,
    repeat: -1
});
gsap.from("#image8", {
    duration: 20,
    delay: 2,
    opacity: 0,
    y: 680,
    repeat: -1
});
gsap.from("#image9", {
    duration: 8,
    delay: 1.5,
    opacity: 0,
    y: 680,
    repeat: -1
});
gsap.from("#image10", {
    duration: 8,
    delay: 7,
    opacity: 0,
    y: 680,
    repeat: -1
});

// <!-- =======================================================First Intro Script==================================================== -->
gsap.from(".welcome", {
    duration: 1,
    opacity: 0,
    delay: 3,
    y: 150,
    ease: ""
});

// <!-- ======================================================Second Intro Script==================================================== -->
gsap.from(".hi_guys", {
    duration: 1,
    opacity: 0,
    delay: 1,
    y: -150,
    ease: "bounce"
});
gsap.from(".hru", {
    duration: 1,
    opacity: 0,
    delay: 2,
    y: -150,
    ease: "bounce"
});

// <!-- ==========================================================Button Script==================================================== -->
// gsap.from(".btn1", { duration: 1, opacity: 0, delay: 4, y: 150, ease: "" });
gsap.from(".btn1", {
    duration: 1.5,
    opacity: 0,
    delay: 4.4,
    scale: 0.3,
    ease: "back"
});




// Call toggleSidebar() function when a button is clicked or some other event occurs






let isSidebarVisible = false;

function side_bar() {
    if (isSidebarVisible) {
        gsap.to(".menu", { duration: 1, x: 300,display: "block" });
        isSidebarVisible = false;
    } else {
        gsap.to(".menu", { duration: 1, x: 0,display: "block" });
        isSidebarVisible = true;
    }
}

// function side_bar() {
//     if (isSidebarVisible) {
//         gsap.to(".menu", { duration: 1, x: 300,display: "block" });
//         isSidebarVisible = false;

//     } else {
//         gsap.to(".menu", { duration: 1, x: 0,display: "block" });
//         isSidebarVisible = true;

//     }
// }
