<!-- The Confirm Delete Modal -->
<div class="modal fade" id="deletePhylumModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Xác nhận xóa ngành</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Bạn có chắc muốn xóa ngành này?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-danger" onclick="confirmDeletePhylum()">Xóa</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    function confirmDeletePhylum(phylumId) {
        var isConfirmed = confirm("Bạn có chắc chắn muốn xóa ngành này?");

        if (!isConfirmed) {
            return;
        }

        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        axios.delete('/destroy-phylum/' + phylumId, {
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        })
        .then(function (response) {
            console.log(response.data);

            if (response.data.success) {
                alert('Ngành đã được xóa thành công!');
                removePhylumFromUI(phylumId);
            } else {
                alert('Xóa ngành thất bại. ' + response.data.message);
            }

            $('#deletePhylumModal').modal('hide');
        })
        .catch(function (error) {
            console.error('Error deleting phylum:', error);
            alert('Đã xảy ra lỗi trong quá trình xóa ngành.');
            $('#deletePhylumModal').modal('hide');
        });
    }

    function removePhylumFromUI(phylumId) {
        // Thực hiện loại bỏ phần tử ngành khỏi UI
        $('#phylum-list').find('.phylum-item[data-id="' + phylumId + '"]').remove();
    }
</script>