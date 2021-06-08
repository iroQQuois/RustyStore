import React from 'react';
import ReactDOM from 'react-dom';

function Footer() {
    return (
        <div>
            <div className="footer__text">
                © 2021 RustyStore.ru - онлайн магазин электроники
            </div>
            <div className='soc'>
                <a href="https://vk.com"><img className='soc-card vk' alt="ti lox" src="/img/vk.png"/></a>
                <a href="https://instagram.com"><img className='soc-card face' alt="ti lox" src="/img/instagram.png"/></a>
                <a href="https://facebook.com"><img className='soc-card inst' alt="ti lox" src="/img/facebook.png"/></a>
            </div>
            <div className='footer__text'>
                Наши контакты:<br/> 8 (800) 555-35-35<br/> rusty@store.com
            </div>
        </div>
    );
}

export default Footer;

// DOM element
if (document.getElementById('footer')) {
    ReactDOM.render(<Footer />, document.getElementById('footer'));
}

