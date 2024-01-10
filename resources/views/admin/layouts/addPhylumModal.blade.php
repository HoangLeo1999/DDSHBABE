<div class="modal fade" id="addPhylumModal" tabindex="-1" role="dialog" aria-labelledby="addPhylumModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPhylumModalLabel">Add New Phylum</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form to add a new Phylum -->
                <form id="addPhylumForm">
                    @csrf

                    <div class="form-group">
                        <label for="nganh_vn">Nganh VN:</label>
                        <input type="text" name="nganh_vn" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="nganh_latin">Nganh Latin:</label>
                        <input type="text" name="nganh_latin" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea name="description" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select name="status" class="form-control" required>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>

                    <!-- Add other form fields as needed -->

                    <button type="submit" class="btn btn-primary">Add Phylum</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        
<!-- Include Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
// Handle form submission using Ajax
$('#addPhylumModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget);});
$(document).ready(function () {
    $('#addPhylumForm').submit(function (e) {
        e.preventDefault();

        // Serialize form data
        var formData = $(this).serialize();

        // Submit form data using Ajax
        $.ajax({
            url: '{{ route('admin.addPhylum') }}',
            type: 'post',
            data: formData,
            success: function (response) {
                // Handle success
                console.log(response);
                // You can update the UI or close the modal here
                $('#addPhylumModal').modal('toggle');
                location.reload(); 
            },
            error: function (xhr) {
                // Handle errors
                console.log(xhr.responseText);
            }
        });
    });
});
</script>