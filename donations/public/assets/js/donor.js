// This script handles the edit functionality for donor information.
    document.addEventListener('DOMContentLoaded', () => {
        const editButtons = document.querySelectorAll('.edit-btn');
        const form = document.getElementById('editDonorForm');
        const spinner = document.getElementById('edit-spinner');
        const saveBtn = document.getElementById('saveChangesBtn');

        editButtons.forEach(button => {
            button.addEventListener('click', () => {
                const id = button.dataset.id;

                // Fill form fields
                document.getElementById('edit-donor-id').value = id;
                document.getElementById('edit-f-name').value = button.dataset.f_name;
                document.getElementById('edit-l-name').value = button.dataset.l_name;
                document.getElementById('edit-phone').value = button.dataset.phone;
                document.getElementById('edit-email').value = button.dataset.email;
                document.getElementById('edit-preference').value = button.dataset.preference;
                document.getElementById('edit-inst').value = button.dataset.institution_name;

                form.action = `/donors/${id}`;
            });
        });

        form.addEventListener('submit', async function (e) {
            e.preventDefault();

            // Inline validation
            const fName = document.getElementById('edit-f-name').value.trim();
            const lName = document.getElementById('edit-l-name').value.trim();
            const email = document.getElementById('edit-email').value.trim();
            

            if (!fName || !lName || !email) {
                Swal.fire('Missing Fields', 'First name, last name, and email are required.', 'warning');
                return;
            }

            // Disable button + show spinner
            saveBtn.disabled = true;
            spinner.classList.remove('d-none');

            try {
                const id = document.getElementById('edit-donor-id').value;
                const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                const formData = new FormData(form);
                formData.append('_method', 'PUT');

                const response = await fetch(`/donors/${id}`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': token
                    },
                    body: formData
                });

                const result = await response.json();

                if (response.ok) {
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        title: 'Donor updated successfully!',
                        animation: true,
                        icon: 'success',
                        timer: 3000,
                        timerProgressBar: true,
                        showCloseButton: true,
                        showConfirmButton: false
                    }).then(() => {
                        window.location.href = '/donors';
                    });
                } else {
                    Swal.fire('Error', result.message || 'Something went wrong.', 'error');
                }
            } catch (error) {
                Swal.fire('Request Failed', 'Please try again or check your connection.', 'error');
                console.error('Update error:', error);
            } finally {
                saveBtn.disabled = false;
                spinner.classList.add('d-none');
            }
        });
    });
