const path = require("path");
const webpack = require('webpack');

const HtmlWebPackPlugin = require('html-webpack-plugin');

module.exports = {
    module: {
        rules: [
            {
                test: /\.(hbs)$/i,
                use: [
                    {
                        loader: 'handlebars-loader'
                    }
                ]
            },
        ]
    },
};
