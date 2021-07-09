import React from 'react'
import { useSelector } from 'react-redux';

export default function CartCounter() {

    const selectCartProducts = state => {
        return state.cart.products;
    }

    const products = useSelector(selectCartProducts);

    return (
        <div className="cart-counter">
            <div className="cart-counter__count">{ products.length }</div>
        </div>
    )
}


