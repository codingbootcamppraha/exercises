import {useState, useEffect} from "react";

function Joke() {
    const [joke, setJoke] = useState( null );
    const [deliveryVisible, setDeliveryVisible] = useState( false );

    async function fetchJoke() {
        const response = await fetch( 'https://v2.jokeapi.dev/joke/Any' );
        const data = await response.json();

        console.log( data );
        setJoke( data );
    }

    useEffect( () => {
        // Joke has changed, lets hide the delivery
        setDeliveryVisible( false );

        // if joke exists and it is type `twopart` lets show deliver after 3000 ms
        if ( joke && joke.type === 'twopart' ) {
            setTimeout( () => setDeliveryVisible( true ), 3000 );
        }
    }, [joke] );

    useEffect( () => {
        fetchJoke();
    }, [] )

    if ( joke === null ) return null;


    return (
        <div>

            {
                joke.type === "twopart" ? (
                    <>
                        <h1>{joke.setup}</h1>
                        {deliveryVisible && ( <h2>{joke.delivery}</h2> )}
                    </>
                ) : (
                    <>
                        <h1>{joke.joke}</h1>
                    </>
                )
            }

            <button
                onClick={() => {
                    fetchJoke()
                }}
            >
                Fetch!
            </button>
        </div>
    )
}

export default Joke