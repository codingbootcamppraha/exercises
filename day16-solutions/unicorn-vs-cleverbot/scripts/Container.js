
export default class Container {
    constructor(selector) {
        this.element = document.querySelector(selector);
    }

    addMessage = (messageHtml) => {
        this.element.innerHTML += messageHtml;
    }
}