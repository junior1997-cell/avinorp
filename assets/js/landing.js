"use strict";

//switcher color pickers
const pickrContainerPrimary = document.querySelector(
  ".pickr-container-primary"
);
const themeContainerPrimary = document.querySelector(
  ".theme-container-primary"
); console.log('paso 0'); 
/* for theme primary */
const nanoThemes = [
  [
    "nano",
    {
      defaultRepresentation: "RGB",
      components: {
        preview: true,
        opacity: false,
        hue: true,

        interaction: {
          hex: false,
          rgba: true,
          hsva: false,
          input: true,
          clear: false,
          save: false,
        },
      },
    },
  ],
];
const nanoButtons = [];
let nanoPickr = null;
for (const [theme, config] of nanoThemes) {
  const button = document.createElement("button");
  button.innerHTML = theme;
  nanoButtons.push(button);

  button.addEventListener("click", () => {
    const el = document.createElement("p");
    pickrContainerPrimary.appendChild(el);

    /* Delete previous instance */
    if (nanoPickr) {
      nanoPickr.destroyAndRemove();
    }

    /* Apply active class */
    for (const btn of nanoButtons) {
      btn.classList[btn === button ? "add" : "remove"]("active");
    }

    /* Create fresh instance */
    nanoPickr = new Pickr(
      Object.assign(
        {
          el,
          theme,
          default: "#845adf",
        },
        config
      )
    );

    /* Set events */
    nanoPickr.on("changestop", (source, instance) => {
      let color = instance.getColor().toRGBA();
      let html = document.querySelector("html");
      html.style.setProperty(
        "--primary-rgb",
        `${Math.floor(color[0])}, ${Math.floor(color[1])}, ${Math.floor(
          color[2]
        )}`
      );
      /* theme color picker */
      localStorage.setItem(
        "primaryRGB",
        `${Math.floor(color[0])}, ${Math.floor(color[1])}, ${Math.floor(
          color[2]
        )}`
      ); 
      updateColors();
    });
  });

  themeContainerPrimary.appendChild(button);
}
nanoButtons[0].click();
/* for theme primary */

/* footer year */
document.getElementById("year").innerHTML = new Date().getFullYear();
/* footer year */

let mainContent;
(function () {
  let html = document.querySelector("html");
  mainContent = document.querySelector(".main-content");

  localStorageBackup();
  switcherClick();
  checkOptions();
  /* LTR to RTL */
  // html.setAttribute("dir" , "rtl") // for rtl version
})();

function switcherClick() {
  let ltrBtn,
    rtlBtn,
    lightBtn,
    darkBtn,
    primaryDefaultColor1Btn,
    primaryDefaultColor2Btn,
    primaryDefaultColor3Btn,
    primaryDefaultColor4Btn,
    primaryDefaultColor5Btn,
    ResetAll;
  let html = document.querySelector("html");
  lightBtn = document.querySelector("#switcher-light-theme");
  darkBtn = document.querySelector("#switcher-dark-theme");
  ltrBtn = document.querySelector("#switcher-ltr");
  rtlBtn = document.querySelector("#switcher-rtl");
  primaryDefaultColor1Btn = document.querySelector("#switcher-primary");
  primaryDefaultColor2Btn = document.querySelector("#switcher-primary1");
  primaryDefaultColor3Btn = document.querySelector("#switcher-primary2");
  primaryDefaultColor4Btn = document.querySelector("#switcher-primary3");
  primaryDefaultColor5Btn = document.querySelector("#switcher-primary4");
  ResetAll = document.querySelector("#reset-all");

  /* Light Layout Start */
  let lightThemeVar = lightBtn.addEventListener("click", () => {
    lightFn();
    localStorage.setItem("ynexHeader", "light");
    localStorage.setItem("ynexMenu", "light");
  });
  /* Light Layout End */

  /* Dark Layout Start */
  let darkThemeVar = darkBtn.addEventListener("click", () => {
    darkFn();
    localStorage.setItem("ynexMenu", "dark");
    localStorage.setItem("ynexHeader", "dark");
  });
  /* Dark Layout End */

  // primary theme
  let primaryColor1Var = primaryDefaultColor1Btn.addEventListener(
    "click",
    () => {
      localStorage.setItem("primaryRGB", "58, 88, 146");
      html.style.setProperty("--primary-rgb", `58, 88, 146`);
      updateColors();
    }
  );
  let primaryColor2Var = primaryDefaultColor2Btn.addEventListener(
    "click",
    () => {
      localStorage.setItem("primaryRGB", "92, 144, 163");
      html.style.setProperty("--primary-rgb", `92, 144, 163`);
      updateColors();
    }
  );
  let primaryColor3Var = primaryDefaultColor3Btn.addEventListener(
    "click",
    () => {
      localStorage.setItem("primaryRGB", "161, 90, 223");
      html.style.setProperty("--primary-rgb", `161, 90, 223`);
      updateColors();
    }
  );
  let primaryColor4Var = primaryDefaultColor4Btn.addEventListener(
    "click",
    () => {
      localStorage.setItem("primaryRGB", "78, 172, 76");
      html.style.setProperty("--primary-rgb", `78, 172, 76`);
      updateColors();
    }
  );
  let primaryColor5Var = primaryDefaultColor5Btn.addEventListener(
    "click",
    () => {
      localStorage.setItem("primaryRGB", "223, 90, 90");
      html.style.setProperty("--primary-rgb", `223, 90, 90`);
      updateColors();
    }
  );

  /* rtl start */
  let rtlVar = rtlBtn.addEventListener("click", () => {
    localStorage.setItem("ynexrtl", true);
    localStorage.removeItem("ynexltr");
    rtlFn();
  });
  /* rtl end */

  /* ltr start */
  let ltrVar = ltrBtn.addEventListener("click", () => {
    //    local storage
    localStorage.setItem("ynexltr", true);
    localStorage.removeItem("ynexrtl");
    ltrFn();
  });
  /* ltr end */

  // reset all start
  let resetVar = ResetAll.addEventListener("click", () => {
    // clear primary & bg color
    html.style.removeProperty(`--primary-rgb`);

    // clear rtl
    html.removeAttribute("dir", "rtl");
    html.setAttribute("dir", "ltr");
    console.log('paso 1');  
    ResetAllFn();   
  });
  // reset all start
}

function ltrFn() {
  let html = document.querySelector("html");
  document
    .querySelector("#style")
    ?.setAttribute("href", "../assets/libs/bootstrap/css/bootstrap.min.css");
  html.setAttribute("dir", "ltr");
  document.querySelector("#switcher-ltr").checked = true;
  checkOptions();
}

function rtlFn() {
  let html = document.querySelector("html");
  html.setAttribute("dir", "rtl");
  document
    .querySelector("#style")
    ?.setAttribute(
      "href",
      "../assets/libs/bootstrap/css/bootstrap.rtl.min.css"
    );
  checkOptions();
}

if (localStorage.ynexrtl) {
  rtlFn();
}

function lightFn() {
  let html = document.querySelector("html");
  html.setAttribute("data-theme-mode", "light");
  document.querySelector("#switcher-light-theme").checked = true;
  updateColors();
  localStorage.removeItem("ynexdarktheme");
  checkOptions();
  // html.style.removeProperty('--primary-rgb');
}

function darkFn() {
  let html = document.querySelector("html");
  html.setAttribute("data-theme-mode", "dark");
  updateColors();
  localStorage.setItem("ynexdarktheme", true);
  localStorage.removeItem("ynexlighttheme");
  checkOptions();
  // html.style.removeProperty("--primary-rgb");
}

function ResetAllFn() {
  let html = document.querySelector("html"); console.log('paso 2');
  checkOptions(); 

  // clearing localstorage
  localStorage.clear();

  // clear primary & bg color -- Color de empresa Actual: Verde
  html.style.setProperty(`--primary-rgb`, '78, 172, 76'); 
  localStorage.setItem("primaryRGB", '78, 172, 76');

  // reseting chart colors
  updateColors();

  // reseting rtl
  ltrFn();

  // reseting dark theme
  lightFn();
}

function checkOptions() {
  // dark
  if (localStorage.getItem("ynexdarktheme")) {
    document.querySelector("#switcher-dark-theme").checked = true;
  }

  //RTL
  if (localStorage.getItem("ynexrtl")) {
    document.querySelector("#switcher-rtl").checked = true;
  }
}

// chart colors
let myVarVal, primaryRGB;
function updateColors() {
  "use strict"; console.log('paso 3');  
  primaryRGB = getComputedStyle(document.documentElement).getPropertyValue("--success-rgb").trim();
  console.log('paso 3: ' + primaryRGB); 
}
updateColors();

function localStorageBackup() { console.log('paso 4'); 
  if (localStorage.primaryRGB) {
    if (document.querySelector(".theme-container-primary")) {
      document.querySelector(".theme-container-primary").value = localStorage.primaryRGB;
    }
    document.querySelector("html").style.setProperty("--primary-rgb", localStorage.primaryRGB);
  }
  if (localStorage.ynexdarktheme) {
    let html = document.querySelector("html");
    html.setAttribute("data-theme-mode", "dark");
  }

  if (localStorage.ynexrtl) {
    let html = document.querySelector("html");
    html.setAttribute("dir", "rtl");
  }
  if (localStorage.ynexlayout) {
    let html = document.querySelector("html");
    let layoutValue = localStorage.getItem("ynexlayout");
    html.setAttribute("data-nav-layout", "horizontal");
  }
}

// for menu target scroll on click
window.addEventListener("scroll", reveal);
function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var cardTop = reveals[i].getBoundingClientRect().top;
    var cardRevealPoint = 150;
    if (cardTop < windowHeight - cardRevealPoint) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}
reveal();
const pageLink = document.querySelectorAll(".side-menu__item");
pageLink.forEach((elem) => {
  if (elem != "javascript:void(0);" && elem !== "#") {
    elem.addEventListener("click", (e) => {
      e.preventDefault();
      document.querySelector(elem.getAttribute("href"))?.scrollIntoView({
        behavior: "smooth",
        offsetTop: 1 - 60,
      });
    });
  }
});
// section menu active
function onScroll(event) {
  const sections = document.querySelectorAll(".side-menu__item");
  const scrollPos =
    window.pageYOffset ||
    document.documentElement.scrollTop ||
    document.body.scrollTop;

  sections.forEach((elem) => {
    const val = elem.getAttribute("href");
    let refElement;
    if (val != "javascript:void(0);" && val !== "#") {
      refElement = document.querySelector(val);
    }
    const scrollTopMinus = scrollPos + 73;
    if (
      refElement?.offsetTop <= scrollTopMinus &&
      refElement?.offsetTop + refElement.offsetHeight > scrollTopMinus
    ) {
      if (elem.parentElement.parentElement.classList.contains("child1")) {
        elem.parentElement.parentElement.parentElement.children[0].classList.add(
          "active"
        );
      }
      elem.classList.add("active");
      if (elem.closest(".child1")?.previousElementSibling) {
        elem.closest(".child1").previousElementSibling.classList.add("active");
      }
    } else {
      elem.classList.remove("active");
    }
  });
}
window.document.addEventListener("scroll", onScroll);
// for menu target scroll on click

// for testimonials
var swiper = new Swiper(".pagination-dynamic", {
  pagination: {
    el: ".swiper-pagination",
    dynamicBullets: true,
    clickable: true,
  },
  slidesPerView: 1,
  loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 2,
      spaceBetween: 50,
    },
    1400: {
      slidesPerView: 3,
      spaceBetween: 50,
    },
  },
});

/* back to top */
const scrollToTop = document.querySelector(".scrollToTop");
const $rootElement = document.documentElement;
const $body = document.body;
window.onscroll = () => {
  const scrollTop = window.scrollY || window.pageYOffset;
  const clientHt = $rootElement.scrollHeight - $rootElement.clientHeight;
  if (window.scrollY > 100) {
    scrollToTop.style.display = "flex";
  } else {
    scrollToTop.style.display = "none";
  }
};
scrollToTop.onclick = () => {
  window.scrollTo(0, 0);
};
/* back to top */
