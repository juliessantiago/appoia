import './bootstrap';
import '../../vendor/masmerise/livewire-toaster/resources/js'; 
import 'toastr/build/toastr.min.css';
import toastr from 'toastr';
import moment from 'moment';
import 'toastr/build/toastr.min.css'; 
window.moment = moment;
window.toastr = toastr;
toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "400",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
};
// import Alpine from 'alpinejs';

// window.Alpine = Alpine;

// Alpine.start();
