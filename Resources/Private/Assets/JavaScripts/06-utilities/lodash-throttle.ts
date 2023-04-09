import { throttle } from '../../../../../Tools/node_modules/lodash';

const init = ($callback) => {
    throttle($callback);
};

export {
    init as default,
};
