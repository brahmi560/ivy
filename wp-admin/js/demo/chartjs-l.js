$(function () {
	
	var barData = {
        labels: ["2016", "2017", "2018", "2019"],
        datasets: [
            {
                label: "Q1",
                backgroundColor: 'rgba(153,255,51,1)',
                borderColor: "rgba(26,179,148,0.7)",
                pointBackgroundColor: "rgba(26,179,148,1)",
                pointBorderColor: "#fff",
                data: [28, 48, 40, 19]
            },
			{
                label: "Q2",
                backgroundColor: 'rgba(26,179,148,0.5)',
                borderColor: "rgba(26,179,148,0.7)",
                pointBackgroundColor: "rgba(26,179,148,1)",
                pointBorderColor: "#fff",
                data: [86, 27, 90,28]
            },
			{
                label: "Q3",
                backgroundColor: 'rgba(255,153,0,1)',
                borderColor: "rgba(26,179,148,0.7)",
                pointBackgroundColor: "rgba(26,179,148,1)",
                pointBorderColor: "#fff",
                data: [ 48, 40, 19, 86]
            },
			{
                label: "Q4",
                backgroundColor: "#FFCE56",
                borderColor: "rgba(26,179,148,0.7)",
                pointBackgroundColor: "rgba(26,179,148,1)",
                pointBorderColor: "#fff",
                data: [ 27, 90,28, 48]
            }
        ]
    };

    var barOptions = {
        responsive: true
    };


    var ctx2 = document.getElementById("barChart").getContext("2d");
    new Chart(ctx2, {type: 'bar', data: barData, options:barOptions});
	
    var doughnutData = {
        labels: ["IT Business Analyst - Practitioner","IT Business Analyst","IT Scrum Master","IT Product Owner","IT Scrum Developer" ],
        datasets: [{
            data: [1000,800,1200,900,1100],
            backgroundColor: ["#FF6384","#4BC0C0","#FFCE56","#E7E9ED","#36A2EB"]
        }]
    } ;


    var doughnutOptions = {
        responsive: true
    };


    var ctx4 = document.getElementById("doughnutChart").getContext("2d");
    new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

});