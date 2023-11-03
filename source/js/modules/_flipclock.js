var clock;
$(document).ready(function() {

    // Grab the current date
    var currentDate = new Date();
    var futureDate = new Date();
    var today = new Date();
    today.setHours(0);
    today.setMinutes(0);
    today.setSeconds(0);

    // Set some date in the future.
    futureDate  = new Date(futureDate.setDate(futureDate.getDate() + 7));

    // Calculate the difference in seconds between the future and current date
    var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000 - (currentDate.getTime() - today.getTime()) / 1000;

    // Instantiate a coutdown FlipClock
    clock = $('.clock').FlipClock(diff, {
        clockFace: 'DailyCounter',
        countdown: true,
        language:'ru',
    });
});