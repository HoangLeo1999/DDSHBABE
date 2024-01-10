<!-- The Confirm Delete Modal -->
<div class="modal fade" id="deleteClassModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Xác nhận xóa lớp</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Bạn có chắc muốn xóa lớp này?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-danger" onclick="confirmDeleteClass()">Xóa</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    function confirmDeleteClass(classId) {
        var isConfirmed = confirm("Bạn có chắc chắn muốn xóa lớp này?");

        if (!isConfirmed) {
            return;
        }

        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        axios.delete('/destroy-class/' + phylumId, {
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        })
        .then(function (response) {
            console.log(response.data);

            if (response.data.success) {
                alert('Lớp đã được xóa thành công!');
                removeClassFromUI(classId);
            } else {
                alert('Xóa lớp thất bại. ' + response.data.message);
            }

            $('#deleteClassModal').modal('hide');
        })
        .catch(function (error) {
            console.error('Error deleting phylum:', error);
            alert('Đã xảy ra lỗi trong quá trình xóa lớp.');
            $('#deleteClassModal').modal('hide');
        });
    }

    function removeClassFromUI(phylumId) {
        // Thực hiện loại bỏ phần tử ngành khỏi UI
        $('#class-list').find('.class-item[data-id="' + classId + '"]').remove();
    }
</script>