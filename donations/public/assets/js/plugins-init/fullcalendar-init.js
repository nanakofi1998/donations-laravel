"use strict";

function initializeFullCalendar() {
    let initialDate = typeof initialCalendarDate !== "undefined" 
        ? initialCalendarDate 
        : new Date().toISOString().split("T")[0];

    const calendarEl = document.getElementById("calendar");
    if (!calendarEl) return;

    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialDate: initialDate,
        headerToolbar: {
            left: "prev,next today",
            center: "title",
            right: "dayGridMonth,timeGridWeek,timeGridDay"
        },
        navLinks: true,
        nowIndicator: true,
        selectable: true,
        editable: true,
        droppable: true,

        events: async function(fetchInfo, successCallback, failureCallback) {
            try {
                const response = await fetch("/events"); 
                const data = await response.json();
                successCallback(data);
            } catch (error) {
                console.error("Error fetching events:", error);
                failureCallback(error);
            }
        },

        select: function (arg) {
            const today = new Date();
            today.setHours(0, 0, 0, 0); // Reset time for accurate date comparison

            if (arg.start < today) {
                Swal.fire({
                    icon: "error",
                    title: "Invalid Date!",
                    text: "You cannot create events in the past.",
                });
                calendar.unselect();
                return;
            }

            Swal.fire({
                title: "Enter Event Title",
                input: "text",
                showCancelButton: true,
                confirmButtonText: "Save",
                preConfirm: (title) => {
                    if (!title) {
                        Swal.showValidationMessage("Event title is required!");
                    }
                    return title;
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    calendar.addEvent({
                        title: result.value,
                        start: arg.start,
                        end: arg.end,
                        allDay: arg.allDay
                    });
                }
                calendar.unselect();
            });
        },

        eventReceive: function(eventInfo) {
            const today = new Date();
            today.setHours(0, 0, 0, 0);

            if (eventInfo.event.start < today) {
                Swal.fire({
                    icon: "error",
                    title: "Error!",
                    text: "You cannot move events to past dates.",
                });
                eventInfo.event.remove(); // Remove the dropped event immediately
            }
        },

        eventDrop: function(eventInfo) {
            const today = new Date();
            today.setHours(0, 0, 0, 0);

            if (eventInfo.event.start < today) {
                Swal.fire({
                    icon: "error",
                    title: "Error!",
                    text: "You cannot move events to past dates.",
                });
                eventInfo.revert(); // Revert back to the original position
            }
        },

        drop: function (arg) {
            const today = new Date();
            today.setHours(0, 0, 0, 0);

            if (arg.date < today) {
                Swal.fire({
                    icon: "error",
                    title: "Error!",
                    text: "You cannot drag events to past dates.",
                });
                arg.revert(); // Prevent the drop action
                return;
            }

            const removeAfterDrop = document.getElementById("drop-remove");
            if (removeAfterDrop && removeAfterDrop.checked) {
                arg.draggedEl.remove();
            }
        }
    });

    calendar.render();
}

jQuery(window).on("load", function () {
    setTimeout(initializeFullCalendar, 1000);
});
