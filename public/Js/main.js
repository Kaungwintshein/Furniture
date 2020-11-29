//Nav
let navIcon = document.querySelector(".navbar-icon");
let navContainer = document.querySelector(".nav-container");

navIcon.addEventListener("click", () => {
  navContainer.classList.toggle("active");
});

//Background Image Slider

let slides = document.querySelectorAll(".Slide");
const buttons = document.querySelectorAll(".buttons button");
const buttonContainer = document.querySelector(".buttons");

let auto = true;
let intervalIime = 8000;
let slideInterval;

let nextSlide = () => {
  let currentSlider = document.querySelector(".Current");
  currentSlider.classList.remove("Current");
  let currentBtn = document.querySelector(".current");
  currentBtn.classList.remove("current");

  if (currentSlider.nextElementSibling && currentBtn.nextElementSibling) {
    currentSlider.nextElementSibling.classList.add("Current");
    currentBtn.nextElementSibling.classList.add("current");
  } else {
    slides[0].classList.add("Current");
    buttons[0].classList.add("current");
  }
  setTimeout(() => {
    currentSlider.classList.remove("Current");
    currentBtn.classList.remove("current");
  });
};

buttonContainer.addEventListener("click", (e) => {
  let currentSlider = document.querySelector(".Current");
  currentSlider.classList.remove("Current");
  let current = document.querySelector(".current");
  current.classList.remove("current");
  if (auto) {
    clearInterval(slideInterval);
    slideInterval = setInterval(nextSlide, intervalIime);
  }
  if (!e.target.classList.contains("current")) {
    e.target.classList.add("current");
  }
  if (e.target.id === "prev") {
    slides[0].classList.add("Current");
  }
  if (e.target.id === "middle") {
    slides[1].classList.add("Current");
  }
  if (e.target.id === "next") {
    slides[2].classList.add("Current");
  }
});

if (auto) {
  slideInterval = setInterval(nextSlide, intervalIime);
}

let data = [
  {
    img: "/images/person-1.jpg",
    name: "peter doe",
    job: "product manager",
    text: `Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quoeius recusandae officia voluptas sint deserunt dicta nihil nam omnis? `,
  },
  {
    img: "/images/person-2.jpg",
    name: "susan doe",
    job: "developer",
    text: `Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quoeius recusandae officia voluptas sint deserunt dicta nihil nam omnis?`,
  },
  {
    img: "/images/person-3.jpg",
    name: "emma doe",
    job: "designer",
    text: `Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quoeius recusandae officia voluptas sint deserunt dicta nihil nam omnis?`,
  },
];

let container = document.querySelector(".slide-container");
let nextBtn = document.querySelector(".next-btn");
let prevBtn = document.querySelector(".prev-btn");

// if length is 1 hide buttons
if (data.length === 1) {
  nextBtn.style.display = "none";
  prevBtn.style.display = "none";
}
// if length is 2, add copies of slides
let people = [...data];
if (data.length === 2) {
  people = [...data, ...data];
}

container.innerHTML = people
  .map((person, slideIndex) => {
    const { img, name, job, text } = person;
    let position = "next";
    if (slideIndex === 0) {
      position = "active";
    }
    if (slideIndex === people.length - 1) {
      position = "last";
    }
    if (data.length <= 1) {
      position = "active";
    }
    return `<article class="slide ${position}">
  <img src=${img} class="img" alt="${name}"/>
  <h4>${name}</h4>
  <p class="title">${job}</p>
  <p class="text">
   ${text}
  </p>
 </article>`;
  })
  .join("");

const startSlider = (type) => {
  // get all three slides active,last next
  const active = document.querySelector(".active");
  const last = document.querySelector(".last");
  let next = active.nextElementSibling;
  if (!next) {
    next = container.firstElementChild;
  }
  active.classList.remove(["active"]);
  last.classList.remove(["last"]);
  next.classList.remove(["next"]);
  if (type === "prev") {
    active.classList.add("next");
    last.classList.add("active");
    next = last.previousElementSibling;
    if (!next) {
      next = container.lastElementChild;
    }
    next.classList.remove(["next"]);
    next.classList.add("last");
    return;
  }
  active.classList.add("last");
  last.classList.add("next");
  next.classList.add("active");
};

nextBtn.addEventListener("click", () => startSlider());

prevBtn.addEventListener("click", () => startSlider("prev"));

let scrollNav = document.querySelector(".scroll-nav");

function scrollTop() {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
}
function scrolling() {
  if (this.scrollY >= 300) {
    scrollNav.classList.add("active");
  } else {
    scrollNav.classList.remove("active");
  }
}

window.addEventListener("scroll", scrolling);
scrollNav.addEventListener("click", scrollTop);

let articlesdata = [
  {
    type: "Living Room Design",
    description:
      "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quoeius recusandae officia voluptas sint deserunt dicta nihil nam omnis?",
    img: "./images/blog-img-1-500x500.jpg",
    designer: "John",
  },
  {
    type: "Living Room Design",
    description:
      "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quoeius recusandae officia voluptas sint deserunt dicta nihil nam omnis?",
    img: "./images/blog-img-2-500x500.jpg",
    designer: "John",
  },
  {
    type: "Living Room Design",
    description:
      "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quoeius recusandae officia voluptas sint deserunt dicta nihil nam omnis?",
    img: "./images/blog-img-3-500x500.jpg",
    designer: "John",
  },
  {
    type: "Living Room Design",
    description:
      "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quoeius recusandae officia voluptas sint deserunt dicta nihil nam omnis?",
    img: "./images/blog-img-1-500x500.jpg",
    designer: "John",
  },
  {
    type: "Living Room Design",
    description:
      "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quoeius recusandae officia voluptas sint deserunt dicta nihil nam omnis?",
    img: "./images/blog-img-4-500x500.jpg",
    designer: "John",
  },
  {
    type: "Living Room Design",
    description:
      "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quoeius recusandae officia voluptas sint deserunt dicta nihil nam omnis?",
    img: "./images/blog-img-5-500x500.jpg",
    designer: "John",
  },
];


// **********************************Sai Saing Hein***************************************
// Slider
$(document).ready(function(){
  $('.customer-logos').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 4
      }
    }, {
      breakpoint: 520,
      settings: {
        slidesToShow: 3
      }
    }]
  });
});