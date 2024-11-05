export const SET_CURRENCY = 'SET_CURRENCY';
export const SET_RATE = 'SET_RATE';

export const setCurrency = (currency) => ({
  type: SET_CURRENCY,
  payload: currency,
});

export const setRate = (rate) => ({
  type: SET_RATE,
  payload: rate,
});
