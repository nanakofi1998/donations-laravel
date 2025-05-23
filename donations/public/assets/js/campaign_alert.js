
if (typeof success !== 'undefined') {
    Swal.fire({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 5000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer);
            toast.addEventListener('mouseleave', Swal.resumeTimer);
        },
        title: "Campaign Created Successfully",
        icon: "success",
        text: successMessage,
        iconColor: '#3085d6',
        animated: true,
        background: '#fff',
    });
}
if (typeof error !== 'undefined') {
    Swal.fire({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 5000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer);
            toast.addEventListener('mouseleave', Swal.resumeTimer);
        },
        title: "Error Cannot Create Campaign",
        icon: "error",
        text: errorMessage,
        iconColor: '#d33',
        background: '#fff',
        animated: true,
    });
}