jQuery(document).ready(function($) {
    /** show form */

    $('.khoahoc-edit').click(function(e) {

        e.preventDefault();

        // get data



        var _parent = $(this).parents('tr').first();

        var _id = $(_parent).attr('data-id');

        var _name = $(_parent).attr('data-name');



        console.log(_id, _name);

        $('.out_k').toggleClass('active');

    });

    /** đóng form */

    $('.btn-close').click(function(e) {
        e.preventDefault();
        $('.out_k').removeClass('active');
        //

    });

    $('.btn-add').click(function(e) {
        e.preventDefault();
        $('.out_k').removeClass('active');
        //

    });

    $('.search').keyup(function() {

        var txt = $('.search').val();
        $.get("ajax_khoahoc/search", { data: txt }, function(data) {
            $('.km').html(data);


        })

    });


    // $('.btn_search').click(function(e) {
    //     e.preventDefault();
    //     var keyword = $('#search').val();
    //     $.get("/api_KhoaHoc/search/", { search: keyword }, function(data, status) {

    //         var _data = JSON.parse(data);

    //         var _counter = 0;

    //         var _view = '<table class="table table-hover text-nowrap"><tbody><tr><<th>Mã khóa học</th><th>Tên khóa học</th><th>Thời gian</th><th>Mô tả</th><th>Mục tiêu</th><th>Tình trạng</th><th>Trạng thái</th><th>Hình ảnh</th></tr>';

    //         console.log('call api:', "Data: ", data, "Status: ", status);

    //         if (status === 'success') {

    //             $.each(_data.data, function(ind, el) {

    //                 _view += '<tr><td>' + el.ID_khoaHoc + '</td><td>' + el.tenKhoaHoc + '</td><td>' + el.thoiGian + '</td><td>' + el.moTa + '</td><td>' + el.mucTieu + '</td><td>' + el.tinhTrang + '</td><td>' + el.danhMuc + '</td><td>' + el.anh + '</td></tr>';

    //                 _counter++;

    //             });

    //             _view += '</tbody></table>';

    //             $('#jim').html(_view);

    //             alert('has ' + _counter + ' results');
    //             _view += '<tr><td>' + el.ID_khoaHoc + '</td><td>' + el.tenKhoaHoc + '</td><td>' + el.thoiGian + '</td><td>' + el.moTa + '</td><td>' + el.mucTieu + '</td><td>' + el.tinhTrang + '</td><td>' + el.danhMuc + '</td><td>' + el.anh + '</td></tr>';


    //         } else {

    //             $('#jim').html('<strong>No result found!</strong>');

    //             alert('something wrong!');

    //         }

    //     });

    //     return false;

    // });

    /** search live */

    // $('.search').on("click", function() {
    //     var txt = $('.search').val();
    //     $_GET('ajax_khoahoc.php', { data: txt }, function(data) {
    //         $('.show').html(data);
    //     });


    // });

    // $(document).ready(function() {
    //     $('.search-box input[type="text"]').on("keyup input", function() {
    //         /* Lấy giá trị đầu vào khi có thay đổi */
    //         var inputVal = $(this).val();
    //         var resultDropdown = $(this).siblings(".result");
    //         if (inputVal.length) {
    //             $.get("backend-search.php", { term: inputVal }).done(function(data) {
    //                 // Hiển thị dữ liệu trả về trong trình duyệt
    //                 resultDropdown.html(data);
    //             });
    //         } else {
    //             resultDropdown.empty();
    //         }
    //     });

    //     // Thiết lập giá trị đầu vào khi click vào result
    //     $(document).on("click", ".result p", function() {
    //         $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
    //         $(this).parent(".result").empty();
    //     });
});