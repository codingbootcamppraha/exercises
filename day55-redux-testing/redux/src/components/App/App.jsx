import React from 'react'

import Header from '../Header/Header.jsx'
import ProductList from '../ProductList/ProductList.jsx'
import Filter from '../Filter/Filter.jsx'
import Cart from '../Cart/Cart.jsx'
import Footer from '../Footer/Footer.jsx'

export default function App() {

    return (
        <>

            <Header />

            <main>
                <div className="sidebar">

                    <Filter />

                    <Cart />

                </div>

                <div className="main-content">

                    <ProductList />

                </div>

            </main>

            <Footer />

        </>
    )

}