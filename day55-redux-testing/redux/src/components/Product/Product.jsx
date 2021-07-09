import React from 'react'
import { useDispatch } from 'react-redux';

export default function Product(props) {

    const dispatch = useDispatch();

    const addToCart = event => {
        event.preventDefault();

        dispatch({
            type: 'cart/addProduct',
            payload: props.id
        });
    }

    return (

        <div className="product-list__product product">

            <img className="product__image" src={ props.img_url } alt={ props.name } />

            <div className="product__name">{ props.name }</div>

            <button className="product__add-to-cart" onClick={ addToCart }>Add to cart</button>

        </div>
    )
}

