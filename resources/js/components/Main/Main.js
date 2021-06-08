import React from 'react';
import ReactDOM from 'react-dom';
import Text from "./Text";
import Img from "./Img";

function Main() {
    return (
        <div className='main'>
            <Img />
            <Text />
        </div>
    );
}

export default Main;

// DOM element
if (document.getElementById('main')) {
    ReactDOM.render(<Main />, document.getElementById('main'));
}

