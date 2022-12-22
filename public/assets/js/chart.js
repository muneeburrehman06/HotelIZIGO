$(document).ready(function () {
    $(".circle1").circliful({ animationStep: 5, foregroundBorderWidth: 5, backgroundBorderWidth: 15, foregroundBorderWidth: 5, backgroundColor: "#3a3f51", foregroundColor: "#A8C64A", percent: 75 });
    $(".circle2").circliful({ animationStep: 5, foregroundBorderWidth: 5, backgroundBorderWidth: 15, backgroundColor: "#3a3f51", foregroundColor: "#fb001a", percent: 25 });
    $(".circle3").circliful({ animationStep: 5, foregroundBorderWidth: 5, backgroundBorderWidth: 15, backgroundColor: "#3a3f51", foregroundColor: "#00d0fb", percent: 60 });
    $(".circle4").circliful({ animationStep: 5, foregroundBorderWidth: 5, backgroundBorderWidth: 15, backgroundColor: "#3a3f51", foregroundColor: "#fb001a", percent: 80 });
});
$(document).ready(function () {
    var ctx = document.getElementById("myChart").getContext("2d");
    var myChart = new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [
                { label: "Bookings", backgroundColor: "#003560", data: [30, 29, 25, 125, 210, 311, 100, 301, 290, 100, 301, 290] },
            ],
        },
    });
});
