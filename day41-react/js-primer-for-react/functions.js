// ES5
function myFunc(a, b) {
    return a + b;
}

// ES6+ arrow function
const myFunc = (a, b) => {
    return a + b;
}

// anonymous function
(a, b) => {
    return a + b;
}

a => {
    return a + 1;
}

const myOtherFunction = a => a + 1

myOtherFunction(3)


doThis(a => a + 1)

const makeMeAFunction = () => {
    return a => a + 1
}

doThis( makeMeAFunction )
doThis( makeMeAFunction() )

const drill = () => {
    return 'hole';
}

hereYouGo( drill )      // gives the drill

hereYouGo( drill() )    // gives a hole

const button = document.querySelector('#my-button');

button.addEventListener('click', drill )