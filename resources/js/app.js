import './bootstrap';
import AOS from 'aos';
import 'aos/dist/aos.css';
import VanillaTilt from 'vanilla-tilt';
// Initialize AOS
document.addEventListener('DOMContentLoaded', function() {
    AOS.init();
});
//initialize data-tilt
document.addEventListener('DOMContentLoaded', function() {
    VanillaTilt.init(document.getElementById('tilt-div'), {
        max: 25,
        speed: 400,
        glare: true,
        'max-glare': 0.5
    });
});