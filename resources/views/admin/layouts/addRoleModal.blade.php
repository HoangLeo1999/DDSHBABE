<!-- Button to trigger modal -->
<button class="btn btn-success" data-toggle="modal" data-target="#addRoleModal">
    Thêm vai trò mới
  </button>
  <!-- The Modal -->
  <div class="modal fade" id="addRoleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <!-- Modal content goes here -->
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm vai trò mới</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Your form goes here -->
                <form id="addRoleForm">
                    @csrf
                    <div class="form-group">
                        <label for="name">Tên vai trò:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="guard_name">Guard name:</label>
                        <input type="text" class="form-control" id="guard_name" name="guard_name" required>
                    </div>
                  
                   
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" onclick="submitRoleData()">Thêm</button>
            </div>
        </div>
    </div>
</div>
  
  <!-- Include jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        
  <!-- Include Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <!-- JavaScript to Show Modal -->
  <script>
      

          // Show modal when button is clicked
          $('#addRoleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget);});
      // Add a function to submit form data
      function submitRoleData() {
          // Your form submission logic goes here
          // For example, you can use AJAX to submit the form asynchronously
          $.ajax({
              type: 'POST',
              url: '{{ route("admin.addRole") }}', // Change this to your route
              data: $('#addRoleForm').serialize(),
              success: function(response) {
                  // Handle success response
                  console.log(response);
                  $('#addRoleModal').modal('toggle');
                  // You may want to reload the page or update the user list here
                  $.ajax({
  type: 'GET',
  url: '{{ route("admin.role") }}', // Thay đổi thành đường dẫn của bạn
  success: function(data) {
      // Update the user list
      $('#roles').html(data);
  },
  error: function(error) {
      console.log(error);
  }
});
              },
              error: function(error) {
                  // Handle error response
                  console.log(error);
              }
          });
      }
  </script>
  