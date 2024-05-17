const padlock = document.querySelector('.padlock');
const text = document.querySelector('.text');
let displayed = false;

const toggleTextDisplay = () => {
    text.style.display = displayed ? 'none' : 'block';
    displayed = !displayed;
}

const addListeners = (element) => {
    element.addEventListener('mouseenter', toggleTextDisplay)
    element.addEventListener('mouseleave', toggleTextDisplay)
}

const removeListeners = (element) => {
    element.removeEventListener('mouseenter', toggleTextDisplay);
    element.removeEventListener('mouseleave', toggleTextDisplay);
}

padlock.addEventListener('click', () => {

    if (padlock.classList.contains('padlock_clicked')) {
        addListeners(padlock)
    } else {
        removeListeners(padlock)
    }
    
    padlock.classList.toggle('padlock_clicked')
    
})


addListeners(padlock)
