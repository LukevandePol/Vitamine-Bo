
document.addEventListener('DOMContentLoaded', function() {
    const selectElement = document.getElementById('maxRows');
    const rows = document.querySelectorAll('table.table tbody tr');

    selectElement.addEventListener('change', function() {
        const selectedYear = this.value;
        for (let i = 0; i < rows.length; i++) {
            const orderYear = rows[i].querySelector('td:nth-child(3)').textContent.split(',')[1].trim();
            if (selectedYear === '0' || orderYear === selectedYear) {
                rows[i].style.display = '';
            } else {
                rows[i].style.display = 'none';
            }
        }
    });
});
document.addEventListener('DOMContentLoaded', () => {
    const statusFilter = document.getElementById('statusFilter');
    const rows = document.querySelectorAll('tr');

    statusFilter.addEventListener('input', () => {
        const selectedStatus = statusFilter.value;

        if (selectedStatus === '') {
            // Show all rows if no status is selected
            rows.forEach((row) => {
                row.style.display = 'table-row';
            });
        } else {
            // Hide rows that do not match the selected status
            rows.forEach((row) => {
                const statusCell = row.querySelector('.bullet-point');
                if (statusCell && statusCell.classList.contains(selectedStatus)) {
                    row.style.display = 'table-row';
                } else {
                    row.style.display = 'none';
                }
            });
        }
    });
});
