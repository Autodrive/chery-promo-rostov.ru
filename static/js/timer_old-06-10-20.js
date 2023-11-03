(function () {
    var width = $(window).width();
    var params = {
        "type": "plate",
        "params": {
            "round": "10",
            "background": "gradient",
            "background-color": ["#000000", "#4c4c4c"],
            "effect": "flipchart",
            "space": "3",
            "separator-margin": "12",
            "number-font-family": {
                "family": "Roboto",
                "link": "<link href='//fonts.googleapis.com/css?family=Roboto&subset=latin,cyrillic' rel='stylesheet' type='text/css'>"
            },
            "number-font-size": "60",
            "number-font-color": "#ffffff",
            "padding": "12",
            "separator-on": false,
            "separator-text": ":",
            "text-on": true,
            "text-font-family": {
                "family": "Roboto",
                "link": "<link href='//fonts.googleapis.com/css?family=Roboto&subset=latin,cyrillic' rel='stylesheet' type='text/css'>"
            },
            "text-font-size": "16",
            "text-font-color": "#000000"
        }
    }
    if (width < 768) {
        params = {
            "type": "plate",
            "params": {
                "round": "10",
                "background": "gradient",
                "background-color": ["#000000", "#4c4c4c"],
                "effect": "none",
                "space": "3",
                "separator-margin": "2",
                "number-font-family": {
                    "family": "Roboto",
                    "link": "<link href='//fonts.googleapis.com/css?family=Roboto&subset=latin,cyrillic' rel='stylesheet' type='text/css'>"
                },
                "number-font-size": "30",
                "number-font-color": "#ffffff",
                "padding": "8",
                "separator-on": false,
                "separator-text": ":",
                "text-on": true,
                "text-font-family": {
                    "family": "Roboto",
                    "link": "<link href='//fonts.googleapis.com/css?family=Roboto&subset=latin,cyrillic' rel='stylesheet' type='text/css'>"
                },
                "text-font-size": "16",
                "text-font-color": "#000000"
            }
        }
    }
    var _id = "6e52950e697d72abcf106e4b0efdd655";
    while (document.getElementById("timer" + _id)) _id = _id + "0";
    document.write("<div id='timer" + _id + "' style='min-width:310px;height:102px;'></div>");
    var _t = document.createElement("script");
    _t.src = "static/js/timer.min.js";


    var _f = function (_k) {
        var l = new MegaTimer(_id, {
            "view": [1, 1, 1, 1],
            "type": {
                "currentType": "3",
                "params": {
                    "weekdays": [1, 1, 1, 1, 1, 1, 1],
                    "usertime": true,
                    "time": "00:00",
                    "tz": -180,
                    "hours": "120",
                    "minutes": "0"
                }
            },
            "design": params,
            "designId": 3,
            "theme": "white",
            "width": 485,
            "height": 102
        });

        if (_k != null) l.run();
    };
    _t.onload = _f;
    _t.onreadystatechange = function () {
        if (_t.readyState == "loaded") _f(1);
    };
    var _h = document.head || document.getElementsByTagName("head")[0];
    _h.appendChild(_t);
}).call(this);

