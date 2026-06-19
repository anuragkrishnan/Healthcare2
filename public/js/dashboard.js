document.addEventListener('DOMContentLoaded', function () {

    console.log('Dashboard Loaded');

        initRevenueChart();
        initPatientChart();

    const menuItems = document.querySelectorAll('.sidebar-menu a');

    menuItems.forEach(item => {

        item.addEventListener('click', function(){

            menuItems.forEach(x =>
                x.classList.remove('active')
            );

            this.classList.add('active');

        });

    });

});

/* Load page content via AJAX */

$(document).on('click', '.load-page', function (e) {
    e.preventDefault();

    let url = $(this).data('url');

    console.log("Loading:", url); // debug

    $.ajax({
        url: url,
        type: 'GET',
        success: function (response) {
            $('#content-area').html(response);
            initRevenueChart();
            initPatientChart();
        },
        error: function (xhr) {
            console.log(xhr.responseText);
            alert('Page load failed');
        }
    });
});

//chart js
function initRevenueChart() {

    const canvas = document.getElementById('revenueChart');

    if (!canvas) return;
new Chart(canvas, {
  type: 'line',
  data: {
    labels: ['Jan','Feb','Mar','Apr','May','Jun'],
    datasets: [{
      label: 'Revenue',
      data: [68000,74000,81000,95000,110000,125000],
      borderColor: '#27d54a',
      backgroundColor: 'rgba(79,142,247,0.12)',
      borderWidth: 2.5,
      pointBackgroundColor: '#27d54a',
      pointBorderColor: '#13161e',
      pointBorderWidth: 2,
      pointRadius: 4,
      pointHoverRadius: 6,
      fill: true,
      tension: 0.35
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      legend: { display: false },
      tooltip: {
        backgroundColor: '#1a1e28',
        titleColor: '#e8eaf2',
        bodyColor: '#8891aa',
        borderColor: '#2a2f40',
        borderWidth: 1,
        padding: 10,
        callbacks: { label: c => '$' + c.parsed.y.toLocaleString() }
      }
    },
    scales: {
      x: { grid: { display: false }, ticks: { color: '#8891aa', font: { size: 11 } } },
      y: { grid: { color: '#2a2f40' }, ticks: { color: '#8891aa', font: { size: 11 }, callback: v => '$' + (v/1000) + 'k' } }
    }
  }
});
}

//Patient growth chart

function initPatientChart() {

    const patientCanvas = document.getElementById('patientLegend');
    if (!patientCanvas) return;

const patientData = [450, 620, 180, 95];
const patientLabels = ['New registrations', 'Returning patients', 'Referrals', 'Others'];
const patientColors = ['#34d399', '#27d54a', '#369c77', '#fbbf24'];
const total = patientData.reduce((a, b) => a + b, 0);

patientCanvas.innerHTML = patientLabels.map((label, i) => {
  const pct = ((patientData[i] / total) * 100).toFixed(0);
  return `<span><span class="legend-dot" style="background:${patientColors[i]}"></span>${label} ${pct}%</span>`;
}).join('');

const centerTextPlugin = {
  id: 'centerText',
  afterDraw(chart) {
    const { ctx, chartArea: { left, top, width, height } } = chart;
    ctx.save();
    const cx = left + width / 2;
    const cy = top + height / 2;
    ctx.font = '600 26px Inter, sans-serif';
    ctx.fillStyle = '#e8eaf2';
    ctx.textAlign = 'center';
    ctx.textBaseline = 'bottom';
    ctx.fillText(total.toLocaleString(), cx, cy + 4);
    ctx.font = '400 11px Inter, sans-serif';
    ctx.fillStyle = '#8891aa';
    ctx.textBaseline = 'top';
    ctx.fillText('Total patients', cx, cy + 6);
    ctx.restore();
  }
};

new Chart(document.getElementById('patientChart'), {
  type: 'doughnut',
  data: {
    labels: patientLabels,
    datasets: [{
      data: patientData,
      backgroundColor: patientColors,
      borderColor: '#13161e',
      borderWidth: 3,
      hoverOffset: 6
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    cutout: '72%',
    plugins: {
      legend: { display: false },
      tooltip: {
        backgroundColor: '#1a1e28',
        titleColor: '#e8eaf2',
        bodyColor: '#8891aa',
        borderColor: '#2a2f40',
        borderWidth: 1,
        padding: 10,
        callbacks: {
          label: (c) => {
            const pct = ((c.parsed / total) * 100).toFixed(1);
            return c.label + ': ' + c.parsed.toLocaleString() + ' (' + pct + '%)';
          }
        }
      }
    }
  },
  plugins: [centerTextPlugin]
});

}


