import {useState} from "react";
import Greeting from './Greeting';
import UserList from "./UserList";
import HooksExample from "./HooksExample";
import Counter from "./Counter";
import FetchPromises from "./FetchPromises";
import FetchAsync from "./FetchAsync";

function App() {

    const [name, setName] = useState( 'world' );


    // const [name, setName] = useState( 'world' );

    let secondName = 'world';

    const names = ['world', 'Slavo', 'Ondrej', 'Jan', 'Jana', 'Jade'];

    const greetings = names
        .filter( ( n, i ) => i < 6 )
        .map( ( n, i ) => (
            <Greeting key={i} name={n}/>
        ) );

    return (
        <div>

            <FetchPromises/>
            <FetchAsync/>

            <Counter/>

            <HooksExample/>

            {greetings}

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