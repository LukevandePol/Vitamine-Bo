// Confirm approving of an account
function confirmApprove() {
    let confirmYes = confirm('Weet je zeker dat je dit account wilt goedkeuren?');
    if (!confirmYes) {
        event.preventDefault();
    }
    return confirmYes;
}

// Global variables
const tableRows = Array.from(document.querySelectorAll('#orderTableBody tr'));
const rowsPerPage = 10; // Updated value to display 15 rows per page
let currentPage = 0;

// Function to generate table rows based on current page and rows per page
function generateTableRows(currentPage, rowsPerPage) {
    const startIndex = currentPage * rowsPerPage;
    const endIndex = startIndex + rowsPerPage;

    return tableRows.slice(startIndex, endIndex);
}

// Function to display rows based on the current page
function showRows() {
    const tableBody = document.querySelector('#orderTableBody');
    tableBody.innerHTML = ''; // Clear existing rows

    const rowsToDisplay = generateTableRows(currentPage, rowsPerPage);

    rowsToDisplay.forEach(row => {
        tableBody.appendChild(row);
    });

    // Update the row indication
    const rowIndication = document.getElementById('rowIndication');
    const startIndex = currentPage * rowsPerPage + 1;
    const endIndex = startIndex + rowsToDisplay.length - 1;
    const totalRows = tableRows.length;
    rowIndication.textContent = `Ziet ${startIndex} van ${endIndex} van de ${totalRows}`;
}

// Function to update the pagination links
function updatePagination() {
    const totalPages = Math.ceil(tableRows.length / rowsPerPage);

    const pagination = document.querySelector('.pagination');
    pagination.innerHTML = '';

    // Create and append the previous link
    const prevLink = createPaginationLink('<', currentPage > 0, currentPage - 1);
    pagination.appendChild(prevLink);

    // Create and append page links
    for (let i = 0; i < totalPages; i++) {
        const pageLink = createPaginationLink(i + 1, currentPage !== i, i);
        pagination.appendChild(pageLink);
    }

    // Create and append the next link
    const nextLink = createPaginationLink('>', currentPage < totalPages - 1, currentPage + 1);
    pagination.appendChild(nextLink);
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
        link.style.color = '#63BEEB'; // Set the active page number color to blue
    }

    return link;
}

// Initial function calls
showRows();
updatePagination();
