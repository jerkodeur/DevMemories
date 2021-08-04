/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

const $  = require( 'jquery' );
// this "modifies" the jquery module: adding behavior to it
// the bootstrap module doesn't export/return anything
require('bootstrap');

// <!--common script for all pages-->
require('../libs/jquery.dcjqaccordion.2.7');
require('../libs/jquery.scrollTo.min');
require('../libs/jquery.nicescroll');
require('../libs/jquery.sparkline');
require('../libs/common-scripts.js');
require('../libs/gritter/js/jquery.gritter.js');
require('../libs/gritter-conf.js');

{/* <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> */}
// var dt = require( 'datatables.net' )();

// any CSS you import will output into a single css file (app.css in this case)
import '../css/dashboard/style.scss';
