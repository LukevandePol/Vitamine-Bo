document.addEventListener('DOMContentLoaded', function() {
    const invoiceTable = document.getElementById('invoiceTable');
    const yearDropdownMenu = document.getElementById('yearDropdownMenu');
    const yearDropdownMenuItems = document.querySelectorAll('[id^="yearDropdownMenu-"]');

    yearDropdownMenuItems.forEach(function(item) {
        item.addEventListener('click', function(event) {
            event.preventDefault();

            const selectedYear = event.target.getAttribute('data-value');
            setYearFilter(selectedYear);
        });
    });

    // Populate the dropdown menu with the available years
    const years = Array.from(invoiceTable.getElementsByTagName('tr')).map(row => row.getAttribute('data-year'));
    const uniqueYears = [...new Set(years)]; // Get unique years

    uniqueYears.forEach(function(year) {
        const menuItem = document.createElement('a');
        menuItem.classList.add('dropdown-item');
        menuItem.href = '#';
        menuItem.setAttribute('data-value', year);
        menuItem.id = 'yearDropdownMenu-' + year;
        menuItem.textContent = year;

        yearDropdownMenu.appendChild(menuItem);
    });

    // Set the default year filter to 2023
    setYearFilter(2023);
});

function setYearFilter(year) {
    const dropdownButton = document.querySelector('#yearDropdown');

    // Set the selected year in the dropdown button
    dropdownButton.textContent = year;

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
