/*
let counts
let products
let link_menu
let logo

// 1000s lines later

logo = null
*/

class Page {

    constructor() {
        this.header = new Header;
        this.navigation = new Navigation;
        this.product_list = new ProductList;
        this.footer = new Footer;
    }
}

class Header {

    constructor() {
        this.logo = document.querySelector('header .logo');
    }

    addClickEventOnLogo() {
        // attaches click event listener on logo

        // .... this.animate()
    }

    animate() {
        // runs when the logo is clicked
    }
}

class Navigation {

}

class ProductList {
    constructor() {
        this.products = [];
    }

    async loadDataFromAPI() {
        // makes a fetch

        const data = await response.json();

        this.makeProductsFromData(data);
    }

    makeProductsFromData(data) {
        data.forEach(productData => {
            this.products.push( new Product(productData) );
        });
    }
}

class Product {
    constructor(data) {
        // take data from the construction
        // and use it as properties of this object
        this.name = data.name;
        this.price = data.price;

        this.canBeBought = true;
        this.inCart = 0;
    }

    buyButtonClicked() {
        this.inCart++;

        // if this item collides with another one in the cart
        // this.canBeBought = false;
    }

    render() {
        return `
            <div class="product">
                <div class="name">${this.name}</div>
                <button class="buy"></button>

                <div class="in-cart">1</div>
            </div>

        `
    }
}

class Footer {

}