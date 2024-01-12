<!-- The Confirm Delete Modal -->
<div class="modal fade" id="deleteGenusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Xác nhận xóa chi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Bạn có chắc muốn xóa chi này?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-danger" onclick="confirmDeleteGenus()">Xóa</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    function confirmDeleteGenus(genusId) {
        // genusId=button.data('id');
        var isConfirmed = confirm("Bạn có chắc chắn muốn xóa chi này?");

        if (!isConfirmed) {
            return;
        }

        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        axios.delete('/admin/destroy-genus/' + genusId, {
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        })
        .then(function (response) {
            console.log(response.data);

            if (response.data.success) {
                alert('Chi đã được xóa thành công!');
                removeGenusFromUI(genusId);
            } else {
                alert('Xóa chi thất bại. ' + response.data.message);
            }

            $('#deleteGenusModal').modal('hide');
            location.reload();
        })
        .catch(function (error) {
            console.error('Error deleting genus:', error);
            alert('Đã xảy ra lỗi trong quá trình xóa chi.');
            $('#deleteGenusModal').modal('hide');
        });
    }

    function removeGenusFromUI(genusId) {
        // Thực hiện loại bỏ phần tử chi khỏi UI
        $('#genus-list').find('.class-item[data-id="' + genusId + '"]').remove();
    }
</script>