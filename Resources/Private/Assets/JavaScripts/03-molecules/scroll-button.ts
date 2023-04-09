import * as $ from '../../../../../Tools/node_modules/jquery';

const handleScrollButton = () => {
  const main = $('.main');
  const button = main.find('.btn--scroll-top');

  if (button.length) {
    button.on('click', () => $('html, body').animate({scrollTop: 0}));
  }
};

const init = () => {
  handleScrollButton();
};

export {
  init as default,
  handleScrollButton,
};
