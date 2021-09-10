module.exports = {
    purge: [],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', 'sans-serif'],
            },
        },
    },
    variants: {
        extend: {
            display: ['group-focus', 'group-hover'],
            margin: ["group-hover"],
            animation: ['motion-safe'],
            visibility: ["group-hover"]
        },
    },
    plugins: [],
}