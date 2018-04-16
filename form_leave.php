<?php include 'main_personnal.php'; ?>
<html>
    <body>
        <section class="content">
            <div class="container-fluid">
                <div class="block-header">


                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <br>
                            <div >
                                <center><label><u>ใบลาพักผ่อนประจำปี</u></label></center>
                            </div>

                            <div class="body">


                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade fade active in" id="home_with_icon_title">

                                        <div style="margin-left: 45%;" class="col-lg-6 col-md-2 col-sm-3 col-xs-5 form-control-label">
                                            <label>เขียนที่ .............................................................................</label>
                                        </div>
                                        <div class="row clearfix">
                                            <div style="margin-left: 45%;" class="col-lg-6 col-md-2 col-sm-3 col-xs-5 form-control-label">
                                                <label> วันที่ .............................................................................</label>

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
                                            <div class="col-lg-12 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                <label >เรียน &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;............................................................................</label>
                                            </div>

                                        </div>
                                        <div class="row clearfix">
                                            <div style="margin-left: 17%;" >
                                                <div class="col-lg-12 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                    <label> ข้าพเจ้า ............................................................................ตำแหน่ง............................................................................ </label>
                                                </div> 


                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-12 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                <label >ระดับ ....................................................................สังกัด ......................................................................มีวันลาพักผ่อนสะสม ................วันทำการ</label>
                                            </div>




                                        </div>

                                        <div class="row clearfix">

                                            <div class="col-lg-12 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                <label >มีสิทธิลาพักผ่อนประจำปีนี้อีก 10 วันทำการ &nbsp;&nbsp; รวมเป็น ................ วันทำการ  &nbsp;&nbsp; ขอลาพักผ่อนตั้งแต่วันที่ ................ ถึงวันที่ ................ มีกำหนด.........</label>
                                            </div>



                                        </div>
                                        <div class="row clearfix">

                                            <div class="col-lg-12 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                <label >วันทำการ &nbsp;&nbsp; ในระหว่างลาจะติดต่อข้าพเจ้าได้ที่ ........................................................................................ โทรศัพท์ .......................................</label>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="demo-checkbox">
                                                <div class="col-lg-4 col-md-6 col-sm-3 col-xs-12 form-control-label-l">
                                                    <label><b><u>หมายเหตุ </u> &nbsp;(ถ้ามี) 1. ลาต่อเนื่องวันหยุด</b></label>  

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

                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-3 col-sm-3 col-xs-12 form-control-label-l">
                                                <label >เนื่องจาก ...........................................................................................</label>
                                                <br>
                                                <label >...........................................................................................................</label>
                                                <br>
                                                <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. ในระหว่างลาข้าพเจ้าขอมอบหมาย</label>
                                                <br>
                                                <label >ชื่อ ..................................................................................................</label>
                                                <br>
                                                <label >ตำแหน่ง ...........................................................................................</label>
                                                <br>
                                                <label >(ลงชื่อ) ................................................................ ผู้ปฎิบัติหน้าที่แทน</label>
                                                <br>
                                                <label >วันที่ ..................../............................/................</label>
                                                <br>
                                                <br>
                                                <label>&nbsp;&nbsp;&nbsp;&nbsp;<u>สถิติการลาในปีงบประมาณนี้</u></label>
                                                <table border='1' width='300'>
                                                    <tr>
                                                        <th><center><label>ลามาแล้ว<br>(วันทำการ)</label></center></th>
                                                    <th><center><label>ลาครั้งนี้<br>(วันทำการ)</label></center></th>
                                                    <th><center><label>รวม<br>(วันทำการ)</label></center></th>
                                                    </tr>
                                                    <tr>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                    </tr>

                                                </table> 
                                                <br>
                                                <br>
                                                <label >(ลงชื่อ) ................................................................ ผู้ตรวจสอบ</label>
                                                <br>
                                                <label >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(................................................................) </label>
                                                <br>
                                                <label >ตำแหน่ง ..............................................................................</label>
                                                <br>
                                                <label >วันที่ ..................../............................/................</label>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <label >&nbsp;&nbsp;&nbsp;&nbsp;ลงชื่อ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ..............................................................</label>
                                                <br>
                                                <label >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(................................................................) </label>
                                                <br>
                                                <br>
                                                <br>
                                                <center><label><u>ความเห็นของผู้บังคับบัญชา</u></label></center>
                                                <br>
                                                <center><label >...............................................................</label></center>

                                                <center><label >......................................................................................</label></center>
                                                <br>
                                                <br>
                                                <label >&nbsp;&nbsp;&nbsp;&nbsp;ลงชื่อ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ..............................................................</label>
                                                <br>
                                                <label >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(................................................................) </label>
                                                <br>
                                                <label >ตำแหน่ง ..............................................................................</label>
                                                <br>
                                                <label >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วันที่ ..................../............................/................</label>
                                                <br>
                                                <br>
                                                <center><label><u>คำสั่ง</u></label></center>
                                                <br>
                                                <center><input id="checkbox" type="checkbox">
                                                    <label for="e"> <label>อนุญาต</label></label>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                    <input id="checkbox" type="checkbox">
                                                    <label for="e"> <label>ไม่อนุญาต</label></label>
                                                </center>
                                                <br>
                                                <br>
                                                <center><label >...............................................................</label></center>
                                                <center><label >......................................................................................</label></center>
                                                <br>
                                                <br>
                                                <label >(ลงชื่อ) ................................................................ ผู้ตรวจสอบ</label>
                                                <br>
                                                <label >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(................................................................) </label>
                                                <br>
                                                <label >ตำแหน่ง ..............................................................................</label>
                                                <br>
                                                <label >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วันที่ ..................../............................/................</label>
                                            </div>

                                        </div>

                                        <center> 
                                            <button type="button" class="btn bg-grey waves-effect">
                                                <i class="material-icons">home</i>
                                                <span>กลับ</span>
                                            </button>
                                            <button type="button" class="btn bg-light-green waves-effect">
                                                <i class="material-icons">print</i>
                                                <span>พิมพ์...</span>
                                            </button> </center>


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

