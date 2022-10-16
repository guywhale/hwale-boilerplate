// import React from "react";
// import ReactDOM from "react-dom";
// import Person from "./scripts/Person";
// import ExampleReactComponent from "./scripts/ExampleReactComponent";

// if (document.querySelector("#render-react-example-here")) {
//   ReactDOM.render(
//     <ExampleReactComponent />,
//     document.querySelector("#render-react-example-here")
//   );
// }

document.addEventListener('DOMContentLoaded', () => {
  // Enqueue JS if appropriate elements exists.

  // Enqueue Testimonial Slider if element exists.
  if (document.querySelector('nav')) {
    const navs = document.querySelectorAll('nav');

    import('./scripts/MobileNav')
      .then((MobileNav) => {
        [...navs].map(el => MobileNav.default(el));
      })
      .catch((err) => {
        console.log(err);
      });
  }

  if (document.querySelector('[data-testimonials-swiper]')) {
    const sliders = document.querySelectorAll('[data-testimonials-swiper]');

    import('./scripts/TestimonialsSlider')
      .then((TestimonialsSlider) => {
        [...sliders].map(el => TestimonialsSlider.default(el));
      })
      .catch((err) => {
        console.log(err);
      });
  }
});

