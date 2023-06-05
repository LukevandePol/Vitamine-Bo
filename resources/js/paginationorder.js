function filterOrders() {
    const selectedYear = document.getElementById("yearDropdownMenu").getAttribute("data-selected");
    const tableRows = document.querySelectorAll("#myTable tbody tr");

    tableRows.forEach((row) => {
        const dateString = row.cells[2].textContent;
        const year = dateString.match(/\d{4}/)[0];

        if (selectedYear === "0" || year === selectedYear) {
            row.style.display = "";
        } else {
            row.style.display = "none";
        }
    });
}

// Set the default value to 2023
document.getElementById("yearDropdownMenu").setAttribute("data-selected", "2023");
document.getElementById("yearDropdown").textContent = "2023";

// Filter the orders on page load
filterOrders();

// Listen for dropdown item clicks
document.querySelectorAll("#yearDropdownMenu .dropdown-item").forEach((item) => {
    item.addEventListener("click", function (e) {
        e.preventDefault();
        const selectedValue = this.getAttribute("data-value");
        const selectedText = this.textContent;

        document.getElementById("yearDropdownMenu").setAttribute("data-selected", selectedValue);
        document.getElementById("yearDropdown").textContent = selectedText;

        filterOrders();
    });
});


// Set the default value to 2023
document.getElementById("maxRows").value = "2023";

// Filter the orders on page load
filterOrders();

// Listen for changes in the year selection
document.getElementById("maxRows").addEventListener("change", filterOrders);
