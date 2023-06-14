const filterSelect = document.getElementById('product-type');
const rows = document.querySelectorAll('table.table-striped tbody tr');

filterSelect.addEventListener('change', () => {
    const selectedValue = filterSelect.value;

    rows.forEach(row => {
        const type = row.getAttribute('data-type');

        if (selectedValue === '' || type === selectedValue) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
});


