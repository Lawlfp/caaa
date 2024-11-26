const editButton = document.querySelector('.patientcontainer .flexcontainer1 .edit-btn');
const cancelButton = document.querySelector('.patientcontainer .cancel-button');
const spans = Array.from(document.querySelectorAll('.patientcontainer .flexcontainer span:nth-child(2)'));
const form = document.querySelector('form');

let originalValues = [];
let isEditing = false;

// Handle hover effect for the Edit button
editButton.addEventListener('mouseover', () => {
    editButton.style.color = '#007bff';
    editButton.style.cursor = 'pointer';
});

editButton.addEventListener('mouseout', () => {
    editButton.style.color = '#BEBBBB';
    editButton.style.cursor = 'default';
});

// Handle the Edit button click
editButton.addEventListener('click', () => {
    if (!isEditing) {
        // Store original values and enable editing mode
        originalValues = spans.map(span => span.textContent.trim());
        spans.forEach((span) => {
            const input = document.createElement('input');
            input.type = 'text';
            input.name = span.className; // Assign the class name as the input name
            input.value = span.textContent.trim();
            input.style.cssText = `
                font-family: Roboto;
                font-size: 12px;
                width: 183px;
                padding: 0 5px;
                border: none;
                border-bottom: 1px solid #D3D3D3;
                display: inline-block;
            `;
            span.replaceWith(input);
            span.inputField = input; // Link input field to span
        });

        cancelButton.style.display = 'inline';
        editButton.textContent = 'Save';
        isEditing = true;
    } else {
        // Save changes, update spans, and submit form
        spans.forEach((span) => {
            const input = span.inputField;
            const updatedSpan = document.createElement('span');
            updatedSpan.className = input.name;
            updatedSpan.textContent = input.value.trim();
            input.replaceWith(updatedSpan);
        });

        cancelButton.style.display = 'none';
        editButton.textContent = 'Edit';
        isEditing = false;

        form.submit();
    }
});

// Handle the Cancel button click
cancelButton.addEventListener('click', () => {
    spans.forEach((span, index) => {
        const input = span.inputField;
        span.textContent = originalValues[index]; // Restore original value
        input.replaceWith(span);
    });

    cancelButton.style.display = 'none';
    editButton.textContent = 'Edit';
    isEditing = false;
    originalValues = [];
});

// Synchronize inputs with hidden fields before form submission
form.addEventListener('submit', () => {
    spans.forEach((span) => {
        const hiddenInput = form.querySelector(`input[name="${span.className}"]`);
        if (hiddenInput) {
            hiddenInput.value = span.inputField ? span.inputField.value : span.textContent;
        }
    });
});
