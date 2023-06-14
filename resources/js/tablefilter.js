// Global variables
const tableRows = Array.from(document.querySelectorAll('#product-table-body tr'));
const filteredRows = [...tableRows]; // Initialize filtered rows with all rows
const filterSelect = document.getElementById('product-type');
const rowsPerPage = 10;
let currentPage = 0;

// Function to filter rows based on selected value
function filterRows() {
    const selectedValue = filterSelect.value;

    if (selectedValue === '') {
        filteredRows.splice(0, filteredRows.length, ...tableRows); // Reset filtered rows to all rows
    } else {
        filteredRows.splice(0, filteredRows.length, ...tableRows.filter(row => row.getAttribute('data-type') === selectedValue));
    }

    currentPage = 0; // Reset the current page when changing the filter
    showRows();
    updatePagination();
}

// Event listener for filter select change
filterSelect.addEventListener('change', filterRows);

// Function to generate table rows based on current page and rows per page
function generateTableRows(currentPage, rowsPerPage) {
    const startIndex = currentPage * rowsPerPage;
    const endIndex = startIndex + rowsPerPage;

    return filteredRows.slice(startIndex, endIndex);
}

// Function to display rows based on the current page
function showRows() {
    const tableBody = document.querySelector('#product-table-body');
    tableBody.innerHTML = '';

    const rowsToDisplay = generateTableRows(currentPage, rowsPerPage);

    rowsToDisplay.forEach(row => {
        tableBody.appendChild(row);
    });

    const rowIndication = document.getElementById('rowIndication');
    const startIndex = currentPage * rowsPerPage + 1;
    const endIndex = startIndex + rowsToDisplay.length - 1;
    const totalRows = filteredRows.length;
    rowIndication.textContent = `Ziet ${startIndex} van ${endIndex} van de ${totalRows} artikelen`;
}

// Function to update the pagination links
function updatePagination() {
    const totalPages = Math.ceil(filteredRows.length / rowsPerPage);

    const paginationContainer = document.getElementById('pagination-container');
    paginationContainer.innerHTML = '';

    const pagination = document.createElement('ul');
    pagination.classList.add('pagination');

    const prevLink = createPaginationLink('<', currentPage > 0, currentPage - 1);
    pagination.appendChild(prevLink);

    for (let i = 0; i < totalPages; i++) {
        const pageLink = createPaginationLink(i + 1, currentPage !== i, i);
        pagination.appendChild(pageLink);
    }

    const nextLink = createPaginationLink('>', currentPage < totalPages - 1, currentPage + 1);
    pagination.appendChild(nextLink);

    paginationContainer.appendChild(pagination);
}

// Function to create a pagination link
function createPaginationLink(label, enabled, pageIndex) {
    const link = document.createElement('a');
    link.innerHTML = label;
    link.href = '#';

    if (enabled) {
        link.addEventListener('click', function (event) {
            event.preventDefault();
            currentPage = pageIndex;
            showRows();
            updatePagination();
        });
    } else {
        link.classList.add('disabled');
    }

    if (currentPage === pageIndex) {
        link.classList.add('active');
        link.style.color = '#63BEEB';
    }

    const listItem = document.createElement('li');
    listItem.appendChild(link);

    return listItem;
}

// Initial function calls
filterRows();
