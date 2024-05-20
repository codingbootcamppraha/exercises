import Message from "./Message";

export default class LocalMessage extends Message {
    
    deleteForAll = () => {
        console.log('Imagine it deletes it')
    }
}