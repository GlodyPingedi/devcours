import './bootstrap';
import 'flowbite';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
function supprimer(event) {
    event.preventDefault();
    const form = event.target.getAttribute('href');
}
