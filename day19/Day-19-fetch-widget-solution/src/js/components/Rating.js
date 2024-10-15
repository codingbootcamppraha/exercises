export class Rating {
    constructor(properties) {
        this.element = document.createElement("div");
        this.element.classList.add("rating");
        this.ratingValue = properties.startingValue;
        this.ratingSubject = properties.subject;

        this.myApiKey = ""
        this.stars = null
        this.refreshRatingWidget()
    }
    refreshRatingWidget = () => {
        this.element.innerHTML = `
            <div class="rating__value">${this.ratingValue}</div>
            <div class="rating__stars">
                <div class="rating__star"></div>
                <div class="rating__star"></div>
                <div class="rating__star"></div>
                <div class="rating__star"></div>
                <div class="rating__star"></div>
            </div>
        `
        this.stars = this.element.querySelectorAll(".rating__star");
        console.log(this.stars);
        this.stars.forEach((star, index) => {
            index < this.ratingValue && star.classList.add("rating__star--on")
            star.addEventListener(("click"), () => {
                this.setRating(index)
            })
        })
    }
    // setting rating and refreshing widget
    setRating = async (i) => {
        this.ratingValue = i + 1;

        const response  = await this.postRating()
        console.log(response);

        this.refreshRatingWidget();
    }

    postRating = async () => {
        const url = `https://test-api.codingbootcamp.cz/api/${this.myApiKey}/ratings`
        const dataObject = {
            "rating_value": this.ratingValue,
            "rating_subject": this.ratingSubject
        };

        const postResponse = await fetch(url, {
            "method": "POST",
            "body": JSON.stringify(dataObject),
            "headers": {
                'Content-Type': 'application/json'
            }
        })

        const postReadableResponse = await postResponse.json()

        console.log(postReadableResponse);

    }
}