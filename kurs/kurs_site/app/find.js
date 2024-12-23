
document.querySelector('#elastic').oninput = function () {
    let val = this.value.trim().toLowerCase();
    let listItems = document.querySelectorAll('ol li');
    let headings = document.querySelectorAll('h3'); // Select heading elements
    let hrElements = document.querySelectorAll('hr'); // Select <hr> elements

    // Find the last <hr> element (the one at the bottom)
    let lastHr = hrElements[hrElements.length - 1];

    if (val !== '') {
        // Handle list items
        listItems.forEach(function (item) {
            let textContent = item.textContent.toLowerCase();
            let pos = textContent.indexOf(val);

            if (pos === -1) {
                item.style.display = 'none'; // Hide items that don't match
            } else {
                item.style.display = ''; // Show matching item
            }
        });

        // Handle headings
        headings.forEach(function (heading) {
            let textContent = heading.textContent.toLowerCase();
            let pos = textContent.indexOf(val);

            if (pos === -1) {
                heading.style.display = 'none'; // Hide headings that don't match
            } else {
                heading.style.display = ''; // Show matching heading
            }
        });

        // Hide all hr elements except the last one
        hrElements.forEach(function (hr) {
            if (hr !== lastHr) {
                hr.style.display = 'none'; // Hide all <hr> elements except the last one
            }
        });
    } else {
        // If there's no search value, reset everything
        listItems.forEach(function (item) {
            item.style.display = ''; // Show all items
        });

        headings.forEach(function (heading) {
            heading.style.display = ''; // Show all headings
        });

        hrElements.forEach(function (hr) {
            hr.style.display = ''; // Show all hr elements
        });
    }
};
