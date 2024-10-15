import LocalMessage from "./LocalMessage";
import RemoteMessage from "./RemoteMessage";

const generateMessage = (messageData, container) => {

    if (messageData.side === 'local') {
        const newMessageObject = new LocalMessage(messageData.side, messageData.name, messageData.text);
        container.addMessage(newMessageObject.createMessageHtml());
    } else {
        const newMessageObject = new RemoteMessage(messageData.side, messageData.name, messageData.text);
        container.addMessage(newMessageObject.createMessageHtml());
    }

    // container.addMessage() > container.innerHtml += ...
}

export default generateMessage;