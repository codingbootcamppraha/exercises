// Reducer function to handle currency and rate changes
export default function reducer(state, action) {
  switch (action.type) {
    case 'SET_CURRENCY':
      return { ...state, currency: action.payload };
    case 'SET_RATE':
      return { ...state, rate: action.payload };
    default:
      return state;
  }
}
