<?php
include_once("../connect/session_check.php");
$randomNumber = rand();
?>

<?php ob_start(); ?>
<?php $styles = ob_get_clean(); ?>

<?php ob_start(); ?>
<main>
  <section class="service d-flex align-items-center justify-content-center text-center">
    <canvas id="stars" class="d-none d-md-block" width="300" height="300"></canvas>
    <div class="container position-absolute">
      <div class="row align-items-center text-center">
        <div class="col-12 text-center">
          <h1 class="header">BLINC CONSULTING</h1>
        </div>
        <div class="col-12 text-center">
          <p class="desc">Built by Founders, for Founders. Let's Get You Funded.</p>
        </div>
      </div>
    </div>
  </section>
    <div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center bg-white">
      <div class="row w-100 align-items-stretch" style="max-width: 1100px;">
        <!-- Left Panel -->
        <div class="col-md-5 d-flex flex-column justify-content-center align-items-center bg-primary text-white rounded-start" style="min-height: 500px;">
          <h1 class="fw-bold mb-3 text-center">Booking Form</h1>
          <p class="text-center">Let's discuss your next dream project.</p>
        </div>
        <!-- Right Panel -->
        <div class="col-md-7 d-flex align-items-center justify-content-center bg-light rounded-end" style="min-height: 500px;">
          <div class="booking-form-box w-100">
            <form class="row g-3" id="detailedBookingMainForm">
              <div class="col-md-6">
                <label for="fullName" class="form-label text-primary">Full Name</label>
                <input type="text" class="form-control" id="fullName" name="fullName" placeholder="John Doe" required>
              </div>
              <div class="col-md-6">
                <label for="email" class="form-label text-primary">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="startup@gmail.com" required>
              </div>
              <div class="col-md-6">
                <label for="startupName" class="form-label text-primary">Startup Name</label>
                <input type="text" class="form-control" id="startupName" name="startupName" placeholder="New Startup">
              </div>
              <div class="col-md-6">
                <label for="portfolioLink" class="form-label text-primary">Website or Product Link</label>
                <input type="url" class="form-control" id="portfolioLink" name="portfolioLink" placeholder="http://sg.com">
              </div>
              <div class="col-md-6">
                <label for="startupStage" class="form-label text-primary">Startup Stage</label>
                <select class="form-select" id="startupStage" name="startupStage" required>
                  <option selected disabled value="">Choose...</option>
                  <option value="idea">Idea Stage</option>
                  <option value="mvp">MVP</option>
                  <option value="scaling">Scaling</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label text-primary d-block">Are you fundraising?</label>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="seriousFundraising" value="yes" id="fundYes" required>
                  <label class="form-check-label" for="fundYes">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="seriousFundraising" value="no" id="fundNo">
                  <label class="form-check-label" for="fundNo">No</label>
                </div>
              </div>
          
              <div class="col-12">
                <label for="pitchDeck" class="form-label text-primary">Upload Pitch Deck (Optional)</label>
                <input class="form-control" type="file" id="pitchDeck" name="pitchDeck">
              </div>
              <div class="col-12">
                <label for="challenge" class="form-label text-primary">Biggest Challenge Right Now</label>
                <textarea class="form-control" id="challenge" name="challenge" rows="2" placeholder="Write..." required></textarea>
              </div>
              <div class="col-12">
                <label for="additionalInfo" class="form-label text-primary">Anything else you'd like us to know?</label>
                <textarea class="form-control" id="additionalInfo" name="additionalInfo" rows="2" placeholder="Write..."></textarea>
              </div>
              <div class="col-12 text-center mt-3">
              <button class="px-3 py-1 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-warning" onclick="editProposalModal(this)" ${editViewModalData}>
                  <i class="ti ti-pencil"></i><span>Nexy</span>
              </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
      
      <!-- Date and Time Modal -->
      <div id="dateTimeModal" class="modal">
        <div class="modal-content">
          <span class="close-button" onclick="closeModal('dateTimeModal')">&times;</span>
          <div class="text-center mb-6">
            <h2 class="text-3xl md:text-4xl font-bold text-indigo-700 mb-2">Booking Schedule</h2>
            <p class="text-lg text-gray-600">Select your desired date and time.</p>
          </div>
          <form class="space-y-6" id="bookingDateTimeFormModal">
            <div>
              <label for="bookingDateModal" class="block text-gray-700 text-lg font-medium mb-2">Booking Date</label>
              <input type="date" id="bookingDateModal" name="bookingDate" class="block w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-lg form-input-rounded" aria-label="Select Booking Date" required>
            </div>
            <div>
              <label for="startTimeModal" class="block text-gray-700 text-lg font-medium mb-2">Start Time</label>
              <input type="time" id="startTimeModal" name="startTime" class="block w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-lg form-input-rounded" aria-label="Select Start Time" required>
            </div>
            <div class="pt-4">
              <button type="button" class="btn btn-primary px-4" onclick="showBookingDateTimeModal()">Next</button>
            </div>
          </form>
        </div>
      </div>
      <!-- Payment Modal -->
      <div id="paymentModal" class="modal">
        <div class="modal-content">
          <span class="close-button" onclick="closeModal('paymentModal')">&times;</span>
          <div class="text-center mb-6">
            <h2 class="text-3xl md:text-4xl font-bold text-indigo-700 mb-2">Payment Details</h2>
            <p class="text-lg text-gray-600">Advisory Consulting Session for one hour.</p>
          </div>
          <div class="mb-4">
            <label for="serviceBookingCode" class="block text-gray-700 text-lg font-medium mb-2">Service Booking Code</label>
            <input type="text" id="serviceBookingCode" name="serviceBookingCode" value="BLINC-SBC-12345" class="block w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 text-gray-800 font-semibold text-lg form-input-rounded" aria-label="Booking Code" />
          </div>
          <div class="mb-4">
            <label for="paymentFee" class="block text-gray-700 text-lg font-medium mb-2">Payment Fee</label>
            <input type="text" id="paymentFee" name="paymentFee" value="$75" readonly class="block w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 text-gray-800 font-semibold text-lg form-input-rounded" aria-label="Payment Fee">
          </div>
          <p class="text-red-600 text-sm md:text-base mb-6 text-center">This fee confirms your booking and is non-refundable for no-shows.</p>
          <button type="button" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-6 rounded-lg text-xl shadow-md transition duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-75" aria-label="Pay & Book My Session">Pay & Book My Session</button>
          <p class="text-gray-500 text-xs md:text-sm mt-6 text-center">No-show Policy: Calls are paid upfront and are forfeited without a 12-hour notice. One reschedule allowed with advance notice. No refunds for missed sessions.</p>
        </div>
      </div>
    </div>
</main>
<?php $content = ob_get_clean(); ?>

<?php ob_start(); ?>
<?php $scripts = ob_get_clean(); ?>

<?php include '../layouts/base.php'; ?>
<script src="../assets/js/default.js?=<?php echo $randomNumber; ?>"></script>
<script src="../assets/js/particles.js?=<?php echo $randomNumber; ?>"></script>
<script src="http://requirejs.org/docs/release/2.1.15/minified/require.js"></script>
<script src="https://rawgit.com/ironwallaby/delaunay/master/delaunay.js"></script>
<!-- Bootstrap JS (for Bootstrap 5) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>