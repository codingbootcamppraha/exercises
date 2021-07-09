import React from 'react';

import UserInfo from '../UserInfo/UserInfo.jsx';
import CartCounter from '../CartCounter/CartCounter.jsx';

export default function Header() {

    return (
        <header>
            <img src="https://classes.codingbootcamp.cz/assets/classes/workouts/aperture.png" alt="Aperture science" className="logo" />

            <nav>
                <a href="/">Home</a>
                <a href="/" className="current">Products</a>
                <a href="/">Stores</a>
            </nav>

            <CartCounter />

            <UserInfo />

        </header>
    )

}