export default class Message {
    constructor(side, name, text) {
        this.side = side;
        this.name = name;
        this.text = text;
    }

    createMessageHtml = () => {
        return `<div class="message message--${this.side}">
            <div class="message__text">
                ${this.text}
            </div>
        </div>`
    }
}