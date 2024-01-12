<!-- The Confirm Delete Modal -->
<div class="modal fade" id="deleteRoleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Xác nhận xóa vai trò</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Bạn có chắc muốn xóa vai trò  này?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-danger" onclick="confirmDeleteRole()">Xóa</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    function confirmDeleteRole() {
    var roleId = $('#deleteRoleModal').data('id');
    var isConfirmed = confirm("Bạn có chắc chắn muốn xóa vai trò này?");

    if (!isConfirmed) {
        return;
    }

    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    axios.delete('/admin/destroy-role/' + roleId, {
        headers: {
            'X-CSRF-TOKEN': csrfToken
        }
    })
    .then(function (response) {
        console.log(response.data);

        if (response.data.success) {
            alert('Vai trò đã được xóa thành công!');
            // $('#role-list').find('.role-item[data-id="' + roleId + '"]').remove();
        } else {
            alert('Xóa vai trò thất bại. ' + response.data.message);
        }

        $('#deleteRoleModal').modal('hide');
    })
    .catch(function (error) {
        console.error('Error deleting role:', error);
        alert('Đã xảy ra lỗi trong quá trình xóa vai trò.');
        $('#deleteRoleModal').modal('hide');
    });
}
</script>
