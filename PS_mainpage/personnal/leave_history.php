<?php include 'main_personnal.php'; ?>
<html>
    <body>
        <section class="content">
            <div class="container-fluid">
                <div class="block-header">


                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header bg-green" >
                                <h2>
                                    การลา
                                </h2>

                            </div>

                            <div class="body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="">
                                        <a href="#home_with_icon_title" data-toggle="tab" aria-expanded="false">
                                            <i class="material-icons">home</i> แบบฟอร์มลาพักผ่อนประจำปี

                                        </a>
                                    </li>
                                    <li role="presentation" class="">
                                        <a href="#profile_with_icon_title" data-toggle="tab" aria-expanded="false">
                                            <i class="material-icons">face</i> แบบฟอร์มลาป่วย ลาคลอดบุตร ลากิจส่วนตัว
                                        </a>
                                    </li>


                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade fade active in" id="home_with_icon_title">

                                        <div style="margin-left: 45%;" class="col-lg-2 col-md-2 col-sm-3 col-xs-5 form-control-label">
                                            <label>เขียนที่</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="pro_idpos" class="form-control" placeholder="กรอกรหัสตำแหน่ง">
                                                </div>
                                            </div>
                                        </div>
                                        <div style="margin-left: 45%;" class="col-lg-2 col-md-2 col-sm-3 col-xs-5 form-control-label">
                                            <label> วันที่</label>

                                        </div>
                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">date_range</i>
                                                </span>
                                                <div class="form-line">
                                                    <input type="text" id="pro_leavedate" class="form-control" placeholder="Ex: 30/07/2561">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div  class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                <label>เรื่อง</label>
                                            </div>
                                            <div class="col-sm-2">

                                                <label>ขอลาพักผ่อน</label>

                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                <label >เรียน</label>
                                            </div>
                                            <div class="col-lg-4 col-md-9 col-sm-4 col-xs-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="card_id" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div style="margin-left: 17%;" >
                                                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                    <label >ข้าพเจ้า</label>
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-5 col-xs-12">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" id="card_id" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                <label >ตำแหน่ง</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-9 col-xs-12">
                                                <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="pos_id">
                                                    <?php
                                                    $cn = new management;
                                                    $cn->con_db();
                                                    echo '<option  value="">เลือก</opition>';
                                                    $sql = "select * from ps_position ";
                                                    $query = $cn->Connect->query($sql);
                                                    while ($rs = mysqli_fetch_array($query)) {
                                                        echo '<option  value="' . $rs['pos_id'] . '">' . $rs['pos_name'] . '</opition>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label">
                                                <label >ระดับ</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-9 col-xs-12">
                                                <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="lv_id">
                                                    <?php
                                                    $cn = new management;
                                                    $cn->con_db();
                                                    echo '<option  value="">เลือก</opition>';
                                                    $sql = "select * from ps_level ";
                                                    $query = $cn->Connect->query($sql);
                                                    while ($rs = mysqli_fetch_array($query)) {
                                                        echo '<option  value="' . $rs['lv_id'] . '">' . $rs['lv_name'] . '</opition>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                <label >สังกัด</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10t col-sm-9 col-xs-12">
                                                <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="dep_id">
                                                    <?php
                                                    $cn = new management;
                                                    $cn->con_db();
                                                    echo '<option  value="">เลือก</opition>';
                                                    $sql = "select * from ps_department ";
                                                    $query = $cn->Connect->query($sql);
                                                    while ($rs = mysqli_fetch_array($query)) {
                                                        echo '<option  value="' . $rs['dep_id'] . '">' . $rs['dep_name'] . '</opition>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                <label >มีวันลาพักผ่อนสะสม</label>
                                            </div>
                                            <div class="col-lg-1 col-md-9 col-sm-4 col-xs-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="card_id" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                <label >วันทำการ  &nbsp; &nbsp;มีสิทธิลาพักผ่อนประจำปีนี้อีก 10 วันทำการ </label>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label">
                                                <label >รวมเป็น</label>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="card_id" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                <label >วันทำการ   </label>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                <label >ขอลาพักผ่อนตั้งแต่วันที่</label>
                                            </div>
                                            <div class="col-lg-2 col-md-4 col-sm-8 col-xs-12 form-control-label" >
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="pro_leaveInE" class="form-control" placeholder="__/__/____">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label">
                                                <label >ถึงวันที่ </label>
                                            </div>
                                            <div class="col-lg-2 col-md-4 col-sm-8 col-xs-12 form-control-label" >
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="pro_leaveOutE" class="form-control" placeholder="__/__/____">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5 form-control-label">
                                                <label >มีกำหนด</label>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="card_id" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                <label >วันทำการ   </label>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-3 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                <label >ในระหว่างลาจะติดต่อข้าพเจ้าได้ที่</label>
                                            </div>
                                            <div class="col-lg-3 col-md-9 col-sm-4 col-xs-12">
                                                <div class="form-group">

                                                    <textarea rows="3" cols="40"></textarea>

                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label">
                                                <label >โทรศัพท์</label>
                                            </div>
                                            <div class="col-lg-2 col-md-9 col-sm-4 col-xs-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="card_id" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row clearfix">
                                            <div class="demo-checkbox">
                                                <div class="col-lg-4 col-md-6 col-sm-3 col-xs-12 form-control-label-l">
                                                    <label><b><u>หมายเหตุ</u></b></label> &nbsp; <input  type="checkbox" id="ssss" class="filled-in chk-col-light-blue">
                                                    <label for="ssss">(ถ้ามี)ลาต่อเนื่องวันหยุด</label>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="row clearfix" id="input-hide">
                                            <div class="col-lg-1 col-md-3 col-sm-3 col-xs-12 form-control-label-l">
                                                <label >เนื่องจาก</label>
                                            </div>
                                            <div class="col-lg-11 col-md-9 col-sm-4 col-xs-12">
                                                <div class="form-group">
                                                    <textarea rows="3" cols="100"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix" id="input-2">
                                            <div class="col-lg-1 col-md-3 col-sm-3 col-xs-12 form-control-label-l">
                                                <label >ชื่อ</label>
                                            </div>
                                            <div class="col-lg-4 col-md-9 col-sm-4 col-xs-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="card_id" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix" id="input-2">
                                                <div class="col-lg-1 col-md-3 col-sm-3 col-xs-12 form-control-label-l">
                                                    <label >ตำแหน่ง</label>
                                                </div>
                                                <div class="col-lg-4 col-md-10 col-sm-9 col-xs-12">
                                                    <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="pos_id">
                                                        <?php
                                                        $cn = new management;
                                                        $cn->con_db();
                                                        echo '<option  value="">เลือก</opition>';
                                                        $sql = "select * from ps_position ";
                                                        $query = $cn->Connect->query($sql);
                                                        while ($rs = mysqli_fetch_array($query)) {
                                                            echo '<option  value="' . $rs['pos_id'] . '">' . $rs['pos_name'] . '</opition>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="row clearfix" id="input-Position">
                                            <div class="col-lg-1 col-md-3 col-sm-3 col-xs-12 form-control-label-l">
                                                <label >(ลงชื่อ)</label>
                                            </div>
                                            <div class="col-lg-4 col-md-9 col-sm-4 col-xs-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="card_id" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix" id="input-Position">
                                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 form-control-label-l">
                                                    <label >ผู้ปฎิบัติหน้าที่แทน</label>
                                                </div>
                                                <div class="col-lg-4 col-md-10 col-sm-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">date_range</i>
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" id="leave_date4" class="form-control" placeholder="Ex: 30/07/2561">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>


                                    <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                        <div style="margin-left: 45%;" class="col-lg-2 col-md-2 col-sm-3 col-xs-5 form-control-label">
                                            <label>เขียนที่</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="pro_idpos" class="form-control" placeholder="กรอกรหัสตำแหน่ง">
                                                </div>
                                            </div>
                                        </div>
                                        <div style="margin-left: 45%;" class="col-lg-2 col-md-2 col-sm-3 col-xs-5 form-control-label">
                                            <label> วันที่</label>

                                        </div>
                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">date_range</i>
                                                </span>
                                                <div class="form-line">
                                                    <input type="text" id="leave_Three1" class="form-control" placeholder="Ex: 30/07/2561">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div  class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                <label>เรื่อง</label>
                                            </div>
                                            <div class="col-sm-3">
                                                <select class="form-control show-tick" data-live-search="true">
                                                    <option>ขอลาป่วย</option>
                                                    <option>ขอลาคลอดบุตร</option>
                                                    <option>ขอลากิจส่วนตัว</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                <label >เรียน</label>
                                            </div>
                                            <div class="col-lg-4 col-md-9 col-sm-4 col-xs-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="card_id" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div style="margin-left: 17%;" >
                                                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                    <label >ข้าพเจ้า</label>
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-5 col-xs-12">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" id="card_id" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                <label >ตำแหน่ง</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-9 col-xs-12">
                                                <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="pos_id">
                                                    <?php
                                                    $cn = new management;
                                                    $cn->con_db();
                                                    echo '<option  value="">เลือก</opition>';
                                                    $sql = "select * from ps_position ";
                                                    $query = $cn->Connect->query($sql);
                                                    while ($rs = mysqli_fetch_array($query)) {
                                                        echo '<option  value="' . $rs['pos_id'] . '">' . $rs['pos_name'] . '</opition>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label">
                                                <label >ระดับ</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-9 col-xs-12">
                                                <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="lv_id">
                                                    <?php
                                                    $cn = new management;
                                                    $cn->con_db();
                                                    echo '<option  value="">เลือก</opition>';
                                                    $sql = "select * from ps_level ";
                                                    $query = $cn->Connect->query($sql);
                                                    while ($rs = mysqli_fetch_array($query)) {
                                                        echo '<option  value="' . $rs['lv_id'] . '">' . $rs['lv_name'] . '</opition>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                <label >สังกัด</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10t col-sm-9 col-xs-12">
                                                <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="dep_id">
                                                    <?php
                                                    $cn = new management;
                                                    $cn->con_db();
                                                    echo '<option  value="">เลือก</opition>';
                                                    $sql = "select * from ps_department ";
                                                    $query = $cn->Connect->query($sql);
                                                    while ($rs = mysqli_fetch_array($query)) {
                                                        echo '<option  value="' . $rs['dep_id'] . '">' . $rs['dep_name'] . '</opition>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row clearfix">

                                            <div  class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                <label>ขอลา</label>
                                            </div>
                                            <div class="col-sm-3">

                                                <input name="s" type="radio" id="remember_me1" class="filled-in">
                                                <label for="remember_me1">ลาป่วย</label>
                                                <br>
                                                <input name="s" type="radio" id="remember_me2" class="filled-in">
                                                <label for="remember_me2">กิจส่วนตัว</label>
                                                <br>
                                                <input name="s" type="radio" id="remember_me3" class="filled-in">
                                                <label for="remember_me3">คลอดบุตร</label>
                                            </div>
                                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-4 form-control-label-l">
                                                <label >เนื่องจาก</label>
                                            </div>
                                            <div class="col-lg-6 col-md-4 col-sm-4 col-xs-8 align-left form-control-radio" >
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="card_id" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                <label >ตั้งแต่วันที่</label>
                                            </div>
                                            <div class="col-lg-2 col-md-4 col-sm-8 col-xs-12 form-control-label" >
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="leave_Three2" class="form-control" placeholder="__/__/____">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label">
                                                <label >ถึงวันที่ </label>
                                            </div>
                                            <div class="col-lg-2 col-md-4 col-sm-8 col-xs-12 form-control-label" >
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="leave_Three3" class="form-control" placeholder="__/__/____">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5 form-control-label">
                                                <label >มีกำหนด</label>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="card_id" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                <label >วัน   </label>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-1 col-sm-1 col-xs-4 form-control-label-l">
                                                <label >ข้าพเจ้าได้ลา</label>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8 align-left form-control-radio" id="pro_sax">
                                                <input name="group1" type="radio" value="1" id="sex_men" class="with-gap radio-col-purple" />
                                                <label for="sex_men">ป่วย</label>
                                                <input name="group1" type="radio" value="2" id="sex_feman" class="with-gap radio-col-purple" />
                                                <label for="sex_feman">กิจส่วนตัว</label>
                                                <input name="group1" type="radio" value="3" id="sex_feman2" class="with-gap radio-col-purple" />
                                                <label for="sex_feman2">คลอดบุตร</label>
                                            </div>


                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 form-control-label-l-l">
                                                <label >ครั้งสุดท้ายตั้งแต่วันที่</label>
                                            </div>
                                            <div class="col-lg-2 col-md-4 col-sm-8 col-xs-12 form-control-label-l" >
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="leave_Three4" class="form-control" placeholder="__/__/____">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label">
                                                <label >ถึงวันที่ </label>
                                            </div>
                                            <div class="col-lg-2 col-md-4 col-sm-8 col-xs-12 form-control-label" >
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="leave_Three5" class="form-control" placeholder="__/__/____">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label">
                                                <label >มีกำหนด</label>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="card_id" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                <label >วัน   </label>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-lg-3 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                <label >ในระหว่างลาจะติดต่อข้าพเจ้าได้ที่</label>
                                            </div>
                                            <div class="col-lg-3 col-md-9 col-sm-4 col-xs-12">
                                                <div class="form-group">

                                                    <textarea rows="3" cols="40"></textarea>

                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-2 col-sm-3 col-xs-12 form-control-label">
                                                <label >หมายเลขโทรศัพท์</label>
                                            </div>
                                            <div class="col-lg-2 col-md-9 col-sm-4 col-xs-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="card_id" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        
                                        


                                    </div>
                                    
                                    <div class="modal-footer">
                                <button type="button" class="btn btn-primary waves-effect" >บันทึก</button>
                                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">ยกเลิก</button>
                                   </div>






                                </div>

                            </div>

                        </div>
                    </div>      
                </div>
            </div>
        </div>


    </section>
    <?php include ("../../PS_script/personnal/leave_relax.php"); ?>
</body>
</html>

