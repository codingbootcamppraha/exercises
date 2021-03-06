import {useState, useEffect} from "react";
import Greeting from './Greeting';
import UserList from "./UserList";

function App() {
    const [name, setName] = useState( 'world' );

    let secondName = 'world';

    const names = ['world', 'Slavo', 'Ondrej', 'Jan', 'Jana', 'Jade'];

    const greetings = names
        .filter((n, i) => i < 6)
        .map( ( n, i ) => (
            <Greeting key={i} name={n}/>
        ) );

    const [count, setCount] = useState(0);

    useEffect(() => {
        document.title = `You clicked ${count} times`;
        // document.title = 'You clicked ' + count + ' times';
    });

    return (
        <div>

            <div>
                <p>You clicked {count} times</p>
                <button onClick={() => {
                    setCount(count + 1)
                }}>
                    Click me
                </button>
            </div>

            { greetings }

            <Greeting name="world"/>
            <Greeting name="Slavo"/>
            <Greeting name="Ondrej"/>
            <Greeting name="Jan"/>

            <Greeting name={name}/>
            <Greeting name={secondName}/>

            <button onClick={() => {
                setName( 'Ondrej' );
                // secondName = 'Ondrej';
                // console.log(secondName);
            }}>
                Greet Ondrej!
            </button>

            <button onClick={() => {
                setName( 'Slavo' );
                // secondName = 'Slavo';
                // console.log(secondName);
            }}>
                Greet Slavo!
            </button>


            <UserList/>


        </div>
    );
}

export default App;