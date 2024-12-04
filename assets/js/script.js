/* ==========================================
  Header Color / Blur Transition
===========================================*/
const allHeaderTriggers = document.querySelectorAll(".js-headTrigger");
const pageHeader = document.getElementById("pageHeader");
const navLogo = document.getElementById("js-navLogo");

function handleLogoChange() {
    let currentLogoSrc = navLogo.getAttribute("src");
    let nextLogoSrc = navLogo.getAttribute("data-alt-icon");
    navLogo.src = nextLogoSrc;
    navLogo.dataset.altIcon = currentLogoSrc;
}

function revertLogoChange() {
    let currentLogoSrc = navLogo.getAttribute("src");
    let defaultLogoSrc = navLogo.getAttribute("data-default-icon");
    navLogo.src = defaultLogoSrc;
    navLogo.dataset.defaultIcon = currentLogoSrc;
}

function updateHeaderState() {
    if (!pageHeader || allHeaderTriggers.length < 1) {
        return;
    }

    allHeaderTriggers.forEach((trigger) => {
        ScrollTrigger.create({
            trigger: trigger,
            start: "top 40px",
            end: "bottom 40px",
            onEnter: () => {
                if (!pageHeader.classList.contains("drawerOpen")) {
                    pageHeader.classList.add("dark");
                }
                handleLogoChange();
            },
            onLeave: () => {
                if (!pageHeader.classList.contains("drawerOpen")) {
                    pageHeader.classList.remove("dark");
                }
                handleLogoChange();
            },
            onEnterBack: () => {
                if (!pageHeader.classList.contains("drawerOpen")) {
                    pageHeader.classList.add("dark");
                }
                handleLogoChange();
            },
            onLeaveBack: () => {
                if (!pageHeader.classList.contains("drawerOpen")) {
                    pageHeader.classList.remove("dark");
                }
                handleLogoChange();
            },
        });
    });
}

// Initial setup on DOMContentLoaded
window.addEventListener("DOMContentLoaded", () => {
    updateHeaderState();
});

// Update on window resize
window.addEventListener("resize", () => {
    updateHeaderState();
});

/*==============================================
  Hamburger / Side Drawer
==============================================*/

const hamburgerButtons = document.querySelectorAll(".js-hamburger");
const navDrawer = document.getElementById("js-navdrawer");
const navDrawerItems = document.querySelectorAll(".js-navdrawerLink");
let sideDrawerOpen = false;

function openDrawer() {
    const tl = gsap.timeline();
    tl.to(navDrawer, { y: 0, duration: 0.7, ease: "Power4.easeOut" });
    navDrawerItems.forEach((item) => {
        tl.to(
            item,
            { y: 0, autoAlpha: 1, duration: 0.3, ease: "Power2.easeInOut" },
            "<40%"
        );
    });
    navLogo.setAttribute("data-default-icon", navLogo.getAttribute("src"));
    handleLogoChange();
    pageHeader.classList.remove("dark"); // Remove dark class when drawer opens
    pageHeader.classList.add("drawerOpen");
    document.body.style.overflow = "hidden";
    return tl;
}

function closeDrawer() {
    const tl = gsap.timeline();
    navDrawerItems.forEach((item) => {
        tl.to(
            item,
            { y: 50, autoAlpha: 0, duration: 0.3, ease: "Power2.easeInOut" },
            "<40%"
        );
    });
    tl.to(navDrawer, { y: "100%", duration: 0.5, ease: "Power4.easeIn" });
    tl.call(() => revertLogoChange());
    pageHeader.classList.remove("drawerOpen");
    document.body.style.overflow = "auto";
    return tl;
}

if (hamburgerButtons.length > 0) {
    hamburgerButtons.forEach((button) => {
        button.addEventListener("click", () => {
            if (sideDrawerOpen) {
                closeDrawer();
                updateHeaderState(); // Update header state when closing the drawer
            } else {
                openDrawer();
            }
            sideDrawerOpen = !sideDrawerOpen;
        });
    });
}

navDrawerItems.forEach((item) => {
    item.addEventListener("click", () => {
        pageHeader.classList.remove("drawerOpen");
        closeDrawer();
        sideDrawerOpen = false;
    });
});

let modal = document.getElementsByClassName("js-modal")[0];
let modalBtns = document.getElementsByClassName("js-modalBtn");
let modalCloseBtn = document.getElementsByClassName("js-modalCloseBtn")[0];

for (let i = 0; i < modalBtns.length; i++) {
    modalBtns[i].onclick = function () {
        modal.style.display = "block";
    };
}

modalCloseBtn.onclick = function () {
    modal.style.display = "none";
};

window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};

// /* ==========================================
//   お問い合わせフォーム　確認画面
// ===========================================*/
// // まず、選択された種別の要素を取得
// var selectElement = document.getElementById("contact-select");

// // 各グループの要素を取得
// var contactGroup = document.querySelector(".contact__group.contact");
// var interviewGroup = document.querySelector(".contact__group.interview");
// var recruitGroup = document.querySelector(".contact__group.recruit");

// // 初期状態では全てのグループを非表示にする
// contactGroup?.style.display = "none";
// interviewGroup?.style.display = "none";
// recruitGroup?.style.display = "none";

// // 選択肢が変更されたときの処理
// selectElement.addEventListener("change", function () {
//     // 全てのグループを非表示にする
//     contactGroup?.style.display = "none";
//     interviewGroup?.style.display = "none";
//     recruitGroup?.style.display = "none";

//     // 選択された値に応じて、対応するグループを表示
//     switch (selectElement.value) {
//         case "お問い合わせ":
//             contactGroup.style.display = "block";
//             break;
//         case "取材のお申込み":
//             interviewGroup.style.display = "block";
//             break;
//         case "求人募集":
//             recruitGroup.style.display = "block";
//             break;
//         default:
//             break;
//     }
// });
