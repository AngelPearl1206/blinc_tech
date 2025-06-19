function showBookingDateTimeModal() {
  // Remove any existing modal
  const existing = document.getElementById('bookingDateTimeModal');
  if (existing) existing.remove();

  // Modal HTML
  const modalHtml = `
    <div class="modal fade" id="bookingDateTimeModal" tabindex="-1" aria-labelledby="bookingDateTimeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-4" style="background: #f7f8fa; border-radius: 16px; max-width: 400px; margin: auto;">
          <div class="modal-body">
            <h2 class="fw-bold mb-2 text-center" style="color: #4C539F;">Booking Details</h2>
            <p class="mb-4 text-center" style="color: #4C539F;">Select your desired date and time.</p>
            <form>
              <div class="mb-3">
                <label for="bookingDate" class="form-label" style="color: #4C539F;">Booking Date</label>
                <input type="date" class="form-control" id="bookingDate" placeholder="Select...">
              </div>
              <div class="mb-4">
                <label for="startTime" class="form-label" style="color: #4C539F;">Start Time</label>
                <input type="time" class="form-control" id="startTime" placeholder="Select...">
              </div>
              <button type="button" class="btn w-100" style="background: #4C539F; color: #fff; font-weight: 600;">Proceed to Payment</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  `;

  // Append to body
  document.body.insertAdjacentHTML('beforeend', modalHtml);

  // Show modal using Bootstrap 5
  const modal = new bootstrap.Modal(document.getElementById('bookingDateTimeModal'));
  modal.show();

  // Remove modal from DOM when hidden
  document.getElementById('bookingDateTimeModal').addEventListener('hidden.bs.modal', function () {
    this.remove();
  });
} 