
<!-- Modal sửa thông tin ngành -->
<div class="modal fade" id="editFamilyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sửa thông tin họ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editFamilyForm">
                    @csrf
                    @method('PUT') {{-- Sử dụng phương thức PUT để cập nhật --}}
                    <input type="hidden" id="editFamilyId" name="id">

                    <div class="form-group">
                        <label for="editHoVN">Tên họ (VN):</label>
                        <input type="text" class="form-control" id="editHoVN" name="ho_vn" required>
                    </div>
                    <div class="form-group">
                        <label for="editHoLatin">Tên họ (Latin):</label>
                        <input type="text" class="form-control" id="editHoLatin" name="ho_latin" required>
                    </div>
                    <div class="form-group">
                        <label for="editNganh">Ngành:</label>
                        <select class="form-control" id="editNganh" name="phylum_id">
                            @foreach($phylums as $phylum)
            
            @foreach ($families as $family )
                <option value="{{ $phylum->id }}" {{$family->phylum_id == $phylum->id ? 'selected' : '' }}>
                    {{ $phylum->nganh_vn }}
                </option>
                @endforeach
            @endforeach
        
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="editLop">Lớp:</label>
                        <select class="form-control" id="editLop" name="classes_id">
                            @foreach($classes as $class)
            @foreach($families as $family)
                <option value="{{ $class->id }}" {{ $class->id == $family->classes_id ? 'selected' : '' }}>
                    {{ $class->lop_vn }}
                </option>
            @endforeach
        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="editLop">Bộ:</label>
                        <select class="form-control" id="editLop" name="order_id">
                            @foreach($orders as $order)
            @foreach($families as $family)
                <option value="{{ $order->id }}" {{ $order->id == $family->order_id ? 'selected' : '' }}>
                    {{ $order->bo_vn }}
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
                <button type="button" class="btn btn-primary" onclick="submitEditFamilyData()">Lưu</button>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript để xử lý sự kiện hiển thị modal sửa -->
<script>
    $('#editFamilyModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var familyId = button.data('id');

        // AJAX request để lấy dữ liệu của ngành
        $.ajax({
            type: 'GET',
            url: '/admin/get-family/' + familyId,
            success: function (data) {
                console.log(data);  // Kiểm tra dữ liệu trả về
                // Điền thông tin ngành vào các trường của form
                $('#editFamilyId').val(data.id);
                $('#editBoVN').val(data.lop_vn);
                $('#editBoLatin').val(data.lop_latin);
                $('#editNganh').val(data.phylum_id);
                $('#editLop').val(data.classes_id);
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
    function submitEditFamilyData() {
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type: 'PUT',
            url: '/admin/save-family', // Đổi thành đường dẫn của bạn
            data: $('#editClassForm').serialize(),
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: function(response) {
                console.log(response);
                $('#editFamilyModal').modal('toggle');
                // Tải lại danh sách ngành sau khi cập nhật bằng AJAX
                location.reload();
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script>