$(function () {
    $('.button-collapse').sideNav({
        edge: 'right'
    });
    var sideNavScrollbar = document.querySelector('.custom-scrollbar');
    Ps.initialize(sideNavScrollbar);
    // loadCharts();
});

// function loadCharts() {
//     $.ajax({
//         url: "/api/loadCharts",
//         success: function (data) {
//             console.log(data);
//             loadPieChart(data);
//             loadLinierCHart(data.linier)
//         }
//     });
// }
//
// function loadPieChart(data) {
//     var ctxP = document.getElementById("pieChart").getContext('2d');
//     var myPieChart = new Chart(ctxP, {
//         type: 'pie',
//         data: {
//             labels: ["آموزشی", "ترویجی", 'مسابقه ای'],
//             datasets: [{
//                 data: [data.amuzeshi, data.tarviji, data.mosabeghei],
//                 backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
//                 hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
//             }]
//         },
//         options: {
//             responsive: true
//         }
//     });
// }
//
// function loadLinierCHart(data) {
//     label = [];
//     info = [];
//     data.forEach(function (e, i) {
//         label[i] = e.name;
//         info[i] = e.total;
//     });
//     //bar
//     var ctxB = document.getElementById("barChart").getContext('2d');
//     var myBarChart = new Chart(ctxB, {
//         type: 'bar',
//         data: {
//             labels:label,
//             datasets: [{
//                 label: '# مجموع هزینه های انجمن',
//                 data: info,
//                 backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
//                 borderColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"],
//                 borderWidth: 1
//             }]
//         },
//         options: {
//             scales: {
//                 yAxes: [{
//                     ticks: {
//                         beginAtZero: true
//                     }
//                 }]
//             }
//         }
//     });
// }
