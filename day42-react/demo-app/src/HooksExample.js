import {useEffect, useState} from "react";

function HooksExample() {
    const [count, setCount] = useState(0);
    const [count2, setCount2] = useState(0);

    // console.log('rendering HooksExample component');

    useEffect(() => {

        console.log('something has changed')

    });

    useEffect(() => {

        console.log('I am loading data from server');

    }, []);


    useEffect(() => {
        document.title = `You clicked ${count} and ${count2} times `;
        // document.title = 'You clicked ' + count + ' times';
    }, [count, count2]);

    useEffect(() => {
        console.log(`You clicked ${count} times`);
    }, [count]);


    return (
        <div>
            <p>You clicked {count} times</p>
            <button onClick={() => {
                setCount(count + 1)

                // the value count has not been changed yet
                // document.title = `You clicked ${count} times`;
            }}>
                Click me
            </button>


            <p>You clicked {count2} times</p>
            <button onClick={() => {
                setCount2(count2 + 1)

                // the value count has not been changed yet
                // document.title = `You clicked ${count} times`;
            }}>
                Click me 2
            </button>
        </div>
    );
}

export default HooksExample