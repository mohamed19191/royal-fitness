document.addEventListener("DOMContentLoaded", function() {
    let currentDay = 1;
    const totalDays = 30;

    // Initialize the first day as active
    document.getElementById(`day-${currentDay}`).classList.add('active');

    document.getElementById("start-button").addEventListener("click", function() {
        // If the current day is within the total days limit
        if (currentDay <= totalDays) {
            // Show the content of the current day
            alert(`محتوى اليوم ${currentDay}: تم عرض المحتوى`);

            // Move to the next day if there is one
            if (currentDay < totalDays) {
                // Deactivate the previous day
                document.getElementById(`day-${currentDay}`).classList.remove('active');
                // Activate the next day
                currentDay++;
                document.getElementById(`day-${currentDay}`).classList.add('active');
            }
        } else {
            alert("لقد أكملت جميع الأيام.");
        }
    });
});
