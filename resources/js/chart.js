import { Chart } from 'chart.js/auto';
import 'chartjs-adapter-date-fns';
import 'chartjs-plugin-annotation';
import 'chartjs-plugin-zoom';
import 'chartjs-plugin-datalabels';



(async function () {
  const data = {
    datasets: [
      {
        label: 'Weekly Sales',

        // Data X (Tanggal Bulan Tahun) dan Y (Akun (Task))
        data: [
          {
            x: ['2023-01-02', '2023-01-04'],
            y: 'task 1',
          },
          {
            x: ['2023-01-02', '2023-01-04'],
            y: 'task 2',
          },
          {
            x: ['2023-01-02', '2023-01-04'],
            y: 'task 3',
          },
          {
            x: ['2023-01-02', '2023-01-04'],
            y: 'task 4',
          },
          {
            x: ['2023-01-01', '2024-01-02'],
            y: 'task 5',
          },
          {
            x: ['2023-01-01', '2024-01-02'],
            y: 'task 6',
          },
          {
            x: ['2023-01-01', '2024-01-02'],
            y: 'task 7',
          },
          {
            x: ['2023-01-01', '2024-01-02'],
            y: 'task 8',
          },
          {
            x: ['2023-01-01', '2024-01-02'],
            y: 'task 9',
          },
          {
            x: ['2023-01-01', '2024-01-02'],
            y: 'task 10',
          },
          {
            x: ['2023-01-01', '2024-01-02'],
            y: 'task 11',
          },
          {
            x: ['2023-01-01', '2024-01-02'],
            y: 'task 12',
          },
          {
            x: ['2023-01-01', '2024-01-02'],
            y: 'task 13',
          },
          // Add data for each day as needed...
        ],

        // Warna bar (Bisa beda" tiap bar kalo warnanya banyak, sesuai jumlah data)
        backgroundColor: 'rgba(255, 26, 104, 1)',
        borderColor: 'rgba(255, 26, 104, 1)',
        borderWidth: 1,
        borderSkipped: false,
        barPercentage: 0.5,
        borderRadius:5,
        top: true,
      },
    ],
  };

  const todayLine = {
    id: 'todayLine',
    afterDatasetsDraw(chart, args, pluginOptions){
      const { ctx, data, chartArea:{ top, bottom, left, right }, scales: { x, y } } = chart;
      ctx.save();
      ctx.beginPath();
      ctx.lineWidth = 3;
      ctx.moveTo(x.getPixelForValue(new Date()), top);
      ctx.lineTo(x.getPixelForValue(new Date()), bottom);
      ctx.stroke();
    }
  }

  const config = {
    type: 'bar',
    data,
    options: {
      maintainAspectRatio: false,
      indexAxis: 'y',
      scales: {
        y: {
          beginAtZero: true,
          reverse: false,
        },
        x: {
          type: 'time',
          time: {
            unit: 'month',
            tooltipFormat: 'MM-yyyy', // Format tooltip ketika dihover
            displayFormats: {
              day: 'MM-yyyy', // Format yang akan ditampilkan di sumbu X
            },
          },
          min: '2022-12-01', // Tanggal mulai
          max: '2023-12-31', // Tanggal selesai
          position: 'top', // Letakkan label di atas grafik
          ticks: {
            autoSkip: false, // Pastikan semua tanggal ditampilkan
          },
        },
      },
      plugins: [todayLine]
    },
  };

  const ctx = document.getElementById('chart');
  const myChart = new Chart(ctx, config);
  console.log(myChart);
})();
