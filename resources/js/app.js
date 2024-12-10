import '../css/app.css';
import './bootstrap';

import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createApp, h } from 'vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import { createPinia } from 'pinia';
import VueHorizontal from "vue-horizontal";
import AOS from 'aos';
import 'aos/dist/aos.css';


import { library } from '@fortawesome/fontawesome-svg-core'

/* import font awesome icon component */
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

/* import specific icons */
import { faUserSecret, faFloppyDisk, faDollarSign, faNairaSign, faMoneyBill1Wave, faEnvelope, faPhone, faArrowLeft, faUser, faLock, faHospital, faLocationPin, faBars, faBriefcase, faHouse, faUserTie, faArrowRight, faPlus, faUsers, faBell, faFileExport, faArrowDown, faCheck, faPenToSquare, faCheckToSlot, faPrint, faEdit, faLocationDot, faEnvelopesBulk, faMicrophone } from '@fortawesome/free-solid-svg-icons'

import { faFacebookF, faTwitter, faYoutube, faLinkedinIn, faFacebook, faSquareXTwitter, faInstagram } from '@fortawesome/free-brands-svg-icons'

/* add icons to the library */
library.add(faUserSecret, faFloppyDisk, faDollarSign, faNairaSign, faMoneyBill1Wave, faFacebookF, faTwitter, faYoutube, faLinkedinIn, faEnvelope, faPhone, faArrowLeft, faUser, faLock, faHospital, faLocationPin, faBars, faBriefcase, faHouse, faUserTie, faArrowRight, faPlus, faUsers, faBell, faFileExport, faArrowDown, faCheck, faPenToSquare, faCheckToSlot, faPrint, faEdit, faLocationDot, faFacebook, faSquareXTwitter, faInstagram, faEnvelopesBulk, faMicrophone)


const appName = import.meta.env.VITE_APP_NAME || 'Okposi Education Initiative Official Website';

const pinia = createPinia()

AOS.init();

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob('./Pages/**/*.vue'),
        ),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(pinia)
            .use(ZiggyVue)
            .component('vue-horizontal', VueHorizontal)
            .component('font-awesome-icon', FontAwesomeIcon)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
