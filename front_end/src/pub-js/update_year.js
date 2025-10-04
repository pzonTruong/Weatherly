const ele = document.querySelector(".btm-note");

const year = new Date().getUTCFullYear();
console.log("Current year: ", year);

ele.innerHTML = `© ${year} Weatherly. All rights reserved.`
