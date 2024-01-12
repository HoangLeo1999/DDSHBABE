
<!-- Modal sửa thông tin ngành -->
<div class="modal fade" id="editGenusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sửa thông tin chi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editGenusForm">
                    @csrf
                    @method('PUT') {{-- Sử dụng phương thức PUT để cập nhật --}}
                    <input type="hidden" id="editGenusId" name="id">

                    <div class="form-group">
                        <label for="editChiVN">Tên Chi (VN):</label>
                        <input type="text" class="form-control" id="editChiVN" name="chi_vn" required>
                    </div>
                    <div class="form-group">
                        <label for="editChiLatin">Tên họ (Latin):</label>
                        <input type="text" class="form-control" id="editChiLatin" name="chi_latin" required>
                    </div>
                    <div class="form-group">
                        <label for="editNganh">Ngành:</label>
                        <select class="form-control" id="editNganh" name="phylum_id">
                            @foreach($phylums as $phylum)
            
            @foreach ($genus as $genu )
                <option value="{{ $phylum->id }}" {{$genu->phylum_id == $phylum->id ? 'selected' : '' }}>
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
            @foreach($genus as $genu)
                <option value="{{ $class->id }}" {{ $class->id == $genu->classes_id ? 'selected' : '' }}>
                    {{ $class->lop_vn }}
                </option>
            @endforeach
        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="editBo">Bộ:</label>
                        <select class="form-control" id="editBo" name="order_id">
                            @foreach($orders as $order)
            @foreach($genus as $genu)
                <option value="{{ $order->id }}" {{ $order->id == $genu->order_id ? 'selected' : '' }}>
                    {{ $order->bo_vn }}
                </option>
            @endforeach
        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="editLop">Họ:</label>
                        <select class="form-control" id="editHo" name="genus_id">
                            @foreach($families as $family)
            @foreach($genus as $genu)
                <option value="{{ $family->id }}" {{ $family->id == $genu->family_id ? 'selected' : '' }}>
                    {{ $family->ho_vn }}
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
                <button type="button" class="btn btn-primary" onclick="submitEditGenusData()">Lưu</button>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript để xử lý sự kiện hiển thị modal sửa -->
<script>
    $('#editGenusModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var genusId = button.data('id');

        // AJAX request để lấy dữ liệu của ngành
        $.ajax({
            type: 'GET',
            url: '/admin/get-genus/' + genusId,
            success: function (data) {
                console.log(data);  // Kiểm tra dữ liệu trả về
                // Điền thông tin ngành vào các trường của form
                $('#editGenusId').val(data.id);
                $('#editChiVN').val(data.chi_vn);
                $('#editChiLatin').val(data.chi_latin);
                $('#editHo').val(data.genus_id);
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
    function submitEditGenusData() {
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type: 'PUT',
            url: '/admin/save-genus', // Đổi thành đường dẫn của bạn
            data: $('#editClassForm').serialize(),
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: function(response) {
                console.log(response);
                $('#editGenusModal').modal('toggle');
                // Tải lại danh sách ngành sau khi cập nhật bằng AJAX
                location.reload();
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script>