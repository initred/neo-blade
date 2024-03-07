import colors from 'tailwindcss/colors'

/** @type {import('tailwindcss').Config} */
module.exports = {
    theme: {
        extend: {
            colors: {
                success: colors.green,
                info: colors.blue,
                warning: colors.yellow,
                danger: colors.red
            },
        }
    },
}
