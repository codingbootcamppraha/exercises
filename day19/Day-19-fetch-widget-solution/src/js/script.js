import { Rating } from "./components/Rating";

const rating = new Rating({subject: "my favorite movie", startingValue: 4})

document.querySelector("#target").appendChild(rating.element)