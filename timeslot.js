// Get user input for start and end times (in HH:mm format)
const startTimeInput = prompt("Enter start time (HH:mm):");
const endTimeInput = prompt("Enter end time (HH:mm):");

// Convert input times to Date objects
const startTime = new Date(`2000-01-01 ${startTimeInput}`);
const endTime = new Date(`2000-01-01 ${endTimeInput}`);

// Function to format time as HH:mm
function formatTime(date) {
  const hours = date.getHours().toString().padStart(2, '0');
  const minutes = date.getMinutes().toString().padStart(2, '0');
  return `${hours}:${minutes}`;
}

// Initialize the current time with the start time
let currentTime = new Date(startTime);

// Split and display time slots in 15-minute intervals
while (currentTime <= endTime) {
  const slotStartTime = formatTime(currentTime);
  currentTime.setMinutes(currentTime.getMinutes() + 15);
  const slotEndTime = formatTime(currentTime);
  console.log(`Time Slot: ${slotStartTime} - ${slotEndTime}`);
}
