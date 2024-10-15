// select all the stars and save them into a variable
const stars = document.querySelectorAll('.rating-star')
// select the element containing the text representation of the value
const ratingText = document.querySelector('.rating-value')

// set the initial rating
let currentValue = 3;

// loop through the array of DOM elements (stars) and let them know what's
// supposed to happen when clicked
stars.forEach((star, index) => {
    // for each of the stars, assign the action that should happen
    star.addEventListener("click", () => {
        // purely informative - logs the index of the clicked star in the array
        console.log(index)
        // assigns the current value into the variable (e.g. 2nd star clicked => index is 1 =>
        //  to assign 2 based on the 1 we have, we need to assign index+1)
        currentValue = index + 1
        // update the displayed value to the one matching the star which was clicked
        ratingText.textContent = currentValue

        // loop through the array of stars (DOM elements) and...
        stars.forEach((comparedStar, comparisonIndex) => {
            // ...if the currently evaluated star's index in array is lower than the current value,
            //  e.g. for the current value 4, stars with index 0 to 3 match this condition,
            //  meaning first four stars match the condition...
            if (comparisonIndex < currentValue) {
                // add the class that is causing the star to be lit up
                //  (nothing happens if it already has it)
                comparedStar.classList.add('rating-star__on')
            } 
            // ...if it doesn't, e.g. for the current value 4, the star with index 4 doesn't match
            //  the condition...
            else 
            {
                // remove the class that is causing the star to be lit up
                //  (again nothing happens if it already doesn't have it)
                comparedStar.classList.remove('rating-star__on')
            }
        })
    })
});