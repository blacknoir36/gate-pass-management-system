<!DOCTYPE html>
<html>
<head>
<title>QR CODE GENERATOR</title>

<style>
body {
  background: #1C415D;
}

.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 25px 35px;
  border-radius: 10px;
  background: #fff;
}

.container p {
  font-weight: 600;
  font-size: 15px;
  margin-bottom: 8px;
}

.container input,
.container select {
  width: 100%;
  height: 40px;
  border: 1px solid #494eea;
  outline: 0;
  padding: 5px;
  margin: 5px 0 10px;
  border-radius: 5px;
  font-size: 14px;
}

.container label {
  margin-top: 10px;
  display: block;
  font-size: 14px;
  font-weight: 500;
}

.container .row {
  display: flex;
  justify-content: space-between;
}

.container .row input {
  width: 100%;
}

.container button {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.container button:hover {
  background-color: #3e8e41;
}

.container .print-button {
  background-color: #008CBA;
  margin-top: 20px;
}

.shake-animation {
  animation: shake 0.2s ease-in-out;
}

@keyframes shake {
  0% {
    transform: translateX(0);
  }
  10%, 90% {
    transform: translateX(-10px);
  }
  20%, 80% {
    transform: translateX(10px);
  }
  30%, 50%, 70% {
    transform: translateX(-10px);
  }
  40%, 60% {
    transform: translateX(10px);
  }
  100% {
    transform: translateX(0);
  }
}

</style>
</head>
<body>
  <div class="container">
    <p>ENTER VISITORS INFORMATION</p>
    <label for="name">Full Name:</label>
    <input type="text" id="nameInput" placeholder="Full Name" required>

    <div class="row">
      <div class="column">
        <label for="address">Address:</label>
        <input type="text" id="addressInput"  required>
      </div>
      <div class="column">
        <label for="phone">Phone Number:</label>
        <input type="text" id="phoneInput"  required>
      </div>
    </div>

    <label for="email">Email Address:</label>
    <input type="email" id="emailInput" placeholder="Email Address" required>

    <label for="properties">Properties:</label>
    <input type="text" id="propertiesInput" placeholder="Properties">

    <label for="person">Contact Person:</label>
    <input type="text" id="personInput" placeholder="Contact Person" required>

    <label for="purpose">Purpose of Visit:</label>
    <input type="text" id="purposeInput" placeholder="Purpose of Visit" required>

    <div class="row">
     <div class="column">
        <label for="arrival-time">Arrival Time:</label>
        <input type="time" id="arrivalTimeInput" required>
     </div>
    </div>

    <div id="imgBox">
      <canvas id="qrCanvas"></canvas>
    </div>
    <button onclick="GenerateQr()">Generate QR code</button>
    <button class="print-button" onclick="PrintQRCode()">Print QR code</button>
    <button type="submit" value="Submit" onclick="SaveToDatabase()">Save</button>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
  <script>
    let qrCanvas = document.getElementById("qrCanvas");
    let nameInput = document.getElementById("nameInput");
    let addressInput = document.getElementById("addressInput");
    let phoneInput = document.getElementById("phoneInput");
    let emailInput = document.getElementById("emailInput");
    let propertiesInput = document.getElementById("propertiesInput");
    let personInput = document.getElementById("personInput");
    let purposeInput = document.getElementById("purposeInput");
    let arrivalTimeInput = document.getElementById("arrivalTimeInput");
    let qr;

    function GenerateQr() {
      let name = nameInput.value;
      let address = addressInput.value;
      let phone = phoneInput.value;
      let email = emailInput.value;
      let properties = propertiesInput.value;
      let person = personInput.value;
      let purpose = purposeInput.value;
      let arrivalTime = arrivalTimeInput.value;
     

      if (!name || !address || !phone || !email || !properties || !person || !purpose || !arrivalTime) {
        // Add the shake animation to the input fields
        nameInput.classList.add("shake-animation");
        addressInput.classList.add("shake-animation");
        phoneInput.classList.add("shake-animation");
        emailInput.classList.add("shake-animation");
        propertiesInput.classList.add("shake-animation");
        personInput.classList.add("shake-animation");
        purposeInput.classList.add("shake-animation");
        arrivalTimeInput.classList.add("shake-animation");

        // Remove the shake animation after 0.4s
        setTimeout(function() {
          nameInput.classList.remove("shake-animation");
          addressInput.classList.remove("shake-animation");
          phoneInput.classList.remove("shake-animation");
          emailInput.classList.remove("shake-animation");
          propertiesInput.classList.remove("shake-animation");
          personInput.classList.remove("shake-animation");
          purposeInput.classList.remove("shake-animation");
          arrivalTimeInput.classList.remove("shake-animation");
        }, 400);

        return; // Exit the function if any input is missing
      }

      let qrText = `Name: ${name}\nAddress: ${address}\nPhone: ${phone}\nEmail: ${email}\nProperties: ${properties}\nContact Person: ${person}\nPurpose: ${purpose}\nArrival Time: ${arrivalTime}`;

      if (!qr) {
        qr = new QRious({
          element: qrCanvas,
          value: qrText,
          size: 150
        });
      } else {
        qr.set({
          value: qrText
        });
      }
    }

    function PrintQRCode() {
      let printWindow = window.open("", "_blank");
      printWindow.document.open();
      printWindow.document.write('<html><head><title>Print QR Code</title></head><body><img src="' + qr.toDataURL() + '"></body></html>');
      printWindow.document.close();
      printWindow.print();
    }
    
    function SaveToDatabase() {
      // Retrieve the form data
      let name = nameInput.value;
      let address = addressInput.value;
      let phone = phoneInput.value;
      let email = emailInput.value;
      let properties = propertiesInput.value;
      let person = personInput.value;
      let purpose = purposeInput.value;
      let arrivalTime = arrivalTimeInput.value;
      

      // Send the data to the server using AJAX or fetch API
      // Here's an example using fetch API
      fetch('save-data.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          name: name,
          address: address,
          phone: phone,
          email: email,
          properties: properties,
          person: person,
          purpose: purpose,
          arrivalTime: arrivalTime,
        })
      })
      .then(response => {
        if (response.ok) {
          console.log('Data saved successfully');
        } else {
          console.log('Failed to save data');
        }
      })
      .catch(error => {
        console.error('Error:', error);
      });
    }
  </script>
</body>
</html>
