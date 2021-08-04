import React, {Component} from 'react'
import {render} from 'react-dom'

/*
* Welcome to your app's main JavaScript file!
*
* We recommend including the built version of this JavaScript file
* (and its CSS file) in your base layout (base.html.twig).
*/

// console.log('test');c
const $ = require('jquery');
console.log('app');
// this "modifies" the jquery module: adding behavior to it
// the bootstrap module doesn't export/return anything
// require ('../../node_modules/jquery/dist/jquery.js');
require('bootstrap');

require('../libs/jquery.dcjqaccordion.2.7');
require('../libs/jquery.scrollTo.min');
require('../libs/jquery.nicescroll');
import '../../node_modules/datatables.net/js/jquery.dataTables'
import '../../node_modules/datatables.net-dt/js/dataTables.dataTables'
// import '../../node_modules/datatables.net-dt/css/jquery.dataTables.min.css'

require('../libs/common-scripts.js');
require('../libs/jquery.sparkline');

require('../libs/gritter/js/jquery.gritter.js');
require('../libs/gritter-conf.js');

// any CSS you import will output into a single css file (app.css in this case)
import Welcome from './Welcome';
const imagesContext = require.context('../images', true, /\.(png|jpg|jpeg|gif|ico|svg|webp)$/);
imagesContext.keys().forEach(imagesContext);

// class Root extends Component{

//     render(){
//         console.log('load');
//         return(
//             <div>
//                 <Welcome />,
//             </div>
//         )
//     }
// }

// render(<Root/>, document.getElementById('root'));