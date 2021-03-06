<script type="text/javascript">
    var cls = new Call_Service();
    var card_id = '<?= $_SESSION["card_id"]; ?>';
    var username = '<?= $_SESSION["username"]; ?>';
    var password = '<?= $_SESSION["password"]; ?>';
    $(function () {
        cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", "sl_table_lvboss", "", true, table_lvboss);
        $(document).on("click", ".table_lvboss tbody tr td:not(:last-child)", function () {
            var clickedBtnID = $(this).parent().attr('id'); // or var clickedBtnID = this.id
            cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", "sl_dataEdit_lvboss", [clickedBtnID], true, function (data) {
                $.each(data, function (i, k) {
                    $("#lvb_nameE").val(data[i].lvb_name);
                    $("#lvb_idE").val(data[i].lvb_id)
                });
                $("#editLVB").modal("show");
            });
        });
    });
    function show_levelBoss() {
        cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", "sl_table_lvboss", "", true, table_lvboss);
    }

    function table_lvboss(data) {
        $(".table_lvboss").html('');
        var dataSet = [];
        var a = 0;
        $.each(data, function (i, k) {
            a++;
            dataSet.push([a, data[i].lvb_name, '<img class="btn-delete" id="' + data[i].lvb_id + '" onclick="javascript: delLVB(this)"/>']);
        });
        $('#table_lvboss_show').html('<table class="table table-bordered table-striped table-hover table_lvboss dataTable" width="100%"></table>');
        $('.table_lvboss').DataTable({
            responsive: true,
            data: dataSet,
            columns: [
                {title: "ลำดับ"},
                {title: "ชื่อกลุ่มบริหาร"},
                {title: "..."},
            ],
            "fnRowCallback": function (nRow) {
//                console.log($(nRow).find('img').attr('id'));
                $(nRow).attr('id', $(nRow).find('img').attr('id'));
                $(nRow).css('cursor', 'pointer');
            }
        });
    }
    function addLVB(ALVB) {
        cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", ALVB,[$('#lvb_name').val()], true, function (data) {
            show_levelBoss();
            swal("บันทึกสำเร็จ!", "ตำแหน่งใหม่พร้อมใช้งาน", "success");
            $('#addLVB').modal('hide');
        });
    }
    function editLVB(ELVB) {
        cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", ELVB, [$('#lvb_idE').val(), $('#lvb_nameE').val()], true, function (data) {
            show_levelBoss();
            swal("แก้ไขสำเร็จ!", "ตำแหน่งของคุณ อัพเดทเเล้ว", "success");
            $('#editLVB').modal('hide');
        });
    }
    function delLVB(data) {
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
            cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", "DLVB", [$(data).attr("id")], true, function (data) {
                show_levelBoss();
                swal("ลบสำเร็จ!", "ข้อมูลของคุณถูกลบเรียบร้อยเเล้ว", "success");
            });
        });
    }
</script>