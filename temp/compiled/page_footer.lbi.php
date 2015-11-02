
<div class="footer">
	<p>@ 2015 Giaggiolo</p>
</div>

<div class="plogin" id="plogin">
	<div class="inplogin" id="inplogin">
		<a href="javascript:void (0)" class="logincolse close_login"></a>
		<div class="login-main">
			<p class="login-tit"><?php echo $this->_var['lang']['label_login']; ?></p>
			<div class="login-l fl">
				<form name="formLogin" action="user.php" method="post">
					<table>
						<tr>
							<td align="right">
								<span class="login-name"><?php echo $this->_var['lang']['label_username']; ?></span>
							</td>
							<td>
							<input name="username" type="text" size="25" class="login-txt" />
								<em class="login-em"></em>
							</td>
						</tr>
						<tr>
							<td align="right">
								<span class="login-name"><?php echo $this->_var['lang']['label_password']; ?></span>
							</td>
							<td>
								<input name="password" type="password" size="15"  class="login-txt"/>
								<em class="login-em"></em>
							</td>
						</tr>
						<?php if ($this->_var['enabled_captcha']): ?>
						<tr>
							<td align="right">
								<span class="login-name"><?php echo $this->_var['lang']['comment_captcha']; ?></span>
							</td>
							<td>
							<input type="text" size="8" style="width:66px" name="captcha" class="login-txt" />
							<img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" />
								<em class="login-em"></em>
							</td>
						</tr>
						<?php endif; ?>
						<tr>
							<td></td>
							<td>
								<div class="login-jzmi">
									<input type="checkbox" value="1" name="remember" id="remember" class="login-cbox"/>
									<font color="#989898" style="margin-left:25px"><?php echo $this->_var['lang']['remember']; ?></font>
								</div>
							</td>
						</tr>
						<tr>
							<td colspan="2" align="right">
								<input type="hidden" name="act" value="act_login" />
            		<input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
								<input type="submit" value="<?php echo $this->_var['lang']['login_now']; ?>" class="login-submi close_login">
								<a href="user.php?act=register" class="login-reg"><?php echo $this->_var['lang']['reg_now']; ?></a>
							</td>
						</tr>
						<tr>
							<td colspan="2" align="right">
								<a href="user.php?act=get_password" class="login-wjmi"><?php echo $this->_var['lang']['get_password_by_mail']; ?>？</a>
							</td>
						</tr>
					</table>
				</form>
			</div>
			<div class="login-r fl">
				<p><a href="#" class="lr-tj"><?php echo $this->_var['lang']['new_arrivals']; ?> 》</a></p>
				<p><a href="#" class="tj-more"><?php echo $this->_var['lang']['read_more']; ?></a></p>
				<div class="login-tjpic">
					<a href="#"><img src="themes/my/images/login_tjpic.jpg"></a>
				</div>
			</div>
			<div class="clear"> </div>
		</div>
	</div>
</div>
<script src="themes/my/js/nav.js" type="text/javascript"></script>
</body>
</html>