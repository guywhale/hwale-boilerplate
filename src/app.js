import Alpine from 'alpinejs';

document.addEventListener('DOMContentLoaded', () => {
  /**
   * Initialize Alpine
   */
  window.Alpine = Alpine;
  Alpine.start();

  /**
   * Main init function
   */
  init();

  function init() {
    console.log('Hello from app.js');
  }
});
