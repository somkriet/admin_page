<div style="margin:auto;">
<form id="form1" name="form1" method="post" action="<?php echo base_url();?>test/test_data">
<table id="myTbl" width="1000" border="1" cellspacing="2" cellpadding="0">

  <tr class="firstTr">
    <td width="519">
        <input name="h_item_id1[]" type="hidden" id="h_item_id1[]" value="" />
        <input type="text" class="text_data" name="productcode[]" id="productcode[]" value="" />
    </td>
    <td width="519">
        <!-- <input name="h_item_id[]" type="hidden" id="h_item_id[]" value="" /> -->
        <input type="text" class="text_data" name="productname[]" id="productname[]" value="" />
    </td>
    <td width="519">
        <!-- <input name="h_item_id[]" type="hidden" id="h_item_id[]" value="" /> -->
        <input type="text" class="text_data" name="amount[]" id="amount[]" value="" />
    </td>
    <td width="519">
        <!-- <input name="h_item_id[]" type="hidden" id="h_item_id[]" value="" /> -->
        <input type="text" class="text_data" name="value[]" id="value[]" value="" />
    </td>
    <td width="519">
        <!-- <input name="h_item_id[]" type="hidden" id="h_item_id[]" value="" /> -->
        <input type="text" class="text_data" name="discount[]" id="discount[]" value="" />
    </td>
   <!--  <td width="519">
        <input name="h_item_id[]" type="hidden" id="h_item_id[]" value="" />
        <input type="text" class="text_data" name="total[]" id="data2[]" value="" />
    </td> -->
    </tr>
</table>
<br />
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
    <button id="addRow" type="button">+</button>  
    &nbsp;
    <button id="removeRow" type="button">-</button>
    &nbsp;
    &nbsp;
    &nbsp;
    <input name="h_all_id_data" type="hidden" id="h_all_id_data" value="" />    
    <input type="submit" name="Submit" id="Submit" value="Submit" /></td>
  </tr>
</table>
</form>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>      
<script type="text/javascript">
$(function(){
     
    $("#addRow").click(function(){
        // ส่วนของการ clone ข้อมูลด้วย jquery clone() ค่า true คือ
        // การกำหนดให้ ไม่ต้องมีการ ดึงข้อมูลจากค่าเดิมมาใช้งาน
        // รีเซ้ตเป็นค่าว่าง ถ้ามีข้อมูลอยู่แล้ว ทั้ง select หรือ input
        $(".firstTr:eq(0)").clone(true) 
        .find("input").attr("value","").end()
        .find("select").attr("value","").end()
        .appendTo($("#myTbl"));
    });
    $("#removeRow").click(function(){
        // // ส่วนสำหรับการลบ
        if($("#myTbl tr").length>1){ // จะลบรายการได้ อย่างน้อย ต้องมี 1 รายการ
            $("#myTbl tr:last").remove(); // ลบรายการสุดท้าย
        }else{
            // เหลือ 1 รายการลบไม่ได้
            alert("ต้องมีรายการข้อมูลอย่างน้อย 1 รายการ");
        }
    }); 
     
 
});
</script>