<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="index-pro clearfix w1140">
  <div class="ipro1">

<?php $this->assign('ads_id','1'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

  </div>
  <div class="ipro1">

<?php $this->assign('ads_id','2'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

  </div>
  <div class="ipro1">

<?php $this->assign('ads_id','3'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

  </div>

</div>
    <div class="con2 w1140">
      <div class="c2-l">
        <dl>
          <dt>lookbook</dt>
          <dd><a href="article.php?id=30">weddings 2015</a></dd>
          <dd><a href="article.php?id=29">summer 2016</a></dd>
          <dd><a href="article.php?id=28">weddings 2016</a></dd>
        </dl>
        <dl>
          <dt>shop</dt>
          <dd><a href="category.php?id=17">Women’s Clothing</a></dd>
          <dd><a href="category.php?id=18">accessories</a></dd>
          <dd><a href="category.php?id=16">Shipping</a></dd>
          <dd><a href="category.php?id=22">After-sale service</a></dd>
        </dl>
        <dl>
          <dt>giaggiolo world</dt>
          <dd><a href="article.php?id=35">Giaggiolo Girls</a></dd>
          <dd><a href="article.php?id=27">Fashion Source</a></dd>
          <dd><a href="article.php?id=8">Designer Brands</a></dd>
          <dd><a href="article.php?id=7">Designer co+</a></dd>
          <dd><a href="article_cat.php?id=13">News</a></dd>
        </dl>
        <dl>
          <dt>about us</dt>
          <dd><a href="article.php?id=33">Contcact us</a></dd>
          <dd><a href="article.php?id=34">Media</a></dd>
        </dl>
      </div>
      <div class="c2-r">
        <p>JOIN OUR MAILING LIST</p>
        <form onsubmit="add_email_list();">
  <input type="text" value="Your email" id="user_email" class="mes-txt" onclick="if(value==defaultValue){value='';}"onblur="if(!value){value=defaultValue;}">
  <input type="submit" value="follow us" class="mes-btn">
</form>

<script type="text/javascript">
function add_email_list()
{
  var email = document.getElementById('user_email');
  if (check_email())
  {
    Ajax.call('user.php?act=email_list&job=add&email=' + email.value, '', rep_add_email_list, 'GET', 'TEXT');
  }
}
function rep_add_email_list(text)
{
  alert('Subscription success!');
  return false;
}

function check_email()
{
  var email = document.getElementById('user_email');

  if (Utils.isEmail(email.value))
  {
    return true;
  }
  else
  {
    alert('<?php echo $this->_var['lang']['email_invalid']; ?>');
    return false;
  }
}
</script>

        <div class="fx">
          <a href="#" class="fxa1"></a>
          <a href="#" class="fxa2"></a>
          <a href="#" class="fxa3"></a>
          <a href="#" class="fxa4"></a>
          <a href="#" class="fxa5"></a>
          <a href="#" class="fxa6"></a>
        </div>
      </div>
      <div class="clear"> </div>
    </div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>