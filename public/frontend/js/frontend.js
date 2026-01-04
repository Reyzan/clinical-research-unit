// Frontend Bundle - Template scripts
// Load order is critical for dependencies

// jQuery (must load first)
import './jquery.min.js';

// Bootstrap (depends on jQuery)
import './bootstrap.min.js';

// Animation Libraries
import './gsap.js';
import './ScrollTrigger.js';
import './SplitText.js';
import './gsap-animation.js';
import './aos.js';

// Layout & Filtering
import './isotope.pkgd.js';
import './masonry.min.js';

// UI Components
import './swiper.min.js';
import './jquery.magnific-popup.min.js';
import './theia-sticky-sidebar.js';

// Utilities
import './jquery.waypoints.min.js';
import './jquery.appear.js';
import './circle-progress.min.js';
import './numinate.min.js';
import './jquery.countdown.min.js';
import './hammer.min.js';

// Form Validation
import './jquery-validate/jquery.validate.min.js';

// Custom Template Scripts (must load last)
import './scripts.js';
