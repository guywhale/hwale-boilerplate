import Swiper, { Autoplay, Pagination } from 'swiper';
import 'swiper/css';

const TestimonialsSlider = (el) => {
  const swiper = new Swiper(el, {
    loop: true,
    slidesPerView: 1,
    modules: [Autoplay, Pagination],
    pagination: {
      clickable: true,
      el: '.swiper-pagination',
      type: 'bullets',
    },
    autoplay: true,
  });
}

export default TestimonialsSlider;
