let canvas = document.getElementById("chart");
canvas.style.maxWidth = "50vw";

let xValues = ["Papas fritas", "Hamburgesas", "Ensalada"];
let yValues = [15, 10, 20];
let barColors = ["yellow", "orange", "green"];

const myChart = new Chart(canvas, {
  type: "doughnut",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {}
});