
<!-- Modal sửa thông tin ngành -->
<div class="modal fade" id="editPhylumModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sửa thông tin ngành</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editPhylumForm">
                    @csrf
                    @method('PUT') {{-- Sử dụng phương thức PUT để cập nhật --}}
                    <input type="hidden" id="editPhylumId" name="id">

                    <div class="form-group">
                        <label for="editNganhVN">Tên Ngành (VN):</label>
                        <input type="text" class="form-control" id="editNganhVN" name="nganh_vn" required>
                    </div>
                    <div class="form-group">
                        <label for="editNganhLatin">Tên Ngành (Latin):</label>
                        <input type="text" class="form-control" id="editNganhLatin" name="nganh_latin" required>
                    </div>
                    <div class="form-group">
                        <label for="editDescription">Mô tả:</label>
                        <textarea class="form-control" id="editDescription" name="description" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="editSlug">Slug:</label>
                        <input type="text" class="form-control" id="editSlug" name="slug" required>
                    </div>
                    <div class="form-group">
                        <label for="editStatus">Trạng thái:</label>
                        <select class="form-control" id="editStatus" name="status" required>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" onclick="submitEditPhylumData()">Lưu</button>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript để xử lý sự kiện hiển thị modal sửa -->
<script>
    $('#editPhylumModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var phylumId = button.data('id');

        // AJAX request để lấy dữ liệu của ngành
        $.ajax({
            type: 'GET',
            url: '/admin/get-phylum/' + phylumId,
            success: function (data) {
                console.log(data);  // Kiểm tra dữ liệu trả về
                // Điền thông tin ngành vào các trường của form
                $('#editPhylumId').val(data.id);
                $('#editNganhVN').val(data.nganh_vn);
                $('#editNganhLatin').val(data.nganh_latin);
                $('#editDescription').val(data.description);
                $('#editSlug').val(data.slug);
                $('#editStatus').val(data.status);
            },
            error: function (error) {
                console.log(error);
            }
        });
    });

    // Hàm để gửi dữ liệu ngành được chỉnh sửa
    function submitEditPhylumData() {
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type: 'PUT',
            url: '/admin/save-phylum', // Đổi thành đường dẫn của bạn
            data: $('#editPhylumForm').serialize(),
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: function(response) {
                console.log(response);
                $('#editPhylumModal').modal('toggle');
                // Tải lại danh sách ngành sau khi cập nhật bằng AJAX
                location.reload();
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script>