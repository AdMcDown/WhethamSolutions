$(document).ready(function() {
    $('.images-container').magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'image',
        closeOnContentClick: true,
        cursor: 'mfp-zoom-out-cur'
        // other options
      });
  });