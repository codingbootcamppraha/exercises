const runApp = () => {

    // when a button element is clicked
    const button = findTheButton();
    attachClickListenerOnTheButton(button, async () => {

        // show and animated loader
        showTheLoader();

        // fetch some data from an API
        const data = await fetchAPIData();

        // create a UL with LIs
        generateAList();

        // hide the animated loader
        hideTheLoader();

    });

}
