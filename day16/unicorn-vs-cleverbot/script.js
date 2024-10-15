import { conversation as data } from "./scripts/chat";
import Container from "./scripts/Container";
import generateMessage from "./scripts/generateMessage";
import Message from "./scripts/Message";

const messageObject = new Message('local', 'test', 'This is my class message');
console.log(messageObject)

const conversationObject = new Container('.conversation');

let indexToGenerate = 0; 

setInterval(() => {
    generateMessage(data[indexToGenerate], conversationObject);
    indexToGenerate++;
}, 500);