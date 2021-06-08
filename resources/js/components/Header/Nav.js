import React from 'react';

function Nav() {
    return (
        <div className='nav'>
            <div className="nav__dropdown"><a className="nav__a" href="/category/smartphones">Смартфоны</a>
                <div className="nav__dropdown-child">
                    <a href="/category/smartphones/apple">Apple</a>
                    <a href="/category/smartphones/samsung">Samsung</a>
                    <a href="/category/smartphones/xiaomi">Xiaomi</a>
                </div>
            </div>

            <div className="nav__dropdown"><a className="nav__a" href="/category/tablets">Планшеты</a>
                <div className="nav__dropdown-child">
                    <a href="/category/tablets/apple">Apple</a>
                    <a href="/category/tablets/lenovo">Lenovo</a>
                </div>
            </div>


            <div className="nav__dropdown"><a className="nav__a" href="/category/notebooks">Ноутбуки</a>
                <div className="nav__dropdown-child">
                    <a>В данный момент нет в наличии</a>
                </div>
            </div>
        </div>
    );
}

export default Nav;
