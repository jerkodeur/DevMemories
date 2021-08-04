import React, {Component} from 'react'
import {render} from 'react-dom'

// console.log('test');c
const $ = require('jquery');

require('bootstrap');

// any CSS you import will output into a single css file (app.css in this case)
import Welcome from './Welcome';
const imagesContext = require.context('../images', true, /\.(png|jpg|jpeg|gif|ico|svg|webp)$/);
imagesContext.keys().forEach(imagesContext);

class Root extends Component{

    render(){
        console.log('load');
        return(
            <div>
                <Welcome />,
            </div>
        )
    }
}

render(<Root/>, document.getElementById('root'));