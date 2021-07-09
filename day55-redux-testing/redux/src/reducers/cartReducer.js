const initialState = {
    products: []
}

export default function cartReducer(state = initialState, action) {

    console.log(action);

    switch (action.type) {
        case 'cart/addProduct': {
            return {
                ...state,
                products: state.products.concat(action.payload)
            }
        }

        case 'cart/clear': {
            return {
                ...state,
                products: []
            }
        }
    }

    return state;

}