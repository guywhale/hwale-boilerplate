import Swiper, { Pagination } from 'swiper';
import 'swiper/css';

const TestimonialsSlider = (el) => {
  const swiper = new Swiper(el, {
    loop: true,
    slidesPerView: 1,
    modules: [Pagination],
    pagination: {
      clickable: true,
      el: '.swiper-pagination',
      type: 'bullets',
    },
  });
}

export default TestimonialsSlider;
