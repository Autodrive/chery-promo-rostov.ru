(function() {
  var width = $(window).width();
  console.log(width);
  if (width < 570) {
    var _id = "d284d4772cc6e7053f60625fdda284db";
    while (document.getElementById("timer" + _id)) _id = _id + "0";
    document.write(
      "<div id='timer" + _id + "' style='min-width:297px;height:62px;'></div>"
    );
    var _t = document.createElement("script");
    _t.src = "//megatimer.ru/timer/timer.min.js?v=1";
    var _f = function(_k) {
      var l = new MegaTimer(_id, {
        view: [1, 1, 1, 1],
        type: {
          currentType: "3",
          params: {
            weekdays: [1, 1, 1, 1, 1, 1, 1],
            usertime: true,
            time: "23:59",
            tz: -180,
            hours: "24",
            minutes: "00",
          },
        },
        design: {
          type: "plate",
          params: {
            round: "4",
            background: "gradient",
            "background-color": ["#c3002f", "#c3002f"],
            effect: "flipchart",
            space: "1",
            "separator-margin": "4",
            "number-font-family": {
              family: "Jura",
              link:
                "<link href='//fonts.googleapis.com/css?family=Jura&subset=latin,cyrillic' rel='stylesheet' type='text/css'>",
            },
            "number-font-size": "33",
            "number-font-color": "#fff",
            padding: "7",
            "separator-on": false,
            "separator-text": ":",
            "text-on": true,
            "text-font-family": {
              family: "Jura",
              link:
                "<link href='//fonts.googleapis.com/css?family=Jura&subset=latin,cyrillic' rel='stylesheet' type='text/css'>",
            },
            "text-font-size": "12",
            "text-font-color": "#000000",
          },
        },
        designId: 3,
        theme: "white",
        width: 297,
        height: 62,
      });
      if (_k != null) l.run();
    };
    _t.onload = _f;
    _t.onreadystatechange = function() {
      if (_t.readyState == "loaded") _f(1);
    };
    var _h = document.head || document.getElementsByTagName("head")[0];
    _h.appendChild(_t);
  } else {
    var _id = "d284d4772cc6e7053f60625fdda284db";
    while (document.getElementById("timer" + _id)) _id = _id + "0";
    document.write(
      "<div id='timer" + _id + "' style='min-width:450px;height:93px;'></div>"
    );
    var _t = document.createElement("script");
    _t.src = "//megatimer.ru/timer/timer.min.js?v=1";
    var _f = function(_k) {
      var l = new MegaTimer(_id, {
        view: [1, 1, 1, 1],
        type: {
          currentType: "3",
          params: {
            weekdays: [1, 1, 1, 1, 1, 1, 1],
            usertime: true,
            time: "23:59",
            tz: -180,
            hours: "24",
            minutes: "00",
          },
        },
        design: {
          type: "plate",
          params: {
            round: "3",
            background: "gradient",
            "background-color": ["#c3002f", "#c3002f"],
            effect: "flipchart",
            space: "5",
            "separator-margin": "15",
            "number-font-family": {
              family: "Jura",
              link:
                "<link href='//fonts.googleapis.com/css?family=Jura&subset=latin,cyrillic' rel='stylesheet' type='text/css'>",
            },
            "number-font-size": "38",
            "number-font-color": "#fff",
            padding: "13",
            "separator-on": false,
            "separator-text": ":",
            "text-on": true,
            "text-font-family": {
              family: "Jura",
              link:
                "<link href='//fonts.googleapis.com/css?family=Jura&subset=latin,cyrillic' rel='stylesheet' type='text/css'>",
            },
            "text-font-size": "12",
            "text-font-color": "#000",
          },
        },
        designId: 3,
        theme: "white",
        width: 500,
        height: 93,
      });
      if (_k != null) l.run();
    };
    _t.onload = _f;
    _t.onreadystatechange = function() {
      if (_t.readyState == "loaded") _f(1);
    };
    var _h = document.head || document.getElementsByTagName("head")[0];
    _h.appendChild(_t);
  }
}.call(this));
