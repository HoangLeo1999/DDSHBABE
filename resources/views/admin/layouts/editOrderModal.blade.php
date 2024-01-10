
<!-- Modal sửa thông tin ngành -->
<div class="modal fade" id="editOrderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sửa thông tin bộ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editOrderForm">
                    @csrf
                    @method('PUT') {{-- Sử dụng phương thức PUT để cập nhật --}}
                    <input type="hidden" id="editOrderId" name="id">

                    <div class="form-group">
                        <label for="editBoVN">Tên bộ (VN):</label>
                        <input type="text" class="form-control" id="editLopVN" name="bo_vn" required>
                    </div>
                    <div class="form-group">
                        <label for="editBoLatin">Tên bộ (Latin):</label>
                        <input type="text" class="form-control" id="editLopLatin" name="bo_latin" required>
                    </div>
                    <div class="form-group">
                        <label for="editNganh">Ngành:</label>
                        <select class="form-control" id="editNganh" name="phylum_id">
                            @foreach($phylums as $phylum)
            @foreach($classes as $class)
            @foreach ($orders as $order )
                <option value="{{ $phylum->id }}" {{$order->class_id==$class->id && $class->phylum_id == $phylum->id ? 'selected' : '' }}>
                    {{ $phylum->nganh_vn }}
                </option>
                @endforeach
            @endforeach
        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="editLop">Lớp:</label>
                        <select class="form-control" id="editLop" name="class_id">
                            @foreach($classes as $class)
            @foreach($orders as $order)
                <option value="{{ $class->id }}" {{ $class->id == $order->id ? 'selected' : '' }}>
                    {{ $class->lop_vn }}
                </option>
            @endforeach
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
                <button type="button" class="btn btn-primary" onclick="submitEditOrderData()">Lưu</button>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript để xử lý sự kiện hiển thị modal sửa -->
<script>
    $('#editOrderModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var orderId = button.data('id');

        // AJAX request để lấy dữ liệu của ngành
        $.ajax({
            type: 'GET',
            url: '/admin/get-order/' + orderId,
            success: function (data) {
                console.log(data);  // Kiểm tra dữ liệu trả về
                // Điền thông tin ngành vào các trường của form
                $('#editOrderId').val(data.id);
                $('#editBoVN').val(data.lop_vn);
                $('#editBoLatin').val(data.lop_latin);
                $('#editNganh').val(data.phylum_id);
                $('#editLop').val(data.class_id);
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
    function submitEditOrderData() {
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type: 'PUT',
            url: '/admin/save-order', // Đổi thành đường dẫn của bạn
            data: $('#editClassForm').serialize(),
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: function(response) {
                console.log(response);
                $('#editOrderModal').modal('toggle');
                // Tải lại danh sách ngành sau khi cập nhật bằng AJAX
                location.reload();
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script>