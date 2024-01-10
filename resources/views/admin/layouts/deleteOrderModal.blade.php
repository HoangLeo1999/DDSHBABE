<!-- The Confirm Delete Modal -->
<div class="modal fade" id="deleteOrderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <button type="button" class="btn btn-danger" onclick="confirmDeleteOrder()">Xóa</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    function confirmDeleteOrder(orderId) {
        var isConfirmed = confirm("Bạn có chắc chắn muốn xóa bộ này?");

        if (!isConfirmed) {
            return;
        }

        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        axios.delete('/destroy-order/' + orderId, {
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        })
        .then(function (response) {
            console.log(response.data);

            if (response.data.success) {
                alert('Bộ đã được xóa thành công!');
                removeOrderFromUI(orderId);
            } else {
                alert('Xóa bộ thất bại. ' + response.data.message);
            }

            $('#deleteOrderModal').modal('hide');
        })
        .catch(function (error) {
            console.error('Error deleting order:', error);
            alert('Đã xảy ra lỗi trong quá trình xóa lớp.');
            $('#deleteOrderModal').modal('hide');
        });
    }

    function removeClassFromUI(phylumId) {
        // Thực hiện loại bỏ phần tử ngành khỏi UI
        $('#order-list').find('.class-item[data-id="' + orderId + '"]').remove();
    }
</script>