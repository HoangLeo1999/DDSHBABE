<div class="modal fade" id="addSpeciesModal" tabindex="-1" role="dialog" aria-labelledby="addSpeciesModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addSpeciesModalLabel">Add New Species</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form to add a new Phylum -->
                <form id="addSpeciesForm">
                    @csrf

                    <div class="form-group">
                        <label for="loai_vn">Loai VN:</label>
                        <input type="text" name="loai_vn" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="loai_latin">Loai Latin:</label>
                        <input type="text" name="loai_latin" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="genus_id">Chi</label>
                        <select class="form-control" id="genus_id" name="genus_id">
                            @foreach($genus as $genu)
                                <option value="{{ $genu->id }}">{{ $genu->chi_vn }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="family_id">Họ</label>
                        <select class="form-control" id="family_id" name="family_id">
                            @foreach($families as $family)
                                <option value="{{ $family->id }}">{{ $family->ho_vn }}</option>
                            @endforeach
                        </select>
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
                        <label for="classes_id">Lớp</label>
                        <select class="form-control" id="classes_id" name="classes_id">
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

                    <button type="submit" class="btn btn-primary">Add Species </button>
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
$('#addSpeciesModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget);});
$(document).ready(function () {
    $('#addSpeciesForm').submit(function (e) {
        e.preventDefault();

        // Serialize form data
        var formData = $(this).serialize();

        // Submit form data using Ajax
        $.ajax({
            url: '/admin/add-species',
            type: 'post',
            data: formData,
            success: function (response) {
                // Handle success
                console.log(response);
                // You can update the UI or close the modal here
                $('#addSpeciesModal').modal('toggle');
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