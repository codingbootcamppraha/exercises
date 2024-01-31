// functions.js

/**
 * finds a button in the document
 */
const findTheButton = () => {
    const button = document.querySelector('button');

    return button;
}

/**
 * receives a button element as argument
 * attaches an event listener to it
 */
const attachClickListenerOnTheButton = (button, myFunction) => {
    // when the button is clicked, run a function
    button.addEventListener('click', myFunction)
}

/**
 * show the loader element
 */
const showTheLoader = () => {
    const loader = document.querySelector('.loader');

    loader.classList.remove('loader--hidden')
}

/**
 * fetch data from my endpoint
 * and return it
 */
const fetchAPIData = async () => {
    const response = await fetch('https://my-web.com/my-endpoint');

    const data = await response.json();

    return data;
}

/**
 * generate a UL from the given data
 */
const generateAList = data => {

    const ul = document.querySelector('ul');
    ul.innerHTML = '';

    data.forEach(item => {
        ul.innerHTML += '<li>'+item.name+'</li>';
    })

}

/**
 * hides the loader
 */
const hideTheLoader = () => {
    const loader = document.querySelector('.loader');

    loader.classList.add('loader--hidden')
}