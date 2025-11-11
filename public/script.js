const hamburger = document.querySelector(".toggle-btn");
const toggler = document.querySelector("#icon");
hamburger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
  toggler.classList.toggle("fa-chevron-right");
  toggler.classList.toggle("fa-chevron-left");
});

new Chart(document.getElementById("bar-chart-grouped"), {
  type: "bar",
  data: {
    labels: ["January", "February", "March", "April"],
    datasets: [
      {
        label: "Income",
        backgroundColor: "#3e95cd",
        data: [1330, 8500, 7831, 24780],
      },
      {
        label: "Expense",
        backgroundColor: "#8e5ea2",
        data: [4089, 5475, 6757, 7340],
      },
    ],
  },
  options: {
    title: {
      display: true,
      text: "Population growth (millions)",
    },
  },
});



