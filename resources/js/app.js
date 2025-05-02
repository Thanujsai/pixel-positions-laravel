import './bootstrap';

import.meta.glob([
    '../images/**',
]);

//without the above lines it will not work since it doesn't know where to find the images
//Illuminate\Foundation\ViteException
//Unable to locate file in Vite manifest: resources/images/logo.svg.