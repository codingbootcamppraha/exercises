export class App {

    constructor() {
        this.applied_transforms = [];

        this.textarea = null;
        this.animate = true;
    }

    render() {
        const div = document.createElement('div');
        div.innerHTML = (`
            <div class="animations-app">
                <div class="stage">
                    <div class="box">BOX</div>
                </div>
                <div class="controls">
                    <button class="controls__animate-toggle">Toggle .box--animated class</button>
                </div>
            </div>
        `).trim();
        this.element = div.firstChild;

        this.box = this.element.querySelector('.box');

        this.element.querySelector('.controls__animate-toggle').addEventListener('click', ev => {
            this.box.classList.toggle('box--animated');
        });
    }


    mount(container) {
        this.render();
        container.appendChild(this.element);
        return this.element;
    }
}