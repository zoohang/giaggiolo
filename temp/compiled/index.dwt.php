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
          <dt>shopping</dt>
          <dd><a href="#">new</a></dd>
          <dd><a href="#">suits</a></dd>
          <dd><a href="#">shirts</a></dd>
          <dd><a href="#">pants</a></dd>
          <dd><a href="#">accessories</a></dd>
          <dd><a href="#">tailor's kit</a></dd>
          <dd><a href="#">tape measure</a></dd>
          <dd><a href="#">gift cards</a></dd>
        </dl>
        <dl>
          <dt>collections</dt>
          <dd><a href="#">the essentials</a></dd>
          <dd><a href="#">fall 2015</a></dd>
          <dd><a href="#">summer 2015</a></dd>
          <dd><a href="#">weddings</a></dd>
        </dl>
        <dl>
          <dt>indochino</dt>
          <dd><a href="#">blog</a></dd>
          <dd><a href="#">why custom</a></dd>
          <dd><a href="#">how it works</a></dd>
          <dd><a href="#">about</a></dd>
          <dd><a href="#">indochino reviews</a></dd>
          <dd><a href="#">press</a></dd>
          <dd><a href="#">careers</a></dd>
        </dl>
      </div>
      <div class="c2-r">
        <p>JOIN OUR MAILING LIST</p>
        <form>
          <input type="text" value="Your email"  class="mes-txt" onclick="if(value==defaultValue){value='';}"onblur="if(!value){value=defaultValue;}">
          <input type="submit" value="follow us" class="mes-btn">
        </form>
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