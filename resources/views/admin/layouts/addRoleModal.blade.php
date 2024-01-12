<!-- Button to trigger modal -->

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
                <button type="submit" class="btn btn-primary">Add Role </button>
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
  $(document).ready(function () {
    $('#addRoleForm').submit(function (e) {
        e.preventDefault();

        // Serialize form data
        var formData = $(this).serialize();
          $.ajax({
            url: '/admin/add-role',
            type: 'post',
            data: formData,
            success: function (response) {
                // Handle success
                console.log(response);
                // You can update the UI or close the modal here
                $('#addRoleModal').modal('toggle');
                location.reload(); 
            },
            error: function (xhr) {
                // Handle errors
                console.log(xhr.responseText);
            }
        })
       
});
            //   },
            //   error: function(error) {
            //       // Handle error response
            //       console.log(error);
            //   }
          });
      
  </script>
  