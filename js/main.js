const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['月', '火', '水', '木', '金', '土', '日'],
        datasets: [{
            label: '今週のアップ回数',
            data: [4, 3, 0, 0, 0, 0, 0],
            backgroundColor: [
                'rgba(255, 51, 51, 0.2)',
                'rgba(255, 51, 51, 0.2)',
                'rgba(255, 51, 51, 0.2)',
                'rgba(255, 51, 51, 0.2)',
                'rgba(255, 51, 51, 0.2)',
                'rgba(255, 51, 51, 0.2)',
                'rgba(255, 51, 51, 0.2)'
            ],
            borderColor: [
                'rgba(255, 51, 51, 1)',
                'rgba(255, 51, 51, 1)',
                'rgba(255, 51, 51, 1)',
                'rgba(255, 51, 51, 1)',
                'rgba(255, 51, 51, 1)',
                'rgba(255, 51, 51, 1)',
                'rgba(255, 51, 51, 1)'
            ],
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});