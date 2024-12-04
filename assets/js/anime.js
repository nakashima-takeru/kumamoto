// /* toggle Menu
// -------------------------------------------------- */
// const isMenuToggle = document.querySelector(".js-headerToggle");
// const commonHeaderLogo = document.querySelector(".js-header");
// let menuOpen = false;
// const menuTl = toggleMenu();

// function toggleMenu() {
//     const tl = gsap.timeline({ paused: true });

//     tl.fromTo(".js-headerToggleMenu", { autoAlpha: 0 }, { autoAlpha: 1, duration: 0.2, left: 0, ease: Power2.easeInOut }).fromTo(".js-headerToggleMenuText", { autoAlpha: 0, y: 20 }, { autoAlpha: 1, y: 0, stagger: 0.1 });

//     return tl;
// }

// function closeMenu(tl) {
//     tl.timeScale(1);
//     tl.reverse();
//     commonHeaderLogo.classList.remove("is-active");
// }

// if (isMenuToggle) {
//     isMenuToggle.addEventListener("click", () => {
//         if (menuOpen) {
//             closeMenu(menuTl);
//         } else {
//             menuTl.play().timeScale(0.5);
//             commonHeaderLogo.classList.add("is-active");
//         }
//         menuOpen = !menuOpen;
//     });
// }

// function handleResize() {
//     closeMenu(menuTl);
//     menuOpen = false;
// }
// window.addEventListener("resize", handleResize);

// const allHeaderItems = document.querySelectorAll(".js-headerToggleMenu a");

// if (allHeaderItems.length > 0) {
//     allHeaderItems.forEach(function (anchor) {
//         anchor.addEventListener("click", function () {
//             closeMenu(menuTl);
//             menuOpen = false;
//         });
//     });
// }

/*---------------------------
  Mainvisual text Animation
---------------------------*/
// const observeElement = document.querySelector(".js-mvTextArea");
// const target = document.querySelector(".js-mvTitle");

// const options = {
//     root: null,
//     rootMargin: "0px",
//     threshold: 0.01,
// };

// const callback = (entries, observer) => {
//     entries.forEach((entry) => {
//         if (entry.isIntersecting) {
//             target.classList.add("is-hidden");
//         } else {
//             target.classList.remove("is-hidden");
//         }
//     });
// };

// const observer = new IntersectionObserver(callback, options);

// observer.observe(observeElement);

document.addEventListener("DOMContentLoaded", () => {
    const observeElement = document.querySelector(".js-mvTextArea");
    const target = document.querySelector(".js-mvTitle");

    if (observeElement && target) {
        const options = {
            root: null,
            rootMargin: "0px",
            threshold: 0.01,
        };

        const callback = (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    target.classList.add("is-hidden");
                } else {
                    target.classList.remove("is-hidden");
                }
            });
        };

        const observer = new IntersectionObserver(callback, options);
        observer.observe(observeElement);
    } else {
        console.error("Observe element or target element not found.");
    }
});

/*---------------------------
  Mouse Tracker
---------------------------*/

const mainVisTrackerArea = document.getElementById("js-mainvisMouseTrackerSection");
const mouseTracker = document.getElementById("js-mainvisMouseTracker");
const movieModal = document.getElementById("js-movieModal");
const movieBackdrop = document.getElementById("pageBackdrop");
let modalOpen = false;

window.addEventListener("DOMContentLoaded", () => {
    if (!mainVisTrackerArea || !mouseTracker) {
        return;
    }

    mainVisTrackerArea.addEventListener("mousemove", (e) => {
        const rect = mainVisTrackerArea.getBoundingClientRect();
        const mouseX = e.clientX - rect.left;
        const mouseY = e.clientY - rect.top;

        gsap.to(mouseTracker, {
            x: mouseX - mouseTracker.offsetWidth / 2,
            y: mouseY - mouseTracker.offsetHeight / 2,
            duration: 0.5,
            ease: "power2.easeInOut",
        });
    });

    mainVisTrackerArea.addEventListener("mouseenter", () => {
        mouseTracker.classList.remove("hide");
    });

    mainVisTrackerArea.addEventListener("mouseleave", () => {
        mouseTracker.classList.add("hide");
    });

    mainVisTrackerArea.addEventListener("click", () => {
        if (modalOpen) {
            movieModal.classList.remove("active");
            movieBackdrop.classList.remove("active");
        } else {
            movieModal.classList.add("active");
            movieBackdrop.classList.add("active");
        }
        modalOpen = !modalOpen;
    });

    movieModal.addEventListener("click", () => {
        if (modalOpen) {
            movieModal.classList.remove("active");
            movieBackdrop.classList.remove("active");
        }
    });
});

/*---------------------------
  banner
---------------------------*/
const mainStart = document.querySelector(".js-mainStart");
const bannerAnimate = document.getElementById("js-bannerAnimate");

if (mainStart) {
    window.addEventListener("DOMContentLoaded", () => {
        ScrollTrigger.create({
            trigger: ".js-mainStart",
            start: "top bottom",
            onEnter: () => {
                bannerAnimate.classList.add("active");
            },
            onLeaveBack: () => {
                bannerAnimate.classList.remove("active");
            },
        });
    });
}
