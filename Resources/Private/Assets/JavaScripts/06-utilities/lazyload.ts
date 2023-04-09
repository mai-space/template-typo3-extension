import LazyLoad from '../../../../../Tools/node_modules/vanilla-lazyload';

const init = () => {
  const lazyLoad = new LazyLoad({
    class_loaded: 'lazyloaded',
    elements_selector: '.lazyload',
    use_native: true,
  });

  lazyLoad.update();
};

export {
  init as default,
};
