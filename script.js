fetch('getData.php')
  .then(response => response.json())
  .then(chartData => {
    const ctx = document.getElementById('myChart');
    new Chart(ctx, {
      type: 'line',
      data: {
        labels: chartData.labels,
        datasets: [{
          label: '# of Marks',
          data: chartData.data,
          borderWidth: 1
        }]
      },
      options: {
        responsive: false,
        maintainAspectRatio: false,
        scales: {
          y: { beginAtZero: true }
        }
      }
    });

    const ctx1 = document.getElementById('doughnutCanvas');
    new Chart(ctx1, {
      type: 'pie',
      data: {
        // labels: chartData.labels,
        datasets: [{
          label: '# of Marks',
          data: chartData.data,
          borderWidth: 1
        }]
      },
      options: {
        responsive: false,
        maintainAspectRatio: false
      }
    });
  })
  .catch(error => console.error('Error loading chart data:', error));










// const ctx = document.getElementById('myChart');
//   new Chart(ctx, {
//       type: 'line',
//       data: {
//         labels: ['Jan','March', 'Apr', 'May','July', 'Oct', 'Dec'],
//         datasets: [{
//           label: '# of Marks',
//           data: [12, 19, 3, 5, 2, 3, 10, 6, 7, 15, 18, 9], 
//           borderWidth: 1
//         }]
//       },
//       options: {
//         responsive: false,
//         maintainAspectRatio: false,
//         scales: {
//           y: { beginAtZero: true }
//         }
//       }
//   });

//   const ctx1 = document.getElementById('doughnutCanvas');
//   new Chart(ctx1, {
//       type: 'pie',
//       data: {
//         labels: ['Marks Every Months'],
//         datasets: [{
//           label: '# of Marks',
//           data: [12, 19, 3, 5, 2, 3, 10, 6, 7, 15, 18, 9], 
//           borderWidth: 1
//         }]
//       },
//       options: {
//         responsive: false,
//         maintainAspectRatio: false
//       }
//   });
