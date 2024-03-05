const book = {
    title: 'Title of book',
    year: 2004,
    price: 13.99,
    in_stock: 452
}

book.title // 'Title of book'
book.price // 13.99

book['title'] // 'Title of book'
book['price'] // 'Title of book'


const propName = 'language'

const book2 = {
    title: 'Title of book',
    year: 2004,
    price: 13.99,
    in_stock: 452,
    [propName]: 'cz'    // language: 'cz'
}

const { year: yearOfRelease, price, ...otherProps } = book2;

// yearOfRelease = 2004
// price = 13.99

// otherProps = { title: 'Title of book', in_stock: 452, language: 'cz' }


const { ...allProps } = book2;

book2.year
book2.price

allProps.year
allProps.price

const person = {
    name: 'John',
    email: 'john@email.com',
    position: 'accounant',
    company_name: 'Ponzi Accounting Group',
}

const sale = {
    date: '01-01-2020',
    total: 1567.23,
    currency: 'CZK',
    item_count: 6,
}

const newObject = {
    ...person,
    ...sale
}

const testObject = {
    name: 'John',
    name: 'Jane'
}

// testObject = {
//     name: 'Jane'
// }

const updatedPerson = {
    ...person,
    position: 'CEO'
}

// {
//     name: 'John',
//     email: 'john@email.com',
//     position: 'CEO',
//     company_name: 'Ponzi Accounting Group',
// }