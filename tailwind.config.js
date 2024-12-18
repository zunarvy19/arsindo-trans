import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            colors: {
                primary: "#0174BE",
                secondary: "#FFC436",
                tertiary: "#667185",
            },
            backgroundImage: {
                "hero-home": "url('public/img/heroHome.png')",
            },
        },
        daisyui: {
            themes: ["light"],
            darkTheme: "light",
        },
    },

    plugins: [forms, require("flowbite/plugin"), require("daisyui")],
};
