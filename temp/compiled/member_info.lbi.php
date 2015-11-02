<?php if ($this->_var['user_info']): ?>
<font class="f4_b"><?php echo $this->_var['user_info']['username']; ?></font>, <?php echo $this->_var['lang']['welcome_return']; ?>！
<a href="user.php"><?php echo $this->_var['lang']['user_center']; ?></a> | <a href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a>
<?php else: ?>
 <?php echo $this->_var['lang']['welcome']; ?>&nbsp;&nbsp;&nbsp;&nbsp;
 		<a href="javascript:void (0)" id="zc"><?php echo $this->_var['lang']['label_login']; ?></a>&nbsp;|
    <a href="user.php?act=register"><?php echo $this->_var['lang']['label_regist']; ?></a>
<?php endif; ?>
