import {useEffect, useState} from 'react';

function Counter(){
    const [count, setCount] = useState(0);

    useEffect(() => {
        console.log('User entered this page');

        const timer = setInterval(() => {
            console.log('change the counter', count);
            setCount(count + 1);
        }, 1000);

        return () => clearInterval(timer);

    }, [count]);


    return (
        <h1>Count: {count}</h1>
    )

}

export default Counter;