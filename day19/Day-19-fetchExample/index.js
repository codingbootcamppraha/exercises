const button = document.querySelector(".button");
const ratingName = document.querySelector(".name");
const ratingValue = document.querySelector(".rating");
const errorMessage = document.querySelector(".error");

const postRating = async (nameValue, rating) => {
  const url = "https://test-api.codingbootcamp.cz/api/3676a9bb/ratings";

  const myData = {
    rating_subject: nameValue,
    rating_value: rating,
  };
  const options = {
    method: "POST",
    body: JSON.stringify(myData),
    headers: {
      "Content-Type": "application/json",
    },
  };

  const data = await fetch(url, options);
  const response = await data.json();
  console.log(response);
  if (response.status == "success") {
    ratingName.value = "";
    ratingValue.value = 0;
  } else {
    errorMessage.textContent = "you are not as smart as you thought right?";
  }
};

button.addEventListener("click", () => {
  const nameValue = ratingName.value;
  const rating = ratingValue.value;
  postRating(nameValue, rating);
});
