document.addEventListener('DOMContentLoaded', function () {
    const individualFields = document.getElementById('individualFields');
    const institutionFields = document.getElementById('institutionFields');

    const individualRadio = document.getElementById('individualRadio');
    const institutionRadio = document.getElementById('institutionRadio');

    // Get references to the inputs within each section that have 'required'
    // NOTE: Adjust these selectors if your actual inputs differ or more are required
    const individualRequiredInputs = individualFields.querySelectorAll('input[required]'); 
    const institutionRequiredInputs = institutionFields.querySelectorAll('input[required]');

    // Get references to *all* inputs/selects/textareas within each section
    // To ensure their values aren't submitted when hidden, even if not 'required'
    const individualAllInputs = individualFields.querySelectorAll('input, select, textarea');
    const institutionAllInputs = institutionFields.querySelectorAll('input, select, textarea');


    function toggleFields() {
        if (individualRadio.checked) {
            individualFields.style.display = 'block';
            institutionFields.style.display = 'none';
    
            // Handle required attributes instead of disabling
            individualRequiredInputs.forEach(input => input.setAttribute('required', ''));
            institutionRequiredInputs.forEach(input => input.removeAttribute('required'));
    
        } else { // Institution is checked
            individualFields.style.display = 'none';
            institutionFields.style.display = 'block';
    
            // Handle required attributes instead of disabling
            institutionRequiredInputs.forEach(input => input.setAttribute('required', ''));
            individualRequiredInputs.forEach(input => input.removeAttribute('required'));
        }
    }

    // Add event listeners
    individualRadio.addEventListener('change', toggleFields);
    institutionRadio.addEventListener('change', toggleFields);

    // Call toggleFields once on load to set the initial state correctly
    toggleFields(); 
});

if (typeof successMessage !== 'undefined') {
    Swal.fire({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 15000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer);
            toast.addEventListener('mouseleave', Swal.resumeTimer);
        },
        title: "Donor Created Successfully",
        icon: "success",
        text: successMessage,
        iconColor: '#3085d6',
        animated: true,
        background: '#fff',
    });
}
if (typeof errorMessage !== 'undefined') {
    Swal.fire({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 15000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer);
            toast.addEventListener('mouseleave', Swal.resumeTimer);
        },
        title: "Error Cannot Create Donor",
        icon: "error",
        text: errorMessage,
        iconColor: '#d33',
        background: '#fff',
        animated: true,
    });
}