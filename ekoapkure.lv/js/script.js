 	$(".slider").slick({
 		    dots: true,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
      }
    }
  ]
      });