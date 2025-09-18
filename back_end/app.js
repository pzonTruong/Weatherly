console.log("Backend start working.....")

import dotenv from "dotenv";
import express from "express";
import cors from "cors";
import fetch from "node-fetch";

//load .env file
dotenv.config()
const API_KEY = process.env.OPENWEATHER_API_KEY;

console.log("Loaded API key:", process.env.OPENWEATHER_API_KEY);

const app = express();
app.use(cors());
app.use(express.json());

app.get("/weather/:city", async (req, res) => {

    const city = req.params.city;

    try {
        const currentRes = await fetch(
            `https://api.openweathermap.org/data/2.5/weather?q=${city}&units=metric&appid=${API_KEY}`
        );

        const currentData = await currentRes.json();

        const forecastRes = await fetch(
            `https://api.openweathermap.org/data/2.5/forecast?q=${city}&units=metric&appid=${API_KEY}`
        );

        const forecastData = await forecastRes.json();

        console.log("Raw: ", forecastData);

        res.json({
            city: currentData.name,
            country: currentData.sys.country,
            current: {
                temp: currentData.main.temp,
                description: currentData.weather[0].description,
                icon: currentData.weather[0].icon,
                wind: currentData.wind.speed,
                sunrise: currentData.sys.sunrise,
                sunset: currentData.sys.sunset,
                min: currentData.main.temp_min,
                max: currentData.main.temp_max,
            },

            forecast: forecastData.list.slice(0, 3),
        });

    } catch (error) {

        res.status(500).json({ error: "Failed to fetch weather data." });
    }
});

const PORT = process.env.PORT || 5000;
app.listen(PORT, () => console.log(`Server running on port ${PORT}`));