const postcssPresetEnv = require('postcss-preset-env');
const postcssCombineMediaQuery = require('postcss-combine-media-query');

postcssPresetEnv({
    autoprefixer: {
        grid: true,
    },
    insertBefore: {
        'all-property': postcssCombineMediaQuery,
    },
});

module.exports = {
    plugins: [
        postcssPresetEnv,
    ]
};
