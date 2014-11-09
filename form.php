<?php $title="表单"?>
<?php $page="demo"?>
<?php $wangwang = 'dxq613' ?>
<?php $api="../docs/index.html#!/api/BUI.Form.Form"?>
<?php $unitTest = '../test/form-panel.php';?>
<?php include("../templates/header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
    var menus = [
        {
          text : '表单' ,
          href : 'form/simple-form.php'
        },
        {
          text : '多列表单',
          href : 'form/h-form.php'
        },
        {
          text : '基础验证',
          href : 'form/basic-valid.php',
          minHeight : 400
        },
        {
          text : '分组验证',
          href : 'form/advalid.php',
          minHeight : 300
        },
        {
          text : '自定义验证规则',
          href : 'form/cvalid.php',
          minHeight : 300
        },
        {
          text : '表单分组',
          href : 'form/group.php'
        },
        {
          text : '复杂表单',
          href : 'form/adform.php',
          minHeight : 500
        }
    ];
  </script>
<?php include("../templates/content.php"); ?>

<?php  include("../templates/footer.php"); ?>