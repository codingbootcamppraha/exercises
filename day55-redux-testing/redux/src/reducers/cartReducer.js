const initialState = {
    products: []
}

export default function cartReducer(state = initialState, action) {

    switch (action.type) {
        case 'cart/addProduct': {
            return {
                ...state,
                products: state.products.concat(action.payload)
            }
        }
    }

    return state;

}