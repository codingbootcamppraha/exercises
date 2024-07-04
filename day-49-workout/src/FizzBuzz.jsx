import { useEffect, useState } from "react";

const FizzBuzz = ({numbers}) => {
    const [array, setArray] = useState([]);

    useEffect(() => {
        let fizzbuzzArray = [];
        numbers.forEach(number => {
            if (number % 3 === 0 && number % 5 === 0) {
                fizzbuzzArray.push('FizzBuzz');
            } else if (number % 3 === 0) {
                fizzbuzzArray.push('Fizz');
            } else if (number % 5 === 0) {
                fizzbuzzArray.push('Buzz');
            } else {
                fizzbuzzArray.push(number);
            }
        });
        setArray(fizzbuzzArray);
    }, [])
    
    return (
        array.length > 0 ?
            <ol>
                {
                    array.map(element => {
                        return <li>{element}</li>
                    })
                }
            </ol>
        : ''
    )
}

export default FizzBuzz;