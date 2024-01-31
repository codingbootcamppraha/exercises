class AJAXList {

    constructor() {

        this.button = document.querySelector('button');
        this.loader = document.querySelector('.ajax-list__loader');

        this.initialize();
    }

    initialize() {

        // when a button element is clicked
        this.attachClickListenerOnTheButton(async () => {

            // show and animated loader
            this.showTheLoader();

            // fetch some data from an API
            const data = await this.fetchAPIData();

            // create a UL with LIs
            this.generateAList(data);

            // hide the animated loader
            this.hideTheLoader();

        });

    }

    /**
     * receives a button element as argument
     * attaches an event listener to it
     */
    attachClickListenerOnTheButton(callback) {
        // when the button is clicked, run a function
        this.button.addEventListener('click', callback)
    }

    /**
     * show the loader element
     */
    showTheLoader() {
        this.loader.classList.remove('loader--hidden')
    }

    /**
     * fetch data from my endpoint
     * and return it
     */
    async fetchAPIData() {
        const response = await fetch('https://my-web.com/my-endpoint');

        const data = await response.json();

        return data;
    }

    /**
     * generate a UL from the given data
     */
    generateAList(data) {

        const ul = document.querySelector('ul');
        ul.innerHTML = '';

        data.forEach(item => {
            ul.innerHTML += '<li>'+item.name+'</li>';
        })

    }

    /**
     * hides the loader
     */
    hideTheLoader() {
        this.loader.classList.add('loader--hidden')
    }

}