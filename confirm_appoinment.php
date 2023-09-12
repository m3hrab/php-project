<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor List</title>
    <style>
        /* Style for the container holding each doctor's information */
        main {
            display:flex;
            flex-direction: column;
            align-items:center;
        }
        .doctor-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 60%;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
        }

        /* Style for the doctor's image */
        .doctor-image {
            max-width: 300px;
            max-height: 300px;
            margin-right: 10px;
        }

        /* Style for the doctor's information (Name, Specialist, Clinic Address) */
        .doctor-info {
            margin:auto;
        }

        /* Style for the button */
        .appointment-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
        }

        /* Style for the appointment modal */
        .appointment-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 1;
        }

        /* Style for the appointment modal content */
        .appointment-modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        /* Style for the available time slots */
        .available-times {
            margin: 20px 0;
        }

        /* Style for the "Confirm Appointment" button */
        .confirm-appointment-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <main>
    <h1 style="text-align:center;">All Doctors</h1>
    <?php
    include 'dbcon.php';

    $sql = "SELECT * FROM doctor_list";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='doctor-container'>";
            if (!empty($row['image_path'])) {
                echo "<img class='doctor-image' src='" . $row['image_path'] . "' alt='Doctor Image'>";
            }
            echo "<div class='doctor-info'>";
            echo "<strong>Name:</strong> " . $row['name'] . "<br>";
            echo "<strong>Specialist:</strong> " . $row['specialist'] . "<br>";
            echo "<strong>Clinic Address:</strong> " . $row['clinic_address'] . "<br>";
            echo "</div>";
            
            // Add data attributes for doctorId and userId to the appointment button
            echo "<button class='appointment-button' onclick='openModal(this)' data-doctorid='" . $row['id'] . "' data-userid='" . $userId . "'>Make an Appointment</button>";
            
            echo "</div>";
        }
    } else {
        echo "No doctors found.";
    }

    mysqli_close($con);
    ?>

    <!-- Appointment Modal -->
    <div id="appointmentModal" class="appointment-modal">
        <div class="appointment-modal-content">
            <h2>Set Appointment</h2>
            <div class="available-times">
                <p>Available Time Slots:</p>
                <!-- You can populate the available time slots dynamically here -->
                <select id="timeSlots">
                    <option value="9:00 AM">9:00 AM</option>
                    <option value="10:00 AM">10:00 AM</option>
                    <option value="11:00 AM">11:00 AM</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
            <button class="confirm-appointment-button" onclick="confirmAppointment()">Confirm Appointment</button>
            <button onclick="closeModal()">Close</button>
        </div>
    </div>

    <script>
        // Global variables to store doctorId and userId
        var openModal = {
            doctorId: null,
            userId: null
        };

        function openModal(button) {
            // Get the doctorId and userId from the data attributes of the clicked button
            openModal.doctorId = button.getAttribute('data-doctorid');
            openModal.userId = button.getAttribute('data-userid');

            document.getElementById("appointmentModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("appointmentModal").style.display = "none";
        }

        function confirmAppointment() {
            const selectedTimeSlot = document.getElementById("timeSlots").value;
            const doctorId = openModal.doctorId;
            const userId = openModal.userId;

            if (selectedTimeSlot && doctorId && userId) {
                // Create an AJAX request to add the appointment
                const xhr = new XMLHttpRequest();
                xhr.open("POST", "add_appointment.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        // Handle the response, e.g., display a success message
                        alert("Appointment confirmed!");
                        closeModal();
                    }
                };
                xhr.send(`doctorId=${doctorId}&userId=${userId}&timeSlot=${selectedTimeSlot}`);
            } else {
                alert("Please select a time slot.");
            }
        }
    </script>

    </main>
</body>
</html>
