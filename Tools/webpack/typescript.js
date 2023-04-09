const path = require('path');
const webpack = require('webpack');

const BabelLoaderOptions = {
    presets: [
        [
            '@babel/preset-env',
            {
                useBuiltIns: 'usage',
                corejs: 3,
            },
        ],
    ],
    plugins: [
        '@babel/plugin-transform-modules-commonjs',
        '@babel/plugin-transform-runtime',
    ],
};

module.exports = {
    module: {
        rules: [
            {
                test: /\.(tsx?)$/,
                exclude: [
                    path.resolve(__dirname, '../node_modules'),
                ],
                use: [
                    {
                        loader: 'babel-loader',
                        options: BabelLoaderOptions,
                    },
                    {
                        loader: 'ts-loader',
                        options: {
                            transpileOnly: true,
                        },
                    },
                ],
            },
            {
                test: /\.(jsx?)$/,
                include: [
                    // Add all paths to node modules here that don't rely on es5
                ],
                use: [
                    {
                        loader: 'babel-loader',
                        options: BabelLoaderOptions,
                    },
                ],
            },
        ]
    },
};