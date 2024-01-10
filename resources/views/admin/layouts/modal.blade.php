<!-- Button to trigger modal -->

  
  <!-- The Modal -->
  <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <!-- Modal content goes here -->
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Thêm tài khoản mới</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Your form goes here -->
          <form id="addUserForm">
            @csrf
            <div class="form-group">
              <label for="name">Tên tài khoản:</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="password">Mật khẩu:</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          <button type="button" class="btn btn-primary" onclick="submitUserData()">Lưu</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Include jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  
  <!-- JavaScript to Show Modal -->
  <script>
    $(document).ready(function() {
      // Show modal when button is clicked
      $(".btn-success").click(function() {
        $("#addUserModal").modal("show");
      });
    });
  
    // Add a function to submit form data
    function submitUserData() {
      // Your form submission logic goes here
      // For example, you can use AJAX to submit the form asynchronously
      $.ajax({
        type: 'POST',
        url: '{{ route("admin.addAccount") }}', // Change this to your route
        data: $('#addUserForm').serialize(),
        success: function(response) {
          // Handle success response
          console.log(response);
          $("#addUserModal").modal("hide");
          // You may want to reload the page or update the user list here
        },
        error: function(error) {
          // Handle error response
          console.log(error);
        }
      });
    }
  </script>
  