document.addEventListener("DOMContentLoaded", function () {
  // ✅ BaguetteBox inicijalizacija
  if (typeof baguetteBox !== "undefined") {
    const main = document.querySelector(".main");
    if (
      main &&
      (main.classList.contains("projects-main") ||
        main.classList.contains("gallery-works-main") ||
        main.classList.contains("service-main"))
    ) {
      const gallery = document.querySelector(".gallery");
      if (gallery) {
        // Ukloni target="_blank" ako postoji, jer to sprječava baguetteBox
        gallery.querySelectorAll("a[target]").forEach((a) => {
          a.removeAttribute("target");
        });

        baguetteBox.run(".gallery", {
          animation: "slideIn",
          captions: true,
        });
        console.log("✅ BaguetteBox aktiviran");
      } else {
        console.warn("⚠️ .gallery nije pronađen");
      }
    }
  } else {
    console.warn("❌ baguetteBox nije dostupan");
  }

  // ✅ Lazy loading fallback
  const images = document.querySelectorAll("img:not([loading])");
  images.forEach((img) => img.setAttribute("loading", "lazy"));

  // ✅ Page transition (osim za .gallery)
  const transitionEl = document.querySelector(".page-transition");
  if (transitionEl?.dataset.active === "true") {
    setTimeout(() => transitionEl.classList.add("hidden"), 50);
  }

  const links = document.querySelectorAll(
    "a[href]:not([target]):not([href^='#']):not(.gallery a)"
  );
  links.forEach((link) => {
    link.addEventListener("click", (event) => {
      const url = link.href;
      const isInternal = location.hostname === new URL(url).hostname;
      if (!isInternal) return;
      event.preventDefault();
      transitionEl?.classList.remove("hidden");
      setTimeout(() => {
        window.location.href = url;
      }, 1000);
    });
  });
});

// ✅ Hamburger menu
const hamBtn = document.querySelector(".ham-btn");
const primaryNav = document.querySelector(".nav");

hamBtn?.addEventListener("click", () => {
  if (primaryNav.getAttribute("aria-expanded") === "false") {
    primaryNav.setAttribute("aria-expanded", "true");
    hamBtn.setAttribute("data-active", "true");
    gsap.from(".nav__item", {
      opacity: 0,
      x: -50,
      duration: 0.8,
      stagger: 0.15,
      scrollTrigger: { trigger: ".nav__item" },
    });
  } else {
    primaryNav.setAttribute("aria-expanded", "false");
    hamBtn.setAttribute("data-active", "false");
  }
});

// ✅ Scroll progress + header hide
let lastScrollTop = 0;
const navbar = document.querySelector(".header");
const navbarHeight = navbar?.scrollHeight || 0;
const indicatorLine = document.querySelector(".indicator-scroll-line");

window.addEventListener("scroll", () => {
  const scrollTop = window.scrollY || document.documentElement.scrollTop;
  navbar.style.top = scrollTop > lastScrollTop ? `-${navbarHeight}px` : "0";
  lastScrollTop = scrollTop;

  if (primaryNav?.getAttribute("aria-expanded") === "true") {
    navbar.style.top = "0";
  }

  if (indicatorLine) {
    const height = document.body.scrollHeight - innerHeight;
    const scrolled = Math.ceil((scrollTop / height) * 100);
    indicatorLine.style.width = `${scrolled}%`;
  }

  const wupBtn = document.querySelector(".whatsapp-btn");
  const backToTopbtn = document.querySelector(".back-to-top-btn");

  if (scrollTop > 150) {
    wupBtn?.classList.add("active");
    backToTopbtn?.setAttribute("data-visible", "true");
    navbar?.classList.add("active");
  } else {
    wupBtn?.classList.remove("active");
    backToTopbtn?.setAttribute("data-visible", "false");
    navbar?.classList.remove("active");
  }
});

document.querySelector(".back-to-top-btn")?.addEventListener("click", () => {
  window.scroll({ top: 0 });
});

// ✅ Gallery slide (index page)
if (document.querySelector(".main")?.classList.contains("index-main")) {
  const galleries = document.querySelectorAll(".gallery");
  const intervalTime = 3000;

  galleries.forEach((gallery) => {
    const slides = gallery.querySelectorAll(".slide-img");
    if (!gallery.querySelector(".slide-img.current") && slides.length) {
      slides[0].classList.add("current");
    }
    setInterval(() => {
      const current = gallery.querySelector(".slide-img.current");
      current?.classList.remove("current");
      const next = current?.nextElementSibling?.classList.contains("slide-img")
        ? current.nextElementSibling
        : slides[0];
      next?.classList.add("current");
    }, intervalTime);
  });

  // ✅ Play video
  document
    .querySelector(".play-the-video--icon")
    ?.addEventListener("click", () => {
      const overlay = document.createElement("div");
      overlay.classList.add("overlay-play-the-video");
      const video = document.createElement("video");
      video.src = "/wp-content/themes/myTheme/src/assets/balcon-video.mp4";
      video.controls = true;
      video.autoplay = true;
      overlay.appendChild(video);
      document.body.appendChild(overlay);
      overlay.addEventListener("click", (e) => {
        if (e.target === overlay) overlay.remove();
      });
    });

  // ✅ Stats count
  const valueDisplays = document.querySelectorAll(".count");
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        const el = entry.target;
        let start = 0;
        const end = +el.getAttribute("data-num");
        const duration = Math.floor(5000 / end);
        const counter = setInterval(() => {
          start += 1;
          el.textContent = start;
          if (start === end) clearInterval(counter);
        }, duration);
        observer.unobserve(el);
      });
    },
    { threshold: 0.2 }
  );
  valueDisplays.forEach((el) => observer.observe(el));
}

// ✅ Career hover interaction
if (document.querySelector(".main")?.classList.contains("career-main")) {
  document.querySelectorAll(".open-position-card").forEach((card) => {
    card.addEventListener("mouseenter", () => {
      document.querySelectorAll(".contact-hire-us-card").forEach((el) => {
        el.classList.remove("hidden-left");
        void el.offsetWidth;
        el.classList.add("hidden-left");
      });
    });
  });
}

// ✅ FAQ accordion
if (document.querySelector(".main")?.classList.contains("faq-main")) {
  document.querySelectorAll(".faq__question").forEach((q) => {
    q.addEventListener("click", () => {
      const answer = q.nextElementSibling;
      const icon = q.closest(".faq")?.querySelector(".faq__plus");
      const allQuestions = document.querySelectorAll(".faq__question");
      allQuestions.forEach((q) => {
        q.nextElementSibling.setAttribute("data-active", "false");
        q.closest(".faq")
          ?.querySelector(".faq__plus")
          ?.setAttribute("data-active", "false");
      });
      const isActive = answer.getAttribute("data-active") === "true";
      answer.setAttribute("data-active", isActive ? "false" : "true");
      icon?.setAttribute("data-active", isActive ? "false" : "true");
    });
  });
}
// ✅ About us timeline
if (document.querySelector(".main")?.classList.contains("about-us-page")) {
  const cog = document.querySelector(".cog");

  let previousIndex = 0;

  const swiper = new Swiper(".timeline-cog", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    initialSlide: 1, // Početni slajd je 2014. (drugi slajd)
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: ".swiper-pagination",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    on: {
      slideChange: function () {
        const currentIndex = this.activeIndex;

        // ROTATE COG
        if (currentIndex > previousIndex) {
          rotateCog(30);
        } else if (currentIndex < previousIndex) {
          rotateCog(-30);
        }

        // REMOVE previous highlight
        document
          .querySelectorAll(".timeline-card__year")
          .forEach((el) => el.classList.remove("timeline-card__year--current"));

        // ADD class to current
        const currentSlide = this.slides[currentIndex];
        const yearEl = currentSlide.querySelector(".timeline-card__year");
        if (yearEl) {
          yearEl.classList.add("timeline-card__year--current");
        }

        previousIndex = currentIndex;
      },
    },
  });

  // helper function
  function rotateCog(degrees) {
    if (!cog) return;

    // get current rotation
    const currentRotation = cog.dataset.rotation
      ? parseFloat(cog.dataset.rotation)
      : 0;

    const newRotation = currentRotation + degrees;

    cog.style.transform = `rotate(${newRotation}deg)`;
    cog.dataset.rotation = newRotation; // store new value
  }
}

// ✅ Intersection animations
const observere = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) entry.target.classList.add("active");
    });
  },
  { threshold: 0.2 }
);

document
  .querySelectorAll(
    ".hidden-left, .hidden-right, .hidden-fade, .circle-clip-animation"
  )
  .forEach((el) => observere.observe(el));

// ✅ Swiper slider
new Swiper(".reviews-swiper", {
  spaceBetween: 30,
  effect: "fade",
  loop: true,
  speed: 1000,
  autoplay: { delay: 2500 },
});

// ✅ GSAP animations
gsap.registerPlugin(ScrollTrigger);

const gsapAnimations = [
  { selector: ".service-card", x: -50 },
  { selector: ".dream-team-card", y: 50 },
  { selector: ".agency-card-logo", y: -50 },
  { selector: ".blog-article", x: -50 },
  { selector: ".team-card", x: -50 },
  { selector: ".gallery__inner-wrapper > *", x: -50 },
];

gsapAnimations.forEach(({ selector, x = 0, y = 0 }) => {
  gsap.from(selector, {
    opacity: 0,
    x,
    y,
    duration: 1,
    stagger: 0.3,
    scrollTrigger: {
      trigger: selector,
      start: "top 90%",
    },
  });
});
