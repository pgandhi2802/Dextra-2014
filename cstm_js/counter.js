var target_date = new Date("April 26, 2014 00:00:00").getTime();
                        var days, hours, minutes, seconds;
                        setInterval(function () {
                        var current_date = new Date().getTime();
                        var seconds_left = (target_date - current_date) / 1000;
                        if(seconds_left<0)
                        seconds_left=0;
                        days = parseInt(seconds_left / 86400);
                        seconds_left = seconds_left % 86400;
                        hours = parseInt(seconds_left / 3600);
                        seconds_left = seconds_left % 3600;
                        minutes = parseInt(seconds_left / 60);
                        seconds = parseInt(seconds_left % 60);
                        document.getElementById("cd_days").innerHTML ="<div class='no'>0</div>Days";
                        document.getElementById("cd_hours").innerHTML ="<div class='no'>0</div>Hours";
                        document.getElementById("cd_minutes").innerHTML ="<div class='no'>0</div>Minutes";
                        document.getElementById("cd_seconds").innerHTML ="<div class='no'>0</div>Seconds";
                        }, 1000);