import React, { useState, useEffect } from 'react'

import Product from '../Product/Product.jsx'

export default function ProductList() {

    const [products_data, setProductsData] = useState([]);

    useEffect(() => {
        // pretend to run ajax

        // when data returns
        setProductsData([
            {
                "id": 1,
                "img_url": "https://classes.codingbootcamp.cz/assets/classes/workouts/aperture/propulsion-gel.jpg",
                "name": "Propulsion gel"
            },
            {
                "id": 2,
                "img_url": "https://classes.codingbootcamp.cz/assets/classes/workouts/aperture/weight-cube.jpg",
                "name": "Weight cube"
            },
            {
                "id": 3,
                "img_url": "https://classes.codingbootcamp.cz/assets/classes/workouts/aperture/friendly-cube.jpg",
                "name": "A friend"
            },
            {
                "id": 4,
                "img_url": "https://classes.codingbootcamp.cz/assets/classes/workouts/aperture/portal-gun.jpg",
                "name": "Portal gun"
            },
            {
                "id": 5,
                "img_url": "https://classes.codingbootcamp.cz/assets/classes/workouts/aperture/defense-robot.jpg",
                "name": "Home-defense robot"
            },
            {
                "id": 6,
                "img_url": "https://classes.codingbootcamp.cz/assets/classes/workouts/aperture/cake.jpg",
                "name": "Cake (definitely not a lie)"
            }
        ])
    }, []);

    return (
        <div className="product-list">

            <h1>Products</h1>

            <div className="product-list__list">

                {
                    products_data.map(item => (
                        <Product { ...item } key={ item.id } />
                    ))
                }

            </div>

        </div>
    )

}