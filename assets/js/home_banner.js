var typed = new Typed(".typed-words", {
    strings: [
      "Web Development",
      "Mobile Development",
      "Email Newsletter (EDM)",
      "Wordpress",
      "ReactJS",
      "AngularJS",
      "React Native",
      "PHP ZEND &amp; Magento|"
    ],
    typeSpeed: 30,
    backSpeed: 30,
    backDelay: 2000,
    startDelay: 1000,
    loop: false,
    onComplete: function () {
        $(".typed-cursor").hide();
    }
      });
  