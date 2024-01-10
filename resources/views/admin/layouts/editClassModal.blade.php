
<!-- Modal sửa thông tin ngành -->
<div class="modal fade" id="editClassModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sửa thông tin lớp</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editClassForm">
                    @csrf
                    @method('PUT') {{-- Sử dụng phương thức PUT để cập nhật --}}
                    <input type="hidden" id="editClassId" name="id">

                    <div class="form-group">
                        <label for="editLopVN">Tên Lớp (VN):</label>
                        <input type="text" class="form-control" id="editLopVN" name="lop_vn" required>
                    </div>
                    <div class="form-group">
                        <label for="editLopLatin">Tên Lớp (Latin):</label>
                        <input type="text" class="form-control" id="editLopLatin" name="lop_latin" required>
                    </div>
                    <div class="form-group">
                        <label for="editNganh">Ngành:</label>
                        <select class="form-control" id="editNganh" name="phylum_id">
                            @foreach($phylums as $phylum)
                                <option value="{{ $phylum->id }}">{{ $phylum->nganh_vn }}</option>
                            @endforeach
                        </select>
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
                <button type="button" class="btn btn-primary" onclick="submitEditClassData()">Lưu</button>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript để xử lý sự kiện hiển thị modal sửa -->
<script>
    $('#editClassModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var classId = button.data('id');

        // AJAX request để lấy dữ liệu của ngành
        $.ajax({
        type: 'GET',
        url: '/admin/get-class/' + classId,
        success: function (data) {
            console.log(data);  // Kiểm tra dữ liệu trả về
       

            // Điền thông tin ngành vào các trường của form
            $('#editClassId').val(data.id);
    $('#editLopVN').val(data.lop_vn);
    $('#editLopLatin').val(data.lop_latin);
    console.log('editNganh value before update:', data.phylum_id); // Kiểm tra giá trị phylum_id
    $('#editNganh').val(data.phylum_id);
    $('#editDescription').val(data.description);
    $('#editSlug').val(data.slug);
    $('#editStatus').val(data.status);
        },
        
        error: function (xhr, status, error) {
        console.log(xhr.responseText);
        console.log('Status:', status);
        console.log('Error:', error);
    }
    });
    });

    // Hàm để gửi dữ liệu ngành được chỉnh sửa
    function submitEditClassData() {
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type: 'PUT',
            url: '/admin/save-class', // Đổi thành đường dẫn của bạn
            data: $('#editClassForm').serialize(),
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: function(response) {
                console.log(response);
                $('#editClassModal').modal('toggle');
                // Tải lại danh sách ngành sau khi cập nhật bằng AJAX
                location.reload();
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script>