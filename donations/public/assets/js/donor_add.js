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
    });
}