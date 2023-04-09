import Splide from '../../../../../Tools/node_modules/@splidejs/splide';

const { documentElement } = document;

const $direction: any = documentElement.getAttribute('dir');

const slideOne = (carousel: HTMLElement) => {
  const items = carousel.querySelector<HTMLElement>('.splide__list');

  const instance = new Splide(carousel, {
    type: 'loop',
    direction: $direction,
    autoplay: false,
    drag: items && items.children && items.children.length > 1,
    perPage: 1,
    gap: 20,
  });

  instance.mount();
};

const slideTwo = (carousel: HTMLElement) => {
  const items = carousel.querySelector<HTMLElement>('.splide__list');

  const instance = new Splide(carousel, {
    type: 'loop',
    direction: $direction,
    autoplay: false,
    drag: items && items.children && items.children.length > 2,
    perPage: 2,
    gap: 20,
    breakpoints: {
      640: {
        drag: items && items.children && items.children.length > 1,
        perPage: 1,
      },
    },
  });

  instance.mount();
};

const slideThree = (carousel: HTMLElement) => {
  const items = carousel.querySelector<HTMLElement>('.splide__list');

  const instance = new Splide(carousel, {
    type: 'loop',
    direction: $direction,
    autoplay: false,
    drag: items && items.children && items.children.length > 3,
    perPage: 3,
    gap: 20,
    breakpoints: {
      800: {
        drag: items && items.children && items.children.length > 2,
        perPage: 2,
      },
      640: {
        drag: items && items.children && items.children.length > 1,
        perPage: 1,
      },
    },
  });

  instance.mount();
};

const handleCarousels = () => {
  const carouselsSingle = document.querySelectorAll<HTMLElement>('.carousel--single > div');
  const carouselsDouble = document.querySelectorAll<HTMLElement>('.carousel--double > div');
  const carouselsTriple = document.querySelectorAll<HTMLElement>('.carousel--triple > div');

  carouselsSingle.forEach((carouselSingle) => {
    slideOne(carouselSingle);
  });

  carouselsDouble.forEach((carouselDouble) => {
    slideTwo(carouselDouble);
  });

  carouselsTriple.forEach((carouselTriple) => {
    slideThree(carouselTriple);
  });
};

const init = () => {
  handleCarousels();
};

export {
  init as default,
  handleCarousels,
  slideOne,
  slideTwo,
  slideThree,
};
