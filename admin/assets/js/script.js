var ctx = document.getElementById("chart-bars").getContext("2d");

new Chart(ctx, {
    type: "bar",
    data: {
        labels: ["M", "T", "W", "T", "F", "S", "S"],
        datasets: [{
            label: "Views",
            tension: 0.4,
            borderWidth: 0,
            borderRadius: 4,
            borderSkipped: false,
            backgroundColor: "#43A047",
            data: [50, 45, 22, 28, 50, 60, 76],
            barThickness: 'flex'
        },],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: false,
            }
        },
        interaction: {
            intersect: false,
            mode: 'index',
        },
        scales: {
            y: {
                grid: {
                    drawBorder: false,
                    display: true,
                    drawOnChartArea: true,
                    drawTicks: false,
                    borderDash: [5, 5],
                    color: '#e5e5e5'
                },
                ticks: {
                    suggestedMin: 0,
                    suggestedMax: 500,
                    beginAtZero: true,
                    padding: 10,
                    font: {
                        size: 14,
                        lineHeight: 2
                    },
                    color: "#737373"
                },
            },
            x: {
                grid: {
                    drawBorder: false,
                    display: false,
                    drawOnChartArea: false,
                    drawTicks: false,
                    borderDash: [5, 5]
                },
                ticks: {
                    display: true,
                    color: '#737373',
                    padding: 10,
                    font: {
                        size: 14,
                        lineHeight: 2
                    },
                }
            },
        },
    },
});


var ctx2 = document.getElementById("chart-line").getContext("2d");

new Chart(ctx2, {
    type: "line",
    data: {
        labels: ["J", "F", "M", "A", "M", "J", "J", "A", "S", "O", "N", "D"],
        datasets: [{
            label: "Sales",
            tension: 0,
            borderWidth: 2,
            pointRadius: 3,
            pointBackgroundColor: "#43A047",
            pointBorderColor: "transparent",
            borderColor: "#43A047",
            backgroundColor: "transparent",
            fill: true,
            data: [120, 230, 130, 440, 250, 360, 270, 180, 90, 300, 310, 220],
            maxBarThickness: 6

        }],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: false,
            },
            tooltip: {
                callbacks: {
                    title: function (context) {
                        const fullMonths = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                        return fullMonths[context[0].dataIndex];
                    }
                }
            }
        },
        interaction: {
            intersect: false,
            mode: 'index',
        },
        scales: {
            y: {
                grid: {
                    drawBorder: false,
                    display: true,
                    drawOnChartArea: true,
                    drawTicks: false,
                    borderDash: [4, 4],
                    color: '#e5e5e5'
                },
                ticks: {
                    display: true,
                    color: '#737373',
                    padding: 10,
                    font: {
                        size: 12,
                        lineHeight: 2
                    },
                }
            },
            x: {
                grid: {
                    drawBorder: false,
                    display: false,
                    drawOnChartArea: false,
                    drawTicks: false,
                    borderDash: [5, 5]
                },
                ticks: {
                    display: true,
                    color: '#737373',
                    padding: 10,
                    font: {
                        size: 12,
                        lineHeight: 2
                    },
                }
            },
        },
    },
});

var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

new Chart(ctx3, {
    type: "line",
    data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
            label: "Tasks",
            tension: 0,
            borderWidth: 2,
            pointRadius: 3,
            pointBackgroundColor: "#43A047",
            pointBorderColor: "transparent",
            borderColor: "#43A047",
            backgroundColor: "transparent",
            fill: true,
            data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
            maxBarThickness: 6

        }],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: false,
            }
        },
        interaction: {
            intersect: false,
            mode: 'index',
        },
        scales: {
            y: {
                grid: {
                    drawBorder: false,
                    display: true,
                    drawOnChartArea: true,
                    drawTicks: false,
                    borderDash: [4, 4],
                    color: '#e5e5e5'
                },
                ticks: {
                    display: true,
                    padding: 10,
                    color: '#737373',
                    font: {
                        size: 14,
                        lineHeight: 2
                    },
                }
            },
            x: {
                grid: {
                    drawBorder: false,
                    display: false,
                    drawOnChartArea: false,
                    drawTicks: false,
                    borderDash: [4, 4]
                },
                ticks: {
                    display: true,
                    color: '#737373',
                    padding: 10,
                    font: {
                        size: 14,
                        lineHeight: 2
                    },
                }
            },
        },
    },
});
var win = navigator.platform.indexOf('Win') > -1;
if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
        damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
}


function handleSaveClick(event, id) {
    event.preventDefault();

    const name = document.getElementById(`name_${id}`).value;
    const image = document.getElementById(`image_${id}`).value;
    const price = document.getElementById(`price_${id}`).value;
    const stock = document.getElementById(`stock_${id}`).value;

    const requestBody = new URLSearchParams();
    requestBody.append('id', id);
    requestBody.append('name', name);
    requestBody.append('image', image);
    requestBody.append('price', price);
    requestBody.append('stock', stock);

    fetch('/library/admin/php/update_book.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: requestBody.toString()
    })
        .then(response => response.json())
        .then(data => {
            const messageBox = document.getElementById('message');
            if (!messageBox) {
                console.error('Message box element with ID "message" not found.');
                return;
            }

            if (data.success) {
                messageBox.style.display = 'block';
                messageBox.style.backgroundColor = '#d4edda';
                messageBox.style.color = '#155724';
                messageBox.textContent = data.message;
            } else {
                messageBox.style.display = 'block';
                messageBox.style.backgroundColor = '#f8d7da';
                messageBox.style.color = '#721c24';
                messageBox.textContent = data.message;
            }

            setTimeout(() => {
                messageBox.style.display = 'none';
            }, 3000);
        })
        .catch(error => {
            console.error('Error:', error);

            const messageBox = document.getElementById('message');
            if (!messageBox) {
                console.error('Message box element with ID "message" not found.');
                return;
            }

            messageBox.style.display = 'block';
            messageBox.style.backgroundColor = '#f8d7da';
            messageBox.style.color = '#721c24';
            messageBox.textContent = 'An unexpected error occurred. Please try again.';

            setTimeout(() => {
                messageBox.style.display = 'none';
            }, 3000);
        });
}

function handleDeleteClick(event, id) {
    event.preventDefault();

    if (!confirm('Are you sure you want to delete this book?')) {
        return;
    }

    const requestBody = new URLSearchParams();
    requestBody.append('id', id);

    fetch('/library/admin/php/delete_book.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: requestBody.toString()
    })
        .then(response => response.json())
        .then(data => {
            const messageBox = document.getElementById('message');
            if (!messageBox) {
                console.error('Message box element with ID "message" not found.');
                return;
            }

            if (data.success) {
                messageBox.style.display = 'block';
                messageBox.style.backgroundColor = '#d4edda';
                messageBox.style.color = '#155724';
                messageBox.textContent = data.message;

                document.querySelector('table tbody').innerHTML = data.table;
            } else {
                messageBox.style.display = 'block';
                messageBox.style.backgroundColor = '#f8d7da';
                messageBox.style.color = '#721c24';
                messageBox.textContent = data.message;
            }

            setTimeout(() => {
                messageBox.style.display = 'none';
            }, 3000);
        })
        .catch(error => {
            console.error('Error:', error);

            const messageBox = document.getElementById('message');
            if (!messageBox) {
                console.error('Message box element with ID "message" not found.');
                return;
            }

            messageBox.style.display = 'block';
            messageBox.style.backgroundColor = '#f8d7da';
            messageBox.style.color = '#721c24';
            messageBox.textContent = 'An unexpected error occurred. Please try again.';

            setTimeout(() => {
                messageBox.style.display = 'none';
            }, 3000);
        });
}

function handleAddBookClick(event) {
    event.preventDefault();

    const name = document.getElementById('book_name').value;
    const image = document.getElementById('book_image').value;
    const price = document.getElementById('book_price').value;
    const stock = document.getElementById('book_stock').value;

    if (!name || !image || !price || !stock) {
        alert('Please fill all fields.');
        return;
    }

    const requestBody = new URLSearchParams();
    requestBody.append('name', name);
    requestBody.append('image', image);
    requestBody.append('price', price);
    requestBody.append('stock', stock);

    fetch('/library/admin/php/add_book.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: requestBody.toString()
    })
        .then(response => response.json())
        .then(data => {
            const messageBox = document.getElementById('add-book-message');
            if (!messageBox) {
                console.error('Message box element with ID "add-book-message" not found.');
                return;
            }

            if (data.success) {
                messageBox.style.display = 'block';
                messageBox.style.backgroundColor = '#d4edda';
                messageBox.style.color = '#155724';
                messageBox.textContent = data.message;
            } else {
                messageBox.style.display = 'block';
                messageBox.style.backgroundColor = '#f8d7da';
                messageBox.style.color = '#721c24';
                messageBox.textContent = data.message;
            }

            setTimeout(() => {
                messageBox.style.display = 'none';
            }, 3000);
        })
        .catch(error => {
            console.error('Error:', error);

            const messageBox = document.getElementById('add-book-message');
            if (!messageBox) {
                console.error('Message box element with ID "add-book-message" not found.');
                return;
            }

            messageBox.style.display = 'block';
            messageBox.style.backgroundColor = '#f8d7da';
            messageBox.style.color = '#721c24';
            messageBox.textContent = 'An unexpected error occurred. Please try again.';

            setTimeout(() => {
                messageBox.style.display = 'none';
            }, 3000);
        });
}

