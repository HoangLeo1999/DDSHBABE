<!-- The Edit User Modal -->
<div class="modal fade" id="editRoleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sửa thông tin vai trò</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editRoleForm">
                    @csrf
                    @method('PUT') {{-- Sử dụng phương thức PUT để cập nhật --}}
                    <input type="hidden" id="editRoleId" name="id">

                    <div class="form-group">
                        <label for="editName">Tên vai trò:</label>
                        <input type="text" class="form-control" id="editName" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="editguardname">Guard name:</label>
                        <input type="text" class="form-control" id="editguardname" name="guard_name" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" onclick="submitEditUserData()">Lưu</button>
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
          // Show edit modal when button is clicked
$('#editRoleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget);
  var userId = button.data('id');

  // AJAX request to get user data
  $.ajax({
          type: 'GET',
url: '/admin/get-role/'+userId,
success: function (data) {
  console.log(data);  // Kiểm tra dữ liệu trả về
  // Fill in the form fields with user data
  $('#editRoleId').val(data.id);
  $('#editName').val(data.name);
  $('#editguardname').val(data.guard_name);
},
error: function (error) {
  console.log(error);
}
      });
});

// Add a function to submit edited user data
function submitEditUserData() {
  var csrfToken = $('meta[name="csrf-token"]').attr('content');
  $.ajax({
      type: 'POST',
      url: '{{ route("admin.saveRole") }}', // Đổi thành đường dẫn của bạn
      data: $('#editRoleForm').serialize(),
      headers: {
      'X-CSRF-TOKEN': csrfToken
  },
      success: function(response) {
          console.log(response);
          $('#editRoleModal').modal('toggle');
          // Load updated user list using AJAX
          $.ajax({
              type: 'GET',
              url: '{{ route("admin.role") }}',
              success: function(data) {
                  $('#roles').html(data);
              },
              error: function(error) {
                  console.log(error);
              }
          });
      },
      error: function(error) {
          console.log(error);
      }
  });
}

  </script>

