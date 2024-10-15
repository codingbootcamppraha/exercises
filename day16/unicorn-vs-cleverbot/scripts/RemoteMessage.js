import Message from "./Message";

export default class RemoteMessage extends Message {
    constructor(side, name, text) {
        super(side, name, text);

        this.colour = "blue";
    }

    reactToIt = () => {

    }
}