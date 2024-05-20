import Message from "./Message";

const generateMessage = (messageData, container) => {
    const newMessageObject = new Message(messageData.side, messageData.name, messageData.text);

    container.addMessage(newMessageObject.createMessageHtml());
    // container.addMessage() > container.innerHtml += ...
}

export default generateMessage;