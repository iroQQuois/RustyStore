import React from 'react';
import ReactDOM from 'react-dom';
import Nav from "./Nav";

function Header() {
    return (
        <div className='header'>
            <a className='header__logo' href="/"/>
            <ul className="header__ul">
                <li><a href="/login">Войти</a></li>
                <li><a href="/register">Зарегистрироваться</a></li>
                <li><a href="/support">Поддержка</a></li>
            </ul>
            <h1 className="h1">RustyStore</h1>
            <Nav />
        </div>
    );
}

export default Header;

// DOM element
if (document.getElementById('header')) {
    ReactDOM.render(<Header />, document.getElementById('header'));
}

