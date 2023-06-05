// Global variables
const tableRows = Array.from(document.querySelectorAll('#orderTableBody tr'));
let rowsPerPage = 12;
let currentPage = 0;

function filterOrders() {
    const selectedYear = document.getElementById("yearFilter").value;

    tableRows.forEach((row) => {
        const dateString = row.cells[2].textContent;
        const year = dateString.match(/\d{4}/)[0];

        if (selectedYear === "0" || year === selectedYear) {
            row.style.display = "";
        } else {
            row.style.display = "none";
        }
    });

    currentPage = 0;
    showRows();
    updatePagination();
}

// Function to show rows based on the current page
function showRows() {
    const startIndex = currentPage * rowsPerPage;
    const endIndex = startIndex + rowsPerPage;

    tableRows.forEach((row, index) => {
        if (index >= startIndex && index < endIndex) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });

    // Update the row indication
    const rowIndication = document.getElementById('rowIndication');
    rowIndication.textContent = `Ziet ${startIndex + 1} tot ${Math.min(endIndex, tableRows.length)} van de ${tableRows.length}`;
}

// Function to update the pagination links
function updatePagination() {
    const totalPages = Math.ceil(tableRows.length / rowsPerPage);

    const pagination = document.querySelector('.pagination');
    pagination.innerHTML = '';

    // Create and append the previous link
    const prevLink = createPaginationLink('&#8592;', currentPage > 0, currentPage - 1);
    pagination.appendChild(prevLink);

    // Create and append page links
    for (let i = 0; i < totalPages; i++) {
        const pageLink = createPaginationLink(i + 1, currentPage !== i, i);
        pagination.appendChild(pageLink);
    }

    // Create and append the next link
    const nextLink = createPaginationLink('&#8594;', currentPage < totalPages - 1, currentPage + 1);
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
    }

    return link;
}

// Initial function calls
showRows();
updatePagination();

// Attach event listener to the filter select element
const yearFilterSelect = document.getElementById('yearFilter');
yearFilterSelect.addEventListener('change', filterOrders);
