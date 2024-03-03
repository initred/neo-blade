import colors from 'tailwindcss/colors'

module.exports = {
    content: [
        './vender/initred/neo-blade/resources/views/**/*.blade.php',
        './vender/initred/neo-blade/config/neo-blade.php',
        './config/neo-blade.php',
    ],
    theme: {
        extend: {
            colors: {
                primary: colors.sky,
                secondary: colors.gray,
                success: colors.green,
                info: colors.blue,
                warning: colors.yellow,
                danger: colors.red
            },
        }
    },
}
