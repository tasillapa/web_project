<script type="text/javascript">
    var cls = new Call_Service();
    var card_id = '<?= $_SESSION["card_id"]; ?>';
    var username = '<?= $_SESSION["username"]; ?>';
    var password = '<?= $_SESSION["password"]; ?>';
    $(function () {
        cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", "sl_table_outside", "", true, table_outside);
        $(document).on("click", ".table_outside tbody tr td:not(:last-child)", function () {
            var clickedBtnID = $(this).parent().attr('id'); // or var clickedBtnID = this.id
//                $('#addBnOut').parent().find('#off_number').addClass('off_number');
            cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", "sl_dataEdit_BnOut", [clickedBtnID], true, function (data) {
                $.each(data, function (i, k) {
                    $("#off_numberE").val(data[i].off_number);
                    $("#off_nameE").val(data[i].off_name);
                    $("#id_offE").val(data[i].id_off);
                });
                $("#editBnOut").modal("show");
            });
        });
    });
    function show_outside() {
        cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", "sl_table_outside", "", true, table_outside);
    }

    function table_outside(data) {
        $(".table_outside").html('');
        var dataSet = [];
        var a = 0;
        $.each(data, function (i, k) {
            a++;
            dataSet.push([a, data[i].off_number, data[i].off_name, '<img class="btn-delete" id="' + data[i].id_off + '" onclick="javascript: delBnOut(this)"/>']);
        });
        $('#table_outside_show').html('<table class="table table-bordered table-striped table-hover table_outside dataTable" width="100%"></table>');
        $('.table_outside').DataTable({
            responsive: true,
            data: dataSet,
            columns: [
                {title: "ลำดับ"},
                {title: "รหัส"},
                {title: "ชื่อหน่วยงาน"},
                {title: "..."},
            ],
            "fnRowCallback": function (nRow) {
//                console.log($(nRow).find('img').attr('id'));
                $(nRow).attr('id', $(nRow).find('img').attr('id'));
                $(nRow).css('cursor', 'pointer');
            }
        });
    }
    function addBnOut(ADDBNOUT) {
        cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", ADDBNOUT, [$('#off_number').val(), $('#off_name').val()], true, function (data) {
            show_outside();
            swal("บันทึกสำเร็จ!", "ตำแหน่งใหม่พร้อมใช้งาน", "success");
            $('#addBnOut').modal('hide');
        });
    }
    function editBnOut(EBNOUT) {
        cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", EBNOUT, [$('#id_offE').val(), $('#off_numberE').val(), $('#off_nameE').val()], true, function (data) {
            show_outside();
            swal("แก้ไขสำเร็จ!", "ตำแหน่งของคุณ อัพเดทเเล้ว", "success");
            $('#editBnOut').modal('hide');
        });
    }
    function delBnOut(data) {
        console.log(data);
        swal({
            title: "คุณต้องการลบหรือไม่?",
            text: "หากลบจะไม่สามารถกู้คืนข้อมูลที่ลบได้อีก!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "ใช่, ต้องการลบ!",
            cancelButtonText: "ยกเลิก",
            closeOnConfirm: false
        }, function () {
            cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", "DELBNOUT", [$(data).attr("id")], true, function (data) {
                show_outside();
                swal("ลบสำเร็จ!", "ข้อมูลของคุณถูกลบเรียบร้อยเเล้ว", "success");
            });
        });
    }
</script>