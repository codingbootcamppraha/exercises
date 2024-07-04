import FizzBuzz from "./FizzBuzz";

function App() {
    const createNumbers = () => {
        let numbers = [];
        for (let number = 1; number <= 100; number++) {
            numbers.push(number)
        }

        return numbers;
    }

    return <FizzBuzz numbers={createNumbers()}/>
}

export default App
