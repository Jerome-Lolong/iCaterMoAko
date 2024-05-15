document.addEventListener('DOMContentLoaded', (event) => {
    // Line chart for Sales Per Month
    var ctx1 = document.getElementById('salesPerMonthChart').getContext('2d');
    var salesPerMonthChart = new Chart(ctx1, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            datasets: [{
                label: 'Sales',
                data: '<?php echo json_encode($monthly_sales); ?>',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
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

    // Pie chart for Pending vs Accomplished Appointments
    var ctx2 = document.getElementById('appointmentsPieChart').getContext('2d');
    var appointmentsPieChart = new Chart(ctx2, {
        type: 'pie',
        data: {
            labels: ['Pending', 'Accomplished'],
            datasets: [{
                label: '# of Appointments',
                data: '[<?php echo $pending_appointments; ?>, <?php echo $accomplished_appointments; ?>]',
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true
        }
    });
});