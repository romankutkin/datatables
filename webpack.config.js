const path = require('path');

module.exports = {
    mode: 'development',
    entry: './resources/js/index.js',
    module: {
        rules: [
            {
                test: /\.s[ac]ss$/i,
                use: [
                    "style-loader",
                    "css-loader",
                    "sass-loader",
                ],
            },
            {
                test: /\.(js|jsx)$/i,
                exclude: /node_modules/,
                use: {
                    loader: "babel-loader"
                }
            },
        ],
    },
    output: {
        path: path.resolve(__dirname, 'public/bundles'),
        filename: 'main.bundle.js',
    },
};
