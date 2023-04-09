module.exports = {
  root: true,

  // allows ESLint to understand TypeScript syntax
  // converts TypeScript into an ESTree-compatible form so it can be used in ESLint
  parser: '@typescript-eslint/parser',

  parserOptions: {
    project: './tsconfig.json',
  },

  plugins: [
    '@typescript-eslint',
  ],

  extends: [
    'airbnb-base',
    'airbnb-typescript/base',
  ],

  rules: {
    "max-len": [
      "warn",
      {
        "code": 200
      }
    ],
    "no-console": [
      "warn",
      {
        "allow": [
          "error"
        ]
      }
    ],
    "no-param-reassign": 0,
    "no-restricted-exports": 0,
  }
};
