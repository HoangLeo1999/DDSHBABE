<div class="modal fade" id="addFamilyModal" tabindex="-1" role="dialog" aria-labelledby="addFamilyModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addFamilyModalLabel">Add New Family</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form to add a new Phylum -->
                <form id="addFamilyForm">
                    @csrf

                    <div class="form-group">
                        <label for="ho_vn">Họ VN:</label>
                        <input type="text" name="ho_vn" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="ho_latin">Họ Latin:</label>
                        <input type="text" name="ho_latin" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="order_id">Bộ</label>
                        <select class="form-control" id="order_id" name="order_id">
                            @foreach($orders as $bo)
                                <option value="{{ $bo->id }}">{{ $bo->bo_vn }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="class_id">Lớp</label>
                        <select class="form-control" id="class_id" name="class_id">
                            @foreach($classes as $class)
                                <option value="{{ $class->id }}">{{ $class->lop_vn }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="phylum_id">Ngành:</label>
                        <select class="form-control" id="phylum_id" name="phylum_id">
                            @foreach($phylums as $nganh)
                                <option value="{{ $nganh->id }}">{{ $nganh->nganh_vn }}</option>
                            @endforeach
                        </select>
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

                    <button type="submit" class="btn btn-primary">Add Family </button>
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
$('#addFamilyModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget);});
$(document).ready(function () {
    $('#addFamilyForm').submit(function (e) {
        e.preventDefault();

        // Serialize form data
        var formData = $(this).serialize();

        // Submit form data using Ajax
        $.ajax({
            url: '{{ route('admin.addFamily') }}',
            type: 'post',
            data: formData,
            success: function (response) {
                // Handle success
                console.log(response);
                // You can update the UI or close the modal here
                $('#addFamilyModal').modal('toggle');
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