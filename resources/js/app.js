import './bootstrap';
import './hamburger.js';
import { library, dom } from '@fortawesome/fontawesome-svg-core';
import { faHome } from '@fortawesome/free-solid-svg-icons';

// Ajoute les icônes que tu veux utiliser
library.add(faHome);

// Active la transformation des icônes
dom.watch();



