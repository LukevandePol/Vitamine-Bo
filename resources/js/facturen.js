document.addEventListener('DOMContentLoaded', function() {
    const invoiceTable = document.getElementById('invoiceTable');
    const yearDropdown = document.getElementById('yearDropdown');
    const yearDropdownMenuItems = document.querySelectorAll('[id^="yearDropdownMenu-"]');

    yearDropdownMenuItems.forEach(function(item) {
        item.addEventListener('click', function(event) {
            event.preventDefault();

            const selectedYear = event.target.getAttribute('data-value');

            Array.from(invoiceTable.getElementsByTagName('tr')).forEach(function(row) {
                if (row.getAttribute('data-year') === selectedYear) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    });
});

function setYearFilter(year) {
    const dropdownButton = document.querySelector('#yearDropdown');
    const selectedYear = document.querySelector('#selectedYear');

    // Set the selected year in the dropdown button
    selectedYear.textContent = year;

    // Add the 'active' class to the selected year dropdown item
    const dropdownItems = document.querySelectorAll('.dropdown-item');
    dropdownItems.forEach(item => {
        item.classList.remove('active');
        if (item.getAttribute('data-value') === year.toString()) {
            item.classList.add('active');
        }
    });

    // Show the rows that match the selected year and hide the rest
    const rows = document.querySelectorAll('#invoiceTable tbody tr');
    rows.forEach(row => {
        const rowYear = row.getAttribute('data-year');
        if (rowYear === year.toString()) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
}

// Set the default year filter to 2023
setYearFilter(2023);

