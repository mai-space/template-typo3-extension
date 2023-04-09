import '../../../../Tools/node_modules/core-js/stable/promise';

// Types & Interfaces
type ScriptOptions = {
    [key: string]: object
};

type ObjectOptions = {
    [key: string]: string | any
};

// Variables
const $generic: ObjectOptions = {
};

const $atoms: ObjectOptions = {
};

const $molecules: ObjectOptions = {
    carousel: 'carousel',
    'btn--scroll-top': 'scroll-button',
};

const $organisms: ObjectOptions = {
};

const $templates: ObjectOptions = {
};

const $utilities: ObjectOptions = {
    lazyload: 'lazyload',
    container: 'bootstrap',
};

const $scripts: ScriptOptions = {
    '01-generic': $generic,
    '02-atoms': $atoms,
    '03-molecules': $molecules,
    '04-organisms': $organisms,
    '05-templates': $templates,
    '06-utilities': $utilities,
};

// Functions
const loadScripts = (folder: string, object: ObjectOptions) => {
    Object.keys(object).forEach((key) => {
        if (!Object.prototype.hasOwnProperty.call(object, key)) {
            return;
        }

        const single = document.querySelector<HTMLElement>(`.${key}`);

        if (typeof single !== 'undefined' && single !== null) {
            // @ts-ignore
            import(
                /* webpackChunkName: '[request]' */
                `./${folder}/${object[key]}`
                )
                .then((module) => module.default())
                .catch((error) => console.error(`Unfortunately the ${object[key]} script throws an error. Complete message: ${error}`));
        }
    });
};

const init = () => {
    Object.keys($scripts).forEach((key) => {
        if (!Object.prototype.hasOwnProperty.call($scripts, key)) {
            return;
        }

        loadScripts(key, $scripts[key]);
    });
};

window.addEventListener('load', () => init());
