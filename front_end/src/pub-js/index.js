
//Weather info thingy
function getHoursAndMinutes(dt){
    const date = new Date(dt * 1000);
    const hours = date.getHours();
    const minutes = date.getMinutes().toString().padStart(2, "0");

    const specTime = `${hours}:${minutes}`;
    return specTime;
}


async function SearchCity() {
    const city = document.querySelector("#search-box").value;

    try{
        const res = await fetch(`http://localhost:5000/weather/${city}`);
        const data = await res.json();

        console.log(data);
        // console.log(forecastData);

        document.querySelector("#cityName").textContent = data.city;

        const countryCode = data.country;
        const regionNames = new Intl.DisplayNames(['en'], {type: 'region'});
        const fullNameCountry = regionNames.of(countryCode)
        document.querySelector("#country").textContent = fullNameCountry;
        document.querySelector("#temp").textContent = data.current.temp;
        document.querySelector("#description").textContent = data.current.description;
        document.querySelector("#icon").src = `http://openweathermap.org/img/wn/${data.current.icon}@2x.png`;
        document.getElementById("icon").classList.remove("hidden");

        document.querySelector("#wind").textContent = data.current.wind;

        const sunriseTime = data.current.sunrise;
        const sunriseDate = new Date(sunriseTime * 1000);
        //get hours and minutes
        const sr_hours = sunriseDate.getHours();
        const sr_minutes = sunriseDate.getMinutes().toString().padStart(2, "0");

        const sunriseSpecTime = `${sr_hours}:${sr_minutes}`

        document.querySelector("#sunrise").textContent = sunriseSpecTime;


        const sunsetTime = data.current.sunset;
        const sunsetDate = new Date(sunsetTime * 1000);
        //get hours and minutes
        const ss_hours = sunsetDate.getHours();
        const ss_minutes = sunsetDate.getMinutes().toString().padStart(2, "0");

        const sunsetSpecTime = `${ss_hours}:${ss_minutes}`

        document.querySelector("#sunrise").textContent = sunriseSpecTime;
        document.querySelector("#sunset").textContent = sunsetSpecTime;


        //forcecast data
        console.log(data.forecast);
        
        //forecast1
        const frcast = data.forecast;
        const Data_1 = frcast[0];

        const dt1_Time = getHoursAndMinutes(Data_1.dt);
        // console.log(dt1_Time);
        const dt1_temp = Data_1.main.temp;
        // console.log(Data_1.weather[0].icon);
        document.querySelector("#dt1_time").textContent = dt1_Time;
        document.querySelector("#dt1_temp").textContent = dt1_temp;
        document.querySelector("#dt1_icon").src = `http://openweathermap.org/img/wn/${Data_1.weather[0].icon}@2x.png`;

        const Data_2 = frcast[1];
        const dt2_Time = getHoursAndMinutes(Data_2.dt);
        // console.log(dt1_Time);
        const dt2_temp = Data_2.main.temp;
        // console.log(Data_1.weather[0].icon);
        document.querySelector("#dt2_time").textContent = dt2_Time;
        document.querySelector("#dt2_temp").textContent = dt2_temp;
        document.querySelector("#dt2_icon").src = `http://openweathermap.org/img/wn/${Data_2.weather[0].icon}@2x.png`;

        const Data_3 = frcast[2];
        const dt3_Time = getHoursAndMinutes(Data_3.dt);
        // console.log(dt1_Time);
        const dt3_temp = Data_3.main.temp;
        // console.log(Data_1.weather[0].icon);
        document.querySelector("#dt3_time").textContent = dt3_Time;
        document.querySelector("#dt3_temp").textContent = dt3_temp;
        document.querySelector("#dt3_icon").src = `http://openweathermap.org/img/wn/${Data_3.weather[0].icon}@2x.png`;

        document.getElementById("frc_content").classList.remove("hidden");
        document.getElementById("main_info").classList.remove("hidden");
        document.getElementById("weather-info").classList.remove("hidden");
        document.getElementById("frcast").classList.remove("hidden");
    } catch(err) {
        console.error("Error fetching weather: ", err);
    }
}   