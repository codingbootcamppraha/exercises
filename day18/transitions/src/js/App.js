export class App {

    constructor() {
        this.applied_transforms = [];

        this.textarea = null;
        this.animate = true;
    }

    render() {
        const div = document.createElement('div');
        div.innerHTML = (`
            <div class="transforms-app">
                <div class="stage">
                    <div class="box box--animated">BOX</div>
                </div>
                <div class="controls">
                    <label class="controls__animate">
                        <input type="checkbox" class="controls__animate-checkbox" checked />
                        Animate
                    </label>
                    <textarea class="controls__textarea" placeholder="Add your transformations here..."></textarea>
                </div>
            </div>
        `).trim();
        this.element = div.firstChild;

        this.box = this.element.querySelector('.box');

        this.textarea = this.element.querySelector('.controls__textarea');

        this.element.querySelector('.controls__animate-checkbox').addEventListener('change', ev => {
            this.animate = !!(ev.target.checked);

            this.box.classList.toggle('box--animated', this.animate);
        });

        this.textarea.addEventListener('input', ev => {
            const text = this.textarea.value;
            const m = text.match(/(\w+)\(([^)]*)\)/g);

            if (m && m.length) {
                this.box.style.transform = m.join(' ');
            } else {
                this.box.style.transform = 'none';
            }
        })
    }


    mount(container) {
        this.render();
        container.appendChild(this.element);
        return this.element;
    }
}