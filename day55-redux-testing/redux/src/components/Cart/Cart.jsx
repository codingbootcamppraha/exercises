import React, { useState, useEffect } from 'react'
import { useSelector } from 'react-redux';

export default function Cart() {

    const [items, setItems] = useState([]);

    const selectCartProducts = state => {
        return state.cart.products;
    }

    const products = useSelector(selectCartProducts);

    return (
        <div className="cart">

            There are { products.length } products in the cart.

            <button>Clear the cart</button>

        </div>
    )
}
