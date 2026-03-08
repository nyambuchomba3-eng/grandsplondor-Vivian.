<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Events & Quotation Requests</title>

    <!-- Main stylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- ================= HEADER ================= -->
<header>
    <div class="container header-container">
        <div class="logo">
            <h2>GRAND SPLENDOR</h2>
        </div>

        <nav>
            <ul class="nav-menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="about-us.html">About</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="contact-us.html">Contact</a></li>				
            </ul>
        </nav>
    </div>
</header>

<!-- ================= EVENTS SECTION ================= -->
<section class="events-section">
    <div class="container">
        <h1 class="section-title">Our Event Categories</h1>

        <!-- ====== TABS ====== -->
        <div class="tabs">
            <button class="tab-btn active" data-tab="romantic">Romantic Events</button>
            <button class="tab-btn" data-tab="corporate">Corporate Events</button>
            <button class="tab-btn" data-tab="entertainment">Entertainment Events</button>
        </div>

        <!-- ================= ROMANTIC EVENTS ================= -->
        <div class="tab-content active" id="romantic">

            <!-- Event Types Grid -->
            <div class="event-grid">
                <div class="event-card">
                    <img src="images/wedding.jpg" alt="Wedding Ceremony">
                    <h3>Wedding Ceremony</h3>
                    <p>Elegant wedding setups with customized décor and services.</p>
                </div>

                <div class="event-card">
                    <img src="images/honeymoon.jpg" alt="Honeymoon Dinner">
                    <h3>Honeymoon Dinner</h3>
                    <p>Romantic private dining experiences for couples.</p>
                </div>

                <div class="event-card">
                    <img src="images/anniversary.jpg" alt="Anniversary Celebration">
                    <h3>Anniversary Celebration</h3>
                    <p>Memorable anniversary events tailored to your love story.</p>
                </div>
            </div>

            <!-- Romantic Events Form -->
            <form  backgroundcolor ="#eef5ff" class="quote-form" id="romanticForm" action="php/submit_booking.php" method="POST">
                <h2>Request a Quote – Romantic Events</h2>

                <!-- Event Category (hidden for backend processing) -->
                <input type="hidden" name="event_category" value="Romantic">

                <label>Event Type</label>
                <select name="event_type" required>
                    <option value="">Select Event Type</option>
                    <option>Wedding Ceremony</option>
                    <option>Honeymoon Dinner</option>
                    <option>Anniversary Celebration</option>
                </select>

                <h3>Personal Details</h3>
                <input type="text" name="full_name" placeholder="Full Name" required>
                <input type="tel" name="phone" placeholder="Phone Number" required>
                <input type="email" name="email" placeholder="Email Address" required>

                <h3>Event Details</h3>
                <input type="number" name="capacity" placeholder="Approximate Capacity" required>
                <textarea name="color_theme" placeholder="Preferred Color Theme"></textarea>
                
<select name="venue_type" class="venue_type">
    <option value="">Select</option>
    <option value="Indoor">Indoor</option>
    <option value="Outdoor">Outdoor</option>
</select>

<select name="indoor_venue" class="indoor_venue" style="display:none;">
    <option value="">Select Indoor Venue</option>
    <option value="Gardens">Gardens</option>
    <option value="Hotel">Hotel</option>
    <option value="Convention Centre">Convention Centre</option>
</select>


  <select name="outdoor_venue" class="outdoor_venue" style="display:none;">
    <option value="">Select Outdoor Venue</option>
    <option value="Parks">Parks</option>
    <option value="Beaches">Beaches</option>
    <option value="Rooftops">Rooftops</option>
</select>


  <label for="furniture">Furniture Requirements</label>
<textarea name="furniture" id="furniture" rows="4"
placeholder="Specify furniture type, capacity, and description (e.g. 200 chairs, 20 round tables, VIP seating)..."
required></textarea>


    <label for="refreshments_details">Refreshments Required</label>
<textarea name="refreshments_details" id="refreshments_details" rows="4"
placeholder="Describe refreshments required (snacks, drinks, meals, etc.)"></textarea>

<label>Need Catering Department?</label>
<div class="radio-group">
    <label>
        <input type="radio" name="catering_required" value="Yes" required> Yes
    </label>
    <label>
        <input type="radio" name="catering_required" value="No"> No
    </label>
</div>

                <label>PA System Required?</label>
                <div class="radio-group">
                    <label><input type="radio" name="pa_system" value="Yes"> Yes</label>
                    <label><input type="radio" name="pa_system" value="No"> No</label>
                </div>

                <textarea name="accommodation" placeholder="Accommodation Requirements"></textarea>

                <button type="submit">Request Quote</button>
			</form>
			<div class="form-success-message" id="romanticSuccess">
				✅ Your quotation request has been submitted successfully.
				We will contact you shortly.
			</div>
		</div>
				
        <!-- ================= CORPORATE EVENTS ================= -->
        <div class="tab-content" id="corporate">

            <div class="event-grid">
                <div class="event-card">
                    <img src="images/conference.jpg" alt="Conference">
                    <h3>Conference</h3>
                    <p>Professional conference venues with full technical support.</p>
                </div>

                <div class="event-card">
                    <img src="images/launch.jpg" alt="Product Launch">
                    <h3>Product Launch</h3>
                    <p>Stylish product launches that leave a lasting impression.</p>
                </div>

                <div class="event-card">
                    <img src="images/team-building.jpg" alt="Team Building">
                    <h3>Team Building Retreat</h3>
                    <p>Engaging retreats designed to strengthen team collaboration.</p>
                </div>
            </div>

			<!-- Corporate Events Form -->
            <form class="quote-form" id="corporateForm" action="php/submit_booking.php" method="POST">
                <h2>Request a Quote – Corporate Events</h2>
                <input type="hidden" name="event_category" value="Corporate">

                <label>Event Type</label>
                <select name="event_type" required>
                    <option value="">Select Event Type</option>
                    <option>Conference</option>
                    <option>Product Launch</option>
                    <option>Team Building Retreat</option>
                </select>

                <h3>Personal Details</h3>
                <input type="text" name="full_name" placeholder="Full Name" required>
                <input type="tel" name="phone" placeholder="Phone Number" required>
                <input type="email" name="email" placeholder="Email Address" required>

                <h3>Event Details</h3>
                <input type="number" name="capacity" placeholder="Approximate Capacity" required>
<select name="venue_type" class="venue_type">
    <option value="">Select</option>
    <option value="Indoor">Indoor</option>
    <option value="Outdoor">Outdoor</option>
</select>

<select name="indoor_venue" class="indoor_venue" style="display:none;">
    <option value="">Select Indoor Venue</option>
    <option value="Gardens">Gardens</option>
    <option value="Hotel">Hotel</option>
    <option value="Convention Centre">Convention Centre</option>
</select>


  <select name="outdoor_venue" class="outdoor_venue" style="display:none;">
    <option value="">Select Outdoor Venue</option>
    <option value="Parks">Parks</option>
    <option value="Beaches">Beaches</option>
    <option value="Rooftops">Rooftops</option>
</select>


  <label for="furniture">Furniture Requirements</label>
<textarea name="furniture" id="furniture" rows="4"
placeholder="Specify furniture type, capacity, and description (e.g. 200 chairs, 20 round tables, VIP seating)..."
required></textarea>


    <label for="refreshments_details">Refreshments Required</label>
<textarea name="refreshments_details" id="refreshments_details" rows="4"
placeholder="Describe refreshments required (snacks, drinks, meals, etc.)"></textarea>

<label>Need Catering Department?</label>
<div class="radio-group">
    <label>
        <input type="radio" name="catering_required" value="Yes" required> Yes
    </label>
    <label>
        <input type="radio" name="catering_required" value="No"> No
    </label>
</div>
                <label>PA System Required?</label>
                <div class="radio-group">
                    <label><input type="radio" name="pa_system" value="Yes"> Yes</label>
                    <label><input type="radio" name="pa_system" value="No"> No</label>
                </div>

                <textarea name="lingual_services" placeholder="Lingual / Translation Services"></textarea>

                <button type="submit">Request Quote</button>
            </form>
			<div class="form-success-message" id="corporateSuccess">
				✅ Your quotation request has been submitted successfully.
				We will contact you shortly.
			</div>
        </div>

        <!-- ================= ENTERTAINMENT EVENTS ================= -->
        <div class="tab-content" id="entertainment">

            <div class="event-grid">
                <div class="event-card">
                    <img src="images/music.jpg" alt="Live Music">
                    <h3>Live Music Night</h3>
                    <p>Live performances with premium sound and lighting.</p>
                </div>

                <div class="event-card">
                    <img src="images/birthday.jpg" alt="Birthday Party">
                    <h3>Birthday Party</h3>
                    <p>Fun-filled birthday celebrations for all age groups.</p>
                </div>

                <div class="event-card">
                    <img src="images/cultural.jpg" alt="Cultural Night">
                    <h3>Cultural Night</h3>
                    <p>Authentic cultural showcases with themed décor.</p>
                </div>
            </div>
			
			<!-- Entertainment Events Form -->
            <form class="quote-form" id="entertainmentForm" action="php/submit_booking.php" method="POST">
                <h2>Request a Quote – Entertainment Events</h2>
                <input type="hidden" name="event_category" value="Entertainment">

                <label>Event Type</label>
                <select name="event_type" required>
                    <option value="">Select Event Type</option>
                    <option>Live Music Night</option>
                    <option>Birthday Party</option>
                    <option>Cultural Night</option>
                </select>

                <h3>Personal Details</h3>
                <input type="text" name="full_name" placeholder="Full Name" required>
                <input type="tel" name="phone" placeholder="Phone Number" required>
                <input type="email" name="email" placeholder="Email Address" required>

                <h3>Event Details</h3>
                <input type="number" name="capacity" placeholder="Approximate Capacity" required>
                <textarea name="color_theme" placeholder="Preferred Color Theme"></textarea>
               
<select name="venue_type" class="venue_type">
    <option value="">Select</option>
    <option value="Indoor">Indoor</option>
    <option value="Outdoor">Outdoor</option>
</select>

<select name="indoor_venue" class="indoor_venue" style="display:none;">
    <option value="">Select Indoor Venue</option>
    <option value="Banquet hall">Banquet hall</option>
    <option value="Hotel">Hotel</option>
    <option value="Convention Centre">Convention Centre</option>
	<option value="Gardens">Gardens</option>
</select>


  <select name="outdoor_venue" class="outdoor_venue" style="display:none;">
    <option value="">Select Outdoor Venue</option>
    <option value="Parks">Parks</option>
    <option value="Beaches">Beaches</option>
    <option value="Rooftops">Rooftops</option>
</select>

  <label for="furniture">Furniture Requirements</label>
<textarea name="furniture" id="furniture" rows="4"
placeholder="Specify furniture type, capacity, and description (e.g. 200 chairs, 20 round tables, VIP seating)..."
required></textarea>


    <label for="refreshments_details">Refreshments Required</label>
<textarea name="refreshments_details" id="refreshments_details" rows="4"
placeholder="Describe refreshments required (snacks, drinks, meals, etc.)"></textarea>

<label>Need Catering Department?</label>
<div class="radio-group">
    <label>
        <input type="radio" name="catering_required" value="Yes" required> Yes
    </label>
    <label>
        <input type="radio" name="catering_required" value="No"> No
    </label>
</div>
                <label>PA System Required?</label>
                <div class="radio-group">
                    <label><input type="radio" name="pa_system" value="Yes"> Yes</label>
                    <label><input type="radio" name="pa_system" value="No"> No</label>
                </div>

                <button type="submit">Request Quote</button>
            </form>
			<div class="form-success-message" id="entertainmentSuccess">
				✅ Your quotation request has been submitted successfully.
				We will contact you shortly.
			</div>
        </div>

    </div>
</section>

<!-- ================= FOOTER ================= -->
<footer>
    <div class="container footer-container">
        <div>
            <h4>About Us</h4>
            <p>We provide premium hotel event hosting and tailored experiences.</p>
        </div>

        <div>
            <h4>Quick Links</h4>
            <ul>
                <li><a href="index.html" style="color:white">Home</a></li>
                <li><a href="events.php" style="color:white">Events</a></li>
				<li><a href="contact-us.html" style="color:white">Contacts</a></li>
            </ul>
        </div>

        <div>
            <h4>Contact</h4>
            <p>Email: info@grandsplendor.com</p>
            <p>Phone: +254 700 000 000</p>
        </div>

        <div>
            <h4>Follow Us</h4>
            <p>Facebook | Instagram | Twitter</p>
        </div>
    </div>
</footer>

<!-- ================= SIMPLE TAB SCRIPT ================= -->
<script>
    const tabButtons = document.querySelectorAll(".tab-btn");
    const tabContents = document.querySelectorAll(".tab-content");

    tabButtons.forEach(btn => {
        btn.addEventListener("click", () => {
            tabButtons.forEach(b => b.classList.remove("active"));
            tabContents.forEach(c => c.classList.remove("active"));

            btn.classList.add("active");
            document.getElementById(btn.dataset.tab).classList.add("active");
        });
    });
</script>
<script>
    // Display success message if URL contains ?status=success
    const params = new URLSearchParams(window.location.search);
    if (params.get("status") === "success") {
        document.getElementById("romanticSuccess").style.display = "block";
		document.getElementById("corporateSuccess").style.display = "block";
		document.getElementById("entertainmentSuccess").style.display = "block";
    }
	setTimeout(() => {
            romanticSuccess.style.display = "none";
        }, 6000);
	setTimeout(() => {
            corporateSuccess.style.display = "none";
        }, 6000);
	setTimeout(() => {
            entertainmentSuccess.style.display = "none";
        }, 6000);	
</script>
<script>
document.querySelectorAll('.venue_type').forEach(function(select) {
    select.addEventListener('change', function () {
        const form = this.closest('form');
        const indoor = form.querySelector('.indoor_venue');
        const outdoor = form.querySelector('.outdoor_venue');

        if (this.value === 'Indoor') {
            indoor.style.display = 'block';
            outdoor.style.display = 'none';
        } else if (this.value === 'Outdoor') {
            indoor.style.display = 'none';
            outdoor.style.display = 'block';
        } else {
            indoor.style.display = 'none';
            outdoor.style.display = 'none';
        }
    });
});
</script>

</body>
</html>
