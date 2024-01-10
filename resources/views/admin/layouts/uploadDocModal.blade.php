<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Document</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="uploadForm" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Tên tài liệu</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="coquanbh">Cơ quan ban hành</label>
                        <input type="text" class="form-control" id="coquanbh" name="coquanbh" required>
                    </div>
                    <div class="form-group">
                        <label for="document">Choose Document</label>
                        <input type="file" class="form-control" id="document" name="document" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        
<!-- Include Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $('#uploadModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget);});
    $(document).ready(function () {
    // Intercept the form submission
    $('#uploadForm').submit(function (e) {
        e.preventDefault();

        // Create FormData object to send the file data
        var formData = new FormData(this);

        // Send the AJAX request
        $.ajax({
            type: 'POST',
            url: '/admin/create-doc',
            data: formData,
            processData: false,
            contentType: false,
            success: function (data) {
                // Handle success response
                console.log('Document uploaded successfully');
                $('#addClassModal').modal('toggle');
                location.reload(); 
                // You may want to update the document list without refreshing the page here
            },
            error: function (error) {
                // Handle error response
                console.error('Error uploading document:', error.responseJSON.message);
            },
        });
    });
});

</script>
