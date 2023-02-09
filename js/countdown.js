$ (document).ready (function () {
    Date.prototype.getMonthNameShort = function (lang) {
        lang = lang && (lang in Date.locale) ? lang : 'en';
        return Date.locale[lang].month_names_short[this.getMonth ()];
    };
    Date.locale = {
        en: {
            month_names: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            month_names_short: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        }
    };

    var currentDay = new Date ();
    var currentMothWithName = new Date ().getMonthNameShort ();
    var currentDayNumber = currentDay.getDate ();
    var currentFullYear = currentDay.getFullYear ();
    var stringYear = String (currentMothWithName + " " + currentDayNumber + ", " + currentFullYear + " " + "23:59:59");
    var setCurrentDay = new Date (stringYear);
    var countDownDate = setCurrentDay.getTime ();
    var x = setInterval (function () {
        var now = new Date ().getTime ();
        var distance = countDownDate - now;
        var days = Math.floor (distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor ((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor ((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor ((distance % (1000 * 60)) / 1000);
        var objectSend = {
            days: days,
            hours: hours,
            minutes: minutes,
            seconds: seconds
        };
        generateTemplate (objectSend);

        if (distance < 0) {
            clearInterval (x);
        }
    }, 1000);

    function generateTemplate (obj) {
        var result = '';
        var elementsTimeArray = document.querySelectorAll ('.time');
        for (var item in obj) {
            if (obj[item] < 10) {
                result += '<li class="time-bg">0' + obj[item] + '</li><li class="time-bg__dot">:</li>';
            } else {
                result += '<li class="time-bg">' + obj[item] + '</li><li class="time-bg__dot">:</li>';
            }
        }
        for (var i = 0; i < elementsTimeArray.length; i++) {
            var itemElement = elementsTimeArray[i];
            itemElement.innerHTML = result
        }
    }

});

