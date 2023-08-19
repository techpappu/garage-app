import './bootstrap';
import "flatpickr/dist/flatpickr.min.css";

import Alpine from 'alpinejs';
import persist from '@alpinejs/persist';
import flatpickr from "flatpickr";
// ES6 Modules or TypeScript sweetAlert2 
import Swal from 'sweetalert2';
window.Swal = Swal;
// ES6 Modules or TypeScript Jquery for use inline script type=module 
import jQuery from 'jquery';
window.$ = jQuery;

import 'flowbite';

import validate from 'jquery-validation';
window.validate = validate;


Alpine.plugin(persist)
window.Alpine = Alpine;
Alpine.start();


// Init flatpickr
flatpickr(".datepicker", {
    mode: "single",
    static: true,
    monthSelectorType: "static",
    dateFormat: "d-m-Y",
    prevArrow:
      '<svg class="fill-current" width="7" height="11" viewBox="0 0 7 11"><path d="M5.4 10.8l1.4-1.4-4-4 4-4L5.4 0 0 5.4z" /></svg>',
    nextArrow:
      '<svg class="fill-current" width="7" height="11" viewBox="0 0 7 11"><path d="M1.4 10.8L0 9.4l4-4-4-4L1.4 0l5.4 5.4z" /></svg>',
    onReady: (selectedDates, dateStr, instance) => {
      // eslint-disable-next-line no-param-reassign
      instance.element.value = dateStr.replace("to", "-");
      const customClass = instance.element.getAttribute("data-class");
      instance.calendarContainer.classList.add(customClass);
    },
    onChange: (selectedDates, dateStr, instance) => {
      // eslint-disable-next-line no-param-reassign
      instance.element.value = dateStr.replace("to", "-");
    },
  });
  