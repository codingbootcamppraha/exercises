function DayForecast({weekday, weather, tempDay, tempNight}) {

    return <div class="day-forecast">
        <div class="day-forecast__header">{weekday}</div>
        <div class="day-forecast__body">
        <div class={"day-forecast__image weather-" + weather}></div>
        <div class="day-forecast__temps">
            <span class="temp-day">{tempDay}°</span>
            <span class="temp-night">{tempNight}°</span>
        </div>
        </div>
    </div>
}

export default DayForecast;